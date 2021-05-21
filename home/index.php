<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "home";
  $nav = "home";

  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<h2>Willkommen im Ausleihsystem von Rabenspass.</h2>
<h5>Jugendf&ouml;rderung der Samtgemeinde Isenb&uuml;ttel</h5>

<button type="button" class="btn btn-secondary"><a href="/opac/">Katalog & Suche</a></button></br>
<button type="button" class="btn btn-info"><a href="/opac/loginform.php">Login in Self-Service Portal</a></button></br>
<button type="button" class="btn btn-danger"><a href="/circ/">Ausgabeportal f&uuml;r Mitarbeitende</a></button>


<?php include("../shared/footer.php"); ?>
