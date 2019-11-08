<li class="headerStyle col-lg-3 p-2 bg-light rounded shadow" id="headerLogo">
    <img class="img-fluid  rounded" src="view/images/logo.svg" alt="Book store logo">
</li>
<li class="headerStyle col-lg-5 align-items-center " id="name">
    <h1 class="h1 text-center shadow text-capitalize text-light"><?php echo "Hello " . $_SESSION["username"] . " You Are Logged In As " . $_SESSION["permission"]; ?></h1>
</li>
<div class="row col-lg-3 align-items-center ">
    <li class="col-lg-12 justify-content-center d-flex p-2 m-2" id="connection">
        <a class="btn btn-secondary btn-lg float-right shadow" href="#" onclick="window.location.href='view/pages/visitor.php'" id="logout">Logout</a>
    </li>
    <li class="col-lg-12 justify-content-center d-flex p-2 m-2" id="menuFive">
        <a class="btn btn-secondary btn-lg float-right shadow" data-toggle="modal" data-target="#addUser" href="#">Add New User</a>
        <div class="modal fade" id="addUser">
            <form class="modal-dialog modal-dialog-centered" action="controller/newAdmin.php" method="post">
                <fieldset class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title text-light pl-3">Add New User </h5>
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-row justify-content-center mt-3 pt-2">
                        <div class="form-group col-md-10">
                            <label class="h6 col text-light">User Name</label>
                            <input class="col rounded" type="text" name="username" placeholder="New user name" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-10">
                            <label class="h6 col text-light">Password</label>
                            <input class="col rounded" type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-10">
                            <label class="h6 col-6 text-light" for="role">Role</label>
                            <select class="col-6 rounded" id="role" name="role">
                                <option class="rounded" value="Admin">Admin</option>
                                <option class="rounded" value="Editor">Editor</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="action_type" value="add">
                    <div class="col-12">
                        <input class="btn btn-secondary btn-lg float-right p-1 m-1" type="submit">
                    </div>
                </fieldset>
            </form>
        </div>
    </li>
</div>