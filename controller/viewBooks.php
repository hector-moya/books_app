<?php


require("model/dbConnection.php");

global $conn;
try {
    $stmt = $conn->prepare("SELECT BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, languageWritten, AuthorID, coverImagePath, currentTime, updateTime, updateBy FROM book ORDER BY BookID");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $numRows = $stmt->rowCount();
    /*$stmt2 = $conn->prepare("SELECT BookID FROM book");
    $stmt2->execute();
    $result2 = $stmt2->fetchAll();
    $bookID = array();
    foreach ($result2 as $row2) {
        $bookID[] = $row2["BookID"];
    }
    */
    if ($numRows < 1) {
        echo "Total bookshelf is empty.";
    } else {
        
        $i = 0;
        if ($i < $numRows) {
            foreach ($result as $row) {
                $bookID[$i] = $row["BookID"];
                $imagePath[$i] = $row["coverImagePath"];
                $dateUpdate = $row["updateTime"];
                $time1[$i] = strtotime($dateUpdate);
                $currDate = $row['currentTime'];
                $time2[$i] = strtotime($currDate);
                if (empty($imagePath[$i])){
                    $imagePath[$i]= "view/images/sample.png";
                } else {
                    $imagePath[$i];
                }
                echo 
                "<li class='container-fluid col-lg-3 p-3 m-3 bg-secondary rounded shadow-lg'>
                <figure class='row imageStyle'>    
                <a class='col-sm-12 shadow-sm' href='?view=$bookID[$i]'>
                        
                        <img src='$imagePath[$i]' class='img-thumbnail' alt='Book Cover' title='Book Cover'>
                        
                    </a>
                    </figure>
                    <div class='row bookStyle container-fluid justify-content-center p4 mx-auto align-items-center shadow'>
                    <h5 class='h5 text-center col-sm-12 text-light shadow'>".$row['BookTitle'].
                    "</h5>
                    <h6 class='h5 text-center col-sm-12 p-2 text-light'>Year of Publication</h6>
                    <h6 class='h6 text-center col-sm-12 p-2 text-light'>".$row['YearofPublication'].
                    "</h6>
                    <h6 class='h5 text-center col-sm-12 p-2 text-light'>Genre</h6>
                    <h6 class='h6 text-center col-sm-12 p-2 text-light'>".$row['Genre'].
                    "</h6>
                    <h6 class='h5 text-center col-sm-12 p-2 text-light'>Millions Sold</h6>
                    <h6 class='h6 text-center col-sm-12 p-2 text-light'>".$row["MillionsSold"].
                    "</h6>
                    <h6 class='h5 text-center col-sm-12 p-2 text-light'>Date First Posted</h6>
                    <h6 class='h6 text-center col-sm-12 p-2 text-light'>".date("d-m-Y", $time2[$i]).
                    "</h6>
                    <h6 class='h5 text-center col-sm-12 p-2 text-light'>Last Update</h6>
                    <h6 class='h6 text-center col-sm-12 p-2 text-light'>".date("d-m-Y", $time1[$i]).
                    "</h6>
                    <h6 class='h5 text-center col-sm-5 p-2 text-light'>Updated By: </h6>
                    <h6 class='h6 text-center col-sm-5 p-2 text-light'>".$row['updateBy'].
                    "</h6>
                    <div class='actions container-fluid row justify-content-around'>
                        <a class='h5 text-center btn btn-secondary btn-lg shadow' href='?update=$bookID[$i]'>Update</a>
                        <a class='h5 text-center btn btn-secondary btn-lg shadow' href='controller/prossesDelete.php?delete=$bookID[$i]'>Delete</a>
                    </div>
                    </div>
                    </li>";
                    $i++;
            }
        }


    }
} catch (PDOException $ex) {
    throw $ex;
}
