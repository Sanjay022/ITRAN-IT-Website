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
                <img data-aos="fade-down" src="./images/marketing.jpg" id="web" alt="">
                <div class="service">
                    <p>We offer web designing service that helps companies to improve your business by online performance through the digital marketing and various tools. Our dedicated online marketing team can assist you in identifying, growing, and converting your web-based audience. It refers to modern technology such as Search Engine Optimization (SEO), Social Media Marketing (SMM), and Social Media Optimization (SMO). It involves the use of different method and channels to analyses the market and understands what is beneficial or what isn’t-typically in real time. We initiatives boost traffic, encourage purchases, and raise return on investment. Digital marketing is the promotion of product or services through online. It is safe and cost-effective. Our dedicated staff can assist you in reaching, expanding, and converting your web-based audience.</p>
                    <p>Digital marketing is the process of promoting products, services, or brands using various digital channels such as search engines, social media platforms, email marketing, and more. It involves various tactics such as SEO, PPC, social media marketing, content marketing, and email marketing, to reach and engage with potential customers, we specialize in providing customized digital marketing solutions that help businesses to reach their target audience, increase brand awareness, and drive conversions. Our team of experts uses the latest strategies and techniques to create effective digital marketing campaigns that deliver measurable results.
                    Our comprehensive digital marketing services are designed to help our clients establish a strong online presence, increase brand visibility, drive targeted traffic, and achieve their marketing goals. With our team of experienced digital marketers, cutting-edge tools, and data-driven strategies, we offer a wide range of digital marketing services that can be customized to meet our clients' specific needs.
                    </p>

                   

                    
                   <div class="marketing-points" >
                   <div>
                   <p> <span>1.</span> Search Engine Optimization (SEO): Our SEO services are designed to optimize our clients' websites to rank higher on search engine results pages (SERPs). We conduct thorough keyword research, optimize website content and structure, improve website performance, and implement other SEO best practices to improve organic search visibility, drive targeted traffic, and increase online visibility.
                    </p>
                    <p>
                    <span>2.</span> Pay-Per-Click (PPC) Advertising: Our PPC advertising services include creating and managing strategic paid advertising campaigns on platforms like Google Ads, Bing Ads, and social media platforms. We conduct thorough keyword research, create compelling ad copies, optimize landing pages, and continuously monitor and optimize campaigns to maximize ROI and drive targeted traffic to our clients' websites.
                    </p>
                   </div>
                    <div>
                    <p>
                    <span>3.</span> Social Media Marketing: We offer comprehensive social media marketing services that include creating and managing social media profiles, developing and executing social media strategies, creating engaging content, managing social media advertising campaigns, and monitoring social media performance. Our goal is to help our clients build a strong social media presence, engage with their target audience, and drive brand awareness and loyalty.
                    </p>
                    <p>
                    <span>4.</span> Content Marketing: Our content marketing services are focused on creating high-quality, engaging, and relevant content that resonates with our clients' target audience. We create content strategies, develop content calendars, write and optimize website content, create blogs, infographics, videos, and other types of content to attract, engage, and retain customers.
                    </p>   
                    </div> 
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