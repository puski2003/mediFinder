<?php
require "connection.php";
$city_id = $_POST['city_id'];
$Med_name = $_POST['Med_name'];

$rs = Database::search("
SELECT pharmacy.name,pharmacy_address.line1 FROM product inner join  pharmacy_has_product ON product.id=pharmacy_has_product.product_id inner JOIN pharmacy ON pharmacy_has_product.pharmacy_id=pharmacy.id inner JOIN pharmacy_address ON pharmacy.id=pharmacy_address.pharmacy_id inner JOIN city ON pharmacy_address.city_id=city.id WHERE product.name='".$Med_name."'AND city.id='".$city_id."';");
$city_num = $rs->num_rows;
if ($city_num > 0) {
    for ($x = 0; $x < $city_num; $x++) {
        $city_data = $rs->fetch_assoc(); ?>


        <div class="pharm-card col-lg-7 col-md-9 col-sm-10 col-11 mt-4">
            <div class="row ">
                <div class="col-2 pham-logo mt-3" style="background-image: url('images/phamarcy-pic-1.avif');"></div>
                <div class="col-7 mt-4 pham-desc">
                    <div>
                        <p><?php echo ($city_data['name']) ?></p>
                        <div class="rating ">
                            <i class="fa fa-star clicked"></i>
                            <i class="fa fa-star clicked"></i>
                            <i class="fa fa-star clicked"></i>
                            <i class="fa fa-star clicked"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                    <p class="pham-address"><?php echo ($city_data['line1']) ?></p>
                    <div class="row ">
                        <div class="col-12 row justify-content-between">
                            <button type="button" class="btn pham-contact d-flex flex-direction-row col-lg-4 col-md-5 col-sm-6 col-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill mt-1 me-1 " viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg>
                                <div class="  ">
                                    077362377
                                </div>
                            </button>
                            <div class="col-lg-4 col-md-5 col-sm-5 col-12 d-lg-flex d-md-flex d-sm-flex d-none stock-avalaiblity">
                                In Stock
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="btn request-btn d-flex flex-direction-row">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="30px" height="30px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path d="M77.4,78.1H40.5c-1.2,0-2.3-1-2.3-2.2c0,0,0-0.1,0-0.1v-4.6c0-1.2,1-2.3,2.2-2.3c0,0,0.1,0,0.1,0h36.9  c1.2,0,2.3,1,2.3,2.2c0,0,0,0.1,0,0.1v4.6C79.8,77,78.8,78.1,77.4,78.1C77.5,78.1,77.5,78.1,77.4,78.1z" />
                            <path d="M26.6,78.1H22c-1.2,0-2.3-1-2.3-2.2c0,0,0-0.1,0-0.1v-4.6c0-1.2,1-2.3,2.2-2.3c0,0,0.1,0,0.1,0h4.6  c1.2,0,2.3,1,2.3,2.2c0,0,0,0.1,0,0.1v4.6C29,77,28,78,26.8,78.1C26.7,78.1,26.7,78.1,26.6,78.1z" />
                            <path d="M53.8,57.6c-1.2,0-2.3-1-2.3-2.2c0,0,0-0.1,0-0.1v-4.6c0-1.2,1-2.3,2.2-2.3c0,0,0.1,0,0.1,0h23.6  c1.2,0,2.3,1,2.3,2.2c0,0,0,0.1,0,0.1v4.6c0,1.2-1,2.3-2.2,2.3c0,0-0.1,0-0.1,0H53.8z" />
                            <path d="M62.6,37.1c-1.2,0-2.3-1-2.3-2.2c0,0,0-0.1,0-0.1v-4.6c0-1.2,1-2.3,2.2-2.3c0,0,0.1,0,0.1,0h14.8  c1.2,0,2.3,1,2.3,2.2c0,0,0,0.1,0,0.1v4.6c0,1.2-1,2.3-2.2,2.3c0,0-0.1,0-0.1,0H62.6z" />
                            <path d="M20.8,58.2C19.6,47.5,28,36.4,38,34.5l2.7-0.6c0.5-0.1,0.9-0.6,0.8-1.2c0-0.3-0.2-0.5-0.4-0.6l-6.7-4.5  c-0.7-0.5-0.8-1.4-0.3-2c0,0,0,0,0-0.1l1.7-2.5c0.4-0.7,1.4-0.9,2-0.4c0,0,0,0,0.1,0L54,33.5c0.7,0.4,0.9,1.4,0.4,2c0,0,0,0,0,0.1  l-11,16.2c-0.4,0.7-1.4,0.9-2,0.4c0,0,0,0-0.1,0l-2.5-1.7c-0.7-0.4-0.9-1.4-0.4-2c0,0,0,0,0-0.1l4.4-6.7c0.3-0.4,0.3-1.1-0.2-1.4  c-0.2-0.2-0.5-0.3-0.8-0.2l-1.6,0.3c-7.8,1.5-14.4,10.3-13.7,17.9c0,0.7-1.1,1.7-1.9,1.9h-1.9C21.8,60.3,20.8,59.1,20.8,58.2z" />
                        </svg>
                        <div class="d-lg-flex d-md-flex d-sm-none d-none mt-lg-1 mt-md-1">
                            Request
                        </div>
                    </div>

                </div>
            </div>
        </div>



<?php
    }
}
?>