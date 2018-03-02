---
title: ExtJs Datepicker gibt immer null zurück
tags: ["ExtJs"]
date: 2018-03-02T17:28:14+01:00
---

Durch einen Extjs Hack von Shopware kann es manchmal dazu kommen, das der DatePicker immer null zurück gibt.
Problemstelle: https://github.com/shopware/shopware/blob/5.4/engine/Library/ExtJs/overrides/Ext.form.Base.js#L56, da wird "getValues" aufgerufen - im originalen ExtJS Form Base wird da aber "getFieldValues" aufgerufen.

Danke an [PaddyS](https://github.com/PaddyS) für die Ursachen findung.

## Lösung
Überschreiben der Standard Methode ``getSubmitData`` welche das Ergebnis von getModelData zurück gibt.

Beispiel in Shopware.model.Container
```javascript
applyDateFieldConfig: function () {
    var field = this.callParent(arguments);

    field.getSubmitData = function () {
        return this.getModelData();
    };

    return field;
}
```
