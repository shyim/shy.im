---
title: Snippet Inhalt im Template assignen
tags: ["Smarty"]
date: 2017-12-05T19:28:14+01:00
---

```
{s name="NameVonSnippet" assign="tplVariable"}Standardwert{/s}
{$tplVariable|replace:'Test':'Lol'}
```
