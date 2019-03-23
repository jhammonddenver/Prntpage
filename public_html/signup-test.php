<?php
  session_start();

  include_once "includes/header.php";
  
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Signup</h1>
          <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
          
         
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
           
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
         <form class="form-signup" action="includes/signup.inc.php" method="post">
            <?php
            // Here we check if the user already tried submitting data.

        

            // We check e-mail.
            if (!empty($_GET["mailuid"])) {
              echo '<input type="text" name="mailuid" placeholder="E-mail" value="'.$_GET["mailuid"].'">';
            }
            else {
              echo '<input type="text" name="mailuid" placeholder="E-mail">';
            }
            ?>
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <input type="text" name="phone" placeholder="Phone Number">
            <label for="bday">Enter your birthday:</label>
            <input type="date" name="bday">
            <select name="gender" placeholder="Gender">
                <option value="gender">Gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
              <option value="other">Other</option>
            </select>
            <input type="text" name="add1" placeholder="Address 1">
            <input type="text" name="add2" placeholder="Address 2">
            <input type="text" name="city" placeholder="City">
            <input type="text" name="state" placeholder="State">
            <input type="text" name="zip" placeholder="Zip">
            <input type="text" name="country" placeholder="Country">
            <input type="text" name="lang" placeholder="Language">
            <input type="text" name="currency" placeholder="Currency">
            
            
            
              <button type="submit" name="signup-submit">Signup</button>
         </form>
        
        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "includes/footer.php";
?>
