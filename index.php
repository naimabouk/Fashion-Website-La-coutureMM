<?php
include('includes/header.php');
?>


    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are La Couture_MM</h4>
                                <span>Clothing (Brand) </span>
                                <div class="main-border-button">
                                    <a href="#">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/258884555_608060020646409_3732449827779762418_n.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="index.php#women">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/273981876_319293550215218_7412411257964997651_n.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="index.php#men">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/119164802_361718945220966_6781261119050594407_n.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Graduation</h4>
                                            <span>Best Clothes For Graduation </span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Graduation </h4>
                                                <p> Do your Graduation in style .</p>
                                                <div class="main-border-button">
                                                    <a href="index.php#kids">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/151302908_180950453803458_7110436198229493012_n.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Colorful</h4>
                                            <span>Best Colorful Trend </span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4> Colorful </h4>
                                                <p>bright colorful clothes.</p>
                                                <div class="main-border-button">
                                                    <a href="index.php#colorful">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/258209825_195022952797582_7459631362172922622_n.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End *****

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>man latest </h2>
                        <span>Check out our Collection of latest custom made </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                                    <?php 
                                            $query = "SELECT * FROM products where cat_id=1 ";
                                            $select_all_products_query = mysqli_query($connection,$query);
                                            #confirmQuery($select_all_products_query);
                                            while($row = mysqli_fetch_assoc($select_all_products_query)) {
                                            $id = $row['id'];
                                            $product_name = $row['product_name'];
                                            $product_price = $row['product_price'];
                                            $product_image = $row['product_image'];
                                    ?>

                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                           <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-shopping-cart"></i></a></li></li>
                                        </ul>
                                    </div>
                                    <a href="single-product.php?single=<?php echo $id ?>"><img src="assets/images/<?php echo $product_image;?>" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $product_name;?></h4>
                                    <span>DA<?php echo $product_price;?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        <span>Check out our Collection of latest custom made.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <?php 
                                            $query = "SELECT * FROM products where cat_id=2";
                                            $select_all_products_query = mysqli_query($connection,$query);
                                            while($row = mysqli_fetch_assoc($select_all_products_query)) {
                                            $id = $row['id'];
                                            $product_name = $row['product_name'];
                                            $product_price = $row['product_price'];
                                            $product_image = $row['product_image'];
                                    ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-shopping-cart"></i></a></li></li>
                                        </ul>
                                    </div>
                                    <a href="single-product.php?single=<?php echo $id ?>"><img src="assets/images/<?php echo $product_image;?>" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $product_name;?></h4>
                                    <span>DA<?php echo $product_price;?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Graduation</h2>
                        <span>Your graduation costum is here .</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <?php 
                                            $query = "SELECT * FROM products where cat_id=3 ";
                                            $select_all_products_query = mysqli_query($connection,$query);
                                            #confirmQuery($select_all_products_query);
                                            while($row = mysqli_fetch_assoc($select_all_products_query)) {
                                            $id = $row['id'];
                                            $product_name = $row['product_name'];
                                            $product_price = $row['product_price'];
                                            $product_image = $row['product_image'];
                                    ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?single=<?php echo $id ?>"><i class="fa fa-shopping-cart"></i></a></li></li>
                                        </ul>
                                    </div>
                                    <a href="single-product.php?single=<?php echo $id ?>"><img src="assets/images/<?php echo $product_image;?>" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $product_name;?></h4>
                                    <span>DA<?php echo $product_price;?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>La Couture_MM provides you with a chance to drip elegance in your own custom made clothes, you dream it we make it a reality and we never disappoint !!! </span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Fashion is part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes. </p>
                        </div>
                        <p>This brand is for the teens, for the young girls that are encouraged to be themselves. The African designer behind the company offers fun pieces that are comfortable and suitable for a teen’s lifestyle  <a rel="nofollow" href="http://octadottech.cf/" target="_blank">Our Website </a></p>
                        
                        <div class="main-border-button">
                            <a href="products.php">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Magazine</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/117739097_982844868830937_3795546309038444775_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/257421550_620150688997572_2680545102860672216_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Accessories </h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span> You will Know more about us Here .</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/65883489_648208852369397_6884324118538803831_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/246685617_380513473755826_7232415801044711142_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/101246091_570976806943515_2704788775336336291_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/198806622_271505771429156_6927648568617008763_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/147808692_3694579713952277_511790826886239187_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/137585875_524154811884547_1424973054563511959_n.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
<?php include('includes/newsletter.php'); ?>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <?php include('includes/footer.php');?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>