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
    <!-- /.......................header .......................... -->
    <?php include('header.php') ?>

    <!-- .................... main ......................... -->
   

    <div class="main">
        <div class="container">
            <main>
                
                <div class="port">
        
                        <img data-aos="fade-right"  src="./images/p (2).jpeg" alt="">
                                 
                    <div class="portfolio-icons" data-aos="fade-left">
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
                    <p>An NFT minting website allows users to create and mint unique digital assets, known as Non-Fungible Tokens (NFTs), on a blockchain. These platforms enable artists, creators, and collectors to convert digital files, such as artwork, music, or videos, into NFTs that verify ownership and authenticity. Users can easily upload their content, connect a crypto wallet, and mint their NFTs for display or sale in a marketplace. These websites often support features like royalty management, wallet integration, and seamless transactions, making them key tools for creators looking to monetize their digital assets on the blockchain.</p>
                    
                    <p>At ITRAN , we bring innovation and expertise to the forefront of IT solutions. As a leading provider, we empower businesses to thrive in the digital landscape by offering cutting-edge technology solutions tailored to your unique needs. From robust cybersecurity strategies to seamless cloud integration and transformative software development, we are your trusted ally on the journey to success. Explore a world of possibilities with our dedicated team of IT professionals, committed to delivering excellence and driving your business towards unparalleled efficiency and growth. Elevate your technology experience – choose itran for IT solutions that transcend expectations.</p>
                    <p>
                    An NFT minting website is a platform designed to allow users, typically artists, creators, or collectors, to create and tokenize digital assets into Non-Fungible Tokens (NFTs) on a blockchain. The minting process involves converting digital files such as images, music, videos, or other forms of media into NFTs, which represent proof of ownership and authenticity of these assets. By using blockchain technology, these platforms ensure that each NFT is unique, verifiable, and cannot be duplicated, adding intrinsic value to the digital creation.
                    </p>
                    <p>On an NFT minting website, users can easily upload their digital content and connect their cryptocurrency wallets to pay for the associated minting fees, usually known as gas fees. These platforms typically support popular blockchains like Ethereum, Binance Smart Chain, Polygon, or Solana, each offering different fee structures and transaction speeds. The website then provides users with the tools to mint their NFTs, assign metadata (like ownership details and attributes), and list their creations for sale or auction on integrated marketplaces.

                    In addition to minting, these websites often include features like royalty management, allowing creators to set a percentage of sales they will receive every time their NFTs are resold in secondary markets. This ongoing revenue stream has made NFT minting platforms highly appealing to digital creators seeking to monetize their work continuously.</p>
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