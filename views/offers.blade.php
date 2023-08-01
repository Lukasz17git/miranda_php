@extends('layout')

@section('content')
    <!-- Header -->
    <section class="header">
        <h3>THE ULTIMATE LUXURY</h3>
        <h1>Our Offers</h1>
        <div class="header-navigation">
            <b>Home</b>
            <b>|</b>
            <b>Offers</b>
        </div>
    </section>
    <!-- Offers List -->
    <section class="offers">
        @foreach ($offerRooms as $room)
            <div class="offers-room">
                <?php
                $imageNames = ['hotel-1.jpg', 'hotel-2.jpg', 'hotel-4.jpg', 'hotel-5.jpg', 'hotel-6.jpg', 'hotel-7.jpg', 'hotel-8.jpg'];
                $randomIndex = array_rand($imageNames);
                $randomImage = $imageNames[$randomIndex];
                $discount = ($room['price'] * (100 - $room['discount'])) / 100;
                ?>
                <img onclick="window.location.href='/offersdetails';" src="/public/Images/{{ $randomImage }}"
                    loading="lazy" />
                <div class="offers-room-data">
                    <div class="offers-room-data-header">
                        <strong>{{ $room['name'] }}</strong>
                        <h2 onclick="window.location.href='/offersdetails/{{ $room['id'] }}';">{{ $room['name'] }}</h2>
                        <div class="offers-room-data-header-prices">
                            <b class="room-price--old">{{ $room['price'] }}</b>
                            <b class="room-price--new">{{ $discount }}</b>
                        </div>
                    </div>
                    <div class="offers-room-data-content">
                        <p>{{ $room['description'] }}</p>
                        <ul class="offers-room-data-amenities-list">
                            <li>
                                <img src="/public/Icons/air-conditioner.svg" />
                                <b>Air Conditioner</b>
                            </li>
                            <li>
                                <img src="/public/Icons/wifi-2.svg" />
                                <b>High speed WiFi</b>
                            </li>
                            <li>
                                <img src="/public/Icons/breakfast-2.svg" />
                                <b>Breakfast</b>
                            </li>
                            <li>
                                <img src="/public/Icons/kitchen.svg" />
                                <b>Kitchen</b>
                            </li>
                            <li>
                                <img src="/public/Icons/cleaning.svg" />
                                <b>Cleaning</b>
                            </li>
                            <li>
                                <img src="/public/Icons/shower.svg" />
                                <b>Shower</b>
                            </li>
                            <li>
                                <img src="/public/Icons/grocery.svg" />
                                <b>Grocery</b>
                            </li>
                            <li>
                                <img src="/public/Icons/bed-2.svg" />
                                <b>Single bed</b>
                            </li>
                            <li>
                                <img src="/public/Icons/near-shop.svg" />
                                <b>Shop near</b>
                            </li>
                            <li>
                                <img src="/public/Icons/towels.svg" />
                                <b>Towels</b>
                            </li>
                            <li>
                                <img src="/public/Icons/support.svg" />
                                <b>24/7 Online Support</b>
                            </li>
                            <li>
                                <img src="/public/Icons/key.svg" />
                                <b>Strong Locker</b>
                            </li>
                            <li>
                                <img src="/public/Icons/lock.svg" />
                                <b>Smart Security</b>
                            </li>
                            <li>
                                <img src="/public/Icons/expert-team.svg" />
                                <b>Expert Team</b>
                            </li>
                        </ul>
                        <button class="button-primary" onclick="window.location.href='/offersdetails';">Book Now</button>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <!-- Popular -->
    <section class="offers-popular">
        <strong>POPULAR LIST</strong>
        <h2>Popular Rooms</h2>
        <div class="swiper offers-popular-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-2.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-5.jpg" />
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
                    <img src="/public/Images/hotel-4.jpg" />
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <button class="icon icon-navigation--left">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
            <button class="icon icon-navigation--right">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
        </div>
        <div class='offers-popular-properties'>
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
        </div>
        <div thumbsSlider="" class="swiper offers-popular-swiper-text">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Minimal Duplex Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">295</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Duplex Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">345</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Big Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">365</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Minimal Big Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">420</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Premium Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">550</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Premium Room 2</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">500</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-popular-room">
                        <h3 class="room-name">Duplex Room</h3>
                        <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor
                            incididunt ut labore et dolore.</p>
                        <div class="room-data">
                            <b class="room-price">345</b>
                            <div class="room-booking">Booking Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script type="module" src="/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const heroRoomsSwiperText = new Swiper(".offers-popular-swiper-text", {
            spaceBetween: 10,
            slidesPerView: 1,
            freeMode: true,
            watchSlidesProgress: true,
            effect: 'fade',
            allowTouchMove: false
        });

        const heroRoomsSwiper = new Swiper(".offers-popular-swiper", {
            navigation: {
                nextEl: ".icon-navigation--right",
                prevEl: ".icon-navigation--left",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            thumbs: {
                swiper: heroRoomsSwiperText,
            },
        });
    </script>
@endsection
