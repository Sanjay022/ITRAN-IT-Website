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
    
<!-- ..................... header ......................... -->
    <?php include('header.php')  ?>

    <div class="main">
        <div class="container">
            <main>
                
                <div class="port">
        
                        <img data-aos="fade-right" src="./images/p (3).jpeg" alt="">
                                
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
                <div data-aos="fade-up" class="intro">
                    <h1>About Project</h1>
                    <p>The Erramix Portfolio Website is a digital showcase designed to highlight the expertise and creative work of Erramix, a professional or business entity. It serves as an online portfolio where users can explore a wide range of projects, services, and achievements in fields such as design, development, or other creative industries. With a clean, intuitive design, the site provides an easy-to-navigate interface that presents Erramix's skills, past collaborations, and client testimonials. The portfolio website acts as a powerful tool for attracting potential clients, networking opportunities, and demonstrating the brand's unique value and capabilities in the market.</p>

                    <p>At ITRAN , we bring innovation and expertise to the forefront of IT solutions. As a leading provider, we empower businesses to thrive in the digital landscape by offering cutting-edge technology solutions tailored to your unique needs. From robust cybersecurity strategies to seamless cloud integration and transformative software development, we are your trusted ally on the journey to success. Explore a world of possibilities with our dedicated team of IT professionals, committed to delivering excellence and driving your business towards unparalleled efficiency and growth. Elevate your technology experience – choose itran for IT solutions that transcend expectations.</p>

                    <p>
                    The Erramix Portfolio Website serves as a dynamic showcase for Erramix’s expertise, offering a comprehensive display of its projects, skills, and services. Designed to highlight a range of creative and technical capabilities, the website is a visual and interactive experience that reflects the brand's professional strengths in areas such as design, development, and innovation. With a clean and user-friendly interface, visitors can easily navigate through different sections, exploring case studies, past projects, and testimonials that demonstrate Erramix’s ability to deliver high-quality results.

                    The portfolio website is structured to appeal to potential clients and collaborators, providing detailed insights into Erramix's process and approach to problem-solving. Each project is presented with clarity, focusing on the objectives, execution, and outcomes, allowing users to understand the depth of the work involved. The use of high-quality visuals, interactive elements, and a responsive design ensures that the portfolio looks impressive across all devices, whether viewed on a desktop or mobile
                    </p>
                    <p>
                    Additionally, the website emphasizes Erramix’s commitment to creativity and innovation, with a focus on staying at the forefront of design trends and technological advancements. By incorporating engaging content and storytelling, the portfolio not only showcases the technical proficiency of Erramix but also its creative vision and ability to craft unique solutions tailored to each client’s needs.
                    </p>
                </div>
            
            </main>
        </div>
    </div>
    
    <!-- .................. footer ................. -->
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