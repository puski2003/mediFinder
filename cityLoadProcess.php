<?php
require "connection.php";

if (isset($_GET["did"])) {
    $dis_id = $_GET["did"];
    $city_rs = Database::search("SELECT * FROM `city` WHERE `district_id`='" . $dis_id . "'");
    $city_num = $city_rs->num_rows;
    for ($x = 0; $x < $city_num; $x++) {
        $city_data = $city_rs->fetch_assoc();
?>
        <div class="row d-flex justify-content-center align-items-center">
            <p class="col-10 dist pt-2"><?php echo $city_data["name"] ?></p>
        </div>
<?php
    }
}

?>