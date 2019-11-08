<?php
require("../../model/dbConnection.php");

global $conn;
try {
    $stmt = $conn->prepare("SELECT * FROM book ORDER BY BookID");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $numRows = $stmt->rowCount();

    if ($numRows < 1) {
        echo "Total bookshelf is empty.";
    } else {
        $i=0;
        foreach ($result as $row) {
            $bookID[$i] = $row["BookID"];
            $imagePath[$i] = $row["coverImagePath"];
            if (empty($imagePath[$i])){
                $imagePath[$i]= "view/images/sample.png";
            } else {
                $imagePath[$i];
            }
            echo
                "<li class='container-fluid col-lg-3 p-3 m-3 bg-secondary rounded shadow-lg'>
                    <div class='row imageStyle'>
                    <a class='col-sm-12 shadow-sm' href='?viewTwo=$bookID[$i]'>
                        <img src='../../$imagePath[$i]' class='img-thumbnail' alt='Book Cover' title='Book Cover'>
                    </a>
                    </div>
                    <div class='row bookStyle p-2 m-2 shadow'>
                    <h2 class='h4 text-center col-sm-12 shadow text-light'>".$row["BookTitle"].
                    "</h2>
                    <h2 class='h5 text-center col-sm-12 text-light'>Year of Publication</h2>
                    <h2 class='h6 text-center col-sm-12 text-light'>".$row["YearofPublication"].
                    "</h2>
                    <h2 class='h5 text-center col-sm-12 text-light'>Genre</h2>
                    <h2 class='h6 text-center col-sm-12 text-light'>".$row["Genre"].
                    "</h2>
                    <h2 class='h5 text-center col-sm-12 text-light'>Total Sells</h2>
                    <h2 class='h6 text-center col-sm-12 text-light'>".$row["MillionsSold"].
                    "</h2>
                    </div>
                    </li>";
        }
    }
} catch (PDOException $ex) {
    throw $ex;
}

?>