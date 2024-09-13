<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/crypto1.css">
</head>
<body>

<!-- ........... header ..................... -->
<?php include('header.php') ?>


<!-- .................... main .....................-->

    <div class="main">
        <div class="container">
            <main>
                
                <div class="port">
    
                        <img data-aos="fade-right"  src="./images/p (1).png" alt="">
                                
                    <div data-aos="fade-left" class="portfolio-icons">
                        <div>
                            <i class="fa-solid fa-face-smile"></i>
                            <h3>Client</h3>
                            <p>Ahmed errami</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-calendar-days"></i>
                            <h3>Date</h3>
                            <p>10/04/2023</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-list-check"></i>
                            <h3>Service</h3>
                            <p>Web development</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-clock"></i>
                            <h3>Duration</h3>
                            <p>1 week</p>
                        </div> 
                    </div>
                </div>
                <div class="intro" data-aos="fade-up">
                    <h1>About Project</h1>
                    <p>A crypto landing page is a web page designed to attract and engage users with a focus on cryptocurrency-related services or products. It typically highlights key offerings such as crypto trading, wallets, or investment opportunities, using concise messaging and visually appealing elements. The landing page often includes features like user registration, wallet integration, security assurances, and call-to-action buttons, encouraging visitors to sign up or learn more. Optimized for conversions, a crypto landing page aims to build trust, educate users about the platform's benefits, and simplify the onboarding process for new or experienced crypto enthusiasts.</p>
                    
                    <p>At ITRAN , we bring innovation and expertise to the forefront of IT solutions. As a leading provider, we empower businesses to thrive in the digital landscape by offering cutting-edge technology solutions tailored to your unique needs. From robust cybersecurity strategies to seamless cloud integration and transformative software development, we are your trusted ally on the journey to success. Explore a world of possibilities with our dedicated team of IT professionals, committed to delivering excellence and driving your business towards unparalleled efficiency and growth. Elevate your technology experience – choose itran for IT solutions that transcend expectations.</p>

                    <p>A crypto landing page is a dedicated web page designed to introduce visitors to a cryptocurrency-related product or service, with the primary goal of converting them into users, investors, or customers. This type of landing page is typically used by crypto exchanges, wallet providers, blockchain platforms, or crypto-based startups to quickly convey key information about their offerings. With a sleek, minimal design and clear messaging, a crypto landing page focuses on explaining the benefits of the product or service, using concise content, attractive visuals, and compelling calls-to-action (CTAs).</p>

                    <p>These landing pages often feature benefit-driven headlines, an overview of the platform’s unique features, and how it solves a particular problem for users, such as enabling secure trading, storing cryptocurrency, or simplifying decentralized finance (DeFi) operations. Given the complexity of cryptocurrency, crypto landing pages usually include simple guides, infographics, or even explainer videos to help visitors understand how the platform works and how they can benefit from using it.

                    Security and trust are critical factors in the cryptocurrency space, so crypto landing pages typically highlight security features like encryption, two-factor authentication (2FA), and compliance with industry regulations. Additionally, trust signals such as user testimonials, partnerships with well-known blockchain networks, and security certifications are often prominently displayed to reassure potential users.</p>

                    <p>Lastly, clear and effective CTAs such as "Get Started," "Sign Up," or "Join Now" guide users toward taking action, whether it’s creating an account, downloading a wallet app, or investing in a crypto project. The layout is typically optimized for a seamless user experience across devices, ensuring that visitors can easily navigate and engage with the content, whether they are on a desktop or mobile. In essence, a crypto landing page serves as a focused introduction to the world of cryptocurrency while encouraging immediate engagement.</p>
                
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