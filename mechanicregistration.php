
<?php
include("DB/connection.php");
session_start();
if(!isset($_SESSION["Mechanic"]))

?>
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

                        </div> 
                        <div class="col-lg-6 form-inner-cont">
                    <div class="title-content text-left">     
    <h3 class="hny-title mb-lg-5 mb-4">Mechanic Registration</h3>
    </div> 
      <form action="Action/mechanicregistrationaction.php" method="post">
      


        <div class="form-input">
            <span class="details">Name of workshop</span>
            <input type="text" name="name" id='name' maxlength="50" minlength="3" autofocus placeholder="Enter your workshop name"  required>
          </div>
          <div class="form-input">
            <span class="details">Ownername</span>
            <input type="text" name="uname" id="uname"  placeholder="Enter your name" pattern="[a-zA-Z ]+" required maxlength="50" minlength="3" autofocus>
          </div>
          <div class="form-input">
            <span class="details">Address</span>
            <input type="text" name="addresss" id="email" placeholder="Enter your email" size="30" pattern="[a-zA-Z ]+"  required>
          </div>
          <div class="form-input">
            <span class="details">Location</span>
            <input type="text" name="location" id="location" placeholder="Enter your nearest location"  required maxlength="50" minlength="3" autofocus>
          </div>
          <div class="form-input">
              <span class="details">District</span>
              <select style="width: 220px;" name="district"  >
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
            <span class="details">Contact</span>
            <input type="text" name="number" id="contact" placeholder="Enter your number"  required pattern="[0-9]+" maxlength="10" minlength="10" autofocus>
          </div>
          <div class="form-input">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required >
          </div>
          <div class="form-input">
            <span class="details">Password</span>
            <input type="password" name="password_1" size="30" id="password_1" placeholder="Enter your password"  required  minlength="5" autofocus>
          </div>
          <div class="form-input">
            <span class="details">Confirm Password</span>
            <input type="password" name="password_2" size="30" id="password_2" placeholder=" confirm-password" required>
          </div>
          
          <div class="input-box">
            <span class="details">Image</span>
            <input style="width: 220px" type="file" name="filename" id="filename" accept="image/png, image/jpeg, image/wepg" placeholder="upload a image of workshop if you have" required >
          </div>
          <div class="input-box">
            <span class="details">Certificate in Motor Vehicle Mechanic</span>
            <input style="width: 220px" type="file" name="filename1" id="filename1" accept="image/png, image/jpeg, image/wepg" placeholder="upload a image of workshop if you have" required >
          </div>
          <!-- <div class='form-input'>
          <input class='input' type="checkbox"><h9>I agree all terms and conditions</h9>
</div> -->
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

  <script>
window.onload = function () {
document.getElementById("password_1").onchange = validatePassword;
document.getElementById("password_2").onchange = validatePassword;
}
function validatePassword() {
var pass2 = document.getElementById("password_2").value;
var pass1 = document.getElementById("password_1").value;
if (pass1 != pass2)
document.getElementById("password_2").setCustomValidity("Passwords Don't Match");
else
document.getElementById("password_2").setCustomValidity('');
}
</script>
</section>


<?php
include("logfooter.html");
?>



