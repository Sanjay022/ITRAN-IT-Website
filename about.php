<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="./css/about.css">
</head>
<body>
    <!-- head -->
    <?php include('header.php') ?>


    <!-- about us -->
     <div class="main">
        <div class="container">
            <main>
                
                <div class="info-main">
                    <h1 data-aos="fade-down"></i>We Deal With The Aspects Of Professional IT <span>Services</span></h1>

                    <div class="about-wrap">
                    
                    <img data-aos="fade-right" src="./Images/about2.jpg" alt="">
                        
                    <p data-aos="zoom-in">To be competitive in the rapidly changing technological environment of today's business world, businesses need the expertise and experience that IT service providers can provide. ITRAN, is not just a technology company. We are a team of passionate individuals dedicated to making a difference in the world. Whether it's through our work with non-profit organizations or our commitment to sustainability and social responsibility, we strive to make a positive impact on the world around us. We believe that running a business involves both hard work and smart work. We firmly believe in providing high-quality services that satisfy our clients in terms of cost effectiveness, technical support, customer happiness. We are passionate about helping individuals, defending their morals and dedicating our time to the development of customer-focused products. Our team takes great pride in corresponding with you, responding to your emails, phone calls and support requests, as well as addressing any questions you may have regarding the services. In India as a whole, we have finished numerous projects related to SEO, product websites, business websites and Android and IOS development</p>
                    </div>

                    
                    <div  class="vision">
                        <div data-aos="fade-right">
                            <h2>Vision</h2>
                            <p>Our vision is to become the top supplier of technological solutions that can change how organizations function and add value for their clients. With a team of highly skilled and experienced professionals, we are dedicated to delivering high-quality and cost-effective solutions that meet the unique needs of our clients. To achieve our vision, we are dedicated to investing in our people, processes, and technology, and to fostering a culture of continuous learning, innovation, and collaboration.</p>
                           
                        </div>
                        <div data-aos="fade-left">
                            <h2>Our mission</h2>
                            <p>Our goal is to make your life easier and more comfortable, whether that's through our products or through the information we provide on our website. We can assist you in achieving your objectives and growing your business. We are committed to providing our clients with exceptional customer service, technical expertise and creativity that helps them achieve their goals and stand out in the digital world.</p>
                        </div>
                    </div>

                    <p data-aos="fade-down">In today's fast-paced world, technology is constantly evolving, and keeping up with these changes can be challenging. That's where we come in. Our team of expert technicians and engineers stay ahead of the curve.
        
                    In today's fast-paced world, technology is constantly evolving, and keeping up with these changes can be challenging. That's where we come in. Our team of expert technicians and engineers stay ahead of the curve.</p>
            
                    
                </div>

                <div class="tech">
                    <div data-aos="fade-up-right">
                        <i id="tech-font" class="fa-solid fa-microchip"></i>
                        <h1>Latest Technologies</h1>
                        <p>In today's fast-paced world, technology is constantly evolving, and keeping up with these changes can be challenging. That's where we come in. Our team of expert technicians and engineers.</p>
                    </div>
                    <div data-aos="fade-down">
                        <i id="tech-font" class="fa-solid fa-compass"></i>
                        <h1>Unique Solutions</h1>
                        <p>In today's fast-paced world, technology is constantly evolving, and keeping up with these changes can be challenging. That's where we come in. Our team of expert technicians and engineers.</p>
                    </div>
                    <div data-aos="fade-up-left">
                        <i id="tech-font" class="fa-brands fa-discord"></i>
                        <h1>Powerful Strategis</h1>
                        <p>In today's fast-paced world, technology is constantly evolving, and keeping up with these changes can be challenging. That's where we come in. Our team of expert technicians and engineers.</p>
                    </div>
                </div>
            </main>

            <div class=" swiper">
                <div class="slider-wrapper ">
                    <div class="swiper-wrapper ">
                        <img class="swiper-slide" src="./images/client-1.png" alt="">
                        <img class="swiper-slide" src="./images/client-2.png" alt="">
                        <img class="swiper-slide" src="./images/client-3.png" alt="">
                        <img class="swiper-slide" src="./images/client-4.png" alt="">
                        <img class="swiper-slide" src="./images/client-5.png" alt="">
                        <img class="swiper-slide" src="./images/client-6.png" alt="">
                        <img class="swiper-slide" src="./images/client-7.png" alt="">
                        <img class="swiper-slide" src="./images/client-8.png" alt="">
                        
                        
                    </div>
                    <div class="swiper-pagination"></div>
        
                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
        
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
        
                </div>
                        
            </div>
            
        </div>
     </div>

    
     <!-- footer -->
    <footer>
            <?php include('footer.php') ?>
    </footer>


        <script>

            var sidemenu = document.getElementById("sideMenu")
            
            function openMenu(){
                sidemenu.style.right= "-100px"
               }
        
            function closeMenu(){
                sidemenu.style.right = "-250px"
            }
        </script>
   

<script>
    document.addEventListener('DOMContentLoaded', function() {
     const dropdownToggle = document.getElementById('serviceToggle');
     const dropdownList = document.getElementById('service');

     dropdownToggle.addEventListener('click', function(event) {
         event.stopPropagation(); // Prevents the document click event from triggering
         dropdownList.classList.toggle('openMenu');
     });

     document.addEventListener('click', function() {
         dropdownList.classList.remove('openMenu');
     });
 });
   </script>

   <!-- aos -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
  });
</script>
</body>
</html>