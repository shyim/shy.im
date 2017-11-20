---
title: Errors aktivieren
tags: ["config.php"]
---

Füge diese Zeile in deine `config.php` hinzu.


```php
'front' => [
    'showException' => true,
    'throwExceptions' => true,
    'noErrorHandler' => true,
],
```