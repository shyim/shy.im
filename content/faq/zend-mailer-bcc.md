---
title: 'Mail senden mit BCC funktioniert nicht'
tags: ["Zend", "Bugs"]
---

Der Zend-Mailer unterstüzt kein BCC. Siehe Zeile https://github.com/shopware/shopware/blob/v5.3.4/engine/Library/Zend/Mail/Transport/Smtp.php#L233

# Lösung
Mail clonen und neuen addTo hinzufügen.
