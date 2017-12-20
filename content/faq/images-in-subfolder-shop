---
title: Bilder fehlen in Subfolder-Shops
tags: ["Bugs"]
date: 2017-12-20T16:32:09+01:00
---

Durch einen [Logikfehler](https://github.com/shopware/shopware/blob/5.4/engine/Shopware/Bundle/MediaBundle/MediaService.php#L294) wird das Subdirectory aus dem Request, anstatt aus dem Backend geladen. 

[Pull-Request](https://github.com/shopware/shopware/pull/1317)

Lösung: Mediaservice überschreiben
```https://github.com/fionera/SubfolderMediaFix```

Gegebenenfalls kann es passieren, dass ein Fehlerauftritt, da in einem Shopware Release nicht das Interface erwartet wurde.
