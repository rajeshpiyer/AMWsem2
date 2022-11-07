
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
                         <div class="col-lg-15   ">
                            <img src="assets/images/ab5.jpg" alt="" class="img-fluid">
                        </div>
<!--                    </div>-->
                </div>
                <div class="col-lg-6 form-inner-cont">
                    <div class="title-content text-left">
                        <h3 class="hny-title mb-lg-5 mb-4">User Register</h3>
                    </div>
                    <form action="Action/Customer_registration.php" method="post" class="signin-form">
                        <div class="form-input">
                            <input type="text" name="name" id="name" placeholder="Name" required maxlength="50" and  minlength="3" pattern="[a-zA-Z ]+" autofocus />
                        </div>
                       <div class="form-input">
                            <input type="text" name="address" id="address" placeholder="Address" required  maxlength="20" and minlength="3" autofocus/>
                        </div>
                        <div class="form-input">
                            <input type="text" name="age" id="age" placeholder="Age" required pattern="[0-9]+" maxlength="2" and minlength="2"/>
                        </div>
                        <div class="form-input">
                            <input type="text" name="contact" id="contanct" placeholder="Contact" required  pattern="[0-9]+" maxlength="10" and minlength="10" />
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" id="email" placeholder="Email Id" required/>
                        </div>
                        <div class="form-input">    
                            <input type="password" name="password" id="password" placeholder="Password" required maxlength="12" minlength="6" autofocus/>
                        </div>
                        <div class="submit-button text-lg-right">
                            <button type="submit" class="btn btn-style">Register</button>
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