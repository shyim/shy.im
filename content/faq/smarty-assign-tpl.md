---
title: Snippet Inhalt im Template assignen
tags: ["Smarty"]
---

```
{s name="NameVonSnippet" assign="tplVariable"}Standardwert{/s}
{$tplVariable|replace:'Test':'Lol'}
```
