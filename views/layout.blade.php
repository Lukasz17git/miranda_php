<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" type="image/svg+xml" href="/public/favicon.ico" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Miranda Website</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="/css/App.css">
   <link rel="stylesheet" href="/css/Button.css">
   <link rel="stylesheet" href="/css/Icon.css">
   <link rel="stylesheet" href="/css/Navbar.css">
   <link rel="stylesheet" href="/css/Header.css">
   <link rel="stylesheet" href="/css/Room.css">
   <link rel="stylesheet" href="/css/Availability.css">
   <link rel="stylesheet" href="/css/AboutUs.css">
   <link rel="stylesheet" href="/css/Video.css">
   <link rel="stylesheet" href="/css/Features.css">
   <link rel="stylesheet" href="/css/Awards.css">
   <link rel="stylesheet" href="/css/Footer.css">
   <link rel="stylesheet" href="/css/Menu.css">
   <link rel="stylesheet" href="/css/HeroRooms.css">
   <link rel="stylesheet" href="/css/Burger.css">

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

   <!-- About Section -->
   <link rel="stylesheet" href="/css/AboutDescription.css">
   <link rel="stylesheet" href="/css/AboutTour.css">
   <link rel="stylesheet" href="/css/AboutFeatures.css">
   <link rel="stylesheet" href="/css/AboutAwards.css">

   <!-- Contact Section -->
   <link rel="stylesheet" href="/css/ContactCards.css">
   <link rel="stylesheet" href="/css/ContactForm.css">
   <link rel="stylesheet" href="/css/ContactLocation.css">

   <!-- Room Section -->
   <link rel="stylesheet" href="/css/RoomsContainer.css">

   <!-- Room Details Section -->
   <link rel="stylesheet" href="/css/RoomDetails.css">

   <!-- Offers Section -->
   <link rel="stylesheet" href="/css/OffersRooms.css">
   <link rel="stylesheet" href="/css/OffersPopular.css">
</head>

<body>

   <!-- Navbar -->
   <nav class="navbar">
      <section id='navbar-section' class="navbar-section">
         <button id='burger' class="icon navbar-burger">
            <svg width="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
               <path d="M30 33h40c3.723 0 7.5 3.126 7.5 8.578S74.773 50 70 50H50" class="line top" />
               <path d="M30 50h40" class="line middle" />
               <path d="M70 67H30s-7.5-.802-7.5-8.366C22.5 51.071 30 50 30 50h20" class="line bottom" />
            </svg>
         </button>
         <div class="navbar-logo">
            <a href="/" class="navbar-logo-icon">
               <img src="/public/Icons/logo-icon.svg" alt="logo-icon" />
            </a>
            <img src="/public/Icons/logo-name.svg" alt="logo-name" />
         </div>
         <button onclick="window.location.href='/contact';" class="icon navbar-account">
            <img src="/public/Icons/account.svg" alt="account" />
         </button>
         <button onclick="window.location.href='/roomslist';" class="icon navbar-search">
            <img src="/public/Icons/search.svg" alt="search" />
         </button>
         <ul class="navbar-navigation">
            <li></li>
            <li>
               <a href="/about">About Us</a>
            </li>
            <li>
               <a href="/rooms">Rooms</a>
            </li>
            <li>
               <a href="/offers">Offers</a>
            </li>
            <li>
               <a href="/contact">Contact</a>
            </li>
         </ul>
      </section>
   </nav>
   @yield('content')
   <!-- Footer -->
   <footer>
      <section class="footer-first">
         <div class="footer-social">
            <div class="footer-social-logo">
               <strong class="footer-social-logo-icon">H</strong>
               <div class="footer-social-logo-text">
                  <strong>HOTEL</strong>
                  <strong>MIRANDA</strong>
               </div>
            </div>
            <p>
               Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore
               et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <ul>
               <li>
                  <a href="https://www.facebook.com/" target="_blank" class="icon">
                     <img src="/public/Icons/facebook.svg" />
                  </a>
               </li>
               <li>
                  <a href="https://twitter.com/home" target="_blank" class="icon">
                     <img src="/public/Icons/twitter.svg" />
                  </a>
               </li>
               <li>
                  <a href="https://www.binance.com/" target="_blank" class="icon">
                     <img src="/public/Icons/benance.svg" />
                  </a>
               </li>
               <li>
                  <a href="https://www.linkedin.com/" target="_blank" class="icon">
                     <img src="/public/Icons/linkedin.svg" />
                  </a>
               </li>
               <li>
                  <a href="https://www.youtube.com/" target="_blank" class="icon">
                     <img src="/public/Icons/youtube.svg" />
                  </a>
               </li>
            </ul>
         </div>
         <div class="footer-services">
            <h3>Services.</h3>
            <ul class="footer-services-list">
               <li>Restaurant & Bar</li>
               <li>Swimming Pool</li>
               <li>Wellness & Spa</li>
               <li>Restaurant</li>
               <li>Conference Room</li>
               <li>Coctail Party House</li>
               <li>Gaming Zone</li>
               <li>Marrige Party</li>
               <li>Party Planning</li>
               <li>Tour Consultancy</li>
            </ul>
         </div>
         <div class="footer-contacts">
            <h3>Contact Us.</h3>
            <div class="footer-contacts-wrapper">
               <div class="footer-contact">
                  <img src="/public/Icons/phone-number.svg" />
                  <div class="footer-contact-data">
                     <b>Phone Number</b>
                     <span>+34 655 94 74 99</span>
                  </div>
               </div>
               <div class="footer-contact">
                  <img src="/public/Icons/email.png" />
                  <div class="footer-contact-data">
                     <b>Email</b>
                     <span>lucas.m2295@gmail.com</span>
                  </div>
               </div>
               <div class="footer-contact">
                  <img src="/public/Icons/location.png" />
                  <div class="footer-contact-data">
                     <b>Location</b>
                     <span>Miranda</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-last">
         <div class="footer-last-wrapper">
            <p>Copyright By @ Example - 2020</p>
            <p>Terms of use | Privacy Environmental Policy</p>
         </div>
      </section>
   </footer>

</body>

</html>