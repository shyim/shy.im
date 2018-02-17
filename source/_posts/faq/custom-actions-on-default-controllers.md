---
title: Neue Controller Action hinzufügen/ersetzen
tags: ["Plugins"]
date: 2017-12-15T12:12:14+01:00
---

Dazu muss man auf das Event "Enlight_Controller_Action_MODULE_CONTROLLER_ACTION" (Bsp: Enlight_Controller_Action_Frontend_Checkout_Neueaction) subscriben.
Der Callback muss ein ```return true``` zurück geben, ansonsten wird die neue Action ignoriert.

Der Callback könnte so aussehen:

```php
public function newAction(Enlight_Event_EventArgs $args)
{
    $controller = $args->get('subject');
    
    $controller->View()->meep = true;
        
    return true;
}
```
