<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/privacy.css">
</head>
<body>
    <!-- /.......................header .......................... -->
    <?php include('header.php') ?>

    <!-- .................... main ......................... -->
   

    <div class="terms">
        <div class="container">
            <div data-aos="fade-up">
                <h1>Privacy <span> Policy</span></h1>
                <p>
                    Last Updated: <span>26/01/2024</span> <br>

                    Welcome to itran! <br>

                    we are committed to protecting the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect your information when you use our website and services. By using our website and services, you consent to the practices described in this Privacy Policy. Please take a moment to review this document carefully.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>Information We Collect</h2>
                <div>
                    <h4>Personal Information</h4>
                <p>We may collect personal information that you provide directly to us, such as your name, email address, phone number, and company information. This information is collected when you sign up for our services, subscribe to newsletters, or contact us for support.
                </p>
                </div>
                <div>
                    <h4>Log Data</h4>
                <p>Like many websites, we may collect information that your browser sends whenever you visit our website. This may include your IP address, browser type, browser version, the pages of our website that you visit, the time and date of your visit, the time spent on those pages, and other statistics.
                </p>
                </div>
                <div>
                    <h4>Cookies</h4>
                <p>We use cookies to collect information and improve our services. Cookies are small data files that are stored on your device. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our website.
                </p>
                </div>
            
            </div>
            <div data-aos="fade-up">
                <h2>Information Sharing</h2>
                <p>We do not sell, trade, or rent your personal information to third parties. However, we may share your information with trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>Security</h2>
                <p>We take the security of your information seriously and implement industry-standard measures to protect it. However, no method of transmission over the internet or electronic storage is 100% secure. Therefore, we cannot guarantee its absolute security.            </p>
            </div>
            <div data-aos="fade-up">
                <h2>Your Choices</h2>
                <p>You can control the information we collect by adjusting your browser settings, unsubscribing from newsletters, or contacting us directly. You may also request access, correction, or deletion of your personal information by reaching out to our privacy team.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>Changes to This Privacy Policy</h2>
                <p>We may update this Privacy Policy from time to time. The date of the latest revision will be indicated at the top of the page. We encourage you to review this Privacy Policy periodically for any changes.
                </p>
            </div>
           
            <div data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>If you have any questions or concerns about our Terms of Use, please contact us at <span>sanjaybakoliya7gmail.com</span> <br>

                    Thank you for choosing Itran. We appreciate your cooperation and adherence to these terms.
                    
                    </p>
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