---
title: Theme Variabelen in JSON Response deaktivieren
tags: ["Cheats"]
date: 2018-01-18T19:28:14+01:00
---

Dazu muss das Template in der View resettet werden. Dazu einfach
```php
$this->View()->setTemplate();
```
im Controller Action oder im PreDispatch Event.
