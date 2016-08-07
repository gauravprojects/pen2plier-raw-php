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
    <title>Pen2Plier | Home</title>



    <meta name="description" content="Pen2Plier education Building innovators by promoting practical education" />
    <meta name="Keywords" content="robotics school education,Pen2Plier,robotics,practical education,technology,eduction,innovation" />

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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="blog-archive.php">Blog</a> </li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <!-- <li><a href="schools.php">Schools</a> </li> -->

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
<!-- Start Slider -->
<section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/slider/one.jpg" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>Welcome To Pen2Plier</h4>
            <span></span>
            <h2>LEARN</h2>
            <p>Guiding students to create new products and finally helping the cause of transforming India into a production industry.</p>
            <!--<a href="#" class="mu-read-more-btn">Read More</a>-->
        </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/slider/two.jpg" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>Welcome To Pen2Plier</h4>
            <span></span>
            <h2>CREATE</h2>
            <p>Creative way of learning with practical education makes it easy for students to learn advanced concepts. Students are able to grasp complex scientific concepts easily.</p>
            <!--<a href="#" class="mu-read-more-btn">Read More</a>-->
        </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/slider/three.jpg" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>Welcome To Pen2Plier</h4>
            <span></span>
            <h2>INNOVATE</h2>
            <p>There are no limits to child's imagination. We give students proper guidance which is required to transform their ideas to realities.</p>
            <!-- <a href="#" class="mu-read-more-btn">Read More</a> -->
        </div>
    </div>
    <!-- Start single slider item -->
</section>
<!-- End Slider -->
<!-- Start service  -->
<section id="mu-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-service-area">
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-book"></span>
                        <h3>Practical Learning</h3>
                        <p>Practical education, with theoritical concepts is very important for deep understanding of scientific concepts.</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-users"></span>
                        <h3>Expert Teachers</h3>
                        <p>Highly trained teachers with four years of experience in the field of robotics and industrial automation.</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-table"></span>
                        <h3>Interactive Classrooms</h3>
                        <p>Activities and demos make the teaching experience very interactive. Students learn with fun keeping healthy environment of class. </p>
                    </div>
                    <!-- Start single service -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service  -->

<!-- Start about us -->
<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-left">
                                <!-- Start Title -->
                                <div class="mu-title">
                                    <h2>About Us</h2>
                                </div>
                                <!-- End Title -->
                                <p>Pen2Plier is a organisation comprised of B.Tech graduates. After working 4 years in the field of robotics and Industrial automation,
                                    we have decided to use our knowledge and education for spreading robotic education among young growing talents.
                                    <br><br>
                                    Indian youth has a great potential, they have again and again proven it at various occasions in various situations.
                                    But what they lack is proper learning and guidance. Pen2Plier is dedicated to rectify short comings of Indian school education.
                                    We have designed special courses can act as supplement to education provided at schools and colleges.
                                    These courses provides required practical knowledge which is very important to understand theoretical concepts.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-right">
                                <a id="mu-abtus-video" href="https://www.youtube.com/embed/2gaShjBiuP8" target="mutube-video">
                                    <img src="assets/img/about-us.jpg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us -->

<!-- Start about us counter -->
<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <div class="row">
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-university"></span>
                                <h4 class="counter">3</h4>
                                <p>Schools</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter">90</h4>
                                <p>Innovators</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-clock-o"></span>
                                <h4 class="counter">4</h4>
                                <p>Years experience</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter">7</h4>
                                <p>Trainers</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us counter -->

<!-- Start features section -->
<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-features-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Our Features</h2>
                        <p>We have designed an interactive curriculum with fun activities and demos to enhance understanding of science through robotics.</p>
                    </div>
                    <!-- End Title -->
                    <!-- Start features content -->
                    <div class="mu-features-content">
                        <div class="row">



                            <div class="col-lg-4 col-md-4  col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-book"></span>
                                    <h4>Interactive curriculum</h4>
                                    <p>Highly interactive curriculum to keep the students engaged and learn concepts in a better way.</p>
                                    <!--<a href="#">Read More</a>-->
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-users"></span>
                                    <h4>Expert Teachers</h4>
                                    <p>B.Tech graduates with four years experince in the field of robotics to provide high quality teaching.</p>
                                    <!--<a href="#">Read More</a>-->
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-cogs"></span>
                                    <h4>Fun activities</h4>
                                    <p>Fun interactive activities to keep the environment healthy and make students understand concepts in a practical way.</p>
                                    <!--<a href="#">Read More</a>-->
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- End features content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features section -->

<!-- Start latest course section -->
<section id="mu-latest-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-latest-courses-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Courses</h2>
                        <p>Specially designed courses to meet requirements of large range of students. Students of various set of skills and mental level
                            can benifit from these courses. Basically these courses are divided amoing various standards according to thier normal school curriculum</p>
                    </div>
                    <!-- End Title -->
                    <!-- Start latest course content -->
                    <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Year long programme</a>
                                        <span><i class="fa fa-clock-o"></i>1 year</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">Annual curriculum for school students.</a></h4>
                                    <p>Year long program to provide basic understanding to core concepts laying emphasis on basic concepts of science and thier application in robotics..</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                        <!--<span class="mu-course-price" href="#">$165.00</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Module based programme </a>
                                        <span><i class="fa fa-clock-o"></i>Variable</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">Course is divided into various modules.</a></h4>
                                    <p>Whole course is divided into various modules, providing students flexibility to management and students, choose any specific module they want to.</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                        <!--<span class="mu-course-price" href="#">$165.00</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Summer Camps</a>
                                        <span><i class="fa fa-clock-o"></i>30 Days</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">Summer activities designed to make most of the vacations.</a></h4>
                                    <p>Summer vaccations is the best time when student a develop his/her extra curricular skills without worrying about daily school curriculum</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                        <!--<span class="mu-course-price" href="#">$165.00</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Workshops</a>
                                        <span><i class="fa fa-clock-o"></i>2-3 Days</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">Short productive workshops</a></h4>
                                    <p>2-3 Days workshop for quick walk through over the course. Such programmes prove to be most efficient as large topics are covered in short duration
                                        of time.</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                        <!--<span class="mu-course-price" href="#">$165.00</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- End latest course content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End latest course section -->

<!-- Start our teacher -->
<!--<section id="mu-our-teacher">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->
<!--<div class="mu-our-teacher-area">-->
<!--&lt;!&ndash; begain title &ndash;&gt;-->
<!--<div class="mu-title">-->
<!--<h2>Our Teachers</h2>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>-->
<!--</div>-->
<!--&lt;!&ndash; end title &ndash;&gt;-->
<!--&lt;!&ndash; begain our teacher content &ndash;&gt;-->
<!--<div class="mu-our-teacher-content">-->
<!--<div class="row">-->
<!--<div class="col-lg-3 col-md-3  col-sm-6">-->
<!--<div class="mu-our-teacher-single">-->
<!--<figure class="mu-our-teacher-img">-->
<!--<img src="assets/img/teachers/teacher-01.png" alt="teacher img">-->
<!--<div class="mu-our-teacher-social">-->
<!--<a href="#"><span class="fa fa-facebook"></span></a>-->
<!--<a href="#"><span class="fa fa-twitter"></span></a>-->
<!--<a href="#"><span class="fa fa-linkedin"></span></a>-->
<!--<a href="#"><span class="fa fa-google-plus"></span></a>-->
<!--</div>-->
<!--</figure>                    -->
<!--<div class="mu-ourteacher-single-content">-->
<!--<h4>Brian Dean</h4>-->
<!--<span>Math Teacher</span>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-lg-3 col-md-3 col-sm-6">-->
<!--<div class="mu-our-teacher-single">-->
<!--<figure class="mu-our-teacher-img">-->
<!--<img src="assets/img/teachers/teacher-02.png" alt="teacher img">-->
<!--<div class="mu-our-teacher-social">-->
<!--<a href="https://www.facebook.com/pen2plier/"><span class="fa fa-facebook"></span></a>-->
<!--<a href="https://twitter.com/pen2plier"><span class="fa fa-twitter"></span></a>-->
<!--<a href="https://in.linkedin.com/in/pen2plier-education-38880b11a"><span class="fa fa-linkedin"></span></a>-->
<!--&lt;!&ndash; <a href="#"><span class="fa fa-google-plus"></span></a> &ndash;&gt;-->
<!--</div>-->
<!--</figure>                    -->
<!--<div class="mu-ourteacher-single-content">-->
<!--<h4>James Hein</h4>-->
<!--<span>Physics Teacher</span>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-lg-3 col-md-3 col-sm-6">-->
<!--<div class="mu-our-teacher-single">-->
<!--<figure class="mu-our-teacher-img">-->
<!--<img src="assets/img/teachers/teacher-03.png" alt="teacher img">-->
<!--<div class="mu-our-teacher-social">-->
<!--<a href="#"><span class="fa fa-facebook"></span></a>-->
<!--<a href="#"><span class="fa fa-twitter"></span></a>-->
<!--<a href="#"><span class="fa fa-linkedin"></span></a>-->
<!--<a href="#"><span class="fa fa-google-plus"></span></a>-->
<!--</div>-->
<!--</figure>                    -->
<!--<div class="mu-ourteacher-single-content">-->
<!--<h4>Rebeca Michel</h4>-->
<!--<span>English Teacher</span>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-lg-3 col-md-3 col-sm-6">-->
<!--<div class="mu-our-teacher-single">-->
<!--<figure class="mu-our-teacher-img">-->
<!--<img src="assets/img/teachers/teacher-04.png" alt="teacher img">-->
<!--<div class="mu-our-teacher-social">-->
<!--<a href="#"><span class="fa fa-facebook"></span></a>-->
<!--<a href="#"><span class="fa fa-twitter"></span></a>-->
<!--<a href="#"><span class="fa fa-linkedin"></span></a>-->
<!--<a href="#"><span class="fa fa-google-plus"></span></a>-->
<!--</div>-->
<!--</figure>                    -->
<!--<div class="mu-ourteacher-single-content">-->
<!--<h4>John Doe</h4>-->
<!--<span>Biology Teacher</span>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div> -->
<!--&lt;!&ndash; End our teacher content &ndash;&gt;           -->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- End our teacher -->

<!-- Start testimonial -->
<!--<section id="mu-testimonial">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->
<!--<div class="mu-testimonial-area">-->
<!--<div id="mu-testimonial-slide" class="mu-testimonial-content">-->
<!--&lt;!&ndash; start testimonial single item &ndash;&gt;-->
<!--<div class="mu-testimonial-item">-->
<!--<div class="mu-testimonial-quote">-->
<!--<blockquote>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>-->
<!--</blockquote>-->
<!--</div>-->
<!--<div class="mu-testimonial-img">-->
<!--<img src="assets/img/testimonial-1.png" alt="img">-->
<!--</div>-->
<!--<div class="mu-testimonial-info">-->
<!--<h4>John Doe</h4>-->
<!--<span>Happy Student</span>-->
<!--</div>-->
<!--</div>-->
<!--&lt;!&ndash; end testimonial single item &ndash;&gt;-->
<!--&lt;!&ndash; start testimonial single item &ndash;&gt;-->
<!--<div class="mu-testimonial-item">-->
<!--<div class="mu-testimonial-quote">-->
<!--<blockquote>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>-->
<!--</blockquote>-->
<!--</div>-->
<!--<div class="mu-testimonial-img">-->
<!--<img src="assets/img/testimonial-3.png" alt="img">-->
<!--</div>-->
<!--<div class="mu-testimonial-info">-->
<!--<h4>Rebaca Michel</h4>-->
<!--<span>Happy Parent</span>-->
<!--</div>-->
<!--</div>-->
<!--&lt;!&ndash; end testimonial single item &ndash;&gt;-->
<!--&lt;!&ndash; start testimonial single item &ndash;&gt;-->
<!--<div class="mu-testimonial-item">-->
<!--<div class="mu-testimonial-quote">-->
<!--<blockquote>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>-->
<!--</blockquote>-->
<!--</div>-->
<!--<div class="mu-testimonial-img">-->
<!--<img src="assets/img/testimonial-2.png" alt="img">-->
<!--</div>-->
<!--<div class="mu-testimonial-info">-->
<!--<h4>Stev Smith</h4>-->
<!--<span>Happy Student</span>-->
<!--</div>-->
<!--</div>-->
<!--&lt;!&ndash; end testimonial single item &ndash;&gt;-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- End testimonial -->

<!-- Start from blog -->
<!--<section id="mu-from-blog">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->
<!--<div class="mu-from-blog-area">-->
<!--&lt;!&ndash; start title &ndash;&gt;-->
<!--<div class="mu-title">-->
<!--<h2>From Blog</h2>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>-->
<!--</div>-->
<!--&lt;!&ndash; end title &ndash;&gt;  -->
<!--&lt;!&ndash; start from blog content   &ndash;&gt;-->
<!--<div class="mu-from-blog-content">-->
<!--<div class="row">-->
<!--<div class="col-md-4 col-sm-4">-->
<!--<article class="mu-blog-single-item">-->
<!--<figure class="mu-blog-single-img">-->
<!--<a href="#"><img src="assets/img/blog/blog-1.jpg" alt="img"></a>-->
<!--<figcaption class="mu-blog-caption">-->
<!--<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
<!--</figcaption>                      -->
<!--</figure>-->
<!--<div class="mu-blog-meta">-->
<!--<a href="#">By Admin</a>-->
<!--<a href="#">02 June 2016</a>-->
<!--<span><i class="fa fa-comments-o"></i>87</span>-->
<!--</div>-->
<!--<div class="mu-blog-description">-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
<!--<a class="mu-read-more-btn" href="#">Read More</a>-->
<!--</div>-->
<!--</article>-->
<!--</div>-->
<!--<div class="col-md-4 col-sm-4">-->
<!--<article class="mu-blog-single-item">-->
<!--<figure class="mu-blog-single-img">-->
<!--<a href="#"><img src="assets/img/blog/blog-2.jpg" alt="img"></a>-->
<!--<figcaption class="mu-blog-caption">-->
<!--<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
<!--</figcaption>                      -->
<!--</figure>-->
<!--<div class="mu-blog-meta">-->
<!--<a href="#">By Admin</a>-->
<!--<a href="#">02 June 2016</a>-->
<!--<span><i class="fa fa-comments-o"></i>87</span>-->
<!--</div>-->
<!--<div class="mu-blog-description">-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
<!--<a class="mu-read-more-btn" href="#">Read More</a>-->
<!--</div>-->
<!--</article>-->
<!--</div>-->
<!--<div class="col-md-4 col-sm-4">-->
<!--<article class="mu-blog-single-item">-->
<!--<figure class="mu-blog-single-img">-->
<!--<a href="#"><img src="assets/img/blog/blog-3.jpg" alt="img"></a>-->
<!--<figcaption class="mu-blog-caption">-->
<!--<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
<!--</figcaption>                      -->
<!--</figure>-->
<!--<div class="mu-blog-meta">-->
<!--<a href="#">By Admin</a>-->
<!--<a href="#">02 June 2016</a>-->
<!--<span><i class="fa fa-comments-o"></i>87</span>-->
<!--</div>-->
<!--<div class="mu-blog-description">-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
<!--<a class="mu-read-more-btn" href="#">Read More</a>-->
<!--</div>-->
<!--</article>-->
<!--</div>-->
<!--</div>-->
<!--</div>     -->
<!--&lt;!&ndash; end from blog content   &ndash;&gt;   -->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- End from blog -->

<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">Course</a></li>
                                <li><a href="">Event</a></li>
                                <li><a href="">Sitemap</a></li>
                                <li><a href="">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Student Help</h4>
                            <ul>
                                <li><a href="">Get Started</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="">Download Files</a></li>
                                <li><a href="">Latest Course</a></li>
                                <li><a href="">Academic News</a></li>
                            </ul>
                        </div>
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