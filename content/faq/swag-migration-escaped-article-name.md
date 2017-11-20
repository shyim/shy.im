---
title: 'Artikel Namen nach Shop Migration html escapted &uml;'
tags: ["SwagMigration"]
---

SwagMigration escapt während der Migration alle Produktnamen.

# Lösung
```sql
UPDATE s_articles SET name = REPLACE(name, "&amp;", "&");
UPDATE s_articles SET name = REPLACE(name, "&lt;", "<");
UPDATE s_articles SET name = REPLACE(name, "&gt;", ">");
```