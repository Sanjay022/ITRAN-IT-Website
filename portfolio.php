<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="./css/portfolio.css">
</head>
<body>
    <!-- /.......................header .......................... -->
    <?php include('header.php') ?>

    <!-- .................... main ......................... -->
   

    <div class="main">
        <div class="container">
            <main>
                <h1>Our Latest <span>Project</span></h1>
                <div class="port">
        
                    <div data-aos="fade-down-right">
                        <img  src="./images/p (1).png" alt="">
                        <h1><a href="./crypto1.php">Crypto landing Page</a></h1>
                        <p>landing Page UI design</p>
            
                    </div>
                    <div data-aos="fade-down-left">
                        <img src="./images/p (2).jpeg" alt="">
                        <h1><a href="./nft1.php">NFT Minting Website </a></h1>
                        <p>landing Page UI design</p>

                    </div>
                    <div data-aos="fade-up-right" >
                        <img  src="./images/p (3).jpeg" alt="">
                        <h1><a href="./crypto2.php">Erramix Portfolio Website</a></h1>
                        <p>website developement</p>
            
                    </div>
                    <div data-aos="fade-up-left">
                        <img src="./images/p (4).png" alt="">
                        <h1><a href="./nft2.php">Agency Landing Page</a></h1>
                        <p>website design + developement</p>

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