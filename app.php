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
                <img data-aos="fade-down" src="./images/app-2.jpeg" id="web" alt="">
                <div class="service">
                    <p data-aos="fade-up">
                       
                        App development is the process of designing and creating mobile applications for various platforms, including iOS and Android. It involves various stages, including planning, designing, coding, testing, and launching the app in the app store. At PSS Techno Service, we specialize in providing customized app development solutions that meet the unique requirements of our clients. Our team of experts uses the latest technologies and industry best practices to create apps that are user-friendly, innovative, and scalable. We help businesses to create mobile applications that enhance customer engagement, increase brand visibility, and drive revenue.
                    
          
                    </p>
                    <div class="details" >
                        <img data-aos="fade-right" src="./images/app-3.jpg" id="graphic" alt="">
                        <div>
                            <p data-aos="fade-up"> 
                                ITRAN service pvt. ltd. is leading for mobile application. We developed android and ios application services for our clients, startups, and company. According to your company requirements, our experienced and dedicated developers can design and develop a creative, customer-focused mobile application that offers your users a distinctive and user-friendly experience. We   used latest technologies to build high-quality, and feature-rich apps. Pros of using App development:-
        
                            </p>
                            <p data-aos="fade-up">
                            Once the planning and prototyping stages are complete, our development team takes over and begins the implementation phase. We follow industry best practices and utilize the latest tools and technologies to build robust, scalable, and high-performing mobile applications. Our developers are proficient in various programming languages, including Java, Kotlin, Swift, Objective-C, and React Native, among others, and are skilled in using popular mobile app development frameworks such as Flutter and Xamarin.

                            </p>
                        </div>
                    </div>
                    <p> ITRAN Service Pvt. Ltd., we offer comprehensive app development services that cater to the unique needs of our clients. With over 10 years of experience in the IT sector, we have the expertise and capabilities to plan, prototype, implement, and enhance mobile applications that help our clients reach their company goals.</p>


                    <div class="details">
                        
                        <div>
                            <p data-aos="fade-up">
             
                           
                            Our app development process begins with careful planning, where we work closely with our clients to understand their requirements, objectives, and target audience. Our team of skilled app developers conducts thorough research to identify the most suitable platforms, technologies, and frameworks for the project. We then create detailed prototypes and mockups, ensuring that the app's design and functionality align with the client's vision.

                            
                            Our app development services cover a wide range of mobile platforms, including iOS, Android, and cross-platform app development. We ensure that the apps we develop are optimized for performance, security, and user experience. We also conduct rigorous testing to identify and fix any bugs or issues, ensuring that the app is stable and reliable before deployment.

                            In addition to the core app development process, we offer comprehensive enhancement services to help our clients continuously improve their mobile applications.

                        </div>
                        <img data-aos="fade-left" src="./images/app-1.jpg" alt="">
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