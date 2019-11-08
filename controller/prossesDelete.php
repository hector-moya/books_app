<?php

require("../model/dbConnection.php");
require("../model/dbFunction.php");

$id = $_GET['delete'];



deleteBook($id);
?>