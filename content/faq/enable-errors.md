---
title: Errors aktivieren
tags: ["config.php"]
---

Füge diese Zeile in deine `config.php` hinzu.


```php
'phpsettings' => [
    'display_errors' => 1,
],
'front' => [
    'showException' => true,
    'throwExceptions' => true,
    'noErrorHandler' => true,
],
```
