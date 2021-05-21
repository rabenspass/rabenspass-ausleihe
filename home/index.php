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
<h2>Willkommen im Ausleihsystem von Rabenspass.</h2>
<h3>Der Jugendf&ouml;rderung der Samtgemeinde Isenb&uuml;ttel</h3>

<a href="/opac/">Katalog & Suche</a></br>
<a href="/opac/loginform.php">Login in Self-Service Portal</a></br>
<a href="/circ/">Login f&uuml;r Mitarbeitende</a>


<?php include("../shared/footer.php"); ?>
