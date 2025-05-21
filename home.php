<?php
   require 'Connection/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marathi Miles</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-<the SHA hash>" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head> 
<body>
<!-- Fixed Translate Button -->
<button class="translate-btn" onclick="translateText()" id="translateBtn">मराठी / English</button>


<!-- Header Section -->
<header>
<a href="#home" class="brand" id="brandName">Marathi Miles</a>


    <div class="menu-btn"></div>

    <div class="navbar">
        <div class="nav-items">
            <a href="#home" id="nav-home">Home</a>
            <a href="#about" id="nav-about">About</a>
            <a href="#gallary" id="nav-explore">Explore</a>
            <a href="#contact" id="nav-contact">Contact</a>
            <a href="admin_login.php" id="nav-admin">Admin</a>
        </div>
    </div>
</header>


    






        <!-- <a href="#" class="brand">Marathi Miles</a>
        <div class="menu-btn"></div>
        <div class="navbar">
            <div class="nav-items">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#gallary">Explore</a>
                <a href="#contact">Contact</a>
                <a href="admin_login.php">Admin</a>
            </div>
        </div>
        <button class="marathi-btn" onclick="changeToMarathi()">Change Language</button>
        <style>
    .marathi-btn {
      background-color: #ff8800;
      color: #fff8e7;
      border: none;
      padding: 12px 24px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: background-color 0.3s ease, transform 0.2s ease;
      margin-top: 20px;
    }

    .marathi-btn:hover {
      background-color: #cc6e00;
      transform: scale(1.05);
    }
  </style> -->


        <!-- <video src="assets/The Magic of Konkan ｜ Raigad, Ratnagiri, Sindhudurg ｜ Maharashtra Tourism.mp4" autoplay controls="0" id="myVideo"></video> -->
    <!-- </header> -->
    <section class="home">
        <video class="video-slide active" src="assets/videos/beaches.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/videos/Camping.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/videos/temple.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/videos/RoadTrip.mp4" autoplay muted loop></video>
        <video class="video-slide" src="assets/videos/feel_nature.mp4" autoplay muted loop></video>
        <div class="content active">
          <h1 id="heading">Magic of <br><span>Kokan Beaches</span></h1>
          <p id="v1">Explore the captivating charm of Kokan: a paradise where verdant hills cascade into pristine beaches, and the air is filled with the aroma of spices and sea breeze. Immerse yourself in a tapestry of vibrant culture, mouthwatering cuisine, and untouched natural wonders.</p>
          <!-- <a href="#">Read More</a> -->
        </div>
 
        <div class="content">
          <h1 id="headingCamping">Camping <br><span>Enjoy</span></h1>
           <p id="v1Camping">Experience the thrill of camping in Maharashtra, where starlit skies adorn the horizon and the melody of nature lulls you into tranquility. Settle into the embrace of the wilderness, where each sunrise promises adventure and every sunset paints the landscape with hues of wonder.</p>
        </div>

        <div class="content">
            <h1>Maharashtra's  <br><span>Temple Majesty</span></h1>
             <p>Embark on a spiritual odyssey through Maharashtra's revered temples, where ancient traditions merge with divine serenity. Immerse yourself in the tranquil sanctuaries, where echoes of devotion resonate through time.</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>Road Trip <br><span>Together</span></h1>
            <p>Embark on exhilarating road trips through Maharashtra, where every curve unveils breathtaking landscapes and cultural marvels. Cruise along scenic routes, where the journey itself becomes an adventure, promising unforgettable moments and boundless exploration</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>Feel Nature <br><span>Relax</span></h1>
            <p>Experience the raw beauty of nature in Maharashtra, where verdant forests, majestic mountains, and tranquil lakes invite you to reconnect with the earth. Feel the gentle caress of the breeze, listen to the symphony of birdsong, and witness the vibrant colors of flora and fauna painting the landscape.</p>
            <a href="#">Read More</a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>
    <section class="start-journey-section">
    <div class="contain">
        <div class="banner">
            <h2 class="featured-destinations" id="startJourneyHeading">Start Your Journey</h2>
            <p id="startJourneyText">Explore Maharashtra's unexplored gems and embark on an unforgettable adventure.</p>
            <a href="divisions.html" class="explore-button" target="_blank" id="exploreButton">Explore Now</a>
        </div>
    </div>
</section>

    <div class="padding-global">
    <h1 class="dest-header" id="destHeader">Maharashtra's</h1>
    <span class="dest-span" id="destSpan">Must-See Marvels</span>
    <div class="wrapper">
		<div class="card">
			<img src="image/green.jpg" alt="">
			<div class="info">
      <h1 id="fortName">Torna Fort</h1>
      <p id="fortDesc">Torna Fort, also known as Prachanda gad, is a large fort located in Pune district, in the Indian state of Maharashtra</p>
      <a href="#" class="btn" id="readMoreBtn">Read More</a>
			</div>
		</div>
		<div class="card">
			<img src="image/chiplun.jpg" alt="">
			<div class="info">
      <h1 id="mahabaleshwarName">Mahabaleshwar</h1>
      <p id="mahabaleshwarDesc">It is a place of pilgrimage for Hindus because the Krishna river has its origin here.</p>
			<a href="#" class="btn" id="readMoreBtn2">Read More</a>
			</div>
		</div>
		<div class="card">
			<img src="image/D2.jpg" alt="">
			<div class="info">
      <h1 id="panhalaFortName">Panhala Fort</h1>
      <p id="panhalaFortDesc">Panhala fort is located in Panhala, 20 kilometres northwest of Kolhapur in Maharashtra</p>
      <a href="#" class="btn" id="readMoreBtn3">Read More</a>
			</div>
		</div>
		<div class="card">
			<img src="image/D3.jpg" alt="">
			<div class="info">
      <h1 id="shivneriFortName">Shivneri Fort</h1>
       <p id="shivneriFortDesc">Shivneri Fort is a 17th-century military fortification located near Junnar in Pune district in Maharashtra, India.
      It is the birthplace of Chhatrapati Shivaji Maharaj, the founder of Maratha Empire</p>
      <a href="#" class="btn" id="readMoreBtn4">Read More</a>
			</div>
		</div>
	</div>
</div>
<section class="about" id="about">
    <div class="content">
      <div class="items">

        <div class="image">
          <img src="image/about-us.png" alt="" srcset="">
        </div>
        <div class="item">
          <div class="item-content">
          <h2 class="about-title" id="aboutTitle">
              About Us
            </h2>
            <div class="about-desc" id="content">
              <p id="aboutUsPara1">
                Welcome to Marathi Miles! We are your gateway to the enchanting state of Maharashtra, India. With a deep-rooted love for Maharashtra's rich culture, heritage, and natural beauty, we are committed to showcasing the best this region has to offer.
              </p>
              <p id="aboutUsPara2">
                Our team comprises local experts, travel enthusiasts, and cultural aficionados who are passionate about curating immersive experiences that highlight Maharashtra's diverse landscapes, vibrant cities, and captivating history.
              </p>
            </div>
          </div>

          <div class="item-data">
          <div class="col">
            <h1 id="completedTrips">387</h1>
            <span id="completedTripsText">completed trips</span>
          </div>
          <div class="col">
            <h1 id="tourGuides">71</h1>
            <span id="tourGuidesText">Tour Guides</span>
          </div>
          <div class="col">
            <h1 id="destinations">46</h1>
            <span id="destinationsText">Destinations</span>
          </div>

          </div>

         

        </div>

      </div>

    </div>
  </section>
  <section class="gallery" id="gallery">
    <div class="heading">
    <h1 class="title" id="albumTitle">Our Album</h1>
    <p class="subtitle" id="albumSubtitle">We have best Photographers wait you for take your personnel pictures!</p>
    </div>
    <div class="items">

      <div class="card">
        <img src="image/D2.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="image/D3.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="image/img10.png" alt="" srcset="">
      </div>
      <div class="card">
        <img src="image/img17.jpeg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="image/temple.png" alt="" srcset="">
      </div>
      <div class="card">
        <img src="image/matheran.jpg" alt="" srcset="">
      </div>
      
    </div>

  </section>


  <section class="contact" id="contact">

    <div class="content">
      <div class="items">

        <div class="item">
          <div class="heading">
          <h1 class="title" id="contactTitle">Contact Us</h1>
          <div class="subtitle" id="contactSubtitle">We are able to replay within 24 hours. We work in weekend also</div>
          </div>
          <div class="row">
            <div class="card">
              <div class="line">
                <span><i class="ri-phone-line"></i></span>
                <h4 id="callUs">Call us</h4>
              </div>

              <p id="phone1">+917219575148</p>
              <p id="phone2">+917249027655</p>
            </div>
            <div class="card">
            <div class="line">
                <span><i class="ri-mail-line"></i></span>
                <h4 id="mailUsTitle">Mail us</h4>
                </div>
                 <p id="email">marathimiles@travel.com</p>
            </div>
          </div>
        </div>

        <div class="item">
        <form action="insert.php" method="post">
          <input type="text" name="Name" class="input" id="nameInput" placeholder="Your Name">
          <input type="email" name="Email" class="input" id="emailInput" placeholder="Your Email">
          <input type="text" name="Contact" class="input" id="phoneInput" placeholder="Your Phone">
          <textarea rows="6" name="Feedback" class="input" id="feedbackInput" placeholder="Your Feedback"></textarea>
          <button type="submit" name="submit" class="btn-contact" id="submitBtn">Send Feedback!</button>
        </form>
        </div>


      </div>
    </div>
  </section>

  <footer class="footer">

  <br><br>
    <div class="content">
      <h4 id="m1">Marathi Miles</h4>
      <div class="social">
        <span>
          <a href="#f"><i class="ri-facebook-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-instagram-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-twitter-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-linkedin-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-youtube-fill"></i></a>
        </span>
      </div>
      <p>
        
        <i class="ri-double-quotes-r"></i>

      </p>
     
      
    </div>
    <div class="rights">
      Copyrights &#169 <a href="http://" target="_blank" rel="noopener noreferrer">itcode</a>. all rights reserved
    </div>
</footer >
    
    
    <script type="text/javascript">
        const menuBtn=document.querySelector(".menu-btn");
        const navigation=document.querySelector(".navbar");

        menuBtn.addEventListener("click",() => {
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });

        // javascript for video slider animation
        const btns=document.querySelectorAll(".nav-btn");
        const slides=document.querySelectorAll(".video-slide");
        const contents=document.querySelectorAll(".content");

        var sliderNav=function(manual){

            btns.forEach((btn)=>{
                btn.classList.remove("active");
            })

            slides.forEach((slide)=>{
                slide.classList.remove("active");
            })
            contents.forEach((content)=>{
                content.classList.remove("active");
            })
            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
        }

        btns.forEach((btn,i)=>{
            btn.addEventListener("click",()=>{
                sliderNav(i);
            })
        })
    </script>
    <script src="home.js"></script>
</body>
</html>


<style>
      .translate-btn {
    position: fixed;
    top: 35px;
    left: 20px;
    z-index: 1000;
    padding: 5px 14px;
    font-size: 14px;
    background-color: #ffffff;
    color: #ff6600;
    border: 2px solid #ff6600;
    border-radius: 6px;
    cursor: pointer;
    transition: opacity 0.4s ease;
}

.translate-btn:hover {
    background-color: #ff6600;
    color: #fff;
}


      </style>