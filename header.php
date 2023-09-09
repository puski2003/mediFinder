<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="modal mob-modal " tabindex="-1" id="mob-loc-modal">
        <div class="modal-dialog modal-fullscreen modal-fullscreen-sm-down ">
            <div class="modal-content">
                <div class="modal-header">

                    <div class="d-flex justify-content-between " style="padding: 20px;">
                        <h3 style="font-size: 35px; font-weight: 400;"> Location</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#ff2a51" class="bi bi-geo-alt" style="margin-top:10px;margin-left:20px" id="" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>

                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <div class="row loc_mob">
                        <div class="col-12">
                            <?php
                            $district_rs = Database::search("SELECT * FROM `district`");
                            $district_num = $district_rs->num_rows;

                            for ($x = 0; $x < $district_num; $x++) {
                                $district_data = $district_rs->fetch_assoc();
                            ?>
                                <div class=" col-12 pt-3 districts" onclick='cityLoad("<?php echo $district_data["id"] ?>","yes");' id="dis-<?php echo $district_data["id"] ?>">
                                    <div class="dist col-10 d-flex justify-content-center align-items-center " style="width: 95%;">
                                        <p class="pt-3 col-6" style="font-size: 16px;">
                                            <?php echo $district_data["name"]; ?>
                                        </p>
                                        <div class="col-4 d-flex justify-content-end ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle " id="arrow-unfill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="#ff2a51" class="bi bi-arrow-right-circle-fill d-none " id="arrow-fill" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>


                            <?php
                            }
                            ?>
                        </div>

                        <div class="col-12 area d-flex justify-content-center align-items-center area-mob " id="city_area_mob" style="margin-top: 16px;">
                            <div class="col-1" onclick="slidingEffectMobLoc_reverse();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ff385c" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                </svg>

                            </div>
                            <div class="col-11 " id="area_mob_content">
                                <p style="font-size: 16px; font-weight: 400 ;color: #ff2a51; letter-spacing: 3px;">Select the
                                    District</p>

                            </div>

                        </div>



                    </div>




                </div>

            </div>
        </div>
    </div>

    <div class="row  header" style="z-index: 2000;">
        <header class="col-12 d-flex  flex-row  justify-content-between align-items-center ">
            <div class="offcanvas offcanvas-end d-sm-flex d-md-flex d-lg-none " tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close" data-bs-toggle="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">




                </div>
                <div class="offcanvas-footer ">

                </div>
            </div>

            <div class="logo ms-lg-5 ms-md-5 ms-sm-2 ms-1">
                <svg width="75" height="75" version="1.1" viewBox="0 0 800.00001 800.00001" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="c" x1="402.61" x2="58.66" y1="414.79" y2="791.12" gradientUnits="userSpaceOnUse">
                            <stop offset="0" />
                            <stop stop-opacity="0" offset="1" />
                        </linearGradient>
                        <mask id="b" maskUnits="userSpaceOnUse">
                            <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#fff" image-rendering="auto" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                        </mask>
                        <mask id="a" maskUnits="userSpaceOnUse">
                            <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#fff" image-rendering="auto" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                        </mask>
                    </defs>
                    <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#1c8adb" image-rendering="auto" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                    <path d="m400 191.68-124.19 112.41c-93.965 82.81-176.34 163.81-255.21 244.46 55.72 147.51 163.48 242.38 356.44 251.06l189.38-189.38v-180.51l47.133-44.775-89.348-80.857z" color="#000000" color-rendering="auto" fill="url(#c)" image-rendering="auto" mask="url(#a)" opacity=".42" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                    <path d="m400 191.68-124.19 112.41-89.373 80.858h30.076l81.842-74.051 101.64-92.039 101.67 92.039 81.842 74.051h30.05l-89.348-80.858zm0 42.654-83.187 75.319-83.213 75.294v225.28h110.58v-174.73h111.67v174.73h110.58v-225.28l-83.213-75.294zm-33.958 223.45v152.45h67.917v-152.45z" color="#000000" color-rendering="auto" fill="#fff" image-rendering="auto" mask="url(#b)" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                </svg>
            </div>
            <div class="search-bar  d-lg-block d-md-block d-sm-none d-none ">
                <div class="search-bar-group btn-group col-4 form-control justify-content-between d-flex search-click-effect-disable" id="search-bar">
                    <div class="search-categ col-10 d-flex flex-row align-items-center" id="search-container">
                        <div class="col-5 pt-3 ps-2 " id="st-1">
                            <div class="search-text">
                                <p style="font-size: 14px; font-weight:400;">Location</p>
                            </div>

                        </div>
                        <div class="col-5 pt-3 ps-3" id="st-2">
                            <div class="search-text">
                                <p style="font-size: 14px;">Category</p>
                            </div>

                        </div>
                        <!-- <input type="text" class="form-control"  id="form-eff" style="border: none;" > -->

                    </div>
                    <div class="btn-container">
                        <button class="btn col-2" id="search-btn" onclick="SearchMed();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search " style="margin-left: -6px; margin-top: -7px;" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>


                </div>
            </div>

            <div class="dropdown">
                <div class="pe-4 btn-group seller-btn me-5 d-none d-sm-none d-md-flex d-lg-flex " id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" style="background-color: #ff2a51;" id="seller-btn">
                    <button class="btn seller-btn " style="font-size: 16px; font-weight: 400;" type="button">
                        Log In
                    </button>
                    <div style="background-color: #ff2a51;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-person-fill mt-2" style="background-color: #ff2a51;" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </div>
                    <div>
                        <ul class="dropdown-menu mt-5" aria-labelledby="dropdownMenuButton">

                            <li><a class="dropdown-item" href="#">Item 1</a></li>
                            <li><a class="dropdown-item" href="#">Item 2</a></li>
                            <li><a class="dropdown-item" href="#">Item 3</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <button class="navbar-toggler mx-2 d-lg-none d-md-none d-sm-flex d-flex " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill=" #ff2a51" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>


        </header>

        <div class="row d-none justify-content-center " id="header-2" style="height: 5vh;z-index: 2000;">
            <div class="col-8 d-flex flex-row">
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-flex justify-content-between col-4 location-tag" style="padding: 20px;height: 4vh;" id="location-tag">
                        <h5 style="font-size: 16px; font-weight: 400;margin-top: -10px;"> Location</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff2a51" class="bi bi-geo-alt" style="margin-top: -10px;" id="loc-svg" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>

                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-flex justify-content-between col-4 ms-5 category-tag" style="padding: 20px;height: 4vh;" id="category-tag">
                        <h5 style="font-size: 16px; font-weight: 400;margin-top: -10px;"> Category</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -10px;" width="16" height="16" fill="#ff2a51" class="bi bi-tag-fill" id="cat-svg" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>

                    </div>
                </div>

            </div>

        </div>
        <div style="overflow-y: hidden;">
            <div class="row d-none justify-content-center " id="header-3" style="z-index: 2000;">
                <div class="col-8  d-flex flex-row">
                    <div class="col-6 dist-cont me-3">

                        <!-- for loop for districts -->
                        <?php
                        $district_rs = Database::search("SELECT * FROM `district`");
                        $district_num = $district_rs->num_rows;

                        for ($x = 0; $x < $district_num; $x++) {
                            $district_data = $district_rs->fetch_assoc();
                        ?>
                            <div class=" col-12 pt-3 districts" onclick='cityLoad("<?php echo $district_data["id"] ?>","no");' id="dis-<?php echo $district_data["id"] ?>">
                                <div class="dist col-10 d-flex justify-content-center align-items-center ">
                                    <p class="pt-3 col-6" style="font-size: 16px;">
                                        <?php echo $district_data["name"]; ?>
                                    </p>
                                    <div class="col-4 d-flex justify-content-end ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle " id="arrow-unfill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="#ff2a51" class="bi bi-arrow-right-circle-fill d-none " id="arrow-fill" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </div>

                                </div>
                            </div>


                        <?php
                        }
                        ?>



                    </div>

                    <div class="col-6 ">
                        <div class="col-12 area d-flex justify-content-center align-items-center ms-3" id="city_area" style="margin-top: 16px;">
                            <p style="font-size: 16px; font-weight: 400 ;color: #ff2a51; letter-spacing: 3px;">Select the
                                District</p>
                        </div>

                    </div>
                </div>


            </div>
            <div class="row d-none justify-content-center " id="header-4">
                <div class="col-8  d-flex flex-row">
                    <div class="col-6 dist-cont me-3">
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">



                                <p class="pt-3 col-6" style="font-size: 16px;">Categary</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 pt-3">
                            <div class="dist col-10 d-flex justify-content-center align-items-center">
                                <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>

                                <div class="col-4 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-6 ms-3 ">
                        <div class="col-12 area d-flex justify-content-center align-items-center " style="margin-top: 16px;">
                            <p style="font-size: 16px; font-weight: 400 ;color: #ff2a51; letter-spacing: 3px;">Select the
                                Category</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="row" style="margin: 0; padding:0;background-color:white">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="col-10 d-lg-none d-md-none d-sm-flex d-flex">


                        <div class="search-bar-nav my-3 ">
                            <div class="search-bar-group-nav btn-group col-4 form-control justify-content-between d-flex search-click-effect-disable" id="search-bar-nav">
                                <a onclick="LocModal();"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff385c" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg></a>
                                <div class="search-categ col-10 d-flex flex-row align-items-center" id="search-container-nav">



                                    <input type="text" class="form-control" id="" style="border: none;">

                                </div>
                                <div class="btn-container">
                                    <button class="btn col-2" id="search-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search " style="margin-left: -6px; margin-top: -7px;" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="content-body" class="content-body">