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
                <img data-aos="fade-down" src="./images/development.jpg" id="web" alt="">
                <div class="service">
                        <p data-aos="fade-up">
                            Make Great Design and help to grow your business
                            According to our thinking, the first destination for all your website design and development needs. We are
                            experienced in web design and development, and we have worked with some of the biggest brands. We are aware of
                            how crucial it is to have a website that is both visually attractive and useful. That’s why our team of web
                            designers and developers work hard to create amazing designs that are optimized for usability and performance.
                            We use the latest version of HTML, CSS, Java, and other languages to create custom website designs that are
                            according to our client’s needs.
                        </p>
                        <div class="details" >
                            <img data-aos="fade-right" src="./images/web_Dev_3.jpg" id="develop" alt="">
                            <div>
                                <p data-aos="fade-up">We provide attractive and user-friendly website service.
                                    Our web design and development services also go beyond just the website itself. We also provide full-scale
                                    digital marketing services, making sure that your website can be found on search engines and other platforms.
                                    Our expert’s team is always ready to help you out with any queries or concerns that you may have. We understand
                                    that each project is unique, and we take the time to understand your requirements and provide a solution that
                                    meets your business goals.
                                <br>
                                    Create outstanding designs to advance your company. The first
                                    place you should go for all of your website design and development needs, in our
                                    opinion. We have expertise in web development and design, and we have collaborated
                                    with some of the most well-known companies. We understand how important it is to
                                    have a website that is both aesthetically pleasing and beneficial. Because of this, our
                                    team of web designers and programmers puts a lot of effort into producing stunning
                                    designs that are enhanced for usability and performance.
                                </p>
                            </div>
                        </div>

                        <div class="details">
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
                            <img data-aos="fade-left" src="./images/web_Dev_2.jpg" id="develop" alt="">
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