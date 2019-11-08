<?php

require("../model/dbConnection.php");
require("../model/dbFunction.php");
require("inputFilter.php");



if (!empty([$_POST])) {
    $id = !empty($_POST['bookID'])?inputFilter(($_POST['bookID'])): null;
    $title = !empty($_POST['title'])?inputFilter(($_POST['title'])): null;
    $originalTitle = !empty($_POST['originalTitle'])?inputFilter(($_POST['originalTitle'])): null;
    $yearofPublication = !empty($_POST['yearofPublication'])?inputFilter(($_POST['yearofPublication'])): null;
    $genre = !empty($_POST['genre'])?inputFilter(($_POST['genre'])): null;
    $millionSold = !empty($_POST['millionSold'])?inputFilter(($_POST['millionSold'])): null;
    $language = !empty($_POST['language'])?inputFilter(($_POST['language'])): null;
    $image = !empty($_POST['image'])?inputFilter(($_POST['image'])): null;
    
    

updateBook ($id, $title, $originalTitle, $yearofPublication, $genre, $millionSold, $language, $image);
} else {
    echo "Record couldn't be inserted.";
}