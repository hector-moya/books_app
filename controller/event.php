<?php
if (isset($_SESSION['login'])) {
    require("model/dbConnection.php");
    require("model/dbFunction.php");



    $id = $_GET['view'];



    selectBook($id);
} else {
    require("../../model/dbConnection.php");
    require("../../model/dbFunction.php");



    $id = $_GET['viewTwo'];



    selectBook($id);
}
?>
