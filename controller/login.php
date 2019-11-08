    <?php
    session_start();
    //Require Connection, functions and sanitize inputs
    require("../model/dbConnection.php");
    require("../model/dbFunction.php");
    require("inputFilter.php");
    //Sanitize inputs
    if (!empty($_POST)) {
        $username = !empty($_POST['username']) ? inputFilter(($_POST['username'])) : null;
        $password = !empty($_POST['password']) ? inputFilter(($_POST['password'])) : null;
        //Prepare and select from database
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE userName=:user");
            $stmt->bindParam('user', $username);
            $stmt->execute();
            $row = $stmt->fetch();
            //Set values to session variables
            if (password_verify($password, $row["pass"])) {
                // assign session variable
                $_SESSION["username"] = $username;
                $_SESSION["userID"] = $row["userID"];
                $_SESSION["permission"] = $row["permission"];
                $_SESSION["login"] = true;
                header("location:../index.php");
                // If not working go to view
            } else {
                header("location:../view/pages/viewBooks2.php");
            }
            //Catch error
        } catch (PDOException $e) {
            echo "Account creation problems" . $e->getMessage();
            die();
        }
    }
    ?>
