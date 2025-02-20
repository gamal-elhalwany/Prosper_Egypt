@extends('layouts.app-layout')
@section('title', 'Prosper_Egypt | Careers')
@section('content')

    <!-- Start Section Careers -->
    <section class="careers">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"
                    style="position: relative; z-index: 9999999999">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="careers-heading">
                        <h3>Careers</h3>
                        <h1>Looking for a career with Prosper Holding ?</h1>
                        <p>Join our dynamic and innovative team, where your future starts and limitless opportunities await
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="careers-form">
                        <h2>Employment <span>Application</span></h2>
                        <p>Welcome! Thank you for your interest in joining Prosper Holding.</p>
                    </div>

                    <div class="careers-form-form" id="careers-form">
                        <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="First name">
                                        @error('first_name')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last name">
                                        @error('last_name')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Birth Date</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="date" name="birth_date" min="1980-01-01" max="2045-12-31">
                                        @error('birth_date')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>phone number</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="phone" placeholder="+01212087255">
                                        @error('phone')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="email" placeholder="Email Address">
                                        @error('email')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Apply For</label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control subject" name="apply_for">
                                            <option>Choose Job</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select>
                                        @error('apply-for')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control subject" name="country">
                                            <option>Choose Your Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $loop->iteration }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                        @error('city')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="region" placeholder="Region">
                                        @error('region')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>How were you referred to us?</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="referred" placeholder="How were you referred to us ?">
                                        @error('referred')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Upload Resume</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="file" name="resume">
                                        @error('resume')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <div class="row">
                                    <div class="col">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                        @error('message')
                                            <p class="text-danger mt-2">{{ $message }}</p>
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
    <!-- Start Section Careers -->

@endsection

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formSection = document.getElementById('applicationForm');
            if (formSection) {
                formSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Temporary URL update without page reload
                history.replaceState(null, null, '#applicationForm');
            }
        });
    </script>
@endif
