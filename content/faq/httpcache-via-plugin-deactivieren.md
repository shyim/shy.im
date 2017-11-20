---
title: HttpCache via Plugin deaktivieren
tags: ["Plugin", "HttpCache"]
---

Hier zu wird nur ein "Cache-Control" Header im Response benötigt.

```php
$this->Response()->setHeader('Cache-Control', 'private', true);
```