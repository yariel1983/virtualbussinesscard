<!-- (Header) -->
<?php include('_inc/header.php'); ?>
<!-- Import (Login-Modal) -->
<?php include('login_modal.php'); ?>
<!-- Import (Register-Modal) -->
<?php include('register_modal.php'); ?>


<!-- Container (Checkout) -->
<div class="container-fluid" id="paymentbody">&nbsp;
    <div class="container py-5">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                <div id="pay-invoice" class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Payment</h3>
                        </div>
                        <hr>
                        <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">
                            <div class="display-td" >                            
                                <img class="img-responsive ml-5" src="assets/images/payment.png"/>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="$ 99.00">
                                <span class="invalid-feedback">Enter the payment amount</span>
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name" required autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                <span class="invalid-feedback">Enter the name as shown on credit card</span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required="" pattern="[0-9]{16}">
                                <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                        <span class="invalid-feedback">Enter the expiration date</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                        <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code" 
                                                      data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                      data-trigger="hover"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="x_zip" class="control-label mb-1">Postal code</label>
                                <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                                <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block text-white">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Pay</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (Footer) -->
<?php include('_inc/footer.php'); 


