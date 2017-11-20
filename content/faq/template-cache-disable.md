---
title: Template Cache deaktivieren
tags: ["config.php", "Smarty"]
---

Füge diese Zeile in deine `config.php` hinzu, Smarty wird nun den Template Cache ignorieren.
```php
'template' => [
    'forceCompile' => true,
],
```