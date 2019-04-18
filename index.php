<!-- (Header) -->
<?php include('_inc/header.php'); ?>
<!-- Import (Login-Modal) -->
<?php include('login_modal.php'); ?>
<!-- Import (Register-Modal) -->
<?php include('register_modal.php'); ?>

<!-- Container (landing-page Background) -->
<header class="masthead d-flex" style="background-image:  url('assets/images/landing1.jpg')" id="landingpage1">
    <div class="container text-center my-auto">
        <h1 class="mb-1" id="homepresentation">Do you want to design your own 
            <i class="fab fa-edge" id="elogo"></i>-Business Card?</h1>
        <button type="button" name="login" id="loginbtn" class="btn btn-outline-info mt-5 mb-5" data-toggle="modal" data-target="#login-modal" > Login</button>
        <button class="btn btn-outline-info mt-5 mb-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> Register</button>
    </div>
    <div class="overlay"></div>
</header>

<br>
<!-- Container (Chess Gallery) -->
<section>
    <div class="container p-0 bg-white mt-5" id="landingbanner">
        <div class="row d-flex flex-rap ">
            <!-- First block Card -->
            <div class="col-md-6 col-sm-12 order-sm-0 my-auto p-0">
                <div class="card border-0 portfolio-item" >
                    <img class="card-img-top border-0 rounded-circle" src="assets/images/banner1.jpg" alt="Card image cap" height="500"/>
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
                    <img class="card-img-top rounded-circle" src="assets/images/banner2.jpg" alt="Card image cap" height="500"/>
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
                    <img class="card-img-bottom mb-2 rounded-circle" src="assets/images/banner3.jpg" alt="Card image cap" height="500">
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

