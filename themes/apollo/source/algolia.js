const search = instantsearch({
    appId: 'ENSEDQP1OV',
    apiKey: '259ad963de8405f11e9542068235a9e1',
    indexName: 'hexo',
    urlSync: true
});
search.addWidget(
    instantsearch.widgets.hits({
        container: '#hits',
        templates: {
            empty: 'Keine Ergebnisse',
            item: '<article class="post-preview">\n    <a href="{{slug}}">\n        <h2 class="post-title">{{title}}</h2>\n    </a>\n    <div class="post-entry">\n        {{& content}}\n    </div>\n</article>'
        }
    })
);

search.addWidget(
    instantsearch.widgets.refinementList({
        container: '#tags-list',
        attributeName: 'tags'
    })
);

search.addWidget(
    instantsearch.widgets.searchBox({
        container: '#search-box',
        placeholder: 'Suche nach Artikeln'
    })
);

search.addWidget(
    instantsearch.widgets.pagination({
        container: '#pagination',
        maxPages: 20,
        // default is to scroll to 'body', here we disable this behavior
        scrollTo: false
    })
);

search.on('render', function() {
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
});

search.start();