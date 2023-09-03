<?php
require "connection.php";

if (isset($_GET["cid"])) {
    $cat_id = $_GET["cid"];
    $cat_rs = Database::search("SELECT * FROM `sub_category` WHERE `category_id`='" . $cat_id . "'");
    $cat_num = $cat_rs->num_rows;
    for ($x = 0; $x < $cat_num; $x++) {
        $cat_data = $cat_rs->fetch_assoc();
?>
        <div class="row d-flex justify-content-center align-items-center areaList" >
            <p class="col-10 dist dist-area pt-2"><?php echo $cat_data["name"] ?></p>
            
        </div>
<?php
    }
}

?>