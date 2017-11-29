---
title: Errors aktivieren
tags: ["config.php"]
---

blabla test

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
