---
title: HttpCache via Plugin deaktivieren
tags: ["Plugin", "HttpCache"]
date: 2017-12-05T19:28:14+01:00
---

Hier zu wird nur ein "Cache-Control" Header im Response benötigt.

```php
$this->Response()->setHeader('Cache-Control', 'private', true);
```