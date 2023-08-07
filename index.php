<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>
    <div class="row  header" style="z-index: 2000;">
        <header class="col-12 d-flex  flex-row  justify-content-between align-items-center ">

            <div class="logo ms-5">
                <svg width="75" height="75" version="1.1" viewBox="0 0 800.00001 800.00001"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="c" x1="402.61" x2="58.66" y1="414.79" y2="791.12"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" />
                            <stop stop-opacity="0" offset="1" />
                        </linearGradient>
                        <mask id="b" maskUnits="userSpaceOnUse">
                            <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#fff"
                                image-rendering="auto" shape-rendering="auto" solid-color="#000000"
                                style="isolation:auto;mix-blend-mode:normal" />
                        </mask>
                        <mask id="a" maskUnits="userSpaceOnUse">
                            <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#fff"
                                image-rendering="auto" shape-rendering="auto" solid-color="#000000"
                                style="isolation:auto;mix-blend-mode:normal" />
                        </mask>
                    </defs>
                    <circle cx="400" cy="400" r="400" color="#000000" color-rendering="auto" fill="#1c8adb"
                        image-rendering="auto" shape-rendering="auto" solid-color="#000000"
                        style="isolation:auto;mix-blend-mode:normal" />
                    <path
                        d="m400 191.68-124.19 112.41c-93.965 82.81-176.34 163.81-255.21 244.46 55.72 147.51 163.48 242.38 356.44 251.06l189.38-189.38v-180.51l47.133-44.775-89.348-80.857z"
                        color="#000000" color-rendering="auto" fill="url(#c)" image-rendering="auto" mask="url(#a)"
                        opacity=".42" shape-rendering="auto" solid-color="#000000"
                        style="isolation:auto;mix-blend-mode:normal" />
                    <path
                        d="m400 191.68-124.19 112.41-89.373 80.858h30.076l81.842-74.051 101.64-92.039 101.67 92.039 81.842 74.051h30.05l-89.348-80.858zm0 42.654-83.187 75.319-83.213 75.294v225.28h110.58v-174.73h111.67v174.73h110.58v-225.28l-83.213-75.294zm-33.958 223.45v152.45h67.917v-152.45z"
                        color="#000000" color-rendering="auto" fill="#fff" image-rendering="auto" mask="url(#b)"
                        shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal" />
                </svg>
            </div>
            <div class="search-bar ">
                <div class="search-bar-group btn-group col-4 form-control justify-content-between d-flex search-click-effect-disable"
                    id="search-bar">
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
                        <button class="btn col-2" id="search-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-search " style="margin-left: -6px; margin-top: -7px;" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>


                </div>
            </div>
            <div class="pe-4 btn-group seller-btn me-5" style="background-color: #ff2a51;">
                <button class="btn  seller-btn" style="font-size: 16px; font-weight:400;">Account</button>
                <div style="background-color: #ff2a51;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white"
                        class="bi bi-person-fill mt-2" style="background-color: #ff2a51;" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                </div>

            </div>

        </header>
        <div class="row d-none justify-content-center " id="header-2" style="height: 5vh;z-index: 2000;">
            <div class="col-8 d-flex flex-row">
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-flex justify-content-between col-4 location-tag" style="padding: 20px;height: 4vh;"
                        id="location-tag">
                        <h5 style="font-size: 16px; font-weight: 400;margin-top: -10px;"> Location</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff2a51"
                            class="bi bi-geo-alt" style="margin-top: -10px;" id="loc-svg" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>

                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-flex justify-content-between col-4 ms-5 category-tag"
                        style="padding: 20px;height: 4vh;" id="category-tag">
                        <h5 style="font-size: 16px; font-weight: 400;margin-top: -10px;"> Category</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -10px;" width="16" height="16"
                            fill="#ff2a51" class="bi bi-tag-fill" id="cat-svg" viewBox="0 0 16 16">
                            <path
                                d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
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
                    <div class=" col-12 pt-3" onclick='cityLoad("<?php echo $district_data["id"] ?>");'>
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">
                                <?php echo $district_data["name"]; ?>
                            </p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>


                    <?php
                    }
                    ?>



                </div>

                <div class="col-6 ">
                    <div class="col-12 area d-flex justify-content-center align-items-center ms-3" id="city_area"
                        style="margin-top: 16px;">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>
                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 pt-3">
                        <div class="dist col-10 d-flex justify-content-center align-items-center">
                            <p class="pt-3 col-6" style="font-size: 16px;">Category 1</p>

                            <div class="col-4 d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff2a51"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-6 ms-3 ">
                    <div class="col-12 area d-flex justify-content-center align-items-center "
                        style="margin-top: 16px;">
                        <p style="font-size: 16px; font-weight: 400 ;color: #ff2a51; letter-spacing: 3px;">Select the
                            Category</p>
                    </div>

                </div>
            </div>


        </div>
        </div>
    </div>
    <div id="content-body" class="content-body">
        <div class="slider">

            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide banner1 d-flex justify-content-evenly align-items-center">
                        <div class="banner-text text-1">
                            <h5 style="font-weight: 400;">Pyridoxine Vitamin B6</h5>
                            <h1>Vitamin & <br>Supplements</h1>
                        </div>
                        <div>

                            <img src="images/bottle1.webp" class="bottle bottle1 bot2">
                            <img src="images/bottle.webp" class="bottle  bottle1 bot1">

                        </div>

                    </div>
                    <div class="swiper-slide banner2 d-flex justify-content-evenly align-items-center">
                        <div class="banner-text text-2">
                            <h5 style="font-weight: 400;">Pyridoxine Vitamin B6</h5>
                            <h1>Vitamin & <br>Supplements</h1>
                        </div>
                        <div>

                            <img src="images/box1.webp" class="bottle box bot2">
                            <img src="images/box2.webp" class="bottle box bot1">

                        </div>
                    </div>
                    <div class="swiper-slide banner3 d-flex justify-content-evenly align-items-center">
                        <div class="banner-text text-3">
                            <h5 style="font-weight: 400;">Pyridoxine Vitamin B6</h5>
                            <h1>Vitamin & <br>Supplements</h1>
                        </div>
                        <div>

                            <img src="images/cream1.webp" class="bottle bot2 cream1">
                            <img src="images/cream2.webp" class="bottle bot1 cream2">

                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>


        </div>
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="col-6">
      <div class="row">
        <div class="col-7 bannerPart2 m-3 d-flex justify-content-evenly align-items-center" style="background-image: url(&quot;https://enovathemes.com/propharm/wp-content/uploads/slide2_back.jpg&quot;);">
            <img src="images/poster-1.webp">
            <div>
                <h4 style="color:white">Pyridoxine Vitamin</h4>
                <a href="#" class="btn btn-primary product-btn mt-4 ms-2">Check out<svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg> </a>
                
            </div>
        </div>
        <div class="col-4 bannerPart2 mt-3"style="background-image: url(&quot;https://enovathemes.com/propharm/wp-content/uploads/slide5_back.jpg&quot;);" >
            <img src="images/poster-5.png" width="90%" height="50%">
            <div>
                <h4 style="color:#ff2a51">Pyridoxine Vitamin</h4>
                <a href="#" class="btn btn-primary product-btn mt-4 ms-2">Check out<svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg> </a>
                
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4 bannerPart2 ms-3 me-3" style="background-image: url(&quot;https://enovathemes.com/propharm/wp-content/uploads/slide4_back.jpg&quot;);">
            <img src="images/poster-3.webp" width="90%" class="mt-3 mb-3">
            <div>
                <h4 style="color:white">Pyridoxine Vitamin</h4>
                <a href="#" class="btn btn-primary product-btn mt-4 ms-2">Check out<svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg> </a>
                
            </div>
        </div>
        <div class="col-7 bannerPart2 d-flex justify-content-evenly align-items-center" style="background-image: url(&quot;https://enovathemes.com/propharm/wp-content/uploads/slide5_back.jpg&quot;);" >
            <img src="images/poster-4.png" >
            <div>
                <h4 style="color:white">Pyridoxine Vitamin</h4>
                <a href="#" class="btn btn-primary product-btn mt-4 ms-2">Check out<svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg> </a>
                
            </div>
        </div>
      </div>
            </div>
            <div class="col-4 bannerPart2-1 mt-3" style="background-image: url(&quot;https://enovathemes.com/propharm/wp-content/uploads/slide6_back.jpg&quot;);">
                <img src="images/poster-2.png" width="90%" class="mt-3 mb-3">
                <div class="d-flex justify-content-center">
                    <h4 style="color:white">Pyridoxine Vitamin</h4>
                    <a href="#" class="btn btn-primary product-btn mt-4 ms-2">Check out<svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg> </a>
                    
                </div>

            </div>
        </div>
        
        <div class="divider d-flex justify-content-center mt-5 mb-5" >
            <div class="page-divider d-flex justify-content-center align-items-center">
                <h3 style="color: #ff2a51a5;">Featured Products</h3>
            </div>
            
        </div>
        <div class="products">
            <div class="row justify-content-center">
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row justify-content-center">
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row justify-content-center">
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row justify-content-center">
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row justify-content-center">
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="card col-4" style="width: 18rem;">
                    <img src="images/product-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Brand</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary product-btn">Check out<svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle ms-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                
                
            </div>

        </div>
        <div class="footer">
            
        </div>
        
       

    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
        integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"> </script>
</body>

</html>