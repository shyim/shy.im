---
title: ExtJs Componente von anderen Backend Modul mitbenutzen
tags: ["ExtJs"]
date: 2018-01-23T19:28:14+01:00
---

Wer kennt das nicht, man findet einen fertigen Store in einem anderen Backend Modul und will ihn benutzen und direkt kommt ein Fehler das dieser nicht gefunden werden kann.
Dieses Problem kriegt man mit einen einzigen Ext.require gelöst, in dem man vorher die "Bootstrap" der ExtJs App lädt.

### Beispiel

```javascript
Ext.require('Shopware.apps.Voucher');
Ext.create('Shopware.apps.Voucher.store.Voucher', .....);
```
