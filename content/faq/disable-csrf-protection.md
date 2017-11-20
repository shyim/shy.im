---
title: CSRF Protection deaktivieren
tags: ["CSRF", "config.php"]
---

Füge diese Zeile in deine `config.php` hinzu. CSRF wird nicht mehr validiert, jedoch noch mitgesendet.

```php
'csrfProtection' => [
    'frontend' => false,
    'backend' => false
],
```