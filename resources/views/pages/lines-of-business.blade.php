@extends('layouts.app-layout')
@section('title', 'Prosper_Egypt | Lines of Business')
@section('content')

    <!-- Lines of Business Section -->
    <section class="business-lines">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro">
                        <h3>Lines of Business</h3>
                        <h1>Unlock your potential, discover our solutions</h1>
                        <p>Our innovative business solutions are designed to unlock your company's full potential. By
                            leveraging cutting-edge technology and expert insights, we provide the tools and strategies
                            you need to achieve sustainable growth and success. Discover how our tailored solutions can
                            transform your business and help you reach new heights</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <h1 class="our-expert-text">Our Expert <span>Buiness Solutions</span></h1>
                </div>

                @foreach ($groups as $group)
                <div class="col-lg-12 p-0">
                    <div class="group">
                        <div class="row flex-lg-row flex-column align-items-center">

                            <div
                                class="col-lg-10 col-12 d-flex flex-lg-row flex-column align-items-center justify-content-between mb-3 mb-lg-0">
                                <div class="img-wrapper">
                                    <img src="{{asset('storage/' . $group->group_logo)}}" class="img-fluid" alt="Sector Logo">
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
    </section>
    <!-- Lines of Business Section -->

@endsection
