<?php


function selectBook($id)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM bookplot WHERE BookPlotID=:id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetchAll();
        foreach ($result as $column) {
            echo "<div class='row justify-content-center col-12 '>
            
            <div class='col-lg-6 mx-auto bg-dark justify-content-center m-3 p-3 rounded shadow'>
            <h1 class='h4 text-center text-light col-lg-12 shadow-lg'>Description</h1>
            <h2 class='h6 text-center text-justify text-light col-lg-12'>".$column['Plot']."</h2>
            
            
            <h1 class='h5 text-center  text-light shadow col-lg-12'>Plot Source</h1>
            <h2 class='h6 text-center col-lg-12 text-light'>".$column['PlotSource']."</h2>
            
            
            </div>
            </div>";
        }
    } catch (PDOException $ex) {
        throw $ex;
    }
}
function newAdminUser($username, $password, $role)
{
    global $conn;
    try {
        $sql = "INSERT INTO users(userName, pass, permission)
        VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password, $role]);
    } catch (PDOExcepotion $ex) {
        throw $ex;
    }
}
function addNewBook($title, $originalTitle, $yearofPublication, $genre, $millionSold, $language, $image, $aName, $aSurname, $bYear, $dYear, $nation)
{

    global $conn;


    try {
        $query = "SELECT Surname FROM author WHERE Surname = ?";
        $result = $conn->prepare($query);
        $result->execute(array($aSurname));

        // Check if Surname exists, if yes value to AuthorID
        if ($result->fetch()) {

            $aExist = "SELECT AuthorID FROM author where Surname = '$aSurname';";
            $result3 = $conn->query($aExist);
            while ($id = $result3->fetch(PDO::FETCH_OBJ)) {
                $AuthorID = $id->AuthorID;
            }
            session_start();  
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
            }
            // Insert new book data
            $insertBook = "INSERT INTO book (AuthorID, BookTitle, OriginalTitle, coverImagePath, Genre, LanguageWritten, YearofPublication, MillionsSold, currentTime, updateBy) 
            VALUES('$AuthorID', '$title', '$originalTitle', '$image', '$genre', '$language', '$yearofPublication', '$millionSold', now(), '$username');";
            $result = $conn->query($insertBook);

            //redirectig to the index page
            header("Location: ../index.php");
        } else {
            session_start();  
            $dYear = empty($dYear = null);
            $insertAuthor =  "INSERT INTO author (AuthorID, Name, Surname, Nationality, BirthYear, DeathYear) 
            VALUES (0, '$aName', '$aSurname', '$nation', '$bYear', '$dYear');";
            $result = $conn->query($insertAuthor);

            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
            }
            $insertBook = "INSERT INTO book (AuthorID, BookTitle, OriginalTitle, coverImagePath, Genre, LanguageWritten, YearofPublication, MillionsSold, currentTime, updateBy) 
            VALUES(LAST_INSERT_ID(), '$title', '$originalTitle', '$image', '$genre', '$language', '$yearofPublication', '$millionSold', now(), '$username');";


            $result = $conn->query($insertBook);
            //redirectig to index page
            header("Location: ../index.php");
        }
    } catch (PDOException $ex) {
        throw $ex;
    }
}
function updateBook($id, $title, $originalTitle, $yearofPublication, $genre, $millionSold, $language, $image)
{
    global $conn;
    
    try {
        session_start();       
        if (isset($_SESSION['username'])) {
            $userName = $_SESSION['username'];
        }
        // Update specific Book
        $sql = "UPDATE book SET BookTitle='$title', OriginalTitle='$originalTitle', YearofPublication=$yearofPublication, 
        Genre='$genre', MillionsSold=$millionSold, LanguageWritten='$language', coverImagePath='$image', updateTime=now(), updateBy='$userName'  
        WHERE BookID=$id";
        $stmt2 = $conn->query($sql);
    $stmt2->execute([$title, $originalTitle, $yearofPublication, $genre, $millionSold, $language, $image, $userName]);
      
    header("Location: ../index.php?view");
    } catch (PDOException $ex) {
        throw $ex;
    }
}
function deleteBook($id)
{
    global $conn;
    try {
        $stmt = "DELETE FROM book WHERE BookID='$id'";
        $conn->query($stmt);
        
        header("Location:../index.php?view");
       
    } catch (PDOException $ex) {
        throw $ex;
    }
}

