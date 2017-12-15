---
title: Statischer PHP Store im neuen Pluginsystem
tags: ["Plugins"]
date: 2017-12-15T12:12:14+01:00
---

Als erstes die Combobox in der config.xml anlegen ganz normal. Der Store wird nachträglich in der install Methode korrigiert.

```php
/** @var Element $element */
$element = $this->container->get('models')->getRepository(Element::class)->findOneBy([
    'name' => 'FELDNAMEAUSCONFIG'
]);

$element->setOptions([
    'store' => [
                    [0, 'Nein'],
                    [1, 'Ja']
                ]
]);

$this->container->get('models')->persist($element);
$this->container->get('models')->flush();

```
