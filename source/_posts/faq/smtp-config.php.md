---
title: SMTP in der config.php konfigurieren
tags: ["Plugin", "config.php"]
date: 2017-12-05T19:28:14+01:00
---

```php
'mail' => [
    'type'     => 'smtp', // Possible values: 'mail', 'smtp', 'file'
    'host'     => 'localhost',
    'port'     => 587,
    'ssl'      => 'tls', // Possible values: '', 'tls', 'ssl'
    'auth'     => 'login',  // Possible values: 'plain', 'login', 'crammd5'
    'username' => 'me@localhost',
    'password' => 'mypassword'
],
```
