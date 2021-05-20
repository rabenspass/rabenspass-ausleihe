<?php
/* This code is distributed with NO WARRANTY.
 * There is no copyright or paten on this code.
 * Use it any way you like in any work.
 */
class QueryError extends QueryBase
  {
  protected $type = 'error';
  function QueryError()
    {
    $this->error = new DbError("Checking for MySQL Extension...",
      "Unable to connect to database.",
      "No MySQL extension available, no mysql or mysqli or PDO.");

    }
  }
?>