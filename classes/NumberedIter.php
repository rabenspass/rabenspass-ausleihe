<?php
class NumberedIter extends Iter {
  function NumberedIter($iter) {
    $this->iter = $iter;
    $this->n = 0;
  }
  function count() {
    return $this->iter->count();
  }
  function next() {
    $r = $this->iter->next();
    if (is_array($r)) {
      $r['.seqno'] = $this->n++;
    }
    return $r;
  }
  function skip() {
    $this->iter->skip();
    $this->n++;
  }
}
?>
