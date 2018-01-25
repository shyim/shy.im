---
title: Shopware Config Übersicht
tags: ["Cheats"]
date: 2018-01-25T19:28:14+01:00
---


<table class="table table-responsive">
    <thead>
        <tr>
            <th>Label</th>
            <th>Name</th>
            <th>Standard Wert</th>
            <th>Datentyp</th>
            <th>Wo finde ich das?</th>
        </tr>
    </thead>
    <tbody>
                    <tr>
                <td>MwSt. Gutscheine</td>
                <td>vouchertax</td>
                <td>19</td>
                <td>text</td>
                <td>Artikel -> Sonstige MwSt.-Sätze</td>
            </tr>
                    <tr>
                <td>MwSt. Rabatte</td>
                <td>discounttax</td>
                <td>19</td>
                <td>text</td>
                <td>Artikel -> Sonstige MwSt.-Sätze</td>
            </tr>
                    <tr>
                <td>Artikel-Bewertungen müssen freigeschaltet werden</td>
                <td>voteunlock</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Artikelbewertungen</td>
            </tr>
                    <tr>
                <td>Automatischer Vorschlag der Artikelnummer</td>
                <td>backendautoordernumber</td>
                <td>1</td>
                <td>boolean</td>
                <td>Artikel -> Artikelnummern</td>
            </tr>
                    <tr>
                <td>Präfix für automatisch generierte Artikelnummer</td>
                <td>backendautoordernumberprefix</td>
                <td>SW</td>
                <td>text</td>
                <td>Artikel -> Artikelnummern</td>
            </tr>
                    <tr>
                <td>Artikel-Bewertungen deaktivieren</td>
                <td>votedisable</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Artikelbewertungen</td>
            </tr>
                    <tr>
                <td>Automatische Erinnerung zur Artikelbewertung senden</td>
                <td>votesendcalling</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Artikelbewertungen</td>
            </tr>
                    <tr>
                <td>Tage bis die Erinnerungs-E-Mail verschickt wird</td>
                <td>votecallingtime</td>
                <td>1</td>
                <td>text</td>
                <td>Storefront -> Artikelbewertungen</td>
            </tr>
                    <tr>
                <td>Steuer für Rabatte dynamisch feststellen</td>
                <td>taxautomode</td>
                <td>1</td>
                <td>boolean</td>
                <td>Artikel -> Sonstige MwSt.-Sätze</td>
            </tr>
                    <tr>
                <td>Artikelverlauf anzeigen</td>
                <td>lastarticles_show</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Artikelverlauf</td>
            </tr>
                    <tr>
                <td>Controller-Auswahl</td>
                <td>lastarticles_controller</td>
                <td>index, listing, detail, custom, newsletter, sitemap, campaign</td>
                <td>text</td>
                <td>Storefront -> Artikelverlauf</td>
            </tr>
                    <tr>
                <td>Anzahl Artikel in Verlauf (zuletzt angeschaut)</td>
                <td>lastarticlestoshow</td>
                <td>5</td>
                <td>text</td>
                <td>Storefront -> Artikelverlauf</td>
            </tr>
                    <tr>
                <td>Methode zum Senden der Mail</td>
                <td>mailer_mailer</td>
                <td>mail</td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Hostname für die Message-ID</td>
                <td>mailer_hostname</td>
                <td></td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Mail Host</td>
                <td>mailer_host</td>
                <td>localhost</td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Standard Port</td>
                <td>mailer_port</td>
                <td>25</td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Verbindungs Präfix</td>
                <td>mailer_smtpsecure</td>
                <td></td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>SMTP Benutzername</td>
                <td>mailer_username</td>
                <td></td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>SMTP Passwort</td>
                <td>mailer_password</td>
                <td></td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Verbindungs-Authentifizierung</td>
                <td>mailer_auth</td>
                <td></td>
                <td>text</td>
                <td>Shopeinstellungen -> Mailer</td>
            </tr>
                    <tr>
                <td>Shop wegen Wartung sperren</td>
                <td>setoffline</td>
                <td></td>
                <td>boolean</td>
                <td>System -> Wartung</td>
            </tr>
                    <tr>
                <td>Von der Sperrung ausgeschlossene IP</td>
                <td>offlineip</td>
                <td>0</td>
                <td>text</td>
                <td>System -> Wartung</td>
            </tr>
                    <tr>
                <td>Menü zeigen</td>
                <td>show</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Erweitertes Menü</td>
            </tr>
                    <tr>
                <td>Anzahl Ebenen</td>
                <td>levels</td>
                <td>2</td>
                <td>text</td>
                <td>Storefront -> Erweitertes Menü</td>
            </tr>
                    <tr>
                <td>Caching aktivieren</td>
                <td>caching</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Erweitertes Menü</td>
            </tr>
                    <tr>
                <td>Cachezeit</td>
                <td>cachetime</td>
                <td>86400</td>
                <td>interval</td>
                <td>Storefront -> Erweitertes Menü</td>
            </tr>
                    <tr>
                <td>Vergleich zeigen</td>
                <td>compareShow</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Artikelvergleich</td>
            </tr>
                    <tr>
                <td>Maximale Anzahl von zu vergleichenden Artikeln</td>
                <td>maxComparisons</td>
                <td>5</td>
                <td>number</td>
                <td>Storefront -> Artikelvergleich</td>
            </tr>
                    <tr>
                <td>Artikel pro Seite</td>
                <td>articlesperpage</td>
                <td>12</td>
                <td>text</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Artikel als neu markieren (Tage)</td>
                <td>markasnew</td>
                <td>30</td>
                <td>text</td>
                <td>Storefront -> Topseller / Neuheiten</td>
            </tr>
                    <tr>
                <td>Artikel als Topseller markieren (Verkäufe)</td>
                <td>markastopseller</td>
                <td>30</td>
                <td>text</td>
                <td>Storefront -> Topseller / Neuheiten</td>
            </tr>
                    <tr>
                <td>Anzahl Topseller für Charts</td>
                <td>chartrange</td>
                <td>8</td>
                <td>number</td>
                <td>Storefront -> Topseller / Neuheiten</td>
            </tr>
                    <tr>
                <td>Auswahl Artikel pro Seite</td>
                <td>numberarticlestoshow</td>
                <td>12|24|36|48</td>
                <td>text</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Verfügbare Listen Layouts</td>
                <td>categorytemplates</td>
                <td></td>
                <td>textarea</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Max. wählbare Artikelmenge / Artikel über Pulldown-Menü</td>
                <td>maxpurchase</td>
                <td>100</td>
                <td>text</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Text für nicht verfügbare Artikel</td>
                <td>notavailable</td>
                <td>Lieferzeit ca. 5 Tage</td>
                <td>text</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Anzahl ähnlicher Artikel Cross-Selling</td>
                <td>maxcrosssimilar</td>
                <td>8</td>
                <td>text</td>
                <td>Storefront -> Cross-Selling / Ähnliche Art.</td>
            </tr>
                    <tr>
                <td>Anzahl "Kunden kauften auch" Artikel Cross-Selling</td>
                <td>maxcrossalsobought</td>
                <td>8</td>
                <td>text</td>
                <td>Storefront -> Cross-Selling / Ähnliche Art.</td>
            </tr>
                    <tr>
                <td>Anzahl der Tage, die für die Topseller-Generierung berücksichtigt werden</td>
                <td>chartinterval</td>
                <td>10</td>
                <td>text</td>
                <td>Storefront -> Topseller / Neuheiten</td>
            </tr>
                    <tr>
                <td>Anzahl automatisch ermittelter, ähnlicher Artikel (Detailseite)</td>
                <td>similarlimit</td>
                <td>0</td>
                <td>text</td>
                <td>Storefront -> Cross-Selling / Ähnliche Art.</td>
            </tr>
                    <tr>
                <td>Lieferzeit im Warenkorb anzeigen</td>
                <td>basketshippinginfo</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Anfrage-Formular ID</td>
                <td>inquiryid</td>
                <td>16</td>
                <td>text</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Mind. Warenkorbwert ab dem die Möglichkeit der individuellen Anfrage angeboten wird</td>
                <td>inquiryvalue</td>
                <td>150</td>
                <td>text</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Zoomviewer statt Lightbox auf Detailseite</td>
                <td>usezoomplus</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Warenkorb bei E-Mail-Benachrichtigung ausblenden</td>
                <td>deactivatebasketonnotification</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Lagerbestands-Unterschreitung im Warenkorb anzeigen</td>
                <td>instockinfo</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Direkt auf Detailspringen, falls nur ein Artikel vorhanden ist</td>
                <td>categorydetaillink</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Verfügbare Templates Detailseite</td>
                <td>detailtemplates</td>
                <td>:Standard</td>
                <td>textarea</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Mindestlänge Passwort (Registrierung)</td>
                <td>minpassword</td>
                <td>8</td>
                <td>text</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Standardzahlungsart (Id) (Registrierung)</td>
                <td>defaultpayment</td>
                <td>5</td>
                <td>select</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Standard-Empfangsgruppe (ID) für registrierte Kunden (System / Newsletter)</td>
                <td>newsletterdefaultgroup</td>
                <td>1</td>
                <td>text</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Shopware generiert Kundennummern</td>
                <td>shopwaremanagedcustomernumbers</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>AGB - Checkbox auf Kassenseite deaktivieren</td>
                <td>ignoreagb</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Datenschutz-Bedingungen müssen über Checkbox akzeptiert werden</td>
                <td>actdprcheck</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Fallback-Zahlungsart (ID)</td>
                <td>paymentdefault</td>
                <td>5</td>
                <td>text</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>E-Mail Addresse muss zweimal eingegeben werden.</td>
                <td>doubleemailvalidation</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Erweiterte Felder in Newsletter-Registrierung abfragen</td>
                <td>newsletterextendedfields</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>"Kein Kundenkonto" deaktivieren</td>
                <td>noaccountdisable</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>IP von Statistiken ausschließen</td>
                <td>blockIp</td>
                <td></td>
                <td>text</td>
                <td>System -> Statistiken</td>
            </tr>
                    <tr>
                <td>SQL-Injection-Schutz aktivieren</td>
                <td>sql_protection</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> InputFilter</td>
            </tr>
                    <tr>
                <td>XSS-Schutz aktivieren</td>
                <td>xss_protection</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> InputFilter</td>
            </tr>
                    <tr>
                <td>RemoteFileInclusion-Schutz aktivieren</td>
                <td>rfi_protection</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> InputFilter</td>
            </tr>
                    <tr>
                <td>Minimale Suchwortlänge</td>
                <td>minsearchlenght</td>
                <td>3</td>
                <td>text</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Bestellbestätigung an Shopbetreiber deaktivieren</td>
                <td>no_order_mail</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Rabatte Bestellnummer</td>
                <td>discountnumber</td>
                <td>sw-discount</td>
                <td>text</td>
                <td>Storefront -> Rabatte / Zuschläge</td>
            </tr>
                    <tr>
                <td>Mindermengen Bestellnummer</td>
                <td>surchargenumber</td>
                <td>sw-surcharge</td>
                <td>text</td>
                <td>Storefront -> Rabatte / Zuschläge</td>
            </tr>
                    <tr>
                <td>Zuschlag für Zahlungsart (Bestellnummer)</td>
                <td>paymentsurchargenumber</td>
                <td>sw-payment</td>
                <td>text</td>
                <td>Storefront -> Rabatte / Zuschläge</td>
            </tr>
                    <tr>
                <td>Anzahl der Ergebnisse in der Livesuche</td>
                <td>maxlivesearchresults</td>
                <td>6</td>
                <td>text</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Registrierungsbestätigung in CC an Shopbetreiber schicken</td>
                <td>send_confirm_mail</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Double-Opt-In für Newsletter-Anmeldungen</td>
                <td>optinnewsletter</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Double-Opt-In für Artikel-Bewertungen</td>
                <td>optinvote</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Abschlag-Versandregel (Bestellnummer)</td>
                <td>shippingdiscountnumber</td>
                <td>SHIPPINGDISCOUNT</td>
                <td>text</td>
                <td>Storefront -> Rabatte / Zuschläge</td>
            </tr>
                    <tr>
                <td>Bestellstatus - Änderungen CC-Adresse</td>
                <td>orderstatemailack</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Erweitere SQL-Abfrage</td>
                <td>premiumshippiungasketselect</td>
                <td>MAX(a.topseller) as has_topseller, MAX(at.attr3) as has_comment, MAX(b.esdarticle) as has_esd</td>
                <td>text</td>
                <td>Storefront -> Versandkosten-Modul</td>
            </tr>
                    <tr>
                <td>Bestellung bei keiner verfügbaren Versandart blocken</td>
                <td>premiumshippingnoorder</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Versandkosten-Modul</td>
            </tr>
                    <tr>
                <td>Nur Kleinbuchstaben in den Urls nutzen</td>
                <td>routertolower</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Meta-Description von Artikel/Kategorien aufbereiten</td>
                <td>seometadescription</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>KategorieID aus Url entfernen</td>
                <td>routerremovecategory</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Noindex Querys</td>
                <td>seoqueryblacklist</td>
                <td>sPage,sPerPage,sSupplier,sFilterProperties,p,n,s,f</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Noindex Viewports</td>
                <td>seoviewportblacklist</td>
                <td>login,ticket,tellafriend,note,support,basket,admin,registerFC,newsletter,search,search,account,checkout,register</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Html-Kommentare entfernen</td>
                <td>seoremovecomments</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Query-Aliase</td>
                <td>seoqueryalias</td>
                <td>sSearch=q,
sPage=p,
sPerPage=n,
sSupplier=s,
sFilterProperties=f,
sCategory=c,
sCoreId=u,
sTarget=t,
sValidation=v,
sTemplate=l,
priceMin=min,
priceMax=max,
shippingFree=free,
immediateDelivery=delivery,
sSort=o,
categoryFilter=cf,
variants=var</td>
                <td>textarea</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Follow Backlinks</td>
                <td>seobacklinkwhitelist</td>
                <td>www.shopware.de,
www.shopware.ag,
www.shopware-ag.de</td>
                <td>textarea</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Datum des letzten Updates</td>
                <td>routerlastupdate</td>
                <td></td>
                <td>datetime</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Urls Cachezeit Tabelle</td>
                <td>routercache</td>
                <td>86400</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>USt-IdNr. für Firmenkunden als Pflichtfeld markieren</td>
                <td>vatcheckrequired</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>SEO-Urls Artikel-Template</td>
                <td>routerarticletemplate</td>
                <td>{sCategoryPath articleID=$sArticle.id}/{$sArticle.id}/{$sArticle.name}</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Urls Kategorie-Template</td>
                <td>routercategorytemplate</td>
                <td>{sCategoryPath categoryID=$sCategory.id}/</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>sonstige SEO-Urls</td>
                <td>seostaticurls</td>
                <td></td>
                <td>textarea</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Name des Shops</td>
                <td>shopName</td>
                <td>Shopware Demo</td>
                <td>text</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>Shopbetreiber E-Mail</td>
                <td>mail</td>
                <td>info@example.com</td>
                <td>text</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>Adresse</td>
                <td>address</td>
                <td></td>
                <td>textarea</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>Bankverbindung</td>
                <td>bankAccount</td>
                <td></td>
                <td>textarea</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>Schriftfarbe Captcha (R,G,B)</td>
                <td>captchaColor</td>
                <td>51,51,51</td>
                <td>text</td>
                <td>Storefront -> Captcha</td>
            </tr>
                    <tr>
                <td>Base-File</td>
                <td>baseFile</td>
                <td>shopware.php</td>
                <td>text</td>
                <td>System</td>
            </tr>
                    <tr>
                <td>ESD-Key</td>
                <td>esdKey</td>
                <td>552211cce724117c3178e3d22bec532ec</td>
                <td>text</td>
                <td>Artikel -> ESD</td>
            </tr>
                    <tr>
                <td>Verfügbare Templates Blog-Detailseite</td>
                <td>blogdetailtemplates</td>
                <td>:Standard;</td>
                <td>textarea</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>Faktor für genaue Treffer</td>
                <td>fuzzysearchexactmatchfactor</td>
                <td>100</td>
                <td>number</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Datum des letzten Updates</td>
                <td>fuzzysearchlastupdate</td>
                <td>2010-01-01 00:00:00</td>
                <td>datetime</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Faktor für unscharfe Treffer</td>
                <td>fuzzysearchmatchfactor</td>
                <td>5</td>
                <td>number</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Minimale Relevanz zum Topartikel in Prozent</td>
                <td>fuzzysearchmindistancentop</td>
                <td>20</td>
                <td>number</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Maximal-Distanz für Teilnamen in Prozent</td>
                <td>fuzzysearchpartnamedistancen</td>
                <td>25</td>
                <td>number</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Faktor für Teiltreffer</td>
                <td>fuzzysearchpatternmatchfactor</td>
                <td>50</td>
                <td>number</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Auswahl Ergebnisse pro Seite</td>
                <td>fuzzysearchselectperpage</td>
                <td>12|24|36|48</td>
                <td>text</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>ESD-Min-Serials</td>
                <td>esdMinSerials</td>
                <td>5</td>
                <td>text</td>
                <td>Artikel -> ESD</td>
            </tr>
                    <tr>
                <td>Anzeigen der Kunden-kauften-auch-Empfehlung</td>
                <td>alsoBoughtShow</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Anzahl an Artikel pro Seite in der Liste</td>
                <td>alsoBoughtPerPage</td>
                <td>4</td>
                <td>number</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Maximale Anzahl von Seiten in der Liste</td>
                <td>alsoBoughtMaxPages</td>
                <td>10</td>
                <td>number</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Anzeigen der Kunden-schauten-sich-auch-an-Empfehlung</td>
                <td>similarViewedShow</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Anzahl an Artikel pro Seite in der Liste</td>
                <td>similarViewedPerPage</td>
                <td>4</td>
                <td>number</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Maximale Anzahl von Seiten in der Liste</td>
                <td>similarViewedMaxPages</td>
                <td>10</td>
                <td>number</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Zeige Widerrufsbelehrung an</td>
                <td>revocationNotice</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige Newsletter-Registrierung an</td>
                <td>newsletter</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige Bankverbindungshinweis an</td>
                <td>bankConnection</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige weiteren Hinweis an</td>
                <td>additionalFreeText</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige weitere Optionen an</td>
                <td>commentVoucherArticle</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige Prämienartikel an</td>
                <td>premiumArticles</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige Länder-Beschreibung an</td>
                <td>countryNotice</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Zeige Hinweis für Netto-Bestellungen an</td>
                <td>nettoNotice</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Template für die wesentliche Merkmale</td>
                <td>mainFeatures</td>
                <td>{if $sBasketItem.additional_details.properties}
    {$sBasketItem.additional_details.properties}
{elseif $sBasketItem.additional_details.description}
    {$sBasketItem.additional_details.description}
{else}
    {$sBasketItem.additional_details.description_long|strip_tags|truncate:50}
{/if}</td>
                <td>textarea</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>PHP Timeout</td>
                <td>backendTimeout</td>
                <td>7200</td>
                <td>interval</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>Auswählbare Sprachen</td>
                <td>backendLocales</td>
                <td>Array</td>
                <td>select</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>SEO-Urls Blog-Template</td>
                <td>routerblogtemplate</td>
                <td>{sCategoryPath categoryID=$blogArticle.categoryId}/{$blogArticle.title}</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Artikeldetails in Modalbox anzeigen</td>
                <td>detailModal</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Firma</td>
                <td>company</td>
                <td></td>
                <td>textfield</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>SEO-Urls Landingpage-Template</td>
                <td>routercampaigntemplate</td>
                <td>{$campaign.name}</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Pauschaler Aufschlag für Zahlungsart (Bestellnummer)</td>
                <td>paymentSurchargeAbsoluteNumber</td>
                <td>sw-payment-absolute</td>
                <td>text</td>
                <td>Storefront -> Rabatte / Zuschläge</td>
            </tr>
                    <tr>
                <td>Anzahl der Mails, die pro Cronjob-Aufruf versendet werden</td>
                <td>MailCampaignsPerCall</td>
                <td>1000</td>
                <td>number</td>
                <td>Weitere Einstellungen -> Newsletter</td>
            </tr>
                    <tr>
                <td>Eigener Filter</td>
                <td>own_filter</td>
                <td></td>
                <td>textarea</td>
                <td>System -> InputFilter</td>
            </tr>
                    <tr>
                <td>Aktuelles Passwort bei Passwort-Änderungen abfragen</td>
                <td>accountPasswordCheck</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Shopware-Kernel aus URL entfernen </td>
                <td>preferBasePath</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>In Listen-Ansichten immer die Artikel-Kurzbeschreibung anzeigen</td>
                <td>useShortDescriptionInListing</td>
                <td></td>
                <td>checkbox</td>
                <td>Weitere Einstellungen -> Abwärtskompatibilität</td>
            </tr>
                    <tr>
                <td>Passwort-Algorithmus</td>
                <td>defaultPasswordEncoder</td>
                <td>Auto</td>
                <td>combo</td>
                <td>System -> Passwörter</td>
            </tr>
                    <tr>
                <td>Live Migration</td>
                <td>liveMigration</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> Passwörter</td>
            </tr>
                    <tr>
                <td>Bcrypt-Rechenaufwand</td>
                <td>bcryptCost</td>
                <td>10</td>
                <td>number</td>
                <td>System -> Passwörter</td>
            </tr>
                    <tr>
                <td>Sha256-Iterationen</td>
                <td>sha256iterations</td>
                <td>100000</td>
                <td>number</td>
                <td>System -> Passwörter</td>
            </tr>
                    <tr>
                <td>Kategorien im Batch-Modus verschieben</td>
                <td>moveBatchModeEnabled</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Admin-View</td>
                <td>admin</td>
                <td></td>
                <td>boolean</td>
                <td>System -> Frontend cache (HTTP cache)</td>
            </tr>
                    <tr>
                <td>Cache-Controller / Zeiten</td>
                <td>cacheControllers</td>
                <td>frontend/listing 3600
frontend/index 3600
frontend/detail 3600
frontend/campaign 14400
widgets/listing 14400
frontend/custom 14400
frontend/sitemap 14400
frontend/blog 14400
widgets/index 3600
widgets/checkout 3600
widgets/compare 3600
widgets/emotion 14400
widgets/recommendation 14400
widgets/lastArticles 3600
widgets/campaign 3600
frontend/listing/layout 0</td>
                <td>textarea</td>
                <td>System -> Frontend cache (HTTP cache)</td>
            </tr>
                    <tr>
                <td>NoCache-Controller / Tags</td>
                <td>noCacheControllers</td>
                <td>widgets/lastArticles detail
widgets/checkout checkout,slt
widgets/compare compare</td>
                <td>textarea</td>
                <td>System -> Frontend cache (HTTP cache)</td>
            </tr>
                    <tr>
                <td>Alternative Proxy-Url</td>
                <td>proxy</td>
                <td></td>
                <td>text</td>
                <td>System -> Frontend cache (HTTP cache)</td>
            </tr>
                    <tr>
                <td>Proxy-Prune aktivieren</td>
                <td>proxyPrune</td>
                <td>1</td>
                <td>boolean</td>
                <td>System -> Frontend cache (HTTP cache)</td>
            </tr>
                    <tr>
                <td>Download freigeben bei Zahlstatus</td>
                <td>downloadAvailablePaymentStatus</td>
                <td>Array</td>
                <td>select</td>
                <td>Artikel -> ESD</td>
            </tr>
                    <tr>
                <td>Immer das Artikel-Vorschaubild anzeigen</td>
                <td>forceArticleMainImageInListing</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Bestell-Abschluss-E-Mail versenden</td>
                <td>sendOrderMail</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Telefon als Pflichtfeld behandeln</td>
                <td>requirePhoneField</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Firmenname</td>
                <td>sepaCompany</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>Überschrift</td>
                <td>sepaHeaderText</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>Gläubiger-Identifikationsnummer</td>
                <td>sepaSellerId</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>SEPA Mandat automatisch versenden</td>
                <td>sepaSendEmail</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>SEPA BIC Feld anzeigen</td>
                <td>sepaShowBic</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>SEPA BIC Feld erforderlich</td>
                <td>sepaRequireBic</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>SEPA Kreditinstitut Feld anzeigen</td>
                <td>sepaShowBankName</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>SEPA Kreditinstitut Feld erforderlich</td>
                <td>sepaRequireBankName</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEPA-Konfiguration</td>
            </tr>
                    <tr>
                <td>Hersteller SEO-Informationen anwenden</td>
                <td>seoSupplier</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Urls Hersteller-Template</td>
                <td>seoSupplierRouteTemplate</td>
                <td>{createSupplierPath supplierID=$sSupplier.id}/</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Fehler an Shopbetreiber senden</td>
                <td>logMail</td>
                <td>0</td>
                <td>checkbox</td>
                <td>System -> Log</td>
            </tr>
                    <tr>
                <td>Maximales Alter für Referrer Statistikdaten</td>
                <td>maximumReferrerAge</td>
                <td>90</td>
                <td>text</td>
                <td>System -> Statistiken</td>
            </tr>
                    <tr>
                <td>Maximales Alter für Artikel-Impressions</td>
                <td>maximumImpressionAge</td>
                <td>90</td>
                <td>text</td>
                <td>System -> Statistiken</td>
            </tr>
                    <tr>
                <td>Artikel weiterempfehlen anzeigen</td>
                <td>showTellAFriend</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Artikelempfehlungen</td>
            </tr>
                    <tr>
                <td>Speicherfrist in Tagen</td>
                <td>lastarticles_time</td>
                <td>15</td>
                <td>number</td>
                <td>Storefront -> Artikelverlauf</td>
            </tr>
                    <tr>
                <td>Downloadoption für ESD Dateien</td>
                <td>esdDownloadStrategy</td>
                <td>1</td>
                <td>select</td>
                <td>Artikel -> ESD</td>
            </tr>
                    <tr>
                <td>API Endpoint</td>
                <td>update-api-endpoint</td>
                <td>http://update-api.shopware.com/v1/</td>
                <td>text</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Update Kanal</td>
                <td>update-channel</td>
                <td>stable</td>
                <td>select</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Aktionscode</td>
                <td>update-code</td>
                <td></td>
                <td>text</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Fake Version</td>
                <td>update-fake-version</td>
                <td></td>
                <td>text</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Feedback API Endpoint</td>
                <td>update-feedback-api-endpoint</td>
                <td>http://feedback.update-api.shopware.com/v1/</td>
                <td>text</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Feedback senden</td>
                <td>update-send-feedback</td>
                <td>1</td>
                <td>boolean</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Unique identifier</td>
                <td>trackingUniqueId</td>
                <td></td>
                <td>text</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Verify Signature</td>
                <td>update-verify-signature</td>
                <td>1</td>
                <td>boolean</td>
                <td>System -> Shopware Auto Update</td>
            </tr>
                    <tr>
                <td>Telefon anzeigen</td>
                <td>showphonenumberfield</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Passwort muss zweimal eingegeben werden</td>
                <td>doublepasswordvalidation</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Geburtstag anzeigen</td>
                <td>showbirthdayfield</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Geburtstag als Pflichtfeld behandeln</td>
                <td>requirebirthdayfield</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Adresszusatzzeile 1 anzeigen</td>
                <td>showAdditionAddressLine1</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Adresszusatzzeile 2 anzeigen</td>
                <td>showAdditionAddressLine2</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Adresszusatzzeile 1 als Pflichtfeld behandeln</td>
                <td>requireAdditionAddressLine1</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Adresszusatzzeile 2 als Pflichtfeld behandeln</td>
                <td>requireAdditionAddressLine2</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Anzahl der Produkte pro Queue-Request</td>
                <td>addToQueuePerRequest</td>
                <td>2048</td>
                <td>number</td>
                <td>Weitere Einstellungen -> Mehrfachänderung</td>
            </tr>
                    <tr>
                <td>Anzahl der Produkte pro Batch-Request</td>
                <td>batchItemsPerRequest</td>
                <td>2048</td>
                <td>number</td>
                <td>Weitere Einstellungen -> Mehrfachänderung</td>
            </tr>
                    <tr>
                <td>Rückgängig-Funktion aktivieren</td>
                <td>enableBackup</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Weitere Einstellungen -> Mehrfachänderung</td>
            </tr>
                    <tr>
                <td>Automatische Cache-Invalidierung aktivieren</td>
                <td>clearCache</td>
                <td></td>
                <td>checkbox</td>
                <td>Weitere Einstellungen -> Mehrfachänderung</td>
            </tr>
                    <tr>
                <td>Versandkostenberechnung im Warenkob anzeigen</td>
                <td>basketShowCalculation</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>"Seite nicht gefunden" Ziel</td>
                <td>PageNotFoundDestination</td>
                <td>-2</td>
                <td>select</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>"Seite nicht gefunden" Fehlercode</td>
                <td>PageNotFoundCode</td>
                <td>404</td>
                <td>number</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>"Ich bin" Auswahlfeld anzeigen</td>
                <td>showCompanySelectField</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Shop ist familienfreundlich</td>
                <td>metaIsFamilyFriendly</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Shopeinstellungen -> Stammdaten</td>
            </tr>
                    <tr>
                <td>SEO-Urls Shopseiten Template</td>
                <td>seoCustomSiteRouteTemplate</td>
                <td>{$site.description}</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>SEO-Urls Formular Template</td>
                <td>seoFormRouteTemplate</td>
                <td>{$form.name}</td>
                <td>text</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Kategorie Standard Sortierung</td>
                <td>defaultListingSorting</td>
                <td>1</td>
                <td>custom-sorting-selection</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Produkt Layout</td>
                <td>searchProductBoxLayout</td>
                <td>basic</td>
                <td>product-box-layout-select</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Abverkaufsartikel ohne Lagerbestand ausblenden</td>
                <td>hideNoInStock</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Warenkorb / Artikeldetails</td>
            </tr>
                    <tr>
                <td>E-Mail Header Plaintext</td>
                <td>emailheaderplain</td>
                <td></td>
                <td>textarea</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>E-Mail Footer Plaintext</td>
                <td>emailfooterplain</td>
                <td>
Mit freundlichen Grüßen

Ihr Team von {config name=shopName}</td>
                <td>textarea</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>E-Mail Header HTML</td>
                <td>emailheaderhtml</td>
                <td><div>
<img src="http://sw54.localhost/{$sShopURL}/themes/Frontend/Responsive/frontend/_public/src/img/logos/logo--tablet.png" alt="Logo"><br /></td>
                <td>textarea</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>E-Mail Footer HTML</td>
                <td>emailfooterhtml</td>
                <td><br/>
Mit freundlichen Grüßen<br/><br/>

Ihr Team von {config name=shopName}</div></td>
                <td>textarea</td>
                <td>Storefront -> E-Mail-Einstellungen</td>
            </tr>
                    <tr>
                <td>Sofortdownloads im Account anzeigen</td>
                <td>showEsd</td>
                <td>1</td>
                <td>boolean</td>
                <td>Artikel -> ESD</td>
            </tr>
                    <tr>
                <td>'First Run Wizard' beim Aufruf des Backends starten</td>
                <td>firstRunWizardEnabled</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>Checkbox zum Widerrufsrecht bei ESD Artikeln anzeigen</td>
                <td>showEsdWarning</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Artikel-Freitextfeld für Dienstleistungsartikel</td>
                <td>serviceAttrField</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>prev/next-Tag auf paginierten Seiten benutzen</td>
                <td>seoIndexPaginationLinks</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>Rauschfilterung bei Thumbnails</td>
                <td>thumbnailNoiseFilter</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Medien</td>
            </tr>
                    <tr>
                <td>Zeige ähnliche Artikel auf der "Artikel nicht gefunden" Seite an</td>
                <td>RelatedArticlesOnArticleNotFound</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> SEO/Router-Einstellungen</td>
            </tr>
                    <tr>
                <td>PLZ vor dem Stadtfeld anzeigen</td>
                <td>showZipBeforeCity</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Mobile Sitemap generieren</td>
                <td>mobileSitemap</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Sitemap</td>
            </tr>
                    <tr>
                <td>Mindestabnahme bei der Günstigsten-Preis-Berechnung berücksichtigen</td>
                <td>calculateCheapestPriceWithMinPurchase</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Staffelpreise in der Günstigsten Preis Berechnung berücksichtigen</td>
                <td>useLastGraduationForCheapestPrice</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Nummern Suche aktivieren</td>
                <td>activateNumberSearch</td>
                <td>1</td>
                <td>checkbox</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>"Und" Suchlogik verwenden</td>
                <td>enableAndSearchLogic</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Zahlungsart bei Bestellung immer auswählen</td>
                <td>always_select_payment</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Bestellabschluss</td>
            </tr>
                    <tr>
                <td>Ajax Timeout</td>
                <td>ajaxTimeout</td>
                <td>30</td>
                <td>number</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>Verfügbare Anreden</td>
                <td>shopsalutations</td>
                <td>mr,ms</td>
                <td>text</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Titel Feld anzeigen</td>
                <td>displayprofiletitle</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Bestätigungsmail nach Registrierung verschicken</td>
                <td>sendRegisterConfirmation</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Maximale Anzahl Produkte pro Seite</td>
                <td>maxStoreFrontLimit</td>
                <td>100</td>
                <td>number</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Global strip_tags verwenden</td>
                <td>strip_tags</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> InputFilter</td>
            </tr>
                    <tr>
                <td>Nur Subshopspezifische Bewertungen anzeigen</td>
                <td>displayOnlySubShopVotes</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Artikelbewertungen</td>
            </tr>
                    <tr>
                <td>Captcha Methode</td>
                <td>captchaMethod</td>
                <td>default</td>
                <td>combo</td>
                <td>Storefront -> Captcha</td>
            </tr>
                    <tr>
                <td>Nach Login ausblenden</td>
                <td>noCaptchaAfterLogin</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Captcha</td>
            </tr>
                    <tr>
                <td>Kaufenbutton im Listing anzeigen</td>
                <td>displayListingBuyButton</td>
                <td></td>
                <td>checkbox</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
                    <tr>
                <td>Cookie Hinweis anzeigen</td>
                <td>show_cookie_note</td>
                <td></td>
                <td>boolean</td>
                <td>Storefront -> Cookie Hinweis</td>
            </tr>
                    <tr>
                <td>Link zur Datenschutzerklärung</td>
                <td>data_privacy_statement_link</td>
                <td></td>
                <td>text</td>
                <td>Storefront -> Cookie Hinweis</td>
            </tr>
                    <tr>
                <td>Captcha in Registrierung verwenden</td>
                <td>registerCaptcha</td>
                <td>nocaptcha</td>
                <td>combo</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Verfügbare Sortierungen</td>
                <td>searchSortings</td>
                <td>|7|1|2|3|4|5|</td>
                <td>custom-sorting-grid</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Verfügbare filter</td>
                <td>searchFacets</td>
                <td>|1|2|3|4|5|6|7|</td>
                <td>custom-facet-grid</td>
                <td>Storefront -> Suche</td>
            </tr>
                    <tr>
                <td>Captcha in Newslettter  verwenden</td>
                <td>newsletterCaptcha</td>
                <td>nocaptcha</td>
                <td>combo</td>
                <td>Weitere Einstellungen -> Newsletter</td>
            </tr>
                    <tr>
                <td>Shopware Login Cookie erstellen</td>
                <td>useSltCookie</td>
                <td>1</td>
                <td>boolean</td>
                <td>Storefront -> Anmeldung / Registrierung</td>
            </tr>
                    <tr>
                <td>Backend Menüeinträge automatisch ausklappen</td>
                <td>backendMenuOnHover</td>
                <td>1</td>
                <td>checkbox</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>Benachrichtigungs Position</td>
                <td>growlMessageDisplayPosition</td>
                <td>top-right</td>
                <td>select</td>
                <td>System -> Backend</td>
            </tr>
                    <tr>
                <td>Alternative E-Mail-Adresse für Fehlermeldungen</td>
                <td>logMailAddress</td>
                <td></td>
                <td>text</td>
                <td>System -> Log</td>
            </tr>
                    <tr>
                <td>Produktlayout im Herstellerlisting</td>
                <td>manufacturerProductBoxLayout</td>
                <td>basic</td>
                <td>product-box-layout-select</td>
                <td>Storefront -> Kategorien / Listen</td>
            </tr>
            </tbody>
</table>
