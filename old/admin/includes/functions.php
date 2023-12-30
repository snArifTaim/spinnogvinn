<?php

function get_all_table()
{
  global $conn;
  $sql = "SHOW TABLES FROM `freelancing_guideline`";
  $result = $conn->query($sql);

  if (!$result) {
    return false;
  }

  $result = mysqli_fetch_all($result);

  return $result;
}

