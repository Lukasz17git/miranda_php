@extends('layout')
../public
@section('content')
<!-- Header -->
<section class="header">
   <h3>THE ULTIMATE LUXURY</h3>
   <h1>Ultimate Room</h1>
   <div class="header-navigation">
      <button onclick="goListMode()" class="header-grid-toggle">
         <img src="/public/Icons/list.svg" />
      </button>
      <b>Home</b>
      <b>|</b>
      <b>Rooms</b>
   </div>
</section>
<!-- Rooms Container -->
<section class="rooms-container">
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-1.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Minimal Duplex Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">295</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-2.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="/public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Duplex Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor. Consectetur adipi
            sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">345</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-5.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="/public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Big Premium Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">565</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-6.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="/public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Big Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">480</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-7.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="/public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Premium Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">415</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
   <div class="room-container">
      <img onclick="addBookNowHandler()" src="/public/Images/hotel-8.jpg" />
      <div class="room-details-wrapper">
         <div class="room-properties">
            <div class="icon">
               <img src="/public/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/public/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
         <h2 onclick="addBookNowHandler()">Simple Room</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
      </div>
      <div class="room-data">
         <b class="room-price">290</b>
         <button onclick="addBookNowHandler()" class="room-booking">Booking Now ↗</button>
      </div>
   </div>
</section>
<!-- Navigation -->
<section class="rooms-navigation">
   <button class="icon" onclick="prevPage()">
      <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
   </button>
   <button id="page-1" class="icon" onclick="pagination(1)">1</button>
   <button id="page-2" class="icon" onclick="pagination(2)">2</button>
   <button id="page-3" class="icon" onclick="pagination(3)">3</button>
   <button class="icon" onclick="nextPage()">
      <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
   </button>
</section>
<!-- Scripts -->
<script type="module" src="/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
   const addBookNowHandler = () => {
      const params = window.location.search.substring(1)
      window.location.href = "/details/?" + params
   }

   const goListMode = () => {
      const params = window.location.search.substring(1)
      window.location.href = "/roomslist/?" + params
   }

   const isPageInParams = window.location.search.lastIndexOf('page') + 1
   const currentPage = isPageInParams ? window.location.search[window.location.search.length - 1] : 1

   const pagination = (number) => {
      const {
         pathname,
         search
      } = window.location
      const isInPage = search.includes('page')
      const newUri = isInPage ? pathname + search.slice(0, search.lastIndexOf('=') + 1) + number : search ? pathname + search + '&page=' + number : pathname + '?page=' + number
      window.location.href = newUri
   }
   const nextPage = () => pagination(currentPage < 3 ? currentPage + 1 : currentPage)
   const prevPage = () => pagination(currentPage > 1 ? currentPage - 1 : currentPage)

   const addActivePageDecoration = () => {
      const pageButton = document.getElementById('page-' + currentPage)
      pageButton.classList.toggle('rooms-navigation--active')
   }
   addActivePageDecoration()
</script>
@endsection