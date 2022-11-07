
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
                            <img src="assets/images/ab2.jpg" alt="" class="img-fluid">
                        </div>
                           &nbsp;
                         <div class="col-lg-15   ">
                            <img src="assets/images/ab6.jpg" alt="" class="img-fluid">
                        </div>
<!--                    </div>-->
                </div>
                <div class="col-lg-6 form-inner-cont">
                    <div class="title-content text-left">
                        <h3 class="hny-title mb-lg-5 mb-4">workshop Register</h3>
                    </div>
                    <form action="Action/Mechanic_registration_action.php" method="post" class="signin-form" enctype="multipart/form-data">
                        <div class="form-input">
                        <span class="details">name of workshop</span>
                          <input type="text" name="name" id='name' maxlength="50" minlength="3" autofocus placeholder="Enter your workshop name"  required>
                        </div>  
                       <div class="form-input">
                       <span class="details">ownername</span>
            <input type="text" name="uname" id="uname"  placeholder="Enter your name"  required maxlength="50" minlength="3" autofocus>
                        </div>
                        <div class="form-input">
                        <span class="details">address</span>
            <input type="text" name="addresss" id="email" placeholder="Enter your email" size="30"  required>
                        </div>
                        <div class="form-input">
                        <span class="details">location</span>
            <input type="text" name="location" id="location" placeholder="Enter your nearest location"  required maxlength="50" minlength="3" autofocus>
                        </div>
                         <div class="form-input">
                         <span class="details">District</span>
              <select style="width: 300px; height: 50px;" name="district"  >
                <option value="Nothing">Select Your district</option>
                <option value="idukki">IDUKKI</option>
                <option value="kasargod">KASARGOD</option>
                <option value="kannur">KANNUR</option>
                <option value="wayanad">WAYANAD</option>
                <option value="kozhikkode">Kozhikkode</option>
                <option value="malappuram">MALAPPURAM</option>
                <option value="palakkad">PALAKKAD</option>
                <option value="thrissur">THRISSUR</option>
                <option value="eranakulam">ERANAKULAM</option>                                                           
                <option value="kottayam">KOTTAYAM</option>
                <option value="alappuzha">ALAPPUZHA</option>
                <option value="pathanamthitta">PATHANAMTHITTA</option>
                <option value="kollam">KOLLAM</option>
                <option value="thiruvananthapuram">THIRUVANANTHAPURAM</option>                                                          
            </select>
                        </div>
                       
                        <div class="form-input">    
                        <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required >
                        </div>
                        <div class="form-input">    
                        <span class="details">Password</span>
            <input type="password" name="password" size="30" id="password" placeholder="Enter your password"  required  minlength="5" autofocus>
                        </div>
                        <div class="form-input">    
                        <span class="details">Image</span>
            <input type="file" style="width: 220px"  name="image" id="filename"   required >
                        </div>
                        <div class="form-input">
                        <span class="details">Contact</span>
            <input type="text" name="number" id="contact" placeholder="Enter your number"  required pattern="[0-9]+" maxlength="12" minlength="10" autofocus>
                        </div>
                        <div class="form-input">    
                        <span class="details">Certificate in Motor Vehicle Mechanic</span>
            <input style="width: 220px" type="file" name="Certificate" id="filename1"  placeholder="upload a image of workshop if you have" required >
                        </div>
                    
                
                       <!-- <input type="checkbox" id="c-box" ><label for="c-box">I agree all terms and conditions</label> -->
               
                        <div class="submit-button text-lg-right">
                            <button type="submit" name="submit" class="btn btn-style">Register</button>
                          
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