
<?php
include("logHeader.html");
?>


<section class="w3l-contact-11">
    <div class="form-41-mian py-5">
        <div class="container py-lg-4">
            <div class="row align-form-map">
                <div class="col-lg-6 contact-left pr-lg-4">
<!--                    <div class="partners">-->
                        <div class="col-lg-15   ">
                            <img src="assets/images/ab1.jpg" alt="" class="img-fluid">
                        </div>
&nbsp;
                         
<!--                    </div>-->
                </div>
                <div class="col-lg-6 form-inner-cont">
                    <div class="title-content text-left">
                        <h3 class="hny-title mb-lg-5 mb-4">Login</h3>
                    </div>
                    <form action="Action/customer_mech_login.php" method="post" class="signin-form">
                        <div class="form-input">
                            <input type="email" name="email" id="email" placeholder="Email" required/>
                        </div>
                       <div class="form-input">
                           <input type="password" name="password" id="email" placeholder="Password" required/>
                        </div>
                       
                        <div class="submit-button text-lg-center">
                            <button type="submit" class="btn btn-style">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="col-lg-15   ">
            <img src="assets/images/banner1.jpg" alt="" class="img-fluid">
                        </div>
    </div>
</section>

<?php
include("logfooter.html");
?>
