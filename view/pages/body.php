<?php
if (isset($_GET['view'])) {
            view($_GET['view']);
        }
    function view()
    {
        return include "controller/viewBooks.php";
    }

if (isset($_GET['addBook'])) {
            addBook($_GET['addBook']);
        }
    function addBook()
    {
        return include "view/pages/newBook.php";
    }
if (isset($_GET['update'])) {
    update($_GET['update']);
}
function update()
{
    return include "view/pages/updateBook.php";
}
?>