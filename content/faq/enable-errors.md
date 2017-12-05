---
title: Errors aktivieren
tags: ["config.php"]
date: 2017-12-05T19:28:14+01:00
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
