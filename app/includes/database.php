<?php

define("DB_HOST", "mysql");
define("DB_USER", "user");
define("DB_PASS", "root");
define("DB_NAME", "project");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}
