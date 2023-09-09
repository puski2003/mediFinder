<?php
require "connection.php";

if (isset($_GET["did"])) {
    $dis_id = $_GET["did"];
    $city_rs = Database::search("SELECT * FROM `city` WHERE `district_id`='" . $dis_id . "'");
    $city_num = $city_rs->num_rows;
    for ($x = 0; $x < $city_num; $x++) {
        $city_data = $city_rs->fetch_assoc();
?>
        <div class="row d-flex justify-content-center align-items-center areaList"data-bs-dismiss="modal" aria-label="Close" onclick="AreaActive('<?php echo $city_data['name'] ?>','<?php echo $city_data['id'] ?>');"  id="area-<?php echo $city_data["name"] ?>">
            <p class="col-10 dist dist-area pt-2"><?php echo $city_data["name"] ?></p>
            
        </div>
<?php
    }
}

?>