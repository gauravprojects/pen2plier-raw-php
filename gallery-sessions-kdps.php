<?php include('connection.php');

$date= date("Y/m/d");

$sql = "INSERT INTO visitors (date)
                VALUES ($date)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="Pen2Plier education Building innovators by promoting practical education" />
    <meta name="Keywords" content="robotics school education,Pen2Plier,robotics,practical education,technology,eduction,innovation" />
    <title>Pen2Plier | Schools</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header  -->
<header id="mu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>info@pen2plier.com</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>+91 8447199264</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-right">
                                <nav>
                                    <ul class="mu-top-social-nav">
                                        <li><a href="https://www.facebook.com/pen2plier/"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="https://twitter.com/pen2plier"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://in.linkedin.com/in/pen2plier-education-38880b11a"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC5cly-UJz5qNYQFuDIdNYoA"><span class="fa fa-youtube"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <!--<a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>PEN2PLIER</span></a>-->
                <!-- IMG BASED LOGO  -->
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo" height="50" width="220"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog-archive.php">Blog</a> </li>
                    <li class="active"><a href="gallery.php">Gallery</a></li>

                    <!-- courses drop down -->

                    <!--<li class="dropdown">-->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>-->
                    <!--<ul class="dropdown-menu" role="menu">-->
                    <!--<li><a href="course.php">Course Archive</a></li>                -->
                    <!--<li><a href="course-detail.php">Course Detail</a></li>                -->
                    <!--</ul>-->
                    <!--</li>           -->


                    <!-- gallery dropdown -->

                    <!--<li><a href="gallery.php">Gallery</a></li>-->
                    <!--<li class="dropdown">-->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>-->
                    <!--<ul class="dropdown-menu" role="menu">-->
                    <!--<li><a href="blog-archive.php">Blog Archive</a></li>                -->
                    <!--<li><a href="blog-single.php">Blog Single</a></li>                -->
                    <!--</ul>-->
                    <!--</li>            -->
                    <li><a href="contact.php">Contact</a></li>



                    <!--<li><a href="404.php">404 Page</a></li>

                                -->
                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="mu-search-form">
                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End search box -->
<!-- Page breadcrumb -->
<!--<section id="mu-page-breadcrumb">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->
<!--<div class="mu-page-breadcrumb-area">-->
<!--<h2>Gallery</h2>-->
<!--<ol class="breadcrumb">-->
<!--<li><a href="#">Home</a></li>            -->
<!--<li class="active">Gallery</li>-->
<!--</ol>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- End breadcrumb -->
<!-- Start gallery  -->
<section id="mu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-gallery-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Gallery</h2>
                        <!--                        <p>These are the schools which are helping us in our mission.</p>-->
                    </div>
                    <!-- end title -->
                    <!-- start gallery content -->
                    <div class="mu-gallery-content">
                        <!-- Start gallery menu -->
                        <div class="mu-gallery-top">
                            <ul>
                                <!--                                <li class="filter active" data-filter="all">All</li>-->
                                <!--                                <li class="filter" data-filter=".lab">Ghaziabad</li>-->
                                <!--                                <li class="filter" data-filter=".classroom">Class Room</li>-->
                                <!--                                <li class="filter" data-filter=".library">Library</li>-->
                                <!--                                <li class="filter" data-filter=".cafe">Cafe</li>-->
                                <!--                                <li class="filter" data-filter=".others">Others</li>-->
                            </ul>
                        </div>
                        <!-- End gallery menu -->
                        <div class="mu-gallery-body">
                            <ul id="mixit-container" class="row">
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/23.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/23.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/24.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/24.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/25.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/25.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/26.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/26.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/27.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/27.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/28.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/28.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/29.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/29.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/30.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/30.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/31.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/31.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/32.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/32.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/33.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/33.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/34.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/34.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/35.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/35.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>



                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/36.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/36.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/37.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/37.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/38.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/38.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/39.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/39.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/40.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/40.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/41.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/41.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>





                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/44.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/44.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/45.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/45.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/46.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/46.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/47.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/47.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/48.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/48.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/49.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/49.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/50.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/50.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/51.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/51.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/52.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/52.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/53.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/53.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/54.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/54.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- start single gallery image -->
                                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="assets/img/gallery/small/55.jpg"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>Orientation Programme</h4>
                                                    <p>Kesari Devi Bajaj Public School</p>
                                                    <a href="assets/img/gallery/big/55.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- end gallery content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery  -->


<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--                        <div class="mu-footer-widget">-->
                        <!--                            <h4>Information</h4>-->
                        <!--                            <ul>-->
                        <!--                                <li><a href="#">About Us</a></li>-->
                        <!--                                <li><a href="">Features</a></li>-->
                        <!--                                <li><a href="">Course</a></li>-->
                        <!--                                <li><a href="">Event</a></li>-->
                        <!--                                <li><a href="">Sitemap</a></li>-->
                        <!--                                <li><a href="">Term Of Use</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--                        <div class="mu-footer-widget">-->
                        <!--                            <h4>Student Help</h4>-->
                        <!--                            <ul>-->
                        <!--                                <li><a href="">Get Started</a></li>-->
                        <!--                                <li><a href="#">My Questions</a></li>-->
                        <!--                                <li><a href="">Download Files</a></li>-->
                        <!--                                <li><a href="">Latest Course</a></li>-->
                        <!--                                <li><a href="">Academic News</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>News letter</h4>
                            <p>Get latest update, news & academic offers</p>
                            <form class="mu-subscribe-form">
                                <input type="email" placeholder="Type your Email">
                                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Contact</h4>
                            <address>
                                <p>I-227 Govindpuram</p>
                                <p>Ghaziabad Uttar Pradesh</p>
                                <p>Pin 201009</p>
                                <p>Website: www.pen2plier.com</p>
                                <p>Email: care@pen2plier.com</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; All Right Reserved. Designed by <a href="http://www.pen2plier.com/" rel="nofollow">Pen2Plier</a>
                    <br>
                    <?php
                    $sql="SELECT COUNT(*) FROM visitors";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "No of visitors: ".$row["COUNT(*)"];
                    }

                    ?>

                </p>




            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>

<!-- End footer -->






<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script>

</body>
</html>