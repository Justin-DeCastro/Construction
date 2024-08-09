<!DOCTYPE html>
<html lang="en">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@include('Components.Header')

<style>
    .modal-dialog {
        max-width: 800px;
        /* Increase the width of the modal */
    }

    .form-control,
    .form-select,
    textarea {
        width: 100%;
        /* Make input fields and text areas full width */
    }

    textarea {
        resize: none;
        /* Disable resize handle for text areas */
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('Components.Topbar')

    <!-- Navbar Start -->
    @include('Components.Navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Home/img/Navbar1.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Construction
                                    Services</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Efficient Residential
                                    Renovation Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor
                                    at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea
                                    elitr.</p>
                                    <button type="button"  class="btn btn-secondary py-md-3 px-md-5 animated slideInRight" data-toggle="modal" data-target="#appointmentModal">
  Schedule Appointment
</button>
                                <button type="button" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                                    data-bs-toggle="modal" data-bs-target="#quoteModal">
                                    Get Quote
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Home/img/Navbar3.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Construction
                                    Services</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Efficient Furniture
                                    Customization
                                    Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor
                                    at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea
                                    elitr.</p>
                                    <button type="button" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight" data-toggle="modal" data-target="#appointmentModal">
  Schedule Appointment
</button>
                                    <button type="button" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                                    data-bs-toggle="modal" data-bs-target="#quoteModal">
                                    Get Quote
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Home/img/Navbar2.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown"> Construction
                                    Services</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Efficient Commercial
                                    Renovation
                                    Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor
                                    at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea
                                    elitr.</p>
                                    <button type="button"  class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"data-toggle="modal" data-target="#appointmentModal">
  Schedule Appointment
</button>
                                    <button type="button" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                                    data-bs-toggle="modal" data-bs-target="#quoteModal">
                                    Get Quote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="Home/img/Residential.png" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Residential Renovation</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="Home/img/Commercial.png" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Commercial Renovation</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="Home/img/Furniture.png" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Furniture Customization</h5>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Building Your Vision with Precision and Passion</h1>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p> -->
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Residential &
                        commercial </p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services at
                        affordable prices</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7
                        emergency services</p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                            <h3 class="m-0 text-secondary">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="Home/img/about-1.jpg"
                            style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <div class="position-absolute start-0 bottom-0 img-fluid bg-white pt-3 pe-3 w-50 h-50"
                            style="object-fit: cover; text-align: right;">
                            <h2>“We are passionate about transforming spaces”</h2>
                            <br>
                            <h4 style="margin: 0;">- Anonymous</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="tp_app_wrapper" style="background-image: url('home/img/3.png'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="tp_app_data">
                    <img src="images/app_logo.png" alt="logistic-app_logo" class="img-fluid">
                    <h1>Download Construction App Free!</h1>
                    <h2>Get Exciting Offers!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor</p>
                    <div class="tp_app_btns">
                        <a href="#"><img src="images/app_logo1.png" alt="logistic-app_logo1" class="img-fluid"></a>
                        <a href="#"><img src="images/app_logo2.png" alt="logistic-app_logo2" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="tp_app_mob">
                    <img src="images/construction-mobile-application.png" alt="logistic-mobile" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Fact Start -->
    <!-- <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">15 Years Experience</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
    <div class="ms-lg-5 ps-lg-5">
        <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
        @foreach($services as $service)
    <div class="bg-light p-4">
        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
            <i class="{{ $service->icon }} fa-2x text-primary"></i>
        </div>
        <h4 class="mb-3">{{ $service->title }}</h4>
        <p>{{ $service->description }}</p>
        @foreach(explode(',', $service->services) as $feature)
            <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>{{ $feature }}
            </p>
        @endforeach
        <div class="text-end">
            <button type="button" class="btn btn-primary btn-inquire" data-bs-toggle="modal" data-bs-target="#inquireModal" data-service-title="{{ $service->title }}">
                Inquire Now
            </button>
        </div>
    </div>
@endforeach

</div>

    </div>
</div>

        </div>
    </div>
    <!-- Service End -->


 


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Technicians</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="Home/img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <!-- <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="Home/img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <!-- <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="Home/img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <!-- <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="Home/img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <!-- <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Modal -->

    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 80px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Get a Quotation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quoteForm" action="{{ route('quote.submit') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <!-- Row 1 -->
                        <div class="col-12 col-md-6">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" required maxlength="255">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name" maxlength="255">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email_address" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email_address" required maxlength="255">
                        </div>
                        <div class="col-12 col-md-6">
    <label for="phone_number" class="form-label">Phone Number</label>
    <div class="input-group">
        <span class="input-group-text">+63</span>
        <input type="tel" class="form-control" id="phone_number" name="phone_number" required maxlength="20">
    </div>
</div>

                        <!-- Row 2 -->
                        <div class="col-12 col-md-6">
                            <label for="category" class="form-label">What type of project?</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Electrical">Electrical</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="service" class="form-label">Select Service:</label>
                            <select id="service" name="service" class="form-control" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="Property Inspection">Property Inspection</option>
                                <option value="Cost Estimates">Cost Estimates</option>
                                <option value="Project Inspection and Planning">Project Inspection and Planning</option>
                            </select>
                        </div>
                        <!-- Row 3 -->
                        <div id="residential-options" class="form-group col-12 col-md-6 d-none">
                            <label for="residential-type" class="form-label">Select Residential Type:</label>
                            <select id="residential-type" name="residential_type" class="form-control">
                                <option value="" disabled selected>Select an option</option>
                                <option value="House">House</option>
                                <option value="Condominium">Condominium</option>
                                <option value="Townhouse">Townhouse</option>
                            </select>
                        </div>
                        <div id="commercial-options" class="form-group col-12 col-md-6 d-none">
                            <label for="commercial-type" class="form-label">Select Commercial Type:</label>
                            <select id="commercial-type" name="commercial_type" class="form-control">
                                <option value="" disabled selected>Select an option</option>
                                <option value="Restaurant/Bars">Restaurant/Bars</option>
                                <option value="Coffee and Tea">Coffee and Tea</option>
                                <option value="Office">Office</option>
                                <option value="Other">Other</option>
                            </select>
                            <div id="other-commercial-type" class="form-group d-none mt-2">
                                <label for="other-commercial-type-input" class="form-label">Please Specify:</label>
                                <input type="text" id="other-commercial-type-input" name="other_commercial_type" class="form-control" placeholder="Specify other commercial type">
                            </div>
                        </div>
                        <!-- Row 4 -->
                        <div id="build-options" class="form-group col-12 col-md-6 d-none">
                            <label for="build-type" class="form-label">Select Build Type:</label>
                            <select id="build-type" name="build_type" class="form-control">
                                <option value="" disabled selected>Select an option</option>
                                <option value="New Build">New Build</option>
                                <option value="Renovations">Renovations</option>
                                <option value="Knockdown and Rebuilds">Knockdown and Rebuilds</option>
                                <option value="Electrical Installation and Maintenance">Electrical Installation and Maintenance</option>
                            </select>
                        </div>
                        <div id="design-options" class="form-group col-12 col-md-6 d-none">
                            <label for="design-type" class="form-label">Select Design Type:</label>
                            <select id="design-type" name="design_type" class="form-control">
                                <option value="" disabled selected>Select an option</option>
                                <option value="Architectural Design">Architectural Design</option>
                                <option value="Structural Design">Structural Design</option>
                                <option value="Electrical Design">Electrical Design</option>
                                <option value="Interior Design">Interior Design</option>
                            </select>
                        </div>
                        <!-- Row 5 -->
                        <div class="col-12 col-md-6">
    <label for="estimated_budget" class="form-label">Estimated/Expected Budget</label>
    <div class="input-group">
        <span class="input-group-text">₱</span>
        <input type="text" class="form-control" id="estimated_budget" name="estimated_budget" maxlength="255">
    </div>
</div>

                        <div class="col-12 col-md-6">
                            <label for="estimated_completion_date" class="form-label">Estimated Completion Date</label>
                            <input type="date" class="form-control" name="estimated_completion_date">
                        </div>
                        <!-- Row 6 -->
                        <div class="col-12">
                            <label for="project_description" class="form-label">Project Description</label>
                            <textarea class="form-control" name="project_description" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="additional_information" class="form-label">Additional Information</label>
                            <textarea class="form-control" name="additional_information" rows="4"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Get a Quote</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
    @foreach($feedbacks as $feedback)
        <div class="testimonial-item text-center">
            <div class="testimonial-text bg-light text-center p-4 mb-4">
                <p class="mb-0">{{ $feedback->message }}</p>
            </div>
            <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="images/user.png"
                style="width: 80px; height: 80px;">
            <div class="mb-2">
                <small class="fa fa-star text-secondary"></small>
                <small class="fa fa-star text-secondary"></small>
                <small class="fa fa-star text-secondary"></small>
                <small class="fa fa-star text-secondary"></small>
                <small class="fa fa-star text-secondary"></small>
            </div>
            <h5 class="mb-1">{{ $feedback->fullname }}</h5>
            <p class="m-0">{{ $feedback->profession }}</p>
        </div>
    @endforeach
</div>

        </div>
    </div>
    <div class="modal fade" id="appointmentModals" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointmentModalLabel">Schedule an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="appointmentForm">
          <div class="form-group">
            <label for="fullName">Fullname:</label>
            <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Your Full Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" maxlength="11" pattern="\d*" title="Please enter up to 11 digits only" required>
          </div>
          <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes" class="form-control" rows="3" placeholder="Additional information or notes"></textarea>
          </div>
          <div class="form-group">
            <label for="category">What type of project?</label>
            <select id="category" name="category" class="form-control" required>
              <option value="" disabled selected>Select an option</option>
              <option value="Residential">Residential</option>
              <option value="Commercial">Commercial</option>
              <option value="Industrial">Industrial</option>
              <option value="Electrical">Electrical</option>
            </select>
          </div>
          <div id="residential-options" class="form-group d-none">
            <label for="residential-type">Select Residential Type:</label>
            <select id="residential-type" name="residential-type" class="form-control">
              <option value="" disabled selected>Select an option</option>
              <option value="House">House</option>
              <option value="Condominium">Condominium</option>
              <option value="Townhouse">Townhouse</option>
            </select>
          </div>
          <div id="commercial-options" class="form-group d-none">
            <label for="commercial-type">Select Commercial Type:</label>
            <select id="commercial-type" name="commercial-type" class="form-control">
              <option value="" disabled selected>Select an option</option>
              <option value="Restaurant/Bars">Restaurant/Bars</option>
              <option value="Coffee and Tea">Coffee and Tea</option>
              <option value="Office">Office</option>
              <option value="Other">Other</option>
            </select>
            <div id="other-commercial-type" class="form-group d-none">
              <label for="other-commercial-type-input">Please Specify:</label>
              <input type="text" id="other-commercial-type-input" name="other-commercial-type" class="form-control" placeholder="Specify other commercial type">
            </div>
          </div>
          <div class="form-group">
            <label for="service">Select Service:</label>
            <select id="service" name="service" class="form-control" required>
              <option value="" disabled selected>Select an option</option>
              <option value="Property Inspection">Property Inspection</option>
              <option value="Cost Estimates">Cost Estimates</option>
              <option value="Project Inspection and Planning">Project Inspection and Planning</option>
              <!-- Add more options as needed -->
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="inquireModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top:80px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">Request an Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="appointmentForm" action="{{ route('inquire.submit') }}" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
                    @csrf
                    <div class="mb-3">
                        <label for="serviceTitle" class="form-label">Service Inquire</label>
                        <input type="text" id="serviceTitle" name="service_inquire" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Preferred Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Testimonial End -->
    <!-- <div class="modal fade" id="inquireModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top:80px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">Request an Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="appointmentForm" action="{{ route('inquire.submit') }}" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
                    @csrf
                    <div class="mb-3">
                        <label for="serviceTitle" class="form-label">Service Inquire</label>
                        <input type="text" id="serviceTitle" name="service_inquire" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Preferred Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<script>
       $(document).ready(function() {
    $('#category').change(function() {
        var selectedCategory = $(this).val();
        
        // Hide all options initially
        $('#residential-options').addClass('d-none');
        $('#commercial-options').addClass('d-none');
        $('#build-options').addClass('d-none');
        $('#design-options').addClass('d-none');
        $('#other-commercial-type').addClass('d-none');
        
        // Show relevant options based on selection
        if (selectedCategory === 'Residential') {
            $('#residential-options').removeClass('d-none');
            $('#build-options').removeClass('d-none'); // Show build options for Residential
            $('#design-options').removeClass('d-none'); // Show build options for Residential
        } else if (selectedCategory === 'Commercial') {
            $('#commercial-options').removeClass('d-none');
            $('#design-options').removeClass('d-none'); // Show design options for Commercial
            $('#build-options').removeClass('d-none'); // Show build options for Residential
        }
    });

    // Handle specific cases within Commercial options
    $('#commercial-type').change(function() {
        var selectedCommercialType = $(this).val();
        if (selectedCommercialType === 'Other') {
            $('#other-commercial-type').removeClass('d-none');
        } else {
            $('#other-commercial-type').addClass('d-none');
        }
    });
});


    </script>


    <!-- Footer Start -->
    @include('Components.Footer')





    <!-- JavaScript Libraries -->
    @include('Components.Script')

 <script>
    $(document).ready(function() {
        $('#quoteForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: $(this).attr('action'), // Get form action URL
                type: 'POST', // Use POST method
                data: formData, // Send form data
                success: function(response) {
                    // Show SweetAlert notification on success
                    Swal.fire({
                        icon: 'success',
                        title: 'Quote Requested',
                        text: 'Thank you for your request! We will get back to you soon.',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Optional: Redirect or reset form after confirmation
                        // window.location.href = '/'; // Redirect to home or any other page
                        $('#quoteForm')[0].reset(); // Reset form fields
                        $('#quoteModal').modal('hide'); // Hide the modal
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error case
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong! Please try again later.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all the "Inquire Now" buttons
        const inquireButtons = document.querySelectorAll('.btn-inquire');

        // Add click event listener to each button
        inquireButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the service title from the button's data attribute
                const serviceTitle = this.getAttribute('data-service-title');

                // Set the service title in the modal
                document.getElementById('serviceTitle').value = serviceTitle;
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (if needed for older Bootstrap versions) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
