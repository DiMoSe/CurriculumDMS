<?php include('form_process.php'); ?>
<link rel="stylesheet" type="text/css" href="form.css">
<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" autofocus>
      
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" tabindex="2" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>