<!--
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum inventore dolorem, sed, natus perferendis iste cumque accusantium, numquam dicta ducimus necessitatibus alias. Iusto quia autem fugiat voluptas, praesentium quo aliquam.</p>
-->
<?php
if (isset($_GET['viewTwo'])) {
            view($_GET['viewTwo']);
        }
    function view()
    {
        return include "../../controller/viewBooks2.php";
    }

?>