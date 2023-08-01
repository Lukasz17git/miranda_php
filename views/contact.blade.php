@extends('layout')

@section('content')
    <!-- Header -->
    <section class="header">
        <h3>THE ULTIMATE LUXURY</h3>
        <h1>Newsletter</h1>
        <div class="header-navigation">
            <b>Home</b>
            <b>|</b>
            <b>Contact</b>
        </div>
    </section>
    <!-- Cards -->
    <section class="contact-cards">
        <div class="contact-card">
            <img src="/public/Icons/email.png" />
            <div class="contact-card-details">
                <b>Email</b>
                <p>lucas.m2295@gmail.com</p>
            </div>
            <span>01</span>
        </div>
        <div class="contact-card">
            <img src="/public/Icons/phone-number.svg" />
            <div class="contact-card-details">
                <b>Phone</b>
                <p>+34 655 94 74 99</p>
            </div>
            <span>02</span>
        </div>
        <div class="contact-card">
            <img src="/public/Icons/location.png" />
            <div class="contact-card-details">
                <b>Hotel Address</b>
                <p>19/A, Cirikon City hall Tower New York, NYC</p>
            </div>
            <span>03</span>
        </div>
    </section>
    <section class="contact-location">
        <iframe loading="lazy"
            src="https://maps.google.com/maps?q=Oxygen%20Coworking&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
            title="Oxygen Coworking" aria-label="Oxygen Coworking" data-rocket-lazyload="fitvidscompatible"
            class="lazyloaded" data-ll-status="loaded" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </section>
    <!-- Form -->
    <section class="contact-form">
        <form onsubmit="submitForm(event)" method="POST">
            <div class=" contact-form-top">
                <div class="contact-form-input-wrapper">
                    <img src="/public/Icons/name.svg" />
                    <input type="text" name="fullname" required placeholder="Your full name" />
                </div>
                <div class="contact-form-input-wrapper">
                    <img src="/public/Icons/phone.svg" />
                    <input type="text" name="phone" required placeholder="Add phone number" />
                </div>
                <div class="contact-form-input-wrapper">
                    <img src="/public/Icons/send.svg" />
                    <input type="email" name="email" required placeholder="Enter email address" />
                </div>
                <div class="contact-form-input-wrapper">
                    <img src="/public/Icons/subject.svg" />
                    <input type="text" name="subject" required placeholder="Enter subject" />
                </div>
            </div>
            <div class="contact-form-input-wrapper">
                <img class="contact-form-input-icon" src="/public/Icons/edit.svg" />
                <textarea type="text" name="description" required placeholder="Enter message"></textarea>
            </div>
            <input class="button-primary" type="submit" value="SEND" />
        </form>
    </section>
    <!-- Scripts -->
    <script type="module" src="/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <!-- Form confirmation -->
    <script>
        const submitForm = async (e) => {
            e.preventDefault()
            const res = await fetch('/contact_form', {
                method: 'POST',
                body: new FormData(e.target)
            })
            if (res.ok) {
                alert(`¡Thank you for your request! 
      We have received it correctly.
      Someone from our Team will get back to you very soon.
      The Miranda Hotel.`)
            } else {
                const text = await res.text()
                console.log(text)
                alert(text)
            }
        }
    </script>
@endsection
