<!DOCTYPE html>
<html lang="en">

@include('Components.Header')

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('Components.Topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('Components.Navbar')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0839870059626!2d121.0325504!3d14.651173699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6fdedfd13d9%3A0xb0fe4b0bfeca755a!2sVinia%20Residences%20by%20Filinvest!5e0!3m2!1sen!2sph!4v1723155735163!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                    <form id="appointmentForm" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    <div class="row g-3">
        <!-- Your Name and Phone Number side by side -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name"placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input 
                    type="text" 
                    class="form-control" 
                    id="phone" 
                    name="phone"
                    placeholder="Your Phone Number" 
                    maxlength="11" 
                    pattern="\d*" 
                    title="Please enter up to 11 digits only">
                <label for="phone">Your Phone Number</label>
            </div>
        </div>

        <!-- Your Email alone on its row -->
        <div class="col-12">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email"placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>

        <!-- Select Concern and Specific Concern side by side -->
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-control" id="concern" placeholder="Concern" name="concern">
                    <option value="" disabled selected>Select Concern</option>
                    <option value="design">Design</option>
                    <option value="consultation">Consultation</option>
                    <option value="build">Build</option>
                </select>
                <label for="concern">Concern</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
            <select class="form-control" id="specific-concern" name="specific_concern">
    <option value="" disabled selected>Select Specific Concern</option>
</select>
                <label for="specific-concern">Specific Concern</label>
            </div>
        </div>

        <!-- Message box spanning full width -->
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        
        <!-- Submit button -->
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    @include('Components.Footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('Components.Script')

    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const concernSelect = document.getElementById('concern');
    const specificConcernSelect = document.getElementById('specific-concern');

    const specificConcerns = {
        design: [
            'Select Specific Design Concern',
            'Architechtural Design',
            'Structural Design',
            'Electrical Design',
            'Interior Design'
        ],
        consultation: [
            'Select Specific Consultation Concern',
            'Property Inspection',
            'Cost Estimates',
            'Project inspection and planning'
        ],
        build: [
            'Select Specific Build Concern',
            'New Build',
            'Renovation',
            'Knockdown and rebuild',
            'Electrical installation and Maintenance',
        ]
    };

    concernSelect.addEventListener('change', function() {
        const selectedConcern = concernSelect.value;

        // Clear existing options
        specificConcernSelect.innerHTML = '';

        // Add new options based on the selected concern
        if (selectedConcern && specificConcerns[selectedConcern]) {
            specificConcerns[selectedConcern].forEach(function(optionText) {
                const option = document.createElement('option');
                option.value = optionText.toLowerCase().replace(/ /g, '-');
                option.textContent = optionText;
                specificConcernSelect.appendChild(option);
            });
        }
    });
});

    </script>
</body>

</html>
