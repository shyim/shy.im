---
title: 'Column not found: 1054 Unknown column 'b.id' in 'where clause' Produktexport'
tags: ["Bugs"]
date: 2018-03-20T19:28:14+01:00
---

Wenn man Basket Attribute in den Versandkosten Einstellungen benutzt, gehen die Produktexporte kaputt. Die Lösung ist es selbst zu patchen, da Shopware den Fehler nicht beheben will. Patch: https://github.com/shopware/shopware/pull/1574
