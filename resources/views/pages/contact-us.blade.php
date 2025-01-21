@extends('layouts.app-layout')
@section('tilte', 'Prosper_Egypt | Contact-us')
@section('content')

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-intro">
                        <h3>Contact us</h3>
                        <h1>Get in touch, we're here to help</h1>
                        <p>Have questions or need assistance? Our team is ready to support you. Whether you're curious about
                            our services, need help with a specific issue, or just want to provide feedback, we're all ears.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mt-5 p-1">
                    <div class="info-parent">
                        <div class="contact-info">
                            <h3>+20-01128776670</h3>
                        </div>
                        <div class="contact-info-overlay" style="background-image: url({{asset('storage/images/logos/Smartphone1.png')}});">
                            <h3>+20-01128776670</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 p-1">
                    <div class="info-parent">
                        <div class="contact-info">
                            <h3 class="contact-address">24 A Al-Obour Buildings 1st floor Salah Salem Cairo, Egypt</h3>
                        </div>
                        <div class="contact-info-overlay" style="background-image: url({{asset('storage/images/logos/Global.png')}});">
                            <h3 class="contact-address">24 A Al-Obour Buildings 1st floor Salah Salem Cairo, Egypt</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 p-1">
                    <div class="info-parent">
                        <div class="contact-info">
                            <h3>Info@Prosoperegypt.Com</h3>
                        </div>
                        <div class="contact-info-overlay"
                            style="background-image: url({{asset('storage/images/logos/Typing-at-Laptop1.png')}});">
                            <h3>Info@Prosoperegypt.Com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Inquiry Section -->
    <section class="contact-inquiry">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="inquiry-intro">
                        <h1><span>Have any inquery ?</span> Contact us !</h1>
                        <p>Our mission is To build long term relationships with our customers and provide exceptional
                            customer services.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form action="" method="" enctype="">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>phone number</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="+01212087255">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control subject">
                                            <option>Choose Your Country</option>
                                            <option>Subject1</option>
                                            <option>Subject2</option>
                                            <option>Subject3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <div class="row">
                                    <div class="col">
                                        <textarea placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit">Send Message</button>

                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="contact-location">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3452.638643191099!2d31.30700868488413!3d30.07589088187082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDA0JzMzLjIiTiAzMcKwMTgnMTcuNCJF!5e0!3m2!1sar!2seg!4v1736906100825!5m2!1sar!2seg"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inquiry Section -->

@endsection
