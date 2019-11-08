<?php

require("../model/dbConnection.php");
require("../model/dbFunction.php");
require("inputFilter.php");
if (!empty([$_POST])) {
    $title = !empty($_POST['title'])?inputFilter(($_POST['title'])): null;
    $originalTitle = !empty($_POST['originalTitle'])?inputFilter(($_POST['originalTitle'])): null;
    $yearofPublication = !empty($_POST['yearofPublication'])?inputFilter(($_POST['yearofPublication'])): null;
    $genre = !empty($_POST['genre'])?inputFilter(($_POST['genre'])): null;
    $millionSold = !empty($_POST['millionSold'])?inputFilter(($_POST['millionSold'])): null;
    $language = !empty($_POST['language'])?inputFilter(($_POST['language'])): null;
    $author = !empty($_POST['author'])?inputFilter(($_POST['author'])): null;
    $image = !empty($_POST['image'])?inputFilter(($_POST['image'])): null;
    $aName = !empty($_POST['name'])?inputFilter(($_POST['name'])): null;
    $aSurname = !empty($_POST['surname'])?inputFilter(($_POST['surname'])): null;
    $bYear = !empty($_POST['birthYear'])?inputFilter(($_POST['birthYear'])): null;
    $dYear = !empty($_POST['deathYear'])?inputFilter(($_POST['deathYear'])): null;
    $nation = !empty($_POST['nationality'])?inputFilter(($_POST['nationality'])): null;
    addNewBook($title, $originalTitle, $yearofPublication, $genre, $millionSold, $language, $image, $aName, $aSurname, $bYear, $dYear, $nation);
    header('location:../index.php');
} else {
    echo "Record couldn't be inserted.";
}