---
title: CSRF Protection deaktivieren
tags: ["CSRF", "config.php"]
date: 2017-12-05T19:28:14+01:00
---

Füge diese Zeile in deine `config.php` hinzu. CSRF wird nicht mehr validiert, jedoch noch mitgesendet.

```php
'csrfProtection' => [
    'frontend' => false,
    'backend' => false
],
```