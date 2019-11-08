<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location:view/pages/visitor.php");
    die;
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script src="view/script/java.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper container-fluid bg-light" id="grid">
        <div class="box row mw-100 mx-auto container-fluid align-items-center justify-content-between bg-secondary rounded p-2 m-2" id="header">
        <?php require("model/dbConnection.php"); include "view/pages/header.php" ?>
        </div>
        
        <div class="row navbar navbar-dark bg-dark mw-100 mx-auto container-fluid rounded justify-content-center"id="menu">
            <?php include "view/pages/menu.php" ?>
        </div>

        <div class="box container-fluid" id="description">
            <?php 
            require("model/dbConnection.php");
            include "view/pages/description.php" 
            ?>
        </div>
        <div class="box container-fluid row mw-75 mx-auto justify-content-center" id="body">
            <?php 
            require("model/dbConnection.php");
            include "view/pages/body.php" 
            ?>
        </div>
        <div class="box container-fluid justify-content-center bg-secondary rounded" id="footer">
            <?php  require("view/pages/footer.php");  ?>
        </div>
    </div>
</body>
</html>