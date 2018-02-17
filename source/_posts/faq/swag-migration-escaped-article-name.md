---
title: 'Artikel Namen nach Shop Migration html escaped &uml;'
tags: ["SwagMigration"]
date: 2017-12-05T19:28:14+01:00
---

SwagMigration escaped während der Migration alle Produktnamen.

# Lösung
```sql
UPDATE s_articles SET name = REPLACE(name, "&amp;", "&");
UPDATE s_articles SET name = REPLACE(name, "&lt;", "<");
UPDATE s_articles SET name = REPLACE(name, "&gt;", ">");
```