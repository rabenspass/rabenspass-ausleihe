<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["circCancel"]              = "\$text = 'Abbrechen';";
$trans["circDelete"]              = "\$text = 'L&ouml;schen';";
$trans["circLogout"]              = "\$text = 'Ausloggen';";
$trans["circAdd"]                 = "\$text = 'Hinzuf&uuml;gen';";
$trans["mbrDupBarcode"]           = "\$text = 'Mediennummer, %barcode%, ist schon in Benutzung.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Ausleihe';";
$trans["indexCardHdr"]            = "\$text='Suche Benutzer nach Benutzernummer:';";
$trans["indexCard"]               = "\$text='Benutzernummer:';";
$trans["indexSearch"]             = "\$text='Suche';";
$trans["indexNameHdr"]            = "\$text='Suche Benutzer nach Nachname:';";
$trans["indexName"]               = "\$text='Nachname beginnt mit:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php, mbr_search.php
#****************************************************************************
$trans["Mailing Address:"] 	  = "\$text='Postanschrift:';";
$trans["mbrNewForm"]              = "\$text='F&uuml;ge hinzu neuen';";
$trans["mbrEditForm"]             = "\$text='Bearbeite';";
$trans["mbrFldsHeader"]           = "\$text='Benutzer:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Benutzernummer:';";
$trans["mbrFldsLastName"]         = "\$text='Nachname:';";
$trans["mbrFldsFirstName"]        = "\$text='Vorname:';";
$trans["mbrFldsAddr1"]            = "\$text='Adresszeile 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Adresszeile 2:';";
$trans["mbrFldsCity"]             = "\$text='Stadt:';";
$trans["mbrFldsStateZip"]         = "\$text='Bundesland, PLZ:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefon (heim):';";
$trans["mbrFldsWorkPhone"]        = "\$text='Telefon (Arbeit):';";
$trans["mbrFldsEmail"]            = "\$text='E-Mail-Adresse:';";
$trans["mbrFldsClassify"]         = "\$text='Klassifikation:';";
$trans["mbrFldsGrade"]            = "\$text='Schulklasse:';";
$trans["mbrFldsTeacher"]          = "\$text='Klassenlehrer:';";
$trans["mbrFldsMbrShip"]          = "\$text='bezahlt bis (jjjj-mm-dd):';";
$trans["mbrFldsSubmit"]           = "\$text='&Uuml;bermitteln';";
$trans["mbrFldsCancel"]           = "\$text='Abbrechen';";
$trans["mbrsearchResult"]         = "\$text='Ergebnisseiten: ';";
$trans["mbrsearchprev"]           = "\$text='vor';";
$trans["mbrsearchnext"]           = "\$text='weiter';";
$trans["First"]                   = "\$text='Anfang';";
$trans["Last"]                    = "\$text='Ende';";
$trans["mbrsearchNoResults"]      = "\$text='Keine Ergebnisse gefunden.';";
$trans["mbrsearchFoundResults"]   = "\$text=' Ergebnisse gefunden.';";
$trans["mbrsearchSearchResults"]  = "\$text='Suchergebnisse:';";
$trans["mbrsearchCardNumber"]     = "\$text='Benutzernummer:';";
$trans["mbrsearchClassification"] = "\$text='Klassifikation:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Benutzer wurde erfolgreich hinzugef&uuml;gt.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Benutzer wurde erfolgreich aktualisiert.';";
$trans["mbrRenewSuccess"]         = "\$text='Die Mitgliedschaft wurde erfolgreich um %length% Monate verl&auml;ngert.';";
$trans["All items renewed."]      = "\$text='Alle Medien verl&auml;ngert.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Benutzerinformation:';";
$trans["mbrViewName"]             = "\$text='Name:';";
$trans["mbrViewAddr"]             = "\$text='Adresse:';";
$trans["mbrViewCardNmbr"]         = "\$text='Benutzernummer:';";
$trans["mbrViewClassify"]         = "\$text='Klassifikation:';";
$trans["mbrViewPhone"]            = "\$text='Telefon:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='A:';";
$trans["mbrViewEmail"]            = "\$text='E-Mail-Adresse:';";
$trans["mbrViewGrade"]            = "\$text='Schulklasse:';";
$trans["mbrViewTeacher"]          = "\$text='Klassenlehrer:';";
$trans["mbrViewMbrShipEnd"]       = "\$text='bezahlt bis:';";
$trans["mbrViewMbrShipNoEnd"]     = "\$text='unendlich/nicht benutzt';";
$trans["mbrViewHead2"]            = "\$text='Ausleih-Status:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Medienart';";
$trans["mbrViewStatColHdr2"]      = "\$text='Anzahl';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limits';";
$trans["mbrViewStatColHdr4"]      = "\$text='Ausleihe';";
$trans["mbrViewStatColHdr5"]      = "\$text='Verl&auml;ngerung';";
$trans["mbrViewHead3"]            = "\$text='Medienausleihe:';";
$trans["mbrViewBarcode"]          = "\$text='Mediennummer:';";
$trans["mbrViewCheckOut"]         = "\$text='Ausleihen';";
$trans["mbrViewHead4"]            = "\$text='Derzeit ausgeliehene Medien:';";
$trans["mbrViewOutHdr1"]          = "\$text='Ausgeliehen';";
$trans["mbrViewOutHdr2"]          = "\$text='Medienart';";
$trans["mbrViewOutHdr3"]          = "\$text='Mediennummer';";
$trans["mbrViewOutHdr4"]          = "\$text='Titel';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='R&uuml;ckgabe';";
$trans["mbrViewOutHdr7"]          = "\$text='&uuml;berf&auml;llige<br>Tage';";
$trans["mbrViewOutHdr8"]          = "\$text='Verl&auml;ngerungen';";
$trans["mbrViewOutHdr9"]          = "\$text='Mal';";
$trans["mbrViewOutHdr10"]         = "\$text='R&uuml;ckgabe';";
$trans["To Shelving Cart"]        = "\$text='In Eingangsablage';";
$trans["Renew item"]              = "\$text='Verl&auml;ngere Medium';";
$trans["mbrViewNoCheckouts"]      = "\$text='Derzeit keine Medien ausgeliehen.';";
$trans["mbrViewHead5"]            = "\$text='Vorbestellen:';";
$trans["mbrViewHead6"]            = "\$text='Derzeit vorbestellte Medien:';";
$trans["mbrViewPlaceHold"]        = "\$text='Vorbestellen';";
$trans["mbrViewHoldHdr1"]         = "\$text='Funktion';";
$trans["mbrViewHoldHdr2"]         = "\$text='Vorbestellt';";
$trans["mbrViewHoldHdr3"]         = "\$text='Medienart';";
$trans["mbrViewHoldHdr4"]         = "\$text='Mediennummer';";
$trans["mbrViewHoldHdr5"]         = "\$text='Titel';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='R&uuml;ckgabe';";
$trans["mbrViewNoHolds"]          = "\$text='Derzeit keine Medien vorbestellt.';";
$trans["mbrViewBalMsg"]           = "\$text='Bemerkung: Benutzer hat ausstehende Geb&uuml;hren von %bal%.';";
$trans["mbrViewShipEnd"]          = "\$text='Achtung: Die Mitgliedschaft des Mitglieds ist abgelaufen!';";
$trans["mbrPrintCheckouts"]	  = "\$text='Ausgeliehene Medien drucken';";
$trans["Renew All"]	  	  = "\$text='Alle Medien verl&auml;ngern';";
$trans["mbrViewDel"]              = "\$text='L&ouml;sche';";
$trans["mbrViewRenew1"]           = "\$text='Verl&auml;ngere Mitgliedschaft um';";
$trans["mbrViewRenew2"]           = "\$text='Monat(e).<br>Ab heute bzw. ab dem Bezahlt-bis-Datum, wenn es in der Zukunft liegt.';";
$trans["Due Date:"]               = "\$text='R&uuml;ckgabedatum';";
$trans["Override Due Date"]       = "\$text='R&uuml;ckgabedatum manuell &auml;ndern';";
$trans["Cancel"]                  = "\$text='Abbrechen';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Der Benutzer muﬂ ausstehende Geb&uuml;hren zahlen, bevor er ausleihen darf.';";
$trans["checkoutEndErr"]          = "\$text='Der Benutzer muﬂ die Mitgliedschaft verl&auml;ngern, bevor er ausleihen darf.';";
$trans["checkoutErr1"]            = "\$text='Die Mediennummer darf nur aus Zahlen und Buchstaben bestehen.';";
$trans["checkoutErr2"]            = "\$text='Kein Medium mit dieser Nummer wurde gefunden.';";
$trans["checkoutErr3"]            = "\$text='Das Medium mit der Nummer %barcode% ist bereits ausgeliehen.';";
$trans["checkoutErr4"]            = "\$text='Das Medium mit der Nummer %barcode% kann nicht ausgeliehen werden.';";
$trans["checkoutErr5"]            = "\$text='Das Medium mit der Nummer %barcode% wurde von einem anderen Benutzer vorbestellt.';";
$trans["checkoutErr6"]            = "\$text='Der Benutzer hat das Ausleihlimit f&uuml;r diese Medienart bereits erreicht.';";
$trans["checkoutErr7"]            = "\$text='Das Medium mit der Nummer %barcode% kann vom Benutzer nicht nochmal verl&auml;ngert werden.';";
$trans["checkoutErr8"]            = "\$text='Das Medium mit der Nummer %barcode% kann nicht verl&auml;ngert werden, weil es schon versp&auml;tet ist.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Die Mediennummer darf nur aus Zahlen und Buchstaben bestehen.';";
$trans["shelvingCartErr2"]        = "\$text='Kein Medium mit dieser Nummer wurde gefunden.';";
$trans["shelvingCartTrans"]       = "\$text='Vers&auml;umnisgeb&uuml;hr (Nummer=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Medienr&uuml;ckgabe:';";
$trans["checkinFormBarcode"]      = "\$text='Mediennummer:';";
$trans["checkinFormShelveButton"] = "\$text='Stelle in Eingangsablage';";
$trans["checkinFormCheckinLink1"] = "\$text='Augew&auml;hlte Medien einbuchen';";
$trans["checkinFormCheckinLink2"] = "\$text='Alle Medien einbuchen';";
$trans["checkinFormHdr2"]         = "\$text='derzeitiger Inhalt der Eingangsablage:';";
$trans["checkinFormColHdr1"]      = "\$text='R&uuml;ckgabedatum';";
$trans["checkinFormColHdr2"]      = "\$text='Mediennummer';";
$trans["checkinFormColHdr3"]      = "\$text='Titel';";
$trans["checkinFormColHdr4"]      = "\$text='Autor';";
$trans["checkinFormEmptyCart"]    = "\$text='Derzeit sind keine Medien im Eingangsregal.';";
$trans["Checked in %barcode% for "]    = "\$text='Exemplar %barcode% zur&uuml;ckgenommen von ';";
$trans["Checked in %barcode%."]   = "\$text='Exemplar %barcode% zur&uuml;ckgenommen.';";
$trans["checkinEndErr"]          = "\$text='Die Mitgliedschaft ist abgelaufen. Das Mitglied muss entweder die Mitgliedschaft verl&auml;ngern oder f&uuml;r %monthlate% Monate nachzahlen.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Keine Medien wurden ausgew&auml;hlt.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Medium wurde vorbestellt!';";
$trans["holdMessageMsg1"]         = "\$text='Das Medium mit der Mediennummer %barcode% welches Sie eincecken wollen wurde vorbestellt. <b>Bitte das Medium ins Vorbestellfach legen und nicht in die Eingangsablage.</b> Der Statuscode des Medium wurde auf vorbestellt ge&auml;ndert.';";
$trans["holdMessageMsg2"]         = "\$text='Kehre zur Medienr&uuml;ckgabe zur&uuml;ck.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Die Mediennummer darf nur aus Zahlen und Buchstaben bestehen.';";
$trans["placeHoldErr2"]           = "\$text='Die Mediennummer exitiert nicht.';";
$trans["placeHoldErr3"]           = "\$text='Das Mitglied hat dieses Medium bereits ausgeliehen - keine Vorbestellung angelegt.';";
$trans["This item is not checked out or on hold."]           = "\$text='Dieses Exemplar ist weder vorbestellt noch ausgeliehen.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Der Benutzer, %name%, hat %checkoutCount% Ausleihe(n) und %holdCount% Vorbestellung(en). Alle ausgeliehenen Medien m&uuml;ssen zur&uuml;ckgegeben und alle Vorbestellungen gel&ouml;scht werden, um den Benutzer zu l&ouml;schen.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Kehre zur Benutzerinformation zur&uuml;ck';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Sind sie sicher, daﬂ sie den Benutzer %name% l&ouml;schen wollen? Dieses wird auch die Ausleihhistory von ihm l&ouml;schen.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Der Benutzer, %name%, wurde gel&ouml;scht.';";
$trans["mbrDelReturn"]            = "\$text='kehre zur Benutzersuche zur&uuml;ck';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Benutzer Ausleihhistory:';";
$trans["mbrHistoryNoHist"]        = "\$text='Keine History gefunden.';";
$trans["mbrHistoryHdr1"]          = "\$text='Mediennummer';";
$trans["mbrHistoryHdr2"]          = "\$text='Titel';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Aktueller Status';";
$trans["mbrHistoryHdr5"]          = "\$text='Datum der Status&auml;nderung';";
$trans["mbrHistoryHdr6"]          = "\$text='R&uuml;ckgabedatum';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='F&uuml;ge eine Transaktion hinzu:';";
$trans["mbrAccountTransTyp"]      = "\$text='Transaktions Typ:';";
$trans["mbrAccountAmount"]        = "\$text='Betrag:';";
$trans["mbrAccountDesc"]          = "\$text='Beschreibung:';";
$trans["mbrAccountHead1"]         = "\$text='Transaktionen des Benutzers:';";
$trans["mbrAccountNoTrans"]       = "\$text='Keine Transaktionen gefunden.';";
$trans["mbrAccountOpenBal"]       = "\$text='Offener Betrag';";
$trans["mbrAccountDel"]           = "\$text='L&ouml;sche';";
$trans["mbrAccountHdr1"]          = "\$text='Funktion';";
$trans["mbrAccountHdr2"]          = "\$text='Datum';";
$trans["mbrAccountHdr3"]          = "\$text='Trans. Typ';";
$trans["mbrAccountHdr4"]          = "\$text='Beschreibung';";
$trans["mbrAccountHdr5"]          = "\$text='Betrag';";
$trans["mbrAccountHdr6"]          = "\$text='Kontostand';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transaktion erfolgreich durchgef&uuml;hrt.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Sind Sie sicher, daﬂ Sie die Transaktion l&ouml;schen wollen?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transaktion erfolgreich gel&ouml;scht.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Ausleihen von %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Aktuelles Datum:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Benutzer:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Benutzernummer:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Klassifikation:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Schlieﬂe Fenster';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Sie sind nicht berechtigt, diese Funktion im Ausleihbereich zu benutzen.';";

#****************************************************************************
#*  Translation text for page offline.php
#****************************************************************************
$trans["Upload Offline Circulation"]     = "\$text='Offline Ausleihe hochladen';";
$trans["Upload"]     = "\$text='Hochladen';";
$trans["Date:"]     = "\$text='Datum:';";
$trans["Command File:"]     = "\$text='Kommandodatei:';";
$trans["Bad upload file: Expected a command code, but didn't get one"]     = "\$text='Fehlerhafte Datei: Kommandocode erwartet, aber keinen erhalten';";
$trans["Couldn't check out %item% to %member%: %error%"]     = "\$text='Konnte Exemplar %item% an %member% nicht ausleihen: %error%';";
$trans["Couldn't check in %item%: %error%"]     = "\$text='Konnte Exemplar %item% nicht zur&uuml;cknehmen: %error%';";
$trans["Unrecognized command code: %cmd%"]     = "\$text='Nicht erkanntes Kommando: %cmd%';";
$trans["Command Sheet"]     = "\$text='Kommando&uuml;bersichtsblatt';";
$trans["Actions which did not produce an error have completed. Think carefully before uploading the same file again, or some circulations may be recorded twice."]     = "\$text='Aktionen die keinen Fehler produzieren wurden ausgef&uuml;hrt. Passen Sie auf, dass Sie keine Datei doppelt hochladen, da sonst einige Ausleihen doppelt erfasst werden.';";
$trans["Errors"]     = "\$text='Fehler';";
$trans["Offline Upload Successful."]     = "\$text='Offline Hochladeaktion erfolgreich.';";

?>
