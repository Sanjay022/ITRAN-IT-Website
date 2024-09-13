<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/team.css">
</head>
<body>
   <!-- /.......................header .......................... -->
   <?php include('header.php') ?>

<!-- .................... main ......................... -->


    <div class="team">
        <div class="container">
            <h1>Our Skilled <span>Team</span></h1>
           <div class="team-member">
            <div data-aos="fade-up-right" class="team-wrap">
                <img src="./images/testimonials-1.jpg" alt="">
                <h2>Jay Kumar</h2>
                <p>Web developer</p>
                <div class="team-icons">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://x.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="team-wrap" data-aos="fade-down">
                <img src="./images/testimonials-2.jpg" alt="">
                <h2>Suraj Kumar</h2>
                <p>founder</p>
                <div class="team-icons">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://x.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="team-wrap" data-aos="fade-up-left">
                <img src="./images/testimonials-3.jpg" alt="">
                <h2>Tarun Sharma</h2>
                <p>sales manager</p>
                <div class="team-icons">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://x.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
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
    const scriptURL = 'https://script.google.com/macros/s/AKfycbySKKhEm6UGc92WNjpeHrDZkqt4X3xAFTXHL6B_q0OKN2LhYslEJ45O583dChytHYyJ/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById('msg')
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML = "Message sent Successfully!"
            setTimeout(function(){
                msg.innerHTML = ""
            }, 2000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>

  <script>
    // const dropdown = document.getElementById('drop-down')

    // function toggleMenu(){
    //     dropdown.classList.toggle('open-menu')
    // }

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