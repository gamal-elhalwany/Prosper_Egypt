@extends('layouts.app-layout')
@section('title', 'Prosper_Egypt | Careers')
@section('content')

    <!-- Start Section Careers -->
    <section class="careers">
        <div class="container-fluid">
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

                    <div class="careers-form-form">
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
                                <label>Birth Date</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="date" placeholder="Birth Date">
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
                                <label>Email Address</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Apply For</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Apply For">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
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
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Region">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>How were you referred to us?</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="How were you referred to us ?">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Upload Resume</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="file">
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
            </div>
        </div>
    </section>
    <!-- Start Section Careers -->

@endsection
