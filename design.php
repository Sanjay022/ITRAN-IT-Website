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
                <img data-aos="fade-down" src="./images/web-design.png" id="web-design" alt="">

                <div class="service">
                    <p data-aos="fade-up">
                        In today's fast-paced digital landscape, a website is no longer just a static online brochure, but a dynamic and interactive platform that engages users, tells a story, and drives business results. At IT Service Ltd., our team of expert web designers and developers specialize in crafting dynamic websites that are tailored to meet the unique needs of our clients. Our dynamic website design solutions are built on the latest technologies, including HTML5, CSS3, JavaScript, and responsive design, ensuring a seamless user experience across all devices and browsers.
                    </p>
                    <div class="details" >
                        <img data-aos="fade-right" src="./images/dynamic_website-3.gif" style="max-width:100% ;">
                        <div>
                            <p data-aos="fade-up">One of the key benefits of our dynamic website design solutions is their ability to adapt to different screen sizes and devices, ensuring that users have a consistent and optimal experience regardless of how they access the website. Our responsive design approach ensures that the website layout, content, and visuals are optimized for desktops, laptops, tablets, and smartphones, providing a seamless and intuitive user experience across all devices. Additionally, our dynamic websites are designed to be highly secure, with robust security measures in place to protect sensitive user data and prevent cyber threats.
                                <br>
                                At IT Service Ltd., we take a collaborative approach to dynamic website design, working closely with our clients to understand their unique business goals, target audience, and brand identity. Our team of experts will work with you to develop a customized website design that meets your specific needs, whether you're looking to increase conversions, improve user engagement, or simply establish a strong online presence. With our dynamic website design solutions, you can rest assured that your website will be a powerful tool that drives business results and sets you apart from the competition
                            </p>
                        </div>
                    </div>

                    <div  class="details">
                        <div>
                            <p data-aos="fade-up"> To build unique website
                                designs that meet the needs of our clients, we employ the most recent versions of
                                HTML, CSS, Java, and other languages.We offer a service for creating appealing, user-friendly websites. Beyond merely
                                building the website itself, we also offer other web design and development services.
                                We also offer comprehensive digital marketing services, ensuring that search engines
                                and other platforms can find your website. Our knowledgeable staff is available to assist
                                you with any questions or worries you may have. We take the time to learn about your
                                needs and deliver a solution that satisfies your company objectives since we recognise
                                the uniqueness of each project.
                              <br>
                                Web development is the process of designing and creating websites that are functional, user-friendly, and
                                visually appealing. It involves various disciplines, to create websites that meet the needs and expectations of
                                the end-users. At, we specialize in providing customized web development solutions that help businesses to
                                create a strong online presence and achieve their goals.
                              </p>
                        </div>
                        <img data-aos="fade-left" src="./images/web_Dev_2.jpg" id="design" alt="">
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