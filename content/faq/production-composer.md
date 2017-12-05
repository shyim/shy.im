---
title: Composer mit den Release Zip benutzen
tags: ["Composer"]
date: 2017-12-05T19:28:14+01:00
---

Um Composer ordentlich mit den Release Dateien zu benutzen, muss man unbedingt immer alle Operationen mit ``--no-dev`` ausführen.

Da Shopware den autoload bei dev erweitert hat, und diese Datei in der Production Zip nicht drin ist.
