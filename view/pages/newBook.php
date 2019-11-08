<form class="row bg-secondary m-4 p-4 rounded" action="controller/prossesNewBook.php" method="POST" id="addNewBook">
    <fieldset>
        <legend class="h4 text-light p-2 m-2">Add New Book</legend>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="title">Book Title</label>
            <input class="col-10 rounded ml-4" type="text" id="title" name="title" placeholder="Book Title" required>
        </div>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="originalTitle">Original Title</label>
            <input class="col-10 rounded ml-4" type="text" id="originalTitle" name="originalTitle" placeholder="Original Title" required>
        </div>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="yearofPublication">Year of Publication</label>
            <input class="col-10 rounded ml-4" type="text" id="yearofPublication" name="yearofPublication" placeholder="e.g. 1935" required>
        </div>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="genre">Genre</label>
            <input class="col-10 rounded ml-4" type="text" id="genre" name="genre" placeholder="e.g. Novel, Fable, Mystery, etc" required>
        </div>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="millionSold">Million Sold</label>
            <input class="col-10 rounded ml-4" type="text" id="millionSold" name="millionSold" placeholder="e.g. 100" required>
        </div>
        <div class="form-group">
            <label class="h5 text-light ml-4" for="language">Original Language</label>
            <select class="col-10 rounded ml-4" id="language" name="language" required>
                <option value="blank"></option>
                <option value="spanish">Spanish</option>
                <option value="english">English</option>
                <option value="french">French</option>
                <option value="chinese">Chinese</option>
                <option value="portuguese">Portuguese</option>
            </select>
        </div>
        <!--
        <label for="author">Author ID</label>
        <input type="text" id="author" name="author" placeholder="Author ID">-->
        <div class="form-group">
        <label class="h5 text-light ml-4" for="image">Image Path</label>
        <input class="col-10 rounded ml-4" type="text" id="image" name="image" placeholder="e.g. view/images/example.jpg">
        </div>
        
        <legend class="h4 text-light p-2 m-2">Author Details</legend>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="Name">Author Name</label>
        <input class="col-10 rounded ml-4" type="text" id="name" name="name" placeholder="Author First Name" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="surname">Author Surname</label>
        <input class="col-10 rounded ml-4" type="text" id="surname" name="surname" placeholder="Author Last Name" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="birthYear">Author Birth Year</label>
        <input class="col-10 rounded ml-4" type="text" id="birthYear" name="birthYear" placeholder="e.g. 1935" required>
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="deathYear">Author Death Year</label>
        <input class="col-10 rounded ml-4" type="text" id="deathYear" name="deathYear" placeholder="e.g. 1973">
        </div>
        <div class="form-group">
        <label class="h5 text-light ml-4" for="nationality">Author Nationality</label>
        <select class="col-10 rounded ml-4" id="nationality" name="nationality" required>
            <option value="blank"></option>
            <option value="spanish">Spanish</option>
            <option value="english">English</option>
            <option value="french">French</option>
            <option value="chinese">Chinese</option>
            <option value="portuguese">Portuguese</option>
        </select>
        </div>
        <!--
        <label for="author">Author ID</label>
        <input type="text" id="author" name="author" placeholder="Author ID">-->
        <div class="col-12">
        <input class="btn btn-secondary btn-lg float-right p-1 m-1" type="submit" value="Submit">
        </div>
    </fieldset>
</form>