<?php
foreach ($this->vars as $key => $value) {
  foreach ($value as $id => $formation) {
      echo "<a href='index.php?id=$id'>".$formation."</a><br>";
  }
}