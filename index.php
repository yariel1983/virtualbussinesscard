<!-- (Header) -->
<?php include('_inc/header.php'); ?>
<!-- Import (Login-Modal) -->
<?php include('login_modal.php'); ?>
<!-- Import (Register-Modal) -->
<?php include('register_modal.php'); ?>

<!-- Container (landing-page Background) -->
<header class="masthead d-flex" style="background-image:  url('assets/images/landinpage1.jpg')" id="landingpage1">
    <div class="container text-center my-auto">
        <h1 class="mb-1" id="homepresentation">Do you want to design your own 
            <i class="fab fa-edge" id="elogo"></i>-Business Card?</h1>
        <button type="button" name="login" id="loginbtn" class="btn btn-info btn-outline  mt-5 mb-5" data-toggle="modal" data-target="#login-modal" > Login</button>
        <button class="btn btn-info btn-outline mt-5 mb-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> Register</button>
    </div>
    <div class="overlay"></div>
</header>

<!-- Container (Landing Page Section) -->
<section class="content-section" id="homejumb">
    <div class="container text-center">
        <i class="fas fa-recycle fa-8x mb-5"></i>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="big-banner">Why ordering Business Cards</h2>
                <a class="btn btn-info btn-outline btn-xl js-scroll-trigger mb-5 mt-5" id="bannerbtn" data-toggle="modal" data-target="#register-modal">Find out More</a>
                <p class="lead mb-5" id="bannerparragraph">This is the next Generation Industry. 
                    <a href="#"></a></p>               
            </div>
        </div>
    </div>
</section>

<!-- Container (Carousel Section) -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carouselbg my-auto">Welcome to the next Generation</h1>               
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carouselbg">No more Waiting</h1>               
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carouselbg">Grow your Business with one click</h1>               
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>

<!-- Container (Chess Gallery) -->
<section>
    <div class="container p-0 bg-white" id="landingbanner">
        <div class="row d-flex flex-rap ">
            <!-- First block Card -->
            <div class="col-md-6 col-sm-12 order-sm-0 my-auto p-0">
                <div class="card border-0 portfolio-item" >
                    <img class="card-img-top border-0" src="assets/images/banner1.jpg" alt="Card image cap" height="500"/>
                </div>
            </div>      
            <div class="col-md-6 col-sm-12 order-sm-1 my-auto p-5">
                <div class="text-center">
                    <h2 class="headerTitle text-muted">Login into your free account</h2>
                    <p class="load ">Use our business card builder</p>
                </div>
            </div>
            <!-- Second block Card-->
            <div class="col-md-6 order-sm-3 my-auto p-0">
                <div class="card border-0 portfolio-item" >
                    <img class="card-img-top" src="assets/images/banner2.jpg" alt="Card image cap" height="500"/>
                </div>
            </div>  
            <div class="col-md-6 order-lg-2 my-auto p-5">
                <div class="text-center">
                    <h2 class="headerTitle text-muted">Load your image</h2>
                    <p class="load">Design your Business card</p>
                </div>
            </div>
            <!-- Third block Card-->
            <div class="col-md-6  order-sm-4 my-auto p-0">
                <div class="card border-0 mb-4 portfolio-item" >
                    <img class="card-img-bottom mb-2" src="assets/images/banner3.jpg" alt="Card image cap" height="500">
                </div>
            </div>
            <div class="col-md-6  order-sm-5  my-auto my-auto p-5">
                <div class="text-center border-0 mb-4">
                    <h2 class="headerTitle text-muted">Easy to Use &amp; Customize</h2>
                    <p class="load">Save your project and ready to go!</p>
                </div>
            </div>  
        </div> 
    </div>

<!-- (Footer) -->    
    <?php include('_inc/footer.php');

