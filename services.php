<!-- (Header) -->
<?php include('_inc/header.php'); ?>

<!-- Container (Business Card Builder) -->
<div class="container-fluid" id="servdiv">
    <div class="container portfolio mb-5">&nbsp;
        <div class="bio-info bg-light">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="bio-image">
                                <img src="http://placehold.it/350x400" class="img-responsive" alt="a" id="servicesimg"/>
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-6">
                    <div class="bio-content text-center mb-5">                    
                        <form>
                            <div class="row mt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-3">
                                    <input type="text" class="form-control" placeholder="Company Name:" required>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" placeholder="First Name:" required>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" placeholder="Last Name:" required>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-5">
                                    <input type="text" class="form-control" placeholder="Email:" required>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-2">
                                    <input type="text" class="form-control" placeholder="Phone:" required>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-2">
                                    <input type="text" class="form-control" placeholder="fax:" required>
                                </div>
                                <div class="col-sm-2 col-md-3 col-lg-4 col-xs-2 mt-2">
                                    <input type="file" class="form-control-file" id="choosepic">
                                </div>
                            </div>
                        </form>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="fb-ic">
                                        <i class="fab fa-facebook-f fa-lg text-primary fa-2x mt-5"> </i>
                                    </a>    
                                </div>
                                <div class="col-sm-4">
                                    <a class="tw-ic">
                                        <i class="fab fa-twitter fa-lg text-primary fa-2x mt-5"> </i>
                                    </a>    
                                </div>
                                <div class="col-sm-4">
                                    <a class="gplus-ic">
                                        <i class="fab fa-instagram fa-lg text-danger fa-2x mt-5"> </i>
                                    </a>   
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-5">
            <button class="btn-outline-light text-dark bg-light" type="submit" href="#" id="resetbtn" onclick="myFunction()"> Preview <i class="fas fa-eye"></i></button>
            <a class="btn-outline-light text-dark bg-light" href="checkout.php" id="savebtn"> E_Print <i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
    
    <!-- (Footer) -->
    <?php include('_inc/footer.php'); ?>
