<?php
session_start();
$_SESSION['user'] = $_GET['user'];
?>
<?php include 'includes/session1.php'; ?>
<?php  include 'dbconfig1.php'; ?>


<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- login-register31:27-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KBC Supermart || My Orders</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>


        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+234) 9023755645</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li><span>Email Us:</span><a>kbcsupermart@kingsconsult.com.ng</a></li>
                                        <li>

                                            <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image" width="30" height="30">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->                    
                    <li class="user-footer">
                      <ul class="ht-setting-list">
                                                    <li><a href="profile">Profile</a></li>
                                                    <li><a href="myorders">My Orders</a></li>
                                                     <li><a href="logout">Log out</a></li>
                                                   
                                                </ul>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <div class='ht-setting-trigger'><span>Account</span></div>
                                            <div class='setting ht-setting'>
                                                <ul class='ht-setting-list'>
                                                    <li><a href='login'>Login</a></li>
                                                     <li><a href='register'>Sign Up</a></li>
                                                   
                                                </ul>
                                            </div>
              ";
            }
          ?>
                                        </li>
                                        <!-- Setting Area End Here -->                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index">
                                        <img src="images/menu/logo/1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="search" class="hm-searchbox">
                                    <select class='nice-select select-search-category'>
<?php
    $sql = "SELECT id, name, cat_slug FROM category";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "            
                <option>".$row['name']."</option>
            ";
        }
    } else {
        echo "0 results";
    }
?>
                                 </select>   
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist">
                                                <span class="cart-item-count wishlist-item-count"><?php
                                                include 'dbconfig1.php';
                                                if (!empty($_SESSION['user'])) {
                                                   //----get the no of items in wishlist==============
$sql1="SELECT * FROM wishlist WHERE user_id='".$_SESSION['user']."'";
$result1=mysqli_query($conn1,$sql1);
$count=mysqli_num_rows($result1); 
                                                }
                                                else{
                                                    $count=0;
                                                }


?><?php echo $count;  ?></span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">
                                                    <span class="label label-success cart_count"></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    
                                                    <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>              
                                                </ul>
                                               
                                                <div class="minicart-button">
                                                    <a href="cart_view" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout" class="li-button li-button-fullwidth">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="index">Home</a></li>
                                            <li class="megamenu-holder"><a href="#">Category</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li>
                                                        <ul>
                                                            <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li><a href="aboutus">About Us</a></li>
                                            <li><a href="contactus">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li class="active">My Orders</li>
                        </ul>
                    </div>   
    

                                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
                            
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="" method="POST">
                                <div class="login-form">
                                    
                                    <div class="row">
                                        
<div class="box box-solid">
                        <div class="box-header with-border">
                            <h4 class="box-title"><i class="fa fa-calendar"></i> <b>Transaction History</b></h4>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered" id="example1">
                                <thead>                                    
                                    <th>Date</th>
                                    <th>Transaction#</th>
                                    <th>Amount</th>
                                    <th>Full Details</th>
                                </thead>
                                <tbody>
                                    <?php
   

                                    $conn = $pdo->open();
                                    $counter = 0 ;

                                    try{
                                        $stmt = $conn->prepare("SELECT * FROM sales WHERE user_id=:user_id AND pay_id=:pay_id ORDER BY sales_date DESC ");
                                        $stmt->execute(['user_id'=>$user['id'], 'pay_id'=>$_GET['orderid']]);
                                        foreach($stmt as $row){
                                            $stmt2 = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE sales_id=:id");
                                            $stmt2->execute(['id'=>$row['id']]);
                                            $total = 0;
                                            foreach($stmt2 as $row2){
                                                $subtotal = $row2['price']*$row2['quantity'];
                                                $total += $subtotal;
                                            }
                                            
                                            echo "
                                            
                                                <tr>                                                    
                                                    <td>".date('M d, Y', strtotime($row['sales_date']))."</td>
                                                    <td>".$row['pay_id']."</td>
                                                    <td>=N= ".number_format($total, 2)."</td>
                                                    <td><button class='btn btn-sm btn-flat btn-info transact' data-id='".$row['id']."'><i class='fa fa-search'></i> View</button></td>
                                                </tr>
                                                
                                            ";
                                        }

                                    }
                                    catch(PDOException $e){
                                        echo "There is some problem in connection: " . $e->getMessage();
                                    }

                                    $pdo->close();

                                ?>
</tbody>
                            </table> 


</div>
                                </div>    
                                </div>
                                </div>                            
                                                       
                        </div>                        
                    </div>
                </div>
                <?php include 'includes/profile_modal.php'; ?>
            </div>
            <br>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            <div class="footer">
                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Effiecient Delivery</h2>
                                            <p>Our delivery is top notch.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Safe Payment</h2>
                                            <p>Pay with the world's most popular and secure payment methods.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Shop with Confidence</h2>
                                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call a Specialist or chat online.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="images/menu/logo/1.png" alt="Footer Logo">
                                        <p class="info">
                                            We make you enjoy the possibility of being able to buy whatever you need,without having to move to anywhere.
                                        </p>
                                    </div>
                                    <ul class="des">
                                        
                                        <li>
                                            <span>Phone: </span>
                                            <a href="#">(+234) 7032689329</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="mailto://info@eitc.com.ng">info@eitc.com.ng</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Product</h3>
                                        <ul>
                                            <li><a href="flashsales">Flash Sales</a></li>
                                            <li><a href="newproduct">New products</a></li>
                                            <li><a href="bestsales">Best sales</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Our company</h3>
                                        <ul>
                                            <li><a href="delivery">Delivery</a></li>
                                            <li><a href="termsandcond">Terms and Condition</a></li>
                                            <li><a href="aboutus">About us</a></li>
                                            <li><a href="contactus">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Follow Us</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="#" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>                                            
                                            <li class="facebook">
                                                <a href="#" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>                                            
                                            <li class="instagram">
                                                <a href="#" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class="footer-newsletter">
                                        <h4>Sign up to newsletter</h4>
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                           <div id="mc_embed_signup_scroll">
                                              <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                                <button  class="btn" id="mc-submit">Subscribe</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Footer Links Area -->
                                <div class="footer-links">
                                    <ul>
                                        
                                        <li><a href="promotions">Promotions</a></li>
                                        <li><a href="myorders">My Orders</a></li>
                                        <li><a href="support">Support</a></li>
                                        <li><a href="newarrival">New Arrivals</a></li>
                                        <li><a href="payments">Payments</a></li>
                                        <li><a href="refund">Refund Policy</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links Area End Here -->
                                <!-- Begin Footer Payment Area -->
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="images/payment/1.png" alt="">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                <!-- Begin Copyright Area -->
                                <div class="copyright text-center pt-25">
                                    <span><a target="_blank" href="#">EITC Apps</a></span>
                                </div>
                                <!-- Copyright Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- login-register31:27-->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
    $(document).on('click', '.transact', function(e){
        e.preventDefault();
        $('#transaction').modal('show');
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: 'transaction.php',
            data: {id:id},
            dataType: 'json',
            success:function(response){
                $('#date').html(response.date);
                $('#transid').html(response.transaction);
                $('#detail').prepend(response.list);
                $('#total').html(response.total);
            }
        });
    });

    $("#transaction").on("hidden.bs.modal", function () {
        $('.prepend_items').remove();
    });
});
</script>
</html>
