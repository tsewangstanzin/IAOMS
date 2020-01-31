<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Indian Astronomical Observatory Leh/Hanle</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
 
        <!-- Optional theme -->
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
<body>

<!-- PRE LOADER -->



<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
			   			   <a href="index.html"><img src="images/iia.png" align="left"></a>
               <a href="index.html" class="navbar-brand">IAOMS Portal</a>

          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="help.php">Help</a></li>
               </ul>
          </div>

  </div>
</div>
<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h3>Help and Queries..</h3>
               </div>

          </div>
     </div>
</section>

<!-- Contact Section -->

<section id="contact">


     <div class="container">
          <div class="row">
		  
		  
			<div class="col-md-offset-1 col-md-10 col-sm-12">
                  
                    <p>Drop a message to the web admin regarding any issues, suggestions or queries .</p>
           
                    <form role="form" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name"> Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="name"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="" maxlength="6000" rows="7"></textarea>
                        </div>
                        <div class="row" style="margin-bottom:5px;">
                            <div class="col-sm-7">
                                <img src="captcha.php" id="captcha_image"/>
                                <br/>
                                <br>
                                <a href="#" id="captcha_reload" > Reload Captcha Security</a> 
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <label for="email">Enter the code from the image:</label>
                                <input type="text" class="form-control" required id="captcha" name="captcha" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-left" id="btnContactUs">Send &rarr;</button>
                    </form>
                    <div class="row">
                         <div class="col-sm-6">
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3> Sent successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                    </div>
                    </div>
					
                                  
               

               

          </div>
     </div>
	 

	 </div>
</section>


<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

                    
               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>IAOMS Portal</h3>
					
                    <p>
					IAOMS( IAO Management System) is a web application which aims at keeping important resources of the IAO(Indian Astronomical Observatory) at one place. 
					Necessity was felt when many a times important user manuals gets unlocatable in Hanle as well as on the internet...!! 
					
					</p>
                    
					
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Contact Webmaster</h3>
					<p> Tsewang Stanzin </p>
                    <p><i class="fa fa-location-arrow"></i> Indian Astronomical Observatory Office, Lower Skara, Leh, Ladakh(UT) , India 194101 </p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:iao_computerlab@gmail.com?Subject=Hello%20IAO Webmaster" target="_top">iao_computerlab@gmail.com</a> </p>
					
               </div>

               

  
          </div>
		  <div class="footer-copyright" align="center">
                         <p>Copyright &copy; 2020 Indian Astronomical Observatory , Hanle </p>
                    </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

 <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script>

function validateForm() {
    // var x =  document.getElementById('name').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Name cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('email').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Email cannot be empty";
    //     return false;
    // } else {
    //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if(!re.test(x)){
    //         document.getElementById('status').innerHTML = "Email format invalid";
    //         return false;
    //     }
    // }
    // x =  document.getElementById('subject').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Subject cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('message').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Message cannot be empty";
    //     return false;
    // }
	   // x =  document.getElementById('captcha').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "CAaaaaaaaaa cannot be empty";
    //     return false;
    // }
	 
 //get input field values data to be sent to server
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'subject'  : $('input[name=subject]').val(),
        'message'  : $('textarea[name=message]').val(),
		'captcha'  : $('textarea[name=captcha]').val(),
    };


   $.ajax({
    url : "mail.php",
    type: "POST",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        $('#status').text(jqXHR);
    }
});



}
    </script>
	<script>
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>