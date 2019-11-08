<?php
require("../model/dbConnection.php");
require("../model/dbFunction.php");
require("inputFilter.php");
    if (!empty([$_POST])) {
        $username = !empty($_POST['username'])? inputFilter(($_POST['username'])): null;
        $mypass = !empty($_POST['password'])? inputFilter(($_POST['password'])): null;
        $role = !empty($_POST['role'])? inputFilter(($_POST['role'])): null;
    
        $password = password_hash($mypass, PASSWORD_DEFAULT);
        if ($_POST['action_type'] == 'add') {
            $query = $conn->prepare("SELECT userName FROM users WHERE  userName = :user");
            $query->bindValue(":user", $username);
            
            $query->execute();
            
            if ($query->rowCount() < 1) { //If row are not found
                
                try {
                    
                    newAdminUser($username, $password, $role);//function call
                    
                    header('location:../index.php');
                    
                } catch (Exception $ex) {
                    echo "Unable to insert record".$e -> getMessage();
                    die();
                }
            } else {
                //User already exists
                header("../view/pages/registration.php");
            }
        }
    }
