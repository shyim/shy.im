<?php

require 'vendor/autoload.php';

$parser = new Parsedown();
$reText = '/title: (.*)/';
$reTags = '/tags: (.*)/';
$content = [];

foreach (scandir('content/faq') as $item) {
    if ($item === '.' || $item === '..') {
        continue;
    }

    $slug = '/faq/' . str_replace('.md', '', $item) . '/';
    $fileContent = file_get_contents(__DIR__ . '/content/faq/' . $item);

    preg_match_all($reText, $fileContent, $matches, PREG_SET_ORDER, 0);

    $contentText = trim(preg_replace('/(---|title|tags).*/', '', $fileContent));

    preg_match_all($reTags, $fileContent, $matchesTags, PREG_SET_ORDER, 0);
    $contentTags = explode(',', str_replace(['"', '[', ']'], [''], $matchesTags[0][1]));
    $contentTags = array_map('trim', $contentTags);

    $content[] = [
        'title' => str_replace("'", '', $matches[0][1]),
        'slug' => $slug,
        'content' => $parser->parse($contentText),
        'created' => date('Y-m-d H:i:s', filemtime(__DIR__ . '/content/faq/' . $item)),
        'tags' => $contentTags
    ];
}

$client = new \AlgoliaSearch\Client('ENSEDQP1OV', getenv('ALGOLIA_KEY'));

$client->deleteIndex('web');
$index = $client->initIndex('web');
$index->addObjects($content);
$index->setSettings(
    [
        'searchableAttributes' => [
            'title',
            'content'
        ]
    ]
);
