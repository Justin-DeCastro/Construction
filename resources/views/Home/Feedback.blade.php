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
                    <li class="breadcrumb-item"><a class="text-white" href="#">Building Your Vision with Precision and Passion</a></li>
           
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
                <h6 class="text-secondary text-uppercase">Feedback Details</h6>
                <h1 class="mb-4">We Value Your Feedback</h1>
                <p class="mb-4">Your feedback helps us improve our services. Please share your thoughts and experiences with us. If you have any specific suggestions or concerns, feel free to reach out to us. <a href="https://htmlcodex.com/feedback-form">Submit Feedback Now</a>.</p>
                <img src="images/feed.png" alt="Feedback Image" width="600" height="450" style="border:0;" />
            </div>
       

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                    <form id="appointmentForm" action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    <div class="row g-3">
        <!-- Your Name and Phone Number side by side -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="fullname"placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="profession" name="profession"placeholder="Your Profession">
                <label for="profession">Your Profession</label>
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
