@extends('layout')

@section('content')
<!-- Header -->
<section class="header">
   <h3>THE ULTIMATE LUXURY</h3>
   <h1>About Us</h1>
   <div class="header-navigation">
      <b>Home</b>
      <b>|</b>
      <b>About</b>
   </div>
</section>
<!-- Description -->
<section class="about-description">
   <div class="about-description-video-wrapper">
      <div class="about-description-video">
         <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=15&end=90" title="Hotel Miranda in Bayahibe Dom. Rep. 4K" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
         </iframe>
      </div>
   </div>
   <h2>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h2>
   <div class="about-description-cards">
      <div class="about-description-card">
         <img src="/public/Icons/breakfast.svg" />
         <b>Breakfast</b>
      </div>
      <div class="about-description-card">
         <img src="/public/Icons/plane.svg" />
         <b>Airport Pickup</b>
      </div>
      <div class="about-description-card">
         <img src="/public/Icons/city-guide.svg" />
         <b>City Guide</b>
      </div>
      <div class="about-description-card about-description-card--hide">
         <img src="/public/Icons/bbq.png" />
         <b>BBQ PARTY</b>
      </div>
      <div class="about-description-card">
         <img src="/public/Icons/luxury.svg" />
         <b>Luxury Room</b>
      </div>
   </div>
</section>
<!-- Tour -->
<section class="about-tour">
   <img src="/public/Images/hotel-6.jpg" />
   <div class="about-tour-details">
      <strong>Restaurant</strong>
      <h2>Get Restaurant Facilities & Many Other More</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et
         dolore
         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
      <button onclick="window.location.href='/offers';" class="button-primary">TAKE A TOUR</button>
   </div>
</section>
<!-- Features -->
<section class="about-features">
   <strong>Facilities</strong>
   <h2>Core Features</h2>
   <div class="about-features-container">
      <div class="swiper about-features-swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/rating.png" />
                  <h3>Have High Rating</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>01</b>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/quiet-hours.png" />
                  <h3>Quiet Hours</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>02</b>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/best-location.svg" />
                  <h3>Best Locations</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>03</b>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/free-cancelation.png" />
                  <h3>Free Cancellation</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>04</b>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/payment.svg" />
                  <h3>Payment Options</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>05</b>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="about-features-feature">
                  <img src="/public/Icons/special-offers.svg" />
                  <h3>Special Offers</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna..</p>
                  <b>06</b>
               </div>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<!-- Awards -->
<section class="about-awards">
   <strong>Counter</strong>
   <h2>Some Fun Facts</h2>
   <div class="about-awards-cards">
      <div class="about-awards-card">
         <img src="/public/Icons/happy.svg" />
         <div class="about-awards-card-text">
            <strong>8000</strong>
            <span>Happy Users</span>
         </div>
         <button class="icon">
            <img src="/public/Icons/arrow-more.svg" />
         </button>
      </div>
      <div class="about-awards-card">
         <img src="/public/Icons/reviews.svg" />
         <div class="about-awards-card-text">
            <strong>10M</strong>
            <span>Reviews & Appriciate</span>
         </div>
         <button class="icon">
            <img src="/public/Icons/arrow-more.svg" />
         </button>
      </div>
      <div class="about-awards-card">
         <img src="/public/Icons/world.svg" />
         <div class="about-awards-card-text">
            <strong>100</strong>
            <span>Country Coverage</span>
         </div>
         <button class="icon">
            <img src="/public/Icons/arrow-more.svg" />
         </button>
      </div>
   </div>
   <div class="swiper about-awards-gallery-swiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <img src="/public/Images/hotel-1.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="/public/Images/hotel-2.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="/public/Images/hotel-6.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="/public/Images/hotel-7.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="/public/Images/hotel-8.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="/public/Images/hotel-5.jpg" />
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>
<!-- Scripts -->
<script type="module" src="/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
   const isDesktop = window.innerWidth >= 1000

   if (isDesktop) {
      const classname = 'about-features-swiper'
      const aboutFeaturesSwiper = document.getElementsByClassName(classname)[0]
      aboutFeaturesSwiper.classList.toggle('swiper')
      aboutFeaturesSwiper.classList.toggle(classname)
      aboutFeaturesSwiper.classList.toggle(classname + '--desktop')
   } else {
      const aboutFeaturesSwiper = new Swiper(".about-features-swiper", {
         pagination: {
            el: ".swiper-pagination",
            clickable: true
         }
      });
   }

   if (isDesktop) {
      const classname = 'about-awards-gallery-swiper'
      const aboutAwardsGallerySwiper = document.getElementsByClassName(classname)[0]
      aboutAwardsGallerySwiper.classList.toggle('swiper')
      aboutAwardsGallerySwiper.classList.toggle(classname)
      aboutAwardsGallerySwiper.classList.toggle(classname + '--desktop')
   } else {
      const aboutAwardsGallerySwiper = new Swiper(".about-awards-gallery-swiper", {
         pagination: {
            el: ".swiper-pagination",
            clickable: true
         },
      })
   }
</script>
@endsection