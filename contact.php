<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
    <?php include('header.php') ?>

    <div class="main">
       
          
        <div class="container">
            <!-- <div class="crumbs">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div> -->

            <main>
                <div class="contactUs">
                    <div class="contact-intro">
                        <div data-aos="fade-down" class="contactDetails">
                            <h3><i class="fa-solid fa-envelope"></i>Email</h3>
                            <li><a href="mailto:sanjaybakoliya7@gmail.com">sanjaybakoliya7@gmail.com</a></li>
                        </div>
                        <div data-aos="fade-right"  class="contactDetails">
                            <h3><i class="fa-solid fa-location-dot"></i></i>Address</h3>
                            <p>H-15 305 BSI Business Park,Noida</p>
                        </div>
                        <div data-aos="fade-left" class="contactDetails">
                            <h3><i class="fa-solid fa-phone"></i>Contact Number</h3>
                           <li><a href="tel: +91 123456789">+91 123456789</a></li>
                        </div>
                        <div data-aos="fade-up" class="contactDetails">
                            <h3><i class="fa-regular fa-clock"></i>Open Hours</h3>
                            <p>Mon-Sat 10:00AM - 6:00PM</p>
                        </div>
                    </div>
                    
                    <form data-aos="zoom-in" method="POST" id="frmContactus">
    
                        
                        <h1>Contact</h1>
                
                        <p>Name</p>
                        <input class="name" type="text" name="name" placeholder="Name" required id="name" onkeydown="return/[a-z A-z]/i.test(event.key)">
                
                        <p>Email</p>
                        <input class="email" type="email" name="email" id="email" placeholder="Email" required>

                        <!-- <p>Mobile</p>
                        <input type="number" class="mobile" name="mobile" id="mobile" required  placeholder="Mobile"> -->
                
                        <p>Message</p> 
                        <textarea class="text" id="comment" name="comment" rows="5" placeholder="Enter your Message" required ></textarea>
                        <button type="submit" id="submit"  >Submit</button> 
                        <span style="color:rgb(255,98,0);" id="msg"></span>
                    </form>
                </div>
                
                <div 
                class="map" data-aos="flip-down">
                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=H-15%20305%20BSI%20Business%20Park,Noida+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
                </div>
            </main>
        </div>
    </div>
    

<footer>
    <?php include('footer.php') ?>
</footer>

<script>
    const sidemenu = document.getElementById('sideMenu')
    function openMenu(){
        sidemenu.style.right = '-100px'
    }

    function closeMenu(){
        sidemenu.style.right = '-250px'
    }
</script>

<script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();   
            //     setTimeout(function()  {
            //     jQuery('#msg').html('')
            // }, 3000);
            }
            
		});
		e.preventDefault();
	  });
	  </script>
    

    <script src="./script.js"></script>

             <!-- aos -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
  });
  </script>


</body>
</html>