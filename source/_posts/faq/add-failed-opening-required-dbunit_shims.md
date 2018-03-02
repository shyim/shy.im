---
title: Failed opening required "dbunit_shims.php"
tags: ["Errors"]
date: 2018-03-02T14:20:00+01:00
---

Wenn die Fehlermeldung 
```
PHP Fatal error: require(): Failed opening required '/var/www/vendor/composer/../../tests/dbunit_shims.php'
```

kommt, kannst du folgenden Befehl ausführen, der den Fehler beheben sollte: `composer install -o --no-dev`
