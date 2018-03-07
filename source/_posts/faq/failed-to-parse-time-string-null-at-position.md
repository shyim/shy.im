---
title: Failed to parse time string (NULL) at position 0
tags: ["Errors"]
date: 2018-03-07T16:48:00+01:00
---

Wenn die Fehlermeldung beim Erstellen neuer Artikel-Attribute kommt
```
DateTime::__construct(): Failed to parse time string (NULL) at position 0 (N): The timezone could not be found in the database
```

brauchst du nur das Freitextfeld attr17 im Backend auf Text umstellen.
Da der Datentyp "date" von Shopware bei der Installation vorgegeben wird, gibt es keinen anderen Workaround.

Verursacht wird dies durch den Konstruktor von \Shopware\Models\Attribute\Article in welchem folgende Zeile hinterlegt ist:

```php
$this->attr17 = new \DateTime("NULL");
```
