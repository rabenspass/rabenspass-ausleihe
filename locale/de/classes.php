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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Der Standort wird benoetigt.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Das Feld wird benoetigt.';";
$trans["biblioFieldError2"]       = "\$text = 'Der Tag muss numerisch sein.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Fehler beim Zugriff auf die Medieninformation.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Fehler beim Zugriff auf die Medienfelder.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Fehler beim Einfuegen des neuen Mediums.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Fehler beim Einfuegen des neuen Medienfeldes.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Fehler beim Aktualisieren des Mediums.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Fehler bei der Aktualisierung des Mediums beim Medienfeld.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Fehler beim Loeschen des Mediums.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Fehler beim Zaehlen der Suchergenisse.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Fehler beim Suchen nach Medieninformationen.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Fehler beim Lesen der Medieninformationen.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Die Mediennummer wird benoetigt.';";
$trans["biblioCopyError2"]        = "\$text = 'Ungueltige Zeichen im Barcode.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Fehler bei der Pruefung der Mediennummer.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Mediennummer %barcodeNmbr% wird bereits benutzt.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Fehler beim Einfuegen des neuen Exemplars.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Fehler beim Zugriff auf das Exemplar.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Fehler bei der Aktualisierung des Exemplars.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Fehler beim Loeschen des Exemplars.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Fehler beim Zugriff auf die Medieninformation um den Genrecode zu bekommen.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Fehler beim Zugriff auf die Genreinforamtionen um Rueckgabe-Datum zu erstellen.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Fehler bei der Rueckgabe des Exemplars';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Fehler beim Ueberpruefen der Ausleihlimits';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Fehler beim Ermitteln der Kopie mit der groe�ten Nummer.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Fehler beim Lesen eines Medienfeldes.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Fehler beim Lesen eines Medienfeldes.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Fehler beim Einfuegen eines Medienfeldes.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Fehler beim Aktualisieren eines Medienfeldes.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Fehler beim Loeschen eines Medienfeldes.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Fehler beim Zugriff auf die MARC-Bloecke.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Fehler beim Zugriff auf die MARC-Tags.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Fehler beim Zugriff auf die MARC-Unterfelder.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Fehler beim Zugriff auf Vorbestellung durch Mediennummer.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Fehler beim Zugriff auf Vorbestellung durch Benutzernummer.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Fehler bei der Vorbestellung wegen Pruefung der Mediennummer.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Fehler beim Einfuegen der Vorbestellung.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Fehler beim Loeschen der Vorbestellung.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Fehler beim Ermitteln der ersten Vorbestellung fuer dieses Exemplar.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Fehler beim Erstellen der Berichte.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Ein nichtmumerischer Wert ist in einer Zahlenspalte nicht erlaubt.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Ungueltiges Zeitformat.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Ungueltiges Datumsformat.';";

#****************************************************************************
#*  Translation text for class Staff
#****************************************************************************
$trans["staffLastNameReqErr"]     = "\$text = 'Nachname wird benoetigt.';";
$trans["staffUserNameLenErr"]     = "\$text = 'Benutzername muss mindestens 4 Zeichen lang sein.';";
$trans["staffUserNameCharErr"]    = "\$text = 'Benutzername darf kein Leerzeichen enthalten.';";
$trans["staffPwdLenErr"]          = "\$text = 'Passwort muss mindestens 4 Zeichen lang sein.';";
$trans["staffPwdCharErr"]         = "\$text = 'Passwort darf kein Leerzeichen enthalten.';";
$trans["staffPwdMatchErr"]        = "\$text = 'Passwoerter sind nicht identisch.';";

#****************************************************************************
#*  Translation text for class Member
#****************************************************************************
$trans["memberBarcodeReqErr"]     = "\$text = 'Die Benutzernummer wird benoetigt.';";
$trans["memberBarcodeCharErr"]    = "\$text = 'Ungueltige Zeichen in Benutzernummer.';";
$trans["memberLastNameReqErr"]    = "\$text = 'Nachname wird benoetigt.';";
$trans["memberFirstNameReqErr"]   = "\$text = 'Vorname wird benoetigt.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Ungueltige Schriftart in der Etikettendefinitionsdatei. Erlaubte Schriftarten sind Courier, Helvetica und Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Ungueltige Schriftgroe�e in der Etikettendefinitionsdatei. Die Schriftgroe�e mu� numerisch sein.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Ungueltige Schriftgroe�e in der Etikettendefinitionsdatei. Die Schriftgroe�e mu� groe�er als Null sein.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Ungueltiger linker Rand in der Etikettendefinitionsdatei. Der linke Rand mu� numerisch sein.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Ungueltiger linker Rand in der Etikettendefinitionsdatei. Der linke Rand mu� groe�er als Null sein.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Ungueltiger rechter Rand in der Etikettendefinitionsdatei. Der rechte Rand mu� numerisch sein.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Ungueltiger rechter Rand in der Etikettendefinitionsdatei. Der rechte Rand mu� groe�er als Null sein.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Ungueltiger oberer Rand in der Etikettendefinitionsdatei. Der obere Rand mu� numerisch sein.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Ungueltiger oberer Rand in der Etikettendefinitionsdatei. Der obere Rand mu� groe�er als Null sein.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Ungueltiger unterer Rand in der Etikettendefinitionsdatei. Der untere Rand mu� numerisch sein.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Ungueltiger unterer Rand in der Etikettendefinitionsdatei. Der untere Rand mu� groe�er als Null sein.';";
$trans["labelFormatColErr"]       = "\$text = 'Ungueltige Spalten in der Etikettendefinitionsdatei. Die Spalten muessen numerisch sein.';";
$trans["labelFormatColErr2"]      = "\$text = 'Ungueltige Spalten in der Etikettendefinitionsdatei. Die Spalten muessen groe�er als Null sein.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Ungueltige Breite in der Etikettendefinitionsdatei. Die Breite mu� numerisch sein.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Ungueltige Breite in der Etikettendefinitionsdatei. Die Breite mu� groe�er als Null sein.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Ungueltige Hoehe in der Etikettendefinitionsdatei. Die Hoehe mu� numerisch sein.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Ungueltige Hoehe in der Etikettendefinitionsdatei. Die Hoehe mu� groe�er als Null sein.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Ungueltige Zeilen in der Etikettendefinitionsdatei.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Fehler die Ausleihhistory durch die Mediennummer zu bekommen.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Fehler die Ausleihhistory durch die Benutzernummer zu bekommen.';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Fehler beim Einfuegen der Ausleihhistory';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Fehler die Ausleihhistory durch die Mediennummer zu loeschen.';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Fehler die Ausleihhistory durch die Benutzernummer zu loeschen.';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Der Betrag wird benoetigt.';";
$trans["memberAccountTransError2"]  = "\$text = 'Der Betrag mu� numerisch sein.';";
$trans["memberAccountTransError3"]  = "\$text = 'Die Beschreibung wird benoetigt.';";
$trans["Amount must be greater than zero."]  = "\$text = 'Der Betrag mu� groe�er als Null sein.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Fehler beim Zugriff auf die Benutzerinformationen.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Fehler beim Einfuegen von Benutzerinformationen.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Fehler beim Loeschen von Benutzerinformationen.';";

#****************************************************************************
#*  Translation text for class CircQuery
#****************************************************************************
$trans["Can't understand date: %err%"]                            = "\$text = 'Verstehe Datum nicht: %err%';";
$trans["Won't do checkouts for future dates."]                    = "\$text = 'Kann nicht an zukuenftigem Datum ausleihen.';";
$trans["Bad member barcode: %bcode%"]                             = "\$text = 'Falsche Mitgliedsnummer: %bcode%';";
$trans["Member owes fines: checkout not allowed"]                 = "\$text = 'Beim Mitglied gibt es Gebuehren: Ausleihen nicht erlaubt';";
$trans["Member must renew membership before checking out."]       = "\$text = 'Das Mitglied muss seine Mitgliedschaft verlaengern bevor es ausleihen darf.';";
$trans["Bad copy barcode: %bcode%"]                               = "\$text = 'Falsche Exemplarnummer: %bcode%';";
$trans["Item %bcode% has reached its renewal limit."]             = "\$text = 'Das Exemplar %bcode% hat sein Verlaengerungslimit erreicht.';";
$trans["Item %bcode% is late and cannot be renewed."]             = "\$text = 'Das Exemplar %bcode% ist zu spaet und darf nicht verlaengert werden.';";
$trans["Item %bcode% is on hold."]                                = "\$text = 'Das Exemplar %bcode% ist schon vorbestellt.';";
$trans["Item %bcode% is already checked out to another member."]  = "\$text = 'Das Exemplar %bcode% ist bereits an ein anderes Mitglied verliehen.';";
$trans["Item %bcode% isn't out and cannot be renewed."]  	   = "\$text = 'Das Exemplar %bcode% ist nicht ausgeliehen und kann daher nicht verlaengert werden.';";
$trans["Member has reached checkout limit for this collection."]  = "\$text = 'Das Mitglied hat sein Ausleihlimit fuer dieses Genre erreicht.';";
$trans["Checkouts are disallowed for this collection."]           = "\$text = 'Dieses Genre darf nicht verliehen werden.';";
$trans["Item is on hold for another member."]                     = "\$text = 'Das Exemplar ist fuer jemand anderen vorbestellt.';";
$trans["!!!Note : due date is after the end of the membership"] = "\$text = '!!!Hinweis : geplantes Rueckgabedatum ist nach dem Ende der Mitgliedschaft!';";
$trans["Can't change status to an earlier date on item %bcode%."] = "\$text = 'Kann den Status von Exemplar %bcode% nicht auf ein frueheres Datum aendern.';";
$trans["Can't change status more than once per second on item %bcode%."]  = "\$text = 'Kann den Status von Exemplar %bcode% nicht mehr als einmal pro Sekunde aendern.';";
$trans["Won't do checkins for future dates."]                     = "\$text = 'Kann keine Rueckgaben fuer ein zukuenftiges Datum machen.';";
$trans["Late fee (barcode=%barcode%)"]                            = "\$text = 'Saeumnisgebuehr (Barcode=%barcode%)';";

?>
