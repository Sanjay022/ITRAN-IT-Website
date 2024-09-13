<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/testimonials.css">
</head>
<body>
   <!-- header -->
    <?php include('header.php') ?>

    <div class="client">
        <div class="container" data-aos="zoom-in">
            <h1>Our Clients <span>Testimonials</span></h1>
            <div class=" swiper">
                    <div class=" swiper-wrapper">
                        <div class="client-wrapper swiper-slide">
                            
                                <img class="client-img" src="./images/testimonials-4.jpg" alt="">
                                <h2>john zabzag</h2>
                                <h6>Web Designer</h6>
                                <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                                </p>                                
                                <div class="star-icons">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        </div>

                        <div class="client-wrapper swiper-slide">
                            
                            <img class="client-img"  src="./images/testimonials-1.jpg" alt="">
                            
                                <h2>ahmed errami</h2>
                                <h6>Web Developer</h6>
                            
                            <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                            </p>                                
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <div class="client-wrapper swiper-slide">
                                
                            <img class="client-img" src="./images/testimonials-3.jpg" alt="">
                            
                                <h2>brahim oliv</h2>
                                <h6>Software Engineering</h6>
                            
                            <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                            </p>                                
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <div class="client-wrapper swiper-slide">
                                    
                            <img class="client-img" src="./images/testimonials-2.jpg" alt="">
                            
                                <h2>Jack Williams</h2>
                                <h6>Web Designer</h6>
                            
                            <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                            </p>                                
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <div class="client-wrapper swiper-slide">
                                        
                            <img class="client-img" src="./images/testimonials-4.jpg" alt="">
                            
                                <h2>john zabzag</h2>
                                <h6>Web Developer</h6>
                            
                            <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                            </p>                                
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <div class="client-wrapper swiper-slide">
                                            
                            <img class="client-img" src="./images/testimonials-5.jpg" alt="">
                            
                                <h2>Steve Smith</h2>
                                <h6>Software Engineering</h6>
                            
                            <p>“I have been working with this IT company for over a year now and I must say, their services are simply exceptional. They are quick to respond to any issue and always provide effective solutions.”
                            </p>                                
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
    
                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
     -->
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
            </div>   
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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
//   direction: 'vertical',
slidesPerView: 3,
breakpoints: {
    320: {
      slidesPerView: 1,
      
    },
    // when window width is >= 480px
    640:{
        slidesPerView: 2,
    },
    // when window width is >= 640px
    800: {
      slidesPerView: 3,
      spaceBetween: 20
    },
},
  loop: true,
  autoplay: true,
  grabCursor: true,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },

//   Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },


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