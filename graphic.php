<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/developer.css">
</head>
<body>
    <!-- /.......................header .......................... -->
    <?php include('header.php') ?>

    <!-- .................... main ......................... -->
    <div class="main">
        <div class="container">
            <main>
                <img data-aos="fade-down" src="./images/graphic-design.jpg" id="web" alt="">
                <div class="service">
                    <p data-aos="fade-up">
                        We create an attractive and simple design according to our clients need and taste. Our experts
                        designers are expertise to delivered or create a fresh, innovative and conceptual graphic design
                        solution with meaningful message. We make sure that web graphics load quickly, are simple to use, and
                        improve the overall search engine and directory ranking of your web solutions.
          
                    </p>
                    <div class="details" >
                        <img data-aos="fade-right" src="./images/graphic-1.png" id="graphic" alt="">
                        <div>
                            <p data-aos="fade-up"> ITRAN seevice Pvt. Ltd. is a leading  IT company that specializes in providing comprehensive
                                graphic design services. Established in 2012, we have a dedicated team of skilled graphic designers who
                                are
                                experienced in creating visually appealing and effective designs across various media platforms. Our
                                services
                                cover a wide range of graphic design needs, including brand identity, logo design, web design, UI/UX
                                design,
                                print design, social media graphics, and more.
                            </p>
                            <p data-aos="fade-up">
                                ITRAN service Pvt. Ltd. is a leading Indian IT company that specializes in providing comprehensive
                                graphic design services. Established in 2012, we have a dedicated team of skilled graphic designers who
                                are
                                experienced in creating visually appealing and effective designs across various media platforms. Our
                                services
                                cover a wide range of graphic design needs, including brand identity, logo design, web design, UI/UX
                                design,
                                print design, social media graphics, and more.
                            </p>
                        </div>
                    </div>
                    <div>
                    <p data-aos="fade-up">
                    We understand the importance of visual communication in today's competitive business landscape. Our team  of graphic designers works closely with clients to understand their specific design requirements, business goals, and target audience. We then create unique and innovative designs that convey the right message, evoke emotions, and leave a lasting impression on the audience.
                    Our graphic design services encompass various aspects of brand identity, including logo design, color palette, typography, and visual elements. We believe that a strong brand identity is the foundation of a successful business, and our designers are skilled in creating impactful and memorable brand visuals that resonate with the target audience.
                             </p>
                    </div>

                    <div class="details">
                        <div>
                            <p data-aos="fade-up">
             
                                In addition to brand identity, our web design and UI/UX design services focus on creating visually
                                appealing
                                and user-friendly websites and applications. We ensure that our designs are responsive, accessible, and
                                optimized for an engaging user experience on all devices. Our designers also pay attention to the visual
                                hierarchy, navigation, and interaction elements to ensure seamless usability and ease of navigation for
                                the
                                end-users.
                                Our print design services include designing brochures, flyers, posters, business cards, and other marketing
                            collaterals that effectively communicate the client's message and brand image. We pay meticulous attention to
                            details such as layout, typography, color scheme, and imagery to create visually appealing designs that convey
                            the intended message in a compelling manner.
                            Social media graphics are another area of expertise for our graphic designers.
                              </p>
                        </div>
                        <img data-aos="fade-left" src="./images/graphic-2.jpg" alt="">
                    </div>
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
        sidemenu.style.right= "-100px"
       }

    function closeMenu(){
        sidemenu.style.right = "-250px"
    }
    </script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.getElementById('dropdown-toggle');
        const dropdownList = document.getElementById('drop-down');

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevents the document click event from triggering
            dropdownList.classList.toggle('open-menu');
        });

        document.addEventListener('click', function() {
            dropdownList.classList.remove('open-menu');
        });
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