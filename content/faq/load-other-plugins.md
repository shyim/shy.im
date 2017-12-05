---
title: Andere Plugins laden / Komponenten anderer Plugins benutzen
tags: ["Plugin"]
date: 2017-12-05T19:28:14+01:00
---

Viele Plugins bringen eigene Komponenten mit und lagern Sie in einen eigenen Namespace aus.
Wenn jedoch andere Plugins darauf zugreifen wollen, muss das andere Plugins bereits initialisiert sein, um diese Komponenten zu benutzen.
Um das zu garantieren, kann man vor der benutzen der Komponente ``Shopware()->Plugins()->Namespace()->PluginName()``(Bsp: Shopware()->Plugins()->Backend()->HttpCache()) verwenden.
Dieser Codesnipsel provoziert das Laden des Plugins und somit ausführen des afterInit Befehls, welche benutzt wird um Namespaces zu registrieren.