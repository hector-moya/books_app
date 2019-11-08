<div>
    <?php

    if (isset($_GET['view'])) {
        description($_GET['view']);
    }

    function description()
    {
        return include "controller/event.php";
    }


    ?>
    <?php
    if (isset($_GET['addUser'])) {
        addUser($_GET['addUser']);
    }
    function addUser()
    {
        return include "registration.php";
    }
    ?>
    <?php
    if (isset($_GET['viewTwo'])) {
        description2($_GET['viewTwo']);
    }

    function description2()
    {
        return include "../../controller/event.php";
    }
    ?>
</div>