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
$trans["adminSubmit"]              = "\$text = 'Uebermitteln';";
$trans["adminCancel"]              = "\$text = 'Abbrechen';";
$trans["adminDelete"]              = "\$text = 'Loeschen';";
$trans["adminUpdate"]              = "\$text = 'Update';";
$trans["adminFootnote"]            = "\$text = 'Felder, die mit %symbol% markiert sind, werden benoetigt.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Admin';";
$trans["indexDesc"]                = "\$text = 'Benutzen Sie die Funktionen im linken Navigationsbereich, um die Mitarbeiter anzulegen und zu bearbeiten und die Programmeinstellungen zu aendern.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'kehre zur Genreliste zurueck';";
$trans["adminCollections_delStart"]                 = "\$text = 'Genre, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', wurde geloescht.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Sind Sie sicher folgendes Genre zu loeschen: ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', wurde aktualisiert.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Bearbeite Genre:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Zustand:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'Ausleihdauer in Tagen:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Taegliche Versaeumnisgebuehr:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Bemerkung:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'Wenn Sie die Ausleihdauer auf 0 setzen, kann man dieses Genre nicht ausleihen.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Fuege neues Genre hinzu';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Genres:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Funktionen';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Beschreibung';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'Ausleih-<br>dauer';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Taegliche<br>Versaeumnisgebuehr';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Anzahl der<br>Medien';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Bearb.';";
$trans["adminCollections_listDel"]                 = "\$text = 'Loesche';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Bemerkung:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'Man kann nur Genres loeschen, die keine Medien enthalten.<br>Wenn Sie ein Genre loeschen moechten, welches Medien enthaelt, muessen sie diese Medien zuerst einem anderen Genre zuordnen.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', wurde hinzugefuegt.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Fuege neues Genre hinzu:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Beschreibung:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Ausleihdauer in Tagen:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Taegliche Versaeumnisgebuehr:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Bemerkung:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Wenn Sie die Ausleihdauer auf 0 setzen, kann man dieses Genre nicht ausleihen.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Medienart, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', wurde geloescht.';";
$trans["admin_materials_Return"]                 = "\$text = 'kehre zur Medienartenliste zurueck';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Sind Sie sicher folgende Medienart zu loeschen: ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Bearbeite Medienarten:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Beschreibung:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(0 fuer unbeschraenkt)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'Bilddatei:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Bemerkung:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'Die Bilddatein mu� sich im Verzeichnis openbiblio/images befinden.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', wurde aktualisiert.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Fuege neue Medienart hinzu';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Medienarten:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Funktionen';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Beschreibung';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limits';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Ausleihe';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Verlaengerung';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Bild<br>Datei';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Anzahl der<br>Medien';";
$trans["admin_materials_listEdit"]                 = "\$text = 'Bearb.';";
$trans["admin_materials_listDel"]                 = "\$text = 'Loesche';";
$trans["admin_materials_listNote"]                 = "\$text = '*Bemerkung:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'Man kann nur Medienarten loeschen, die keine Medien enthalten.<br>Wenn Sie eine Medienart loeschen moechten, welche Medien enthaelt, muessen sie diese Medien zuerst einer anderen Medienart zuordnen.';";
$trans["No fields found!"]                 = "\$text = 'Keine Felder gefunden!';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', wurde hinzugefuegt.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Die Bilddatei mu� sich im Verzeichnis openbiblio/images befinden.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'Sie sind nicht berechtigt den Adminbereich zu benutzen.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Die Daten wurden aktualisiert..';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Bearbeite Bibliothekseinstellungen:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Bibliotheksname:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'URL des Bibliothekslogo:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Zeige nur das Bild in Kopfzeile:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Oeffnungszeiten:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Telefonnummer:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Homepage:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Session Timeout:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'Minuten';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Suchergebnisse:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'Ergebnisse pro Seite';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Loesche vergangene Ausleihvorgaenge nach:';";
$trans["admin_settingsmonths"]                 = "\$text = 'Monaten';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Blockiere Ausleihe, wenn Gebuehren anstehen:';";
$trans["Max. hold length:"]                 = "\$text = 'Max. Reservierungsdauer:';";
$trans["days"]                              = "\$text = 'Tage';";
$trans["admin_settingsLocale"]                 = "\$text = 'Sprache:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Zeichensatz:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Sprach Attribut:';";
$trans["If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference."]                 = "\$text = 'Wenn die Monatsanzahl beim loeschen der Historie groe�er als Null ist, koennen sich die statistischen Werte veraendern.<br>Daten aus statistischen Reporten solltenuel;r zuel;nftige Referenzen au�erhalb von Openbiblio gespeichert werden.';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Mitarbeiter,';";
$trans["adminStaff_Return"]                 = "\$text = 'kehre zur Mitarbeiterliste zurueck';";
$trans["adminStaff_Yes"]                 = "\$text = 'Ja';";
$trans["adminStaff_No"]                 = "\$text = 'Nein';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', wurde geloescht.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Sind Sie sicher folgenden Mitarbeiter zu loeschen: ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', wurde aktualisiert.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Bearbeite Mitarbeiterinformationen:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Nachname:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Vorname:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Benutzername:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Befugnisse:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Ausleihe';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Benutzer bearb.';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Katalog.';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Admin';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Berichte';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Deakt.:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Fuege neue Mitarbeiter hinzu';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Mitarbeiter:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Funktionen';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'Bearb.';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'Passw.';";
$trans["adminStaff_list_Del"]                 = "\$text = 'Loesche';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', wurde hinzugefuegt.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Fuege neuen Mitarbeiter hinzu:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Passwort:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Passwort wiederholen:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Passwort wurde geaendert.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Aendere Mitarbeiter Passwort:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'kehre zur Layoutliste zurueck';";
$trans["adminTheme_Theme"]                 = "\$text = 'Layout, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', wurde geloescht.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Sind Sie sicher folgendes Layout zu loeschen: ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', wurde aktualisiert.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Vorschau des Layouts';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Bearbeite benutzes Layout:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Waehle ein neues Layout aus:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Fuege neues Layout hinzu';";
$trans["adminTheme_themes"]                 = "\$text = 'Layouts:';";
$trans["adminTheme_function"]                 = "\$text = 'Funktionen';";
$trans["adminTheme_Themename"]                 = "\$text = 'Layout Name';";
$trans["adminTheme_Usage"]                 = "\$text = 'Benutzung';";
$trans["adminTheme_Edit"]                 = "\$text = 'Bearb.';";
$trans["adminTheme_Copy"]                 = "\$text = 'Kopiere';";
$trans["adminTheme_Del"]                 = "\$text = 'Loesche';";
$trans["adminTheme_Inuse"]                 = "\$text = 'benutzt';";
$trans["adminTheme_Note"]                 = "\$text = '*Bemerkung:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'Layouts die gerade benutzt werden koennen nicht geloescht werden.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Layout:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Tabellenrahmen Farbe:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Fehler Farbe:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Tabellenrahmen Breite:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Tabellenzellen Innenabstand:';";
$trans["adminTheme_Title"]                 = "\$text = 'Titelzeile';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Hauptfenster';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigation';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Reiter';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Hintergrundfarbe:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Schriftart:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Schriftgroe�e:';";
$trans["adminTheme_Bold"]                 = "\$text = 'Dick';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Schriftfarbe:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Linkfarbe:';";
$trans["adminTheme_Align"]                 = "\$text = 'Ausrichtung:';";
$trans["adminTheme_Right"]                 = "\$text = 'Rechts';";
$trans["adminTheme_Left"]                 = "\$text = 'Links';";
$trans["adminTheme_Center"]                 = "\$text = 'Mitte';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'Bearbeite';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', wurde hinzugefuegt.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Layout Vorschau';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Bibliotheksname';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Schlie�e Fenster';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Start';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Ausleihe';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Katalogisierung';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Admin';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Beispiel Link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Dieses ist eine Vorschau des ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'Layout.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Beispiel-Liste:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Tabellenkopf';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Beispiel Datezeile 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Beispiel Datezeile 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Beispiel Datezeile 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Beispiel Link';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'Beispiel Fehler';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Beispiel Eingabe';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Beispiel Knopf';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#****************************************************************************
#*  Translation text for Checkout Privs
#****************************************************************************
$trans["Privileges updated"]               = "\$text = 'Einstellungen geaendert';";
$trans["Edit Checkout Privileges"]         = "\$text = 'Ausleiheinstellungen bearbeiten';";
$trans["Material Type:"]                   = "\$text = 'Medienart:';";
$trans["Member Classification:"]           = "\$text = 'Mitgliederart:';";
$trans["Checkout Limit:"]                  = "\$text = 'Ausleihlimit:';";
$trans["Renewal Limit:"]                   = "\$text = 'Verlaengerunsglimit:';";
$trans["Checkout Privileges"]              = "\$text = 'Ausleiheinstellungen';";
$trans["function"]                         = "\$text = 'Funktion';";
$trans["Material Type"]                    = "\$text = 'Medienart';";
$trans["Member Classification"]            = "\$text = 'Mitgliederart';";
$trans["Checkout Limit"]                   = "\$text = 'Ausleihlimit';";
$trans["Renewal Limit"]                    = "\$text = 'Verlaengerungslimit';";
$trans["edit"]                             = "\$text = 'Bearb.';";

#****************************************************************************
#*  Translation text for Copy Fields 
#****************************************************************************

$trans["Copy field, %desc%, has been deleted."] = "\$text = 'Exemplarfeld, %desc%, wurde geloescht.';";
$trans["return to copy field list"]             = "\$text = 'Zurueck zur Exemplarfeldliste';";
$trans["return to copy fields list"]             = "\$text = 'Zurueck zur Exemplarfeldliste';";
$trans["Are you sure you want to delete field '%desc%'?"] = "\$text = 'Sind Sie sicher, dass sie das Feld \'%desc%\' loeschen wollen?';";
$trans["Copy field, %desc%, has been updated."] = "\$text = 'Exemplarfeld, %desc%, wurde aktualisiert.';";
$trans["Edit Copy Field"]                       = "\$text = 'Bearbeite Exemplarfeld';";
$trans["Code:"]                                 = "\$text = 'Kennzeichen:';";
$trans["Description:"]                          = "\$text = 'Beschreibung:';";
$trans["Add new custom field"]                  = "\$text = 'Fuege neues spezifisches Feld hinzu';";
$trans["Custom Copy Fields"]                    = "\$text = 'Spezifisches Exemplarfeld';";
$trans["function"]                              = "\$text = 'Funktion';";
$trans["Code"]                                  = "\$text = 'Kennzeichen';";
$trans["Description"]                           = "\$text = 'Beschreibung';";
$trans["del"]                                   = "\$text = 'Loeschen';";
$trans["Copy field, %desc%, has been added."]   = "\$text = 'Exemplarfeld, %desc%, wurde hinzugefuegt.';";
$trans["Add custom copy field"]                 = "\$text = 'Fuege spezifisches Exemplarfeld hinzu';";

#****************************************************************************
#*  Translation text for Member Classify 
#****************************************************************************

$trans["Classification type, %desc%, has been deleted."] = "\$text = 'Mitgliederart, %desc%, wurde geloescht.';";
$trans["return to member classification list"]           = "\$text = 'Zurueck zur Liste der Mitgliederarten';";
$trans["Are you sure you want to delete classification '%desc%'?"] = "\$text = 'Sind Sie sicher die Mitgliederart \'%desc%\' zu loeschen?';";
$trans["Classification type, %desc%, has been updated."] = "\$text = 'Mitgliederart, %desc%, wurde aktualisiert.';";
$trans["Edit Classification Type"]                       = "\$text = 'Bearbeite Mitgliederart';";
$trans["Max. Fines:"]                                    = "\$text = 'Max. Gebuehren:';";
$trans["Add new member classification"]                  = "\$text = 'Neue Mitgliederart hinzufuegen';";
$trans["Member Classifications List"]                    = "\$text = 'Liste der Mitgliederarten';";
$trans["Max. Fines"]                                     = "\$text = 'Max. Gebuehren';";
$trans["Members"]                                        = "\$text = 'Mitglieder';";
$trans["*Note:"]                                         = "\$text = '*Bemerkung:';";
$trans["The delete function is only available on classifications that have a member count of zero.  If you wish to delete a classification with a member count greater than zero you will first need to change those members to another classification."]     = "\$text = 'Die Loeschfunktion ist nur verfuegbar, bei Mitgliederarten, die keine Mitglieder haben. Wenn Sie eine Mitgliederart loeschen moechten, die mehr als Null Mitglieder haben, dann muessen Sie diese Mitglieder erst in eine andere Mitgliederart verschieben.';";
$trans["Classification type, %desc%, has been added."]   = "\$text = 'Mitgliederart, %desc%, wurde hinzugefuegt.';";
$trans["Add new classification type"]                    = "\$text = 'Fuege neue Mitgliederart hinzu';";

#****************************************************************************
#*  Translation text for Member Fields
#****************************************************************************

$trans["Member field, %desc%, has been deleted."] = "\$text = 'Mitgliederfeld, %desc%, wurde geloescht.';";
$trans["return to member field list"]             = "\$text = 'Zurueck zur Mitgliederfeldliste';";
$trans["return to member fields list"]             = "\$text = 'Zurueck zur Mitgliederfeldliste';";
$trans["Member field, %desc%, has been updated."] = "\$text = 'Mitgliederfeld, %desc%, wurde aktualisiert.';";
$trans["Edit Member Field"]                       = "\$text = 'Bearbeite Mitgliederfeld';";
$trans["Custom Member Fields"]                    = "\$text = 'Spezifisches Mitgliederfeld';";
$trans["Member field, %desc%, has been added."]   = "\$text = 'Mitgliederfeld, %desc%, wurde hinzugefuegt.';";
$trans["Add custom member field"]                 = "\$text = 'Fuege spezifisches Mitgliederfeld hinzu';";

?>
