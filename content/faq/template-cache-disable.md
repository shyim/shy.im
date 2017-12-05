---
title: Template Cache deaktivieren
tags: ["config.php", "Smarty"]
date: 2017-12-05T19:28:14+01:00
---

Füge diese Zeile in deine `config.php` hinzu, Smarty wird nun den Template Cache ignorieren.
```php
'template' => [
    'forceCompile' => true,
],
```