@extends('layouts.app-layout')
@section('title', 'Prosper_Egypt | Home')
@section('content')

    <!-- Main Slider and Navbar -->
    <section class="main-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="slider-content">
                    <div class="slider">
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v1.mp4') }}" muted></video>
                        <div class="separator"></div>
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v2.mp4') }}" muted></video>
                        <div class="separator"></div>
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v3.mov') }}" muted></video>
                        <div class="separator"></div>
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v4.mp4') }}" muted></video>
                    </div>
                    <div class="slider-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col">
                                    <div class="text-left mt-5">
                                        <h1>
                                            <span class="yellow">Expertise</span>
                                            you can rely on,
                                            <span class="yellow">Exellence</span>
                                            you can trust
                                        </h1>
                                        <p>At prosper, we integrate top-tier security solutions and innovative software
                                            development to deliver comprehensive facility management services. Our
                                            commitment to
                                            excellence ensures your operations run smoothly, securely, and efficiently
                                        </p>
                                    </div>
                                    <ul class="slider-list">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('business') }}">Explore Our Lines Of
                                                Business</a>
                                            <span class="material-symbols-outlined">south</span>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                                            <span class="material-symbols-outlined">south</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->
    </section>
    <!-- Main Slider and Navbar -->

    <!-- Mini Slider Banner -->
    <section class="mini-slider">
        <div class="container-fluid">
            <div class="small-slider">
                <img src="{{ asset('storage/images/mini-slider/mini-slider1.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider2.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider3.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider4.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider5.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider6.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider7.png') }}" alt="Image 1">
                <img src="{{ asset('storage/images/mini-slider/mini-slider8.png') }}" alt=4Image 1">
                {{-- <img src="images/mini-slider/mini-slider2.png" alt="Image 2">
            <img src="images/mini-slider/mini-slider3.png" alt="Image 3">
            <img src="images/mini-slider/mini-slider4.png" alt="Image 4">
            <img src="images/mini-slider/mini-slider5.png" alt="Image 5">
            <img src="images/mini-slider/mini-slider6.png" alt="Image 6">
            <img src="images/mini-slider/mini-slider7.png" alt="Image 7">
            <img src="images/mini-slider/mini-slider8.png" alt="Image 8"> --}}
            </div>
        </div>
    </section>
    <!-- Mini Slider Banner-->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <h3>About Us</h3>
                <div class="col-md-6 text-left mt-5">
                    <div class="about-title">
                        <h1>
                            A Single Organization, Multiple Capabilities,
                            <span class="about-title-green">
                                Boundless Potential.
                            </span>
                        </h1>
                    </div>
                </div>

                <div class="col-md-6 text-left mt-5">
                    <div class="about-description">
                        <p>
                            Based in Cairo, and covering all over Egypt; Prosper Egypt provides a full range of
                            facilities management and property maintenance services.
                        </p>
                        <p>
                            Our lines of services include Facilities Management, Commercial Cleaning, Repair &
                            Maintenance either Preventive or Reactive, and more services. We extend to serve you in
                            areas like Finishing & Furnishing, Landscaping, Procurement & More.
                        </p>
                        <a href="{{ route('about-us') }}">
                            More About Us
                        </a>
                        <span class="material-symbols-outlined">east</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <!-- Our Group Section -->
    <section class="our-group">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="groups-heading">
                        <h3>Our Group</h3>
                        <h1>
                            <span>Excellence</span> Across Key Sectors
                        </h1>
                        <p>Prosper Holdings drives innovation and security through our subsidiaries: Rasid Technical
                            solutions, Prosper Security services, diligence general supplies and Prosper Facility
                            Management. We deliver excellence and reliability in every sector we serve</p>
                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('storage/images/logos/sector_logo1.png') }}" class="img-fluid"
                                        alt="Sector Logo">
                                </div>
                                <div class="middle ms-lg-3 mt-3 mt-lg-0 text-center text-lg-start">
                                    <h1 class="title">Prosper Security Services</h1>
                                    <p>
                                        A Part of Prosper Egypt Facilities Management was Founded with More than 20
                                        Years of Experience
                                        in the Fields of Security and Advanced Technology, Providing Traditional
                                        Security Services and
                                        Revolutionizing this Field
                                    </p>
                                </div>
                            </div>

                            <div
                                class="col-lg-2 col-12 d-flex flex-lg-row flex-column justify-content-lg-end align-items-center text-center text-lg-end">
                                <div class="right-section">
                                    <a href="#" class="me-lg-2 mb-2 mb-lg-0">Visit Site</a>
                                    <span class="material-symbols-outlined">north_east</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('storage/images/logos/sector_logo1.png') }}" class="img-fluid"
                                        alt="Sector Logo">
                                </div>
                                <div class="middle ms-lg-3 mt-3 mt-lg-0 text-center text-lg-start">
                                    <h1 class="title">Prosper Facility management</h1>
                                    <p>
                                        Prosper Egypt, based in Cairo, offers comprehensive facilities management and
                                        property maintenance services across Egypt. Their services include facilities
                                        management, cleaning, repair and maintenance (both preventive and reactive),
                                        finishing and furnishing And landscaping.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="col-lg-2 col-12 d-flex flex-lg-row flex-column justify-content-lg-end align-items-center text-center text-lg-end">
                                <div class="right-section">
                                    <a href="#" class="me-lg-2 mb-2 mb-lg-0">Visit Site</a>
                                    <span class="material-symbols-outlined">north_east</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('storage/images/logos/sector_logo3.png') }}" class="img-fluid"
                                        alt="Sector Logo">
                                </div>
                                <div class="middle ms-lg-3 mt-3 mt-lg-0 text-center text-lg-start">
                                    <h1 class="title">Rasid Technical Solutions</h1>
                                    <p>
                                        Rasid for Technical Solutions is a startup company that offers digitalization
                                        solutions for the facility management sector. Our solution supports follow-up
                                        activities through a mobile app synced with a web dashboard.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="col-lg-2 col-12 d-flex flex-lg-row flex-column justify-content-lg-end align-items-center text-center text-lg-end">
                                <div class="right-section">
                                    <a href="#" class="me-lg-2 mb-2 mb-lg-0">Visit Site</a>
                                    <span class="material-symbols-outlined">north_east</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('storage/images/logos/sector_logo4.jpeg') }}" class="img-fluid"
                                        alt="Sector Logo">
                                </div>
                                <div class="middle ms-lg-3 mt-3 mt-lg-0 text-center text-lg-start">
                                    <h1 class="title">Diligence general Supplies</h1>
                                    <p>
                                        A Part of Prosper Egypt Facilities Management
                                        was founded with more than 20 years of experience in the fields of security and
                                        advanced technology, providing traditional
                                        security services and revolutionizing this field.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="col-lg-2 col-12 d-flex flex-lg-row flex-column justify-content-lg-end align-items-center text-center text-lg-end">
                                <div class="right-section">
                                    <a href="#" class="me-lg-2 mb-2 mb-lg-0">Visit Site</a>
                                    <span class="material-symbols-outlined">north_east</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Group Section -->

    <!-- Our Services Section -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services">
                        <h3>Services</h3>
                        <h1>
                            Our <span>Specialized</span> Services
                        </h1>
                        <p>Our specialized services are designed to meet the unique needs of each client with precision
                            and expertise. From comprehensive security solutions and efficient facility management to
                            innovative technical systems and reliable general supplies.</p>
                    </div>
                </div>

                <div class="col-md-6 service-grid">
                    <div class="service">
                        <h1>01</h1>
                        <h3>Facility Management</h3>
                        <p>Facility management encompasses the comprehensive maintenance and operation of buildings and
                            infrastructure to ensure a safe, efficient, and comfortable environment. This includes a
                            wide range of services such as Commercial Cleaning, pest Control, Furnishing and
                            landscaping.</p>
                    </div>
                </div>

                <div class="col-md-6 service-grid">
                    <div class="service">
                        <h1>02</h1>
                        <h3>Security Services</h3>
                        <p>Security services are essential for protecting people, property, and assets. These services
                            encompass a wide range of activities and solutions designed to prevent unauthorized access,
                            detect and respond to threats, and ensure a safe environment.</p>
                    </div>
                </div>

                <div class="col-md-6 service-grid">
                    <div class="service">
                        <h1>03</h1>
                        <h3>Technology Solutions</h3>
                        <p>Our technology solutions are designed to drive innovation and efficiency in your business
                            operations. We offer a comprehensive range of services and products tailored to meet the
                            unique needs of various industries.</p>
                    </div>
                </div>

                <div class="col-md-6 service-grid">
                    <div class="service">
                        <h1>04</h1>
                        <h3>General Supplies</h3>
                        <p>Our general supplies are sourced from trusted manufacturers, guaranteeing quality and
                            reliability. Trust us to deliver the essentials that support your daily operations and
                            contribute to a smooth and efficient workflow</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services Section -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="shadow"></div>
        <video autoplay muted loop class="background-video">
            <source src="{{ asset('storage/images/videos/contact-video.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="content">
                        <p>Our mission is To build long term relationships with our customers and provide exceptional
                            customer services.</p>
                        <ul>
                            <li>
                                <a class="white-one" href="#">f</a>
                                <a class="colored-one" href="#">f</a>
                            </li>
                            <li>
                                <a class="white-one" href="#">in</a>
                                <a class="colored-one" href="#">in</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12" id="contact-form">
                    <div class="contact-form">
                        <h3>Contact</h3>
                        <h1>Have Any Inquiry ? Contact Us !</h1>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative; z-index: 9999999999">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form class="" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="form_type" value="contact-form">
                            <div class="group">
                                <label>Name</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="first-name"
                                            placeholder="First name" value="{{ old('first-name') }}">
                                        @error('first-name')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="last-name"
                                            placeholder="Last name" value="{{ old('last-name') }}">
                                        @error('last name')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="example@gmail.com" value="{{ old('email') }}">
                                        @error('email')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label>Phone Number</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="+0121287255" value="{{ old('phone') }}">
                                        @error('phone')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label>Subject</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Enter the Subject" value="{{ old('subject') }}">
                                        @error('subject')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label>Message</label>
                                <div class="row">
                                    <div class="col">
                                        <textarea type="text" class="form-control" name="message" placeholder="Your Message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <p class="text-danger m-0 p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

@endsection
