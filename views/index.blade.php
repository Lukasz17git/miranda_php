@extends('layout')

@section('content')
    <!-- Header -->
    <section class="header">
        <h3>THE ULTIMATE LUXURY EXPERIENCE</h3>
        <h1>The Perfect <br> Base For You</h1>
        <div class="header-buttons">
            <button class="button-primary" onclick="window.location.href='/roomslist';">TAKE A TOUR</button>
            <button class="button-secondary" onclick="window.location.href='/contact';">LEARN MORE</button>
        </div>
    </section>
    <!-- Availability -->
    <section class="hero-availability">
        <form id="availability-form" class="hero-availability-wrapper">
            <label>
                <span>Arrival Date</span>
                <input type="date" id="start" required />
            </label>
            <label>
                <span>LeDeparture Date</span>
                <input type="date" id="end" required />
            </label>
            <input type="submit" value="CHECK AVAILABILITY" class="button-primary" />
        </form>
    </section>
    <!-- About Us -->
    <section class="hero-about-us">
        <div class="hero-about-us-content">
            <strong>ABOUT US</strong>
            <div class="hero-about-us-background"></div>
            <h2>Discover Our Underground.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat.</p>
            <button class="button-primary" onclick="window.location.href='/rooms';">Book Now</button>
        </div>
        <div class="hero-about-us-cards">
            <div class="hero-about-us-card">
                <img class="hero-about-us-photo-primary" src="/public/Images/hotel-1.jpg" alt="hotel-1" />
                <div class="hero-about-us-card-primary">
                    <img src="/public/Icons/people.svg" />
                    <h3>Strong Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="hero-about-us-card">
                <img class="hero-about-us-photo-secondary" src="/public/Images/hotel-2.jpg" alt="hotel-1" />
                <div class="hero-about-us-card-secondary">
                    <img src="/public/Icons/room-picker.svg" />
                    <h3>Luxury Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider -->
    <section class="hero-rooms">
        <strong>Rooms</strong>
        <h2>Hand Picked Rooms</h2>
        <div class='hero-rooms-properties'>
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
        <div class="swiper hero-rooms-swiper">
            <div class="swiper-wrapper">
                @foreach ($rooms as $room)
                    <div class="swiper-slide">
                        <?php
                        $imageNames = ['hotel-1.jpg', 'hotel-2.jpg', 'hotel-4.jpg', 'hotel-5.jpg', 'hotel-6.jpg', 'hotel-7.jpg', 'hotel-8.jpg'];
                        $randomIndex = array_rand($imageNames);
                        $randomImage = $imageNames[$randomIndex];
                        ?>
                        <img src="/public/Images/{{ $randomImage }}" />
                    </div>
                @endforeach
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <button class="icon icon-navigation--left">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
            <button class="icon icon-navigation--right">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
        </div>
        <div thumbsSlider="" class="swiper hero-rooms-swiper-text">
            <div class="swiper-wrapper">
                @foreach ($rooms as $room)
                    <div class="swiper-slide">
                        <div class="hero-rooms-room">
                            <h3 class="room-name">{{ $room['name'] }}</h3>
                            <p class="room-description">{{ $room['description'] }}</p>
                            <b class="room-price">{{ $room['price'] }}</b>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="hero-video">
        <strong>INTRO VIDEO</strong>
        <h2>Meet With Our Luxury Place.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat you have to understand this.</p>
        <div class="hero-video-wrapper">
            <div class="hero-video-play">
                <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=15&end=90"
                    title="Hotel Miranda in Bayahibe Dom. Rep. 4K" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <button class="button-primary" onclick="window.location.href='/roomslist';">Book Now</button>
    </section>
    <!-- Features -->
    <section class="hero-features">
        <strong>Facilities</strong>
        <h2>Core Features</h2>
        <div class="hero-features-container">
            <div class="swiper hero-features-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
                            <img src="/public/Icons/rating.png" />
                            <h3>Have High Rating</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna..</p>
                            <b>01</b>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
                            <img src="/public/Icons/quiet-hours.png" />
                            <h3>Quiet Hours</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna..</p>
                            <b>02</b>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
                            <img src="/public/Icons/best-location.svg" />
                            <h3>Best Locations</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna..</p>
                            <b>03</b>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
                            <img src="/public/Icons/free-cancelation.png" />
                            <h3>Free Cancellation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna..</p>
                            <b>04</b>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
                            <img src="/public/Icons/payment.svg" />
                            <h3>Payment Options</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna..</p>
                            <b>05</b>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-features-feature">
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
    <!-- Menu -->
    <section class="hero-menu">
        <strong>Menu</strong>
        <h2>Our Foods Menu</h2>

        <div class="swiper hero-menu-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/eggs-bacon.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Eggs & Bacon</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/tea-coffee.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Tea or Coffee</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/chia-oatmeal.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Chia Oatmeal</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide"></div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/fruit-parfait.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Fruit Parfait</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/marmalade.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Marmalade Selection</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/cheese-cake.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Cheese Plate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide"></div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/eggs-bacon.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Eggs & Bacon</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/tea-coffee.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Tea or Coffee</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/chia-oatmeal.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Chia Oatmeal</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide"></div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/fruit-parfait.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Fruit Parfait</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/marmalade.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Marmalade Selection</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-menu-meal">
                        <img src="/public/Images/cheese-cake.jpg" />
                        <div class="hero-menu-meal-data">
                            <h3>Cheese Plate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <button class="icon">
                            <img src="/public/Icons/arrow-more.svg" />
                        </button>
                    </div>
                </div>
                <div class="swiper-slide"></div>
            </div>
            <div class="swiper-pagination"></div>
            <button class="icon icon-navigation--left">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
            <button class="icon icon-navigation--right">
                <img src="/public/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
            </button>
        </div>

        <div class="swiper hero-menu-gallery-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-7.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-6.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="/public/Images/hotel-2.jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <!-- Awards -->
    <section class="hero-awards">
        <div class="hero-awards-wrapper">
            <div class="hero-awards-card">
                <img src='/public/Icons/rocket.png' />
                <strong>84k</strong>
                <q>Projects are Completed</q>
            </div>
            <div class="hero-awards-card">
                <img src='/public/Icons/around-world.png' />
                <strong>10M</strong>
                <q>Active Backers Around World</q>
            </div>
            <div class="hero-awards-card">
                <img src='/public/Icons/finance.png' />
                <strong>02k</strong>
                <q>Categories Served</q>
            </div>
            <div class="hero-awards-card">
                <img src='/public/Icons/funds.png' />
                <strong>100M</strong>
                <q>Idea Raised Funds</q>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script type="module" src="/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const isDesktop = window.innerWidth >= 1000

        const heroRoomsSwiperText = new Swiper(".hero-rooms-swiper-text", {
            spaceBetween: 10,
            slidesPerView: 1,
            freeMode: true,
            watchSlidesProgress: true,
            effect: 'fade',
            allowTouchMove: false
        });

        const heroRoomsSwiper = new Swiper(".hero-rooms-swiper", {
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

        if (isDesktop) {
            const classname = 'hero-features-swiper'
            const heroFeaturesSwiper = document.getElementsByClassName(classname)[0]
            heroFeaturesSwiper.classList.toggle('swiper')
            heroFeaturesSwiper.classList.toggle(classname)
            heroFeaturesSwiper.classList.toggle(classname + '--desktop')
        } else {
            const heroFeaturesSwiper = new Swiper(".hero-features-swiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        }


        const heroMenuSwiper = new Swiper(".hero-menu-swiper", {
            slidesPerView: isDesktop ? 2 : 1,
            grid: {
                rows: 4,
            },
            spaceBetween: 10,
            navigation: {
                nextEl: ".icon-navigation--right",
                prevEl: ".icon-navigation--left",
            },
        })

        if (isDesktop) {
            const classname = 'hero-menu-gallery-swiper'
            const heroMenuGallerySwiper = document.getElementsByClassName(classname)[0]
            heroMenuGallerySwiper.classList.toggle('swiper')
            heroMenuGallerySwiper.classList.toggle(classname)
            heroMenuGallerySwiper.classList.toggle(classname + '--desktop')
        } else {
            const heroMenuGallerySwiper = new Swiper(".hero-menu-gallery-swiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
            })
        }
    </script>
@endsection
