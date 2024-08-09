<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumberz</title>
    <!-- Include SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<style>
    /* Wrapper for centering text */
    .text {
        font-family: 'Dancing Script', cursive;
        font-size: 2rem;
        color: #333;
        white-space: nowrap;
        display: inline-block;
        border-right: 0.15em solid #333;
        /* Create a cursor effect */
        animation: typing 6s steps(50, end), blink-caret 0.75s step-end infinite;
        overflow: hidden;
        /* Ensure text stays within bounds */
        width: 0;
        /* Start width at 0 */
    }

    /* Typing animation */
    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    /* Blinking cursor */
    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: #333;
        }
    }

    .wrapper {
        position: fixed;
        top: 50%;
        /* Adjusts the vertical position */
        right: 20px;
        z-index: 1000;
        transform: translateY(-50%);
        /* Centers the wrapper vertically */
        display: flex;
        flex-direction: column;
        /* Align items vertically */
        align-items: center;
        /* Center items horizontally */
    }

    .wrapper a {
        height: 50px;
        width: 50px;
        background: #000;
        padding: 10px;
        display: flex;
        flex-direction: row;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: #fff;
        margin: 10px 0;
        /* Adjust the spacing between icons */
    }

    /* Hide social icons on small screens */
    @media (max-width: 767.98px) {
        .wrapper {
            display: none;
        }
    }

    .wrapper a:nth-child(1) {
        background-color: blue;
    }

    .wrapper a:nth-child(2) {
        background-color: #000000;
    }

    .wrapper a:nth-child(4) {
        background-color: #8f5db7;
    }

    .wrapper a:nth-child(3) {
        background: linear-gradient(to right, #0088cc, #005c8e);
        transition: all 0.3s;
    }

    .wrapper a:hover:nth-child(3) {
        background-color: yellow;
    }

    @keyframes FadeIn {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .hide {
        position: absolute;
        bottom: 0px !important;
        z-index: -1;
        transition: all 2s;
    }

    .navbar-brand {
        font-size: 2rem;
        font-weight: bold;
        color: #ff5722;
    }

    .navbar-collapse {
        justify-content: center;
    }

    .navbar-nav {
        flex-direction: row;
        justify-content: center;
        width: 60%;
    }

   

    .nav-link {
        color: #333;
        font-weight: 500;
    }

    .nav-link:hover {
        color: #007bff;
    }

    .dropdown-menu {
        animation: fadeIn 0.3s;
    }

    .btn-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @media (max-width: 980px) {
        .navbar-nav {
            flex-direction: column;
            text-align: center;
        }


        .btn-container {
            flex-direction: column;
            
        }

        .req, .log {
            width: 100%;
            /* Make buttons widen in mobile view */
        }

    }
</style>

<body>
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 ">
                <h2 class="text-primary m-0">9.0 Niner Construction</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto">
        <a href="/" class="nav-item nav-link active">Home</a>
        <a href="about" class="nav-item nav-link">About</a>
        <a href="service" class="nav-item nav-link">Services</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu fade-up m-0">
                <a href="booking" class="dropdown-item">Booking</a>
                <a href="team" class="dropdown-item">Technicians</a>
                <a href="testimonial" class="dropdown-item">Testimonial</a>
                <a href="404page" class="dropdown-item">404 Page</a>
            </div>
        </div>
        <a href="contact" class="nav-item nav-link">Contact</a>
    </div>
    <div class="btn-container mt-5 mt-lg-0 px-4 d-flex align-items-center">
        <!-- <button type="button" class="btn req btn-primary ml-auto" data-bs-toggle="modal"
            data-bs-target="#appointmentModal">
            Request an Appointment
        </button> -->
        <button type="button" class="btn log btn-secondary ms-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
        </button>
    </div>
</div>
        </nav>
    </div>

    <div class="wrapper d-none d-md-flex">
        <a class="social" href="https://www.facebook.com/profile.php?id=100090318514723"><i
                class="fab fa-facebook fa-2x"></i></a>
        <a class="social" href="https://x.com/AbicManpower">
            <img src="Home/img/twitter.png" alt="X Logo" style="width: 32px; height: 32px;">
        </a>
        <a class="social" href="https://web.telegram.org/k/#7369565607" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-telegram fa-2x"></i>
        </a>
        <a class="social" href="#"><i class="fab fa-viber fa-2x"></i></a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style = "padding-top:80px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Request an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm" action="{{ route('appointment.submit') }}" method="POST"
                        onsubmit="submitForm(event)">
                        @csrf
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

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function submitForm(event) {
            event.preventDefault();
            const form = event.target;

            // Perform the form submission using AJAX
            $.ajax({
                url: form.action,
                method: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    // Show the SweetAlert on successful submission
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your appointment request has been submitted.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    // Reset the form
                    form.reset();
                    // Close the modal
                    $('#appointmentModal').modal('hide');
                },
                error: function(error) {
                    // Show the SweetAlert on error
                    Swal.fire({
                        title: 'Error!',
                        text: 'There was an error submitting your request. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }
    </script>
</body>

</html>
