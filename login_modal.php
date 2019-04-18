
    <!-- (Login Modal) -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="container sign-form">
                    <form>
                        <div class="form-email-md">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email:" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-password-md">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password:" required><small id="passwordHelpInline" class="text-muted">
                                Must be 8-20 characters long.
                            </small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn input-block-level form-control btn-rounded z-depth-1a" id="login-modal-btn" onclick="myFunction()">Login</button>
                        </div>
                    </div>
                </div>
                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Follow us on:</p>
                <div class="row my-3 d-flex justify-content-center">
                    <!--Facebook-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
                    <!--Twitter-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
                    <!--Google +-->
                    <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-0">
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#register-modal" data-toggle="modal" data-target="#register-modal" class="blue-text ml-1">
                            Register</a></p>
                </div>
            </div>
        </div>
    </div>


