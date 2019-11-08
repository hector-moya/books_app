<?php session_start();
?>
<li class="headerStyle col-lg-3 p-2 bg-light rounded shadow" id="headerLogo">
    <img class="img-fluid  rounded" src="../images/logo.svg" alt="Book store logo">
</li>
<li class="headerStyle col-lg-5 align-items-center" id="name">
    <h1 class="h1 text-center shadow text-capitalize text-light">Hello Visitor</h1>
</li>
<li class="headerStyle col-lg-3 align-items-center" id="connection">
    <a class="btn btn-secondary btn-lg float-right shadow" href="#" data-toggle="modal" data-target="#login">Login</a>
    <div class="modal fade" id="login">
        <form class="modal-dialog modal-dialog-centered" action="../../controller/login.php" method="post">
            <fieldset class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-light pl-3">Admin Login</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-row justify-content-center mt-3 pt-2">
                    <div class="form-group col-md-10">
                        <label class="h6 col text-light">Username</label>
                        <input class="col rounded" type="text" name="username" required>
                    </div>
                </div>
                <div class="form-row justify-content-center mt-3 pt-2">
                    <div class="form-group col-md-10">
                        <label class="h6 col text-light">Password</label>
                        <input class="col rounded" type="password" name="password" required>
                    </div>
                </div>
                <div class="col-12">
                    <input class="btn btn-secondary btn-lg float-right p-1 m-1" type="submit" value="Submit">
                </div>
            </fieldset>
        </form>

    </div>
</li>