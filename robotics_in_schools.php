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
    <title>Pen2Plier | Why robotics should be taught right from the school</title>

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
                    <li><a href="blog-archive.php">Blog</a></li>
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
<!-- Page breadcrumb -->
<!--<section id="mu-page-breadcrumb">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="mu-page-breadcrumb-area">-->
<!--                    <h2>Blog Single</h2>-->
<!--                    <ol class="breadcrumb">-->
<!--                        <li><a href="#">Home</a></li>-->
<!--                        <li class="active">Blog Single</li>-->
<!--                    </ol>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</section>
<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container mu-blog-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img alt="img" src="assets/img/blog/schools.jpg" height="400px" width="300px"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">Why robotics should be taught right from the school</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="https://www.facebook.com/reachgauravarora">By Gaurav</a>
                                                <a href="#">16 July 2016</a>
                                                <!--                                                <span><i class="fa fa-comments-o"></i>87</span>-->
                                            </div>
                                            <div class="mu-blog-description">
                                                <p>Technology is critical for innovation, yet schools struggle to get students interested in this area.
                                                    Could teaching robotics change this?</p>

                                                <p>In country like India, students coming from middle class families dont get such exposure to get their hands on such
                                                technologies. Reasons being its cost and skills required to teach them.</p>

                                                <h3>Reasons why robotics should be taugh to school students is:-</h3>

                                                <br>
                                                <div>
                                                    <h3> 1. Children find it fun<h3>
                                                            <p>Practical activities like robotics are different from normal school activities.
                                                            Stduents are really interested by such activites and they find it fun. So learning with
                                                            fun provides them a healthy growing atmosphere</p>
                                                </div>

                                                <br>

                                                <div>
                                                    <h3> 2. Effective way of introducing programming to students <h3>
                                                            <p>It has been that students are generally hesitant of coding and programming
                                                            parts to start with. So robotics provides a platform where coding can be introduced to
                                                            students in a very effective way.</p>

                                                </div>

                                                <br>

                                                <div>
                                                    <h3> 3. Provides skills useful in future employment <h3>
                                                            <p>There is no doubt that robotics and programming have foreseeable future.
                                                            There are immense no of jobs and opportunities in this field.
                                                            </p>
                                                </div>

                                                <br>

                                                <div>
                                                    <h3> 4. Students are able to understand science in  a better way. <h3>
                                                            <p>Robotics is nothing but an application of scientific concepts.
                                                                So via robotics students learn and apply those concepts which enables
                                                                better understanding.
                                                            </p>
                                                </div>



















                                            </div>
                                            <!-- start blog post tags -->
                                            <!--                                            <div class="mu-blog-tags">-->
                                            <!--                                                <ul class="mu-news-single-tagnav">-->
                                            <!--                                                    <li>TAGS :</li>-->
                                            <!--                                                    <li><a href="#">Science,</a></li>-->
                                            <!--                                                    <li><a href="#">English,</a></li>-->
                                            <!--                                                    <li><a href="#">Sports,</a></li>-->
                                            <!--                                                    <li><a href="#">Health</a></li>-->
                                            <!--                                                </ul>-->
                                            <!--                                            </div>-->
                                            <!-- End blog post tags -->
                                            <!-- start blog social share -->
                                            <!--                                            <div class="mu-blog-social">-->
                                            <!--                                                <ul class="mu-news-social-nav">-->
                                            <!--                                                    <li>SOCIAL SHARE :</li>-->
                                            <!--                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>-->
                                            <!--                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>-->
                                            <!--                                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>-->
                                            <!--                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>-->
                                            <!--                                                </ul>-->
                                            <!--                                            </div>-->
                                            <!-- End blog social share -->
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start blog navigation -->
                            <!--                            <div class="row">-->
                            <!--                                <div class="col-md-12">-->
                            <!--                                    <div class="mu-blog-single-navigation">-->
                            <!--                                        <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>-->
                            <!--                                        <a class="mu-blog-next" href="#">Next<span class="fa fa-angle-right"></span></a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!-- end blog navigation -->
                            <!-- start related course item -->
                            <!--                            <div class="row">-->
                            <!--                                <div class="col-md-12">-->
                            <!--                                    <div class="mu-related-item">-->
                            <!--                                        <h3>Related News</h3>-->
                            <!--                                        <div class="mu-related-item-area">-->
                            <!--                                            <div id="mu-related-item-slide">-->
                            <!--                                                <div class="col-md-6">-->
                            <!--                                                    <article class="mu-blog-single-item">-->
                            <!--                                                        <figure class="mu-blog-single-img">-->
                            <!--                                                            <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>-->
                            <!--                                                            <figcaption class="mu-blog-caption">-->
                            <!--                                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
                            <!--                                                            </figcaption>-->
                            <!--                                                        </figure>-->
                            <!--                                                        <div class="mu-blog-meta">-->
                            <!--                                                            <a href="#">By Admin</a>-->
                            <!--                                                            <a href="#">02 June 2016</a>-->
                            <!--                                                            <span><i class="fa fa-comments-o"></i>87</span>-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="mu-blog-description">-->
                            <!--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
                            <!--                                                            <a href="#" class="mu-read-more-btn">Read More</a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </article>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="col-md-6">-->
                            <!--                                                    <article class="mu-blog-single-item">-->
                            <!--                                                        <figure class="mu-blog-single-img">-->
                            <!--                                                            <a href="#"><img alt="img" src="assets/img/blog/blog-2.jpg"></a>-->
                            <!--                                                            <figcaption class="mu-blog-caption">-->
                            <!--                                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
                            <!--                                                            </figcaption>-->
                            <!--                                                        </figure>-->
                            <!--                                                        <div class="mu-blog-meta">-->
                            <!--                                                            <a href="#">By Admin</a>-->
                            <!--                                                            <a href="#">02 June 2016</a>-->
                            <!--                                                            <span><i class="fa fa-comments-o"></i>87</span>-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="mu-blog-description">-->
                            <!--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
                            <!--                                                            <a href="#" class="mu-read-more-btn">Read More</a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </article>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="col-md-6">-->
                            <!--                                                    <article class="mu-blog-single-item">-->
                            <!--                                                        <figure class="mu-blog-single-img">-->
                            <!--                                                            <a href="#"><img alt="img" src="assets/img/blog/blog-3.jpg"></a>-->
                            <!--                                                            <figcaption class="mu-blog-caption">-->
                            <!--                                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
                            <!--                                                            </figcaption>-->
                            <!--                                                        </figure>-->
                            <!--                                                        <div class="mu-blog-meta">-->
                            <!--                                                            <a href="#">By Admin</a>-->
                            <!--                                                            <a href="#">02 June 2016</a>-->
                            <!--                                                            <span><i class="fa fa-comments-o"></i>87</span>-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="mu-blog-description">-->
                            <!--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
                            <!--                                                            <a href="#" class="mu-read-more-btn">Read More</a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </article>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="col-md-6">-->
                            <!--                                                    <article class="mu-blog-single-item">-->
                            <!--                                                        <figure class="mu-blog-single-img">-->
                            <!--                                                            <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>-->
                            <!--                                                            <figcaption class="mu-blog-caption">-->
                            <!--                                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>-->
                            <!--                                                            </figcaption>-->
                            <!--                                                        </figure>-->
                            <!--                                                        <div class="mu-blog-meta">-->
                            <!--                                                            <a href="#">By Admin</a>-->
                            <!--                                                            <a href="#">02 June 2016</a>-->
                            <!--                                                            <span><i class="fa fa-comments-o"></i>87</span>-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="mu-blog-description">-->
                            <!--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>-->
                            <!--                                                            <a href="#" class="mu-read-more-btn">Read More</a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </article>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!-- end start related course item -->
                            <!-- start blog comment -->
                            <!--                            <div class="row">-->
                            <!--                                <div class="col-md-12">-->
                            <!--                                    <div class="mu-comments-area">-->
                            <!--                                        <h3>5 Comments</h3>-->
                            <!--                                        <div class="comments">-->
                            <!--                                            <ul class="commentlist">-->
                            <!--                                                <li>-->
                            <!--                                                    <div class="media">-->
                            <!--                                                        <div class="media-left">-->
                            <!--                                                            <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="media-body">-->
                            <!--                                                            <h4 class="author-name">David Muller</h4>-->
                            <!--                                                            <span class="comments-date"> Posted on 12th June, 2016</span>-->
                            <!--                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>-->
                            <!--                                                            <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </div>-->
                            <!--                                                </li>-->
                            <!--                                                <li>-->
                            <!--                                                    <div class="media">-->
                            <!--                                                        <div class="media-left">-->
                            <!--                                                            <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="media-body">-->
                            <!--                                                            <h4 class="author-name">John Doe</h4>-->
                            <!--                                                            <span class="comments-date"> Posted on 12th June, 2016</span>-->
                            <!--                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>-->
                            <!--                                                            <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </div>-->
                            <!--                                                </li>-->
                            <!--                                                <ul class="children">-->
                            <!--                                                    <li class="author-comments">-->
                            <!--                                                        <div class="media">-->
                            <!--                                                            <div class="media-left">-->
                            <!--                                                                <img alt="img" src="assets/img/testimonial-3.png" class="media-object news-img">-->
                            <!--                                                            </div>-->
                            <!--                                                            <div class="media-body">-->
                            <!--                                                                <h4 class="author-name">Admin</h4>-->
                            <!--                                                                <span class="comments-date"> Posted on 12th June, 2016</span>-->
                            <!--                                                                <span class="author-tag">Author</span>-->
                            <!--                                                                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>-->
                            <!--                                                                <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>-->
                            <!--                                                            </div>-->
                            <!--                                                        </div>-->
                            <!--                                                    </li>-->
                            <!--                                                    <ul class="children">-->
                            <!--                                                        <li>-->
                            <!--                                                            <div class="media">-->
                            <!--                                                                <div class="media-left">-->
                            <!--                                                                    <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">-->
                            <!--                                                                </div>-->
                            <!--                                                                <div class="media-body">-->
                            <!--                                                                    <h4 class="author-name">David Muller</h4>-->
                            <!--                                                                    <span class="comments-date"> Posted on 12th June, 2016</span>-->
                            <!--                                                                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>-->
                            <!--                                                                    <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>-->
                            <!--                                                                </div>-->
                            <!--                                                            </div>-->
                            <!--                                                        </li>-->
                            <!--                                                    </ul>-->
                            <!--                                                </ul>-->
                            <!--                                                <li>-->
                            <!--                                                    <div class="media">-->
                            <!--                                                        <div class="media-left">-->
                            <!--                                                            <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">-->
                            <!--                                                        </div>-->
                            <!--                                                        <div class="media-body">-->
                            <!--                                                            <h4 class="author-name">Jhon Doe</h4>-->
                            <!--                                                            <span class="comments-date"> Posted on 12th June, 2016</span>-->
                            <!--                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>-->
                            <!--                                                            <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>-->
                            <!--                                                        </div>-->
                            <!--                                                    </div>-->
                            <!--                                                </li>-->
                            <!--                                            </ul>-->
                            <!--                                            <!-- comments pagination -->
                            <!--                                            <nav>-->
                            <!--                                                <ul class="pagination comments-pagination">-->
                            <!--                                                    <li>-->
                            <!--                                                        <a aria-label="Previous" href="#">-->
                            <!--                                                            <span class="fa fa-long-arrow-left"></span>-->
                            <!--                                                        </a>-->
                            <!--                                                    </li>-->
                            <!--                                                    <li><a href="#">1</a></li>-->
                            <!--                                                    <li><a href="#">2</a></li>-->
                            <!--                                                    <li><a href="#">3</a></li>-->
                            <!--                                                    <li><a href="#">4</a></li>-->
                            <!--                                                    <li><a href="#">5</a></li>-->
                            <!--                                                    <li>-->
                            <!--                                                        <a aria-label="Next" href="#">-->
                            <!--                                                            <span class="fa fa-long-arrow-right"></span>-->
                            <!--                                                        </a>-->
                            <!--                                                    </li>-->
                            <!--                                                </ul>-->
                            <!--                                            </nav>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!-- end blog comment -->
                            <!-- start respond form -->
                            <!--                            <div class="row">-->
                            <!--                                <div class="col-md-12">-->
                            <!--                                    <div id="respond">-->
                            <!--                                        <h3 class="reply-title">Leave a Comment</h3>-->
                            <!--                                        <form id="commentform">-->
                            <!--                                            <p class="comment-notes">-->
                            <!--                                                Your email address will not be published. Required fields are marked <span class="required">*</span>-->
                            <!--                                            </p>-->
                            <!--                                            <p class="comment-form-author">-->
                            <!--                                                <label for="author">Name <span class="required">*</span></label>-->
                            <!--                                                <input type="text" required="required" size="30" value="" name="author">-->
                            <!--                                            </p>-->
                            <!--                                            <p class="comment-form-email">-->
                            <!--                                                <label for="email">Email <span class="required">*</span></label>-->
                            <!--                                                <input type="email" required="required" aria-required="true" value="" name="email">-->
                            <!--                                            </p>-->
                            <!--                                            <p class="comment-form-url">-->
                            <!--                                                <label for="url">Website</label>-->
                            <!--                                                <input type="url" value="" name="url">-->
                            <!--                                            </p>-->
                            <!--                                            <p class="comment-form-comment">-->
                            <!--                                                <label for="comment">Comment</label>-->
                            <!--                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>-->
                            <!--                                            </p>-->
                            <!--                                            <p class="form-allowed-tags">-->
                            <!--                                                You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>-->
                            <!--                                            </p>-->
                            <!--                                            <p class="form-submit">-->
                            <!--                                                <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">-->
                            <!--                                            </p>-->
                            <!--                                        </form>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <!-- end respond form -->
                            <!--                        </div>-->
                            <!--                        <div class="col-md-3">-->
                            <!-- start sidebar -->
                            <aside class="mu-sidebar">
                                <!-- start single sidebar -->
                                <!--                                <div class="mu-single-sidebar">-->
                                <!--                                    <h3>Categories</h3>-->
                                <!--                                    <ul class="mu-sidebar-catg">-->
                                <!--                                        <li><a href="#">Web Design</a></li>-->
                                <!--                                        <li><a href="">Web Development</a></li>-->
                                <!--                                        <li><a href="">Math</a></li>-->
                                <!--                                        <li><a href="">Physics</a></li>-->
                                <!--                                        <li><a href="">Camestry</a></li>-->
                                <!--                                        <li><a href="">English</a></li>-->
                                <!--                                    </ul>-->
                                <!--                                </div>-->
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <!--                                <div class="mu-single-sidebar">-->
                                <!--                                    <h3>Popular News</h3>-->
                                <!--                                    <div class="mu-sidebar-popular-courses">-->
                                <!--                                        <div class="media">-->
                                <!--                                            <div class="media-left">-->
                                <!--                                                <a href="#">-->
                                <!--                                                    <img class="media-object" src="assets/img/courses/1.jpg" alt="img">-->
                                <!--                                                </a>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="media-body">-->
                                <!--                                                <h4 class="media-heading"><a href="#">Medical Science</a></h4>-->
                                <!--                                                <span class="popular-course-price">$200.00</span>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                        <div class="media">-->
                                <!--                                            <div class="media-left">-->
                                <!--                                                <a href="#">-->
                                <!--                                                    <img class="media-object" src="assets/img/courses/2.jpg" alt="img">-->
                                <!--                                                </a>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="media-body">-->
                                <!--                                                <h4 class="media-heading"><a href="#">Web Design</a></h4>-->
                                <!--                                                <span class="popular-course-price">$250.00</span>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                        <div class="media">-->
                                <!--                                            <div class="media-left">-->
                                <!--                                                <a href="#">-->
                                <!--                                                    <img class="media-object" src="assets/img/courses/3.jpg" alt="img">-->
                                <!--                                                </a>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="media-body">-->
                                <!--                                                <h4 class="media-heading"><a href="#">Health & Sports</a></h4>-->
                                <!--                                                <span class="popular-course-price">$90.00</span>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                <!-- end single sidebar -->
                                <!--                                <!-- start single sidebar -->
                                <!--                                <div class="mu-single-sidebar">-->
                                <!--                                    <h3>Archives</h3>-->
                                <!--                                    <ul class="mu-sidebar-catg mu-sidebar-archives">-->
                                <!--                                        <li><a href="#">May <span>(25)</span></a></li>-->
                                <!--                                        <li><a href="">June <span>(35)</span></a></li>-->
                                <!--                                        <li><a href="">July <span>(20)</span></a></li>-->
                                <!--                                        <li><a href="">August <span>(125)</span></a></li>-->
                                <!--                                        <li><a href="">September <span>(45)</span></a></li>-->
                                <!--                                        <li><a href="">October <span>(85)</span></a></li>-->
                                <!--                                    </ul>-->
                                <!--                                </div>-->
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <!--                                <div class="mu-single-sidebar">-->
                                <!--                                    <h3>Tags Cloud</h3>-->
                                <!--                                    <div class="tag-cloud">-->
                                <!--                                        <a href="#">Health</a>-->
                                <!--                                        <a href="#">Science</a>-->
                                <!--                                        <a href="#">Sports</a>-->
                                <!--                                        <a href="#">Mathematics</a>-->
                                <!--                                        <a href="#">Web Design</a>-->
                                <!--                                        <a href="#">Admission</a>-->
                                <!--                                        <a href="#">History</a>-->
                                <!--                                        <a href="#">Environment</a>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!-- end single sidebar -->
                            </aside>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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