<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM course ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

?>
