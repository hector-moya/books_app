<?php 
    require("model/dbConnection.php");
    $id = $_GET['update'];
    $result = $conn->query("SELECT * FROM book
    WHERE BookID = $id;");
    
    while($row = $result->fetch(PDO::FETCH_OBJ)) {
        $title = $row->BookTitle;
        $original = $row->OriginalTitle;
        $year = $row->YearofPublication;
        $genre = $row->Genre;
        $million = $row->MillionsSold;
        $language = $row->LanguageWritten;
        $image = $row->coverImagePath;

    }?>
<form class="row bg-secondary m-4 p-4 rounded" action="controller/prossesUpdate.php" method="POST" id="addNewBook">
    <fieldset>
        
        <input value="<?php echo $id?>" name="bookID" hidden>
        <legend class="h4 text-light p-2 m-2">Update Book</legend>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="title">Book Title</label>
        <input class="col-10 rounded ml-4" type="text" id="title" name="title" placeholder="Book Title" value="<?php echo $title?>" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="originalTitle">Original Title</label>
        <input class="col-10 rounded ml-4" type="text" id="originalTitle" name="originalTitle" placeholder="Original Title" value="<?php echo $original?>" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="yearofPublication">Year of Publication</label>
        <input class="col-10 rounded ml-4" type="text" id="yearofPublication" name="yearofPublication" placeholder="e.g. 1935" value="<?php echo $year?>" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="genre">Genre</label>
        <input class="col-10 rounded ml-4" type="text" id="genre" name="genre" placeholder="e.g. Novel, Fable, Mystery, etc" value="<?php echo $genre?>" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="millionSold">Million Sold</label>
        <input class="col-10 rounded ml-4" type="text" id="millionSold" name="millionSold" placeholder="e.g. 100" value="<?php echo $million?>" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="language">Original Language</label>
        <select class="col-10 rounded ml-4" id="language" name="language" value="<?php echo $language?>" required>
            <option value="blank"></option>
            <option value="spanish">Spanish</option>
            <option value="english">English</option>
            <option value="french">French</option>
            <option value="chinese">Chinese</option>
            <option value="portuguese">Portuguese</option>
        </select>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="image">Image Path</label>
        <input class="col-10 rounded ml-4" type="text" id="image" name="image"  value="<?php echo $image?>"placeholder="e.g. view/images/example.jpg" required>
        </div>
        <div class="col-12">
        <input class="btn btn-secondary btn-lg float-right p-1 m-1" type="submit" value="Submit">
        </div>
    </fieldset>
</form>