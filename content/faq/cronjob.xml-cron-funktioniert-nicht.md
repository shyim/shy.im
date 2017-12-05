---
title: Cronjob.xml angelegte Cronjob funktioniert nicht
tags: ["Cronjob", "Bugs", "Plugin"]
---

Die Cronjobs die von der `cronjob.xml` angelegt werden haben kein End Datum, dadurch werden Sie nicht ausgeführt.
Das Problem wird erst mit Shopware 5.3.5 behoben. Pull-Request der den Fehler behebt: https://github.com/shopware/shopware/pull/1217

So lange kann man die Cronjobs selbst anlegen, hier ein Beispiel

```php
<?php

namespace ShyimCron;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;


class ShyimCron extends Plugin {
    
    public static function getSubscribedEvents()
    {
        return [
            'Shopware_CronJob_MyCoolCron' => 'MyCoolCronRun'
        ];
    }
    
    public function install(InstallContext $context)
    {
        $this->addCron();
    }
    
    public function uninstall(UninstallContext $context)
    {
        $this->removeCron();
    }
    
    public function addCron()
    {
        $connection = $this->container->get('dbal_connection');
        $connection->insert(
            's_crontab',
            [
                'name'             => 'MyCoolCron',
                'action'           => 'MyCoolCron',
                'next'             => new \DateTime(),
                'start'            => null,
                '`interval`'       => '100',
                'active'           => 1,
                'end'              => new \DateTime(),
                'pluginID'         => null
            ],
            [
                'next' => 'datetime',
                'end'  => 'datetime',
            ]
        );
    }
    
    public function removeCron()
    {
        $this->container->get('dbal_connection')->executeQuery('DELETE FROM s_crontab WHERE `name` = ?', [
            'MyCoolCron'
        ]);
    }
    
    public function MyCoolCronRun(\Shopware_Components_Cron_CronJob $job)
    {
        return 'Yes its running!';
    }
}
```
