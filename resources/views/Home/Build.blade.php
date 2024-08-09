<!DOCTYPE html>
<html lang="en">
<head>
    @include('Components.Header')
    <style>
        .header-section {
            background-color: #1E60AA;
            color: #fff;
            padding: 10px;
        }

        .header-section h4 {
            margin: 0;
            color: #fff;
        }

        .upload-box {
            border: 2px dashed #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            position: relative;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .upload-box:hover {
            border-color: #007bff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .upload-box p {
            margin: 0;
            font-size: 16px;
            color: #666;
        }

        .upload-box input[type="file"] {
            display: none;
        }

        .upload-box img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }

        .upload-box .upload-message {
            color: #28a745;
            font-size: 16px;
            margin-top: 10px;
            display: none;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            width: 30%;
            /* Adjust the width of the first column */
        }

        td {
            width: 70%;
            /* Adjust the width of the second column */
        }

        .form-label {
            font-weight: bold;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group .form-control {
            border-radius: 4px;
        }

        .sub-category {
            display: none;
        }

        /* Show options when the respective category is selected */
        #residential-options,
        #commercial-options {
            display: none;
        }
    </style>
</head>

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
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('Components.Navbar')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb" class="animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Build</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <form action="{{ route('build.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">About Us</h6>
                        <h1 class="mb-4">We Are Trusted Construction Company Since ???</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam
                            et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
                            erat
                            amet</p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Residential &
                            commercial plumbing</p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services
                            at
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
                                <h3 class="m-0 text-secondary">0999 511 0645</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <div class="container" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding-bottom: 15px;">
                            <!-- Header -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="mb-0" style="background-color: #1D5CA3; color: white; padding: 10px; border-radius: 4px;">
                                        Build
                                    </h4>
                                </div>
                            </div>
                            <!-- Consultation Form -->
                            <table>
                                <tr>
                                    <th class="form-label">Fullname:</th>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" id="fullName" name="full_name" class="form-control"
                                            placeholder="Your Full Name" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="form-label">Email:</th>
                                    <td>
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control"  placeholder="Your Email Address"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="form-label">Phone Number:</th>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Your Phone Number" maxlength="11" pattern="\d*"
                                                title="Please enter up to 11 digits only">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="form-label">Notes:</th>
                                    <td>
                                        <div class="input-group">
                                            <textarea id="notes" name="notes" class="form-control" rows="3"
                                                placeholder="Additional information or notes "></textarea>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="form-label">What type of project?</th>
                                    <td>
                                        <div class="form-group">
                                            <label for="category">Select Option:</label>
                                            <select id="category" name="property_category" class="form-control" required>
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="Residential">Residential</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Electrical">Electrical</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="residential-options" class="sub-category">
                                    <th class="form-label">Select Residential Type:</th>
                                    <td>
                                        <div class="form-group">
                                            <label for="residential-type">Select Option:</label>
                                            <select id="residential-type" name="residential-type" class="form-control">
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="House">House</option>
                                                <option value="Condominium">Condominium</option>
                                                <option value="Townhouse">Townhouse</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                               <!-- Commercial Type Selection -->
<tr id="commercial-options" class="sub-category">
    <th class="form-label">Select Commercial Type:</th>
    <td>
        <div class="form-group">
            <label for="commercial-type">Select Option:</label>
            <select id="commercial-type" name="commercial-type" class="form-control">
                <option value="" disabled selected>Select an option</option>
                <option value="Restaurant/Bars">Restaurant/Bars</option>
                <option value="Coffee and Tea">Coffee and Tea</option>
                <option value="Office">Office</option>
                <option value="Other">Other</option> <!-- Added Other option -->
            </select>
        </div>
        <div class="form-group" id="other-commercial-type" style="display: none;">
            <label for="other-commercial-type-input">Please Specify:</label>
            <input type="text" id="other-commercial-type-input" name="other-commercial-type" class="form-control" placeholder="Specify other commercial type">
        </div>
    </td>
</tr>

                                <th class="form-label">Select Option:</th>
                                    <td>
                                        <div class="form-group">
                                            <label for="category">Select Option:</label>
                                            <select id="category" name="category" class="form-control" required>
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="Property Inspection">Property Inspection</option>
                                                <option value="Cost Estimates">Cost Estimates</option>
                                                <option value="Project Inspection and Planning">Project Inspection and
                                                    Planning</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <!-- Image Upload Section -->
                            <div class="form-group">
                                <div class="upload-box" id="uploadBox">
                                    <input type="file" name="image" id="uploadImage" accept="image/*" />
                                    <p>+ Upload Image or Drop Image (optional)</p>
                                    <img id="previewImage" src="" alt="Image preview" style="display: none;" />
                                    <div class="upload-message" id="uploadMessage">Image uploaded successfully!</div>
                                </div>
                            </div>
                            <div class="button-container">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

    </form>

    <script>
    // Handle category selection (Residential/Commercial)
    const categorySelect = document.getElementById('category');
    const residentialOptions = document.getElementById('residential-options');
    const commercialOptions = document.getElementById('commercial-options');
    const commercialTypeSelect = document.getElementById('commercial-type');
    const otherCommercialInput = document.getElementById('other-commercial-type');

    categorySelect.addEventListener('change', () => {
        if (categorySelect.value === 'Residential') {
            residentialOptions.style.display = 'table-row';
            commercialOptions.style.display = 'none';
        } else if (categorySelect.value === 'Commercial') {
            residentialOptions.style.display = 'none';
            commercialOptions.style.display = 'table-row';
        } else {
            residentialOptions.style.display = 'none';
            commercialOptions.style.display = 'none';
        }
    });

    // Handle commercial type selection (Other)
    commercialTypeSelect.addEventListener('change', () => {
    if (commercialTypeSelect.value === 'Other') {
        otherCommercialInput.style.display = 'block';
    } else {
        otherCommercialInput.style.display = 'none';
    }
});

    // Initialize visibility based on default selection
    categorySelect.dispatchEvent(new Event('change'));
    commercialTypeSelect.dispatchEvent(new Event('change'));

    // Handle file upload and preview
    const uploadBox = document.getElementById('uploadBox');
    const uploadImage = document.getElementById('uploadImage');
    const previewImage = document.getElementById('previewImage');
    const uploadMessage = document.getElementById('uploadMessage');

    uploadBox.addEventListener('click', () => {
        uploadImage.click();
    });

    uploadBox.addEventListener('dragover', (event) => {
        event.preventDefault();
        event.stopPropagation();
        uploadBox.style.borderColor = '#007bff';
    });

    uploadBox.addEventListener('dragleave', () => {
        uploadBox.style.borderColor = '#ccc';
    });

    uploadBox.addEventListener('drop', (event) => {
        event.preventDefault();
        event.stopPropagation();
        uploadBox.style.borderColor = '#ccc';

        const files = event.dataTransfer.files;
        if (files.length > 0) {
            handleFile(files[0]);
        }
    });

    uploadImage.addEventListener('change', (event) => {
        const files = event.target.files;
        if (files.length > 0) {
            handleFile(files[0]);
        }
    });

    function handleFile(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
            uploadMessage.style.display = 'block';
            uploadBox.querySelector('p').style.display = 'none'; // Hide the default text
        }
        reader.readAsDataURL(file);
    }
</script>


    <!-- Footer Start -->
    @include('Components.Footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('Components.Script')
</body>
</html>
