<!--<li class="menuStyle col-lg-2 d-flex justify-content-around" id="menuOne">
    <a class="btn btn-secondary btn-lg" href="?view">View Books</a>
</li>-->
<?php if (isset($_SESSION["login"])) {
    echo '
    <li class="menuStyle col-lg-2 d-flex justify-content-around" id="menuOne">
    <a class="btn btn-secondary btn-lg" href="?view">View Books</a>
</li>
<li class="menuStyle col-lg-2 d-flex justify-content-around" id="menuTwo">
    <a class="btn btn-secondary btn-lg" href="?addBook">Add New Book</a>
</li>
';
} else {
    echo '
    <li class="menuStyle col-lg-2 d-flex" id="menuOne">
    <a class="btn btn-secondary btn-lg text-center" href="?viewTwo">View Books</a>
</li>';
}
?>