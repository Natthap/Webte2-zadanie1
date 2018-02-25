<!---**
 * Created by PhpStorm.
 * User: mzikl
 * Date: 22.2.2018
 * Time: 10:57
 */--->
<!DOCTYPE html>
<html>
<?php
    include 'subpages/head.php';
?>

<body>
<div id="bodyId">
    <?php
        $page = $_GET["page"];
        switch ($page){
            case "googlechart": include('subpages/googlechart.php');
                break;
            default;
                include("subpages/mainPage.php");
                break;

        }
    ?>
</div>
</body>
</html>
