<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/terms.css">
</head>
<body>
    <!-- /.......................header .......................... -->
    <?php include('header.php') ?>

    <!-- .................... main ......................... -->

   

    <div class="terms">
        <div class="container">
            <div data-aos="fade-up">
                <h1>Terms of <span> Use</span></h1>
                <p>
                    Last Updated: <span>26/01/2024</span> <br>

                    Welcome to itran! <br>

                    By accessing and using our website and services, you agree to comply with and be bound by the following terms and conditions. If you disagree with any part of these terms, please do not use our website or services.
                </p>
            </div>
            <div  data-aos="fade-up">
                <h2>1. Acceptance of Terms</h2>
                <p>By using Itran's website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree with any part of these terms, you may not use our website or services.</p>
            </div>
            <div  data-aos="fade-up">
                <h2>2. Use of Services</h2>
                <p>You agree to use Itran's services only for lawful purposes and in accordance with these Terms of Use. You are responsible for ensuring that your use of our services does not violate any applicable laws or regulations.</p>
            </div>
            <div  data-aos="fade-up">
                <h2>3. User Accounts</h2>
                <p>To access certain features of our services, you may be required to create a user account. You are responsible for maintaining the confidentiality of your account information, including your username and password. You agree to notify us immediately of any unauthorized use of your account.
                </p>
            </div>
            <div  data-aos="fade-up">
                <h2>4. Intellectual Property</h2>
                <p>All content and materials on our website, including but not limited to text, graphics, logos, images, and software, are the property of [Your Company Name] and are protected by intellectual property laws. You may not modify, reproduce, distribute, or display any part of our website or services without our prior written consent.
                </p>
            </div>
            <div  data-aos="fade-up">
                <h2>5. Disclaimer of Warranties</h2>
                <p>Our website and services are provided on an "as-is" and "as-available" basis. We make no warranties, expressed or implied, regarding the accuracy, reliability, or availability of our website or services. We reserve the right to modify, suspend, or discontinue any part of our services without notice.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>6. Limitation of Liability</h2>
                <p>In no event shall Itran be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, arising from your use of our website or services.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>7. Governing Law</h2>
                <p>These Terms of Use shall be governed by and construed in accordance with the laws of [Your Jurisdiction]. Any legal action or proceeding arising out of or relating to these terms shall be brought exclusively in the courts located within [Your Jurisdiction], and you consent to the jurisdiction of such courts.
                </p>
            </div>
            <div data-aos="fade-up">
                <h2>8. Changes to Terms</h2>
                <p>Itran reserves the right to update or modify these Terms of Use at any time without prior notice. Your continued use of our website and services after any changes constitutes acceptance of those changes.</p>
            </div>

            <div data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>If you have any questions or concerns about our Terms of Use, please contact us at <span href="mailto:sanjaybakoliya7@gmail.com">sanjaybakoliya7gmail.com</span> <br>

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