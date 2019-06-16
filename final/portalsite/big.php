<!DOCTYPE html>
<html lang="en">

   <head>
   
      <meta charset="UTF-8" />
      <title>Anton Holmgren - Portal Site</title>
      <link rel="stylesheet" type="text/css" href="big.css"/>
      <link rel="stylesheet" type="text/css" href="main.css"/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:400,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway:400,800,900" rel="stylesheet">


   </head>

   <body>
      <header>
         <h1><a href="index.html">Anton Holmgren</a></h1>
         <ul>
            <li><a href="index.php">Welcome</a></li>
            <li><a href="big.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="Flowchart.php">Flowchart</a></li>
            <li><a href="galleries.php">Galleries</a></li>
            <li><a href="shopcarts.php">Shopping Carts</a></li>
            <li><a href="appvs.php">App VS Mobile Design</a></li>
            <li><a href="Webcam.php">Webcam</a></li>
            <li><a href="contactme.php">Final Project</a></li>
            <li><a href="google.php">Google</a></li>

         </ul>
      
      </header>
       
      <!-- START CAPTCHA -->
         <section class="welcome">
             <h2 >Contact Me!</h2>

               <!-- START HTML FORM -->
               <form action="index.php" method="post">
               <div>
                  <label>
                     Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
                  </label>
               </div>
               <div> 
                  <label>
                     Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
                  </label>
               </div>
               <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
               <div> 
                  <label>
                     How Did You Hear About Me?:<br />
                     <select name="How_did_you_hear_about_me?" required="required" title="How You Heard is required" tabindex="30">
                        <option value="">How did you hear about me?</option>
                        <option value="Phone">Internet</option>
                        <option value="Web">Google</option>
                        <option value="Magazine">Magazine</option>
                        <option value="A Friend">A relative</option>
                        <option value="Other">Other</option>
                     </select>
                  </label>
               </div>
               
               <div> 
                  <fieldset>
                     <legend>What Web Services are you interested in?</legend>
                     <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
                     <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
                     <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
                     <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Graphics <br />
                     <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
                  </fieldset>
               </div>
               
                  <div> 
                  <fieldset>
                     <legend>Would you like to join my mailing list?</legend>
                     <input type="radio" name="Join_Mailing_List?" value="Yes" 
                     required="required" title="Mailing list is required" tabindex="50"  
                     /> Yes <br />
                     <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
                  </fieldset>
               </div>
               <div> 
                  <label>
                     Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Feel free to comment something" tabindex="60"></textarea>
                  </label>
               </div>   
               <div></div>
                <div class="g-recaptcha" data-sitekey="6LfrZqUUAAAAAK68_LIIfvEu43Dj4G276qG5IoCK"></div>
               <div>
                  <input type="submit" value="submit" />
               </div>
                </form>
               <!-- END HTML FORM -->
                <script type="text/javascript"
                    src="https://www.google.com/recaptcha/api.js?hl=en">
                </script>
             
            </section>
      <!-- END CAPTCHA -->











      <footer><small>&copy; <?php echo date("Y");?>, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></footer>

   </body>

</html>