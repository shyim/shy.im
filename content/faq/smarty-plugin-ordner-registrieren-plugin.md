---
title: Smarty Plugin Ordner hinzufügen via Plugin
tags: ["Plugin"]
---

Die einfachste Methode ist ein CompilerPass während des Build Prozesses des Containers.

```php
<?php

namespace MeinPlugin\Components\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class AddTemplatePluginDirCompilerPass
 */
class AddTemplatePluginDirCompilerPass implements CompilerPassInterface
{
    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $template = $container->getDefinition('template');
        $template->addMethodCall('addPluginsDir', [$container->getParameter('mein_plugin.mein_parameter_zum_ordner')]);
    }
}
```

Dieser wird dann in der build Methode in der Plugin Bootstrap registriert.

```php
<?php

class MeinPlugin extends Plugin
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AddTemplatePluginDirCompilerPass());
    }
}
```

Nun sind unsere eigenen Smarty Plugins global erreichbar.