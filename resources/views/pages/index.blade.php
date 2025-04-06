@extends('layouts.app-layout')
@section('title', 'Prosper_Egypt | Home')
@section('content')

    <!-- Main Slider and Navbar -->
    <section class="main-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="slider-content">
                    <div class="slider">
                        <video class="slider-item" src="{{ asset('storage/images/videos/Constructions.mp4') }}" muted></video>
                        {{-- <div class="separator"></div> --}}
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v1.mp4') }}" muted></video>
                        {{-- <div class="separator"></div> --}}
                        <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v2.mp4') }}" muted></video>
                        {{-- <div class="separator"></div> --}}
                        {{-- <video class="slider-item" src="{{ asset('storage/images/videos/Prosper_v3.mov') }}" muted></video> --}}
                        {{-- <div class="separator"></div> --}}
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
                                        <p>At Prosper, we focus on facility management services, seamlessly integrating
                                            construction, fit-out, and MEP solutions with top-tier security and innovative
                                            software development. Our unwavering commitment to excellence guarantees that
                                            your operations are managed smoothly, securely, and efficiently.
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
    <h3 class="text-center" style="font-weight: 500; font-size: 19px; color: #ffb301;">Our Partners</h3>
    <section class="mini-slider">
        <div class="container-fluid">
            <div class="small-slider">
                @foreach ($partners as $partner)
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="">
                @endforeach
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
                            Based in Cairo, and covering all over Egypt
                            Prosper Egypt provides a full range of
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

                @foreach ($groups as $group)
                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('storage/'. $group->group_logo) }}" class="img-fluid"
                                        alt="Sector Logo">
                                </div>
                                <div class="middle ms-lg-3 mt-3 mt-lg-0 text-center text-lg-start">
                                    <h1 class="title">{{$group->title}}</h1>
                                    <p>
                                        {{$group->description}}
                                    </p>
                                </div>
                            </div>

                            <div
                                class="col-lg-2 col-12 d-flex flex-lg-row flex-column justify-content-lg-end align-items-center text-center text-lg-end">
                                <div class="right-section">
                                    <a href="{{$group->url}}" class="me-lg-2 mb-2 mb-lg-0">Visit Site</a>
                                    <span class="material-symbols-outlined">north_east</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
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

                @foreach ($services as $service)
                <div class="col-md-6 service-grid">
                    <div class="service">
                        <h1>{{$service->number}}</h1>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->content}}</p>
                    </div>
                </div>
                @endforeach
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
                                <a class="white-one" href="https://www.facebook.com/Prosperegypt">f</a>
                                <a class="colored-one" href="https://www.facebook.com/Prosperegypt">f</a>
                            </li>
                            <li>
                                <a class="white-one" href="https://www.linkedin.com/company/prosper-egypt">in</a>
                                <a class="colored-one" href="https://www.linkedin.com/company/prosper-egypt">in</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12" id="contact-form">
                    <div class="contact-form">
                        <h3>Contact</h3>
                        <h1>Have Any Inquiry ? Contact Us !</h1>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="position: relative; z-index: 9999999999">
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
