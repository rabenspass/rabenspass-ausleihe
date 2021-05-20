<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
/* More compatibility for old Query/DbConnection classes.
 * FIXME - lose this cruft.
 */
class DbOld {
  function DbOld($results, $id) {
    $this->results = $results;
    $this->id = $id;
  }
  function getInsertId() {
    return $this->id;
  }
  function numRows() {
    $link = QueryAny::db();
    return $link->num_rows($this->results);
  }
  function fetchRow($arrayType=OBIB_ASSOC) {
    if (is_bool($this->results)) {
      return false;
    }
    $link = QueryAny::db();
    switch ($arrayType) {
      case OBIB_NUM:
        return $link->fetch_row($this->results);
        break;
      case OBIB_BOTH:
        return $link->fetch_array_both($this->results);
        break;
      case OBIB_ASSOC:
      default:
        return $link->fetch_assoc($this->results);
    }
    return false;
  }
  function resetResult() {
    $link = QueryAny::db();
    $link->data_seek($this->results, 0);
  }
}
?>