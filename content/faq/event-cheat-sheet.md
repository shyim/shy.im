---
title: Event Cheat-Sheet
tags: ["Plugin"]
---

- [Shopware_Modules_Order_SendMail_FilterVariables](https://github.com/shopware/shopware/blob/b3520661f1c182baa9e2f3dbd8c351f25d2284f4/engine/Shopware/Core/sOrder.php#L840)
Variabeln modifizieren, bevor die Bestell-Mail versendet wird

- [Shopware_Modules_Admin_CheckUser_Successful](https://github.com/shopware/shopware/blob/07741024ceeb40e905135b9633e0c02e22982b39/engine/Shopware/Core/sAdmin.php#L866)
Nach dem Kunden-Login überprüft wurde

- [Enlight_Controller_Action_MODULE_CONTROLLER_NAME](https://github.com/shopware/shopware/blob/39283e3e65a5e85af6bc7b0cead6fa482810a4d4/engine/Library/Enlight/Controller/Action.php#L154)
Controller Action überschreiben oder neue hinzufügen (return true, sonst wird die orginale Action ausgeführt)

- [Enlight_Bootstrap_AfterInitResource_DINAME](https://github.com/shopware/shopware/blob/321f6f4eeb3f234a111c970b705bd330b43fb4af/engine/Shopware/Components/DependencyInjection/Container.php#L225)
Nach dem ein bestimmter Service initialisiert wurde

- [Enlight_Bootstrap_InitResource_DINAME](https://github.com/shopware/shopware/blob/321f6f4eeb3f234a111c970b705bd330b43fb4af/engine/Shopware/Components/DependencyInjection/Container.php#L207)
Ermöglicht neue Services in den Container zu registrieren (benutz lieber das neue Pluginsystem)

- [Enlight_Components_Mail_Send](https://github.com/shopware/shopware/blob/b37fb378cd099602317714d131c75c9cc1df39ef/engine/Library/Enlight/Components/Mail.php#L330)
Wird abgefeuert, bei jeder Mail die versendet wird

- [Theme_Inheritance_Template_Directories_Collected](https://github.com/shopware/shopware/blob/b3520661f1c182baa9e2f3dbd8c351f25d2284f4/engine/Shopware/Components/Theme/Inheritance.php#L207)
Ermöglicht es global ein Template Ordner zu registrieren. Es wird ebenfalls bei der Dokumenten Generierung aufgerufen.

- [Shopware_Controllers_Backend_Config_After_Save_Config_Element](https://github.com/shopware/shopware/blob/28a3689112757c41914f6b403b17b2880e269e7a/engine/Shopware/Controllers/Backend/Config.php#L1307)
Ermöglicht es auf Konfigurationsänderungen zu reagieren, es wird ebenfalls abgefeuert bei Plugin Konfigurationen.

- [Enlight_Controller_Front_DispatchLoopShutdown](https://github.com/shopware/shopware/blob/88c2678837e83fc968ca151cf39f3360c96bf7db/engine/Library/Enlight/Controller/Front.php#L249)
Letztes Event um den Response verändern zu können

- [Enlight_Controller_Router_Route](https://github.com/shopware/shopware/blob/321f6f4eeb3f234a111c970b705bd330b43fb4af/engine/Shopware/Components/Routing/Matchers/EventMatcher.php#L68)
Event basiert Router steuern

### Dir fehlt etwas? Erstell gerne einen Pull-Request!