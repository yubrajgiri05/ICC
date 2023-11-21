<?php include("includes/header.php"); ?>
<div class="section-banner">
    <figure>
        <img src="./images/section-banner.png" alt="">
        <figcaption>
            <h1 class="section-banner-heading text-center">Contact</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-center">
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </figcaption>
    </figure>
</div>
<div class="contact section-gap container pb-5">
    <div class="row g-5">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="section-sub-heading">
                <h2>Information and Consultant Centre Pvt. Ltd</h2>
            </div>
            <div class="contact-info">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="contact-text">
                    <div class="contact-text-main">Phone</div>
                    <a href="tel:0123456789" class="contact-text-info">9885456859</a>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-text">
                    <div class="contact-text-main">Email</div>
                    <a href="mailto:infoconsultancy@gmail.com  " class="contact-text-info">infoconsultancy@gmail.com
                    </a>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-text">
                    <div class="contact-text-main">Address</div>
                    <div class="contact-text-info">Maitidevi, Kathmandu,Nepal</div>
                </div>
            </div>
            <div class="section-sub-heading">
                <h2>Follow Us on :</h2>
            </div>
            <div class="d-flex">
                <a href="#" class="fa-brands fa-facebook"></a>
                <a href="#" class="fa-brands fa-twitter"></a>
                <a href="#" class="fa-brands fa-instagram"></a>
                <a href="#" class="fa-brands fa-linkedin"></a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6 col-lg-6 col-12">
                    <label for="validationCustom01" class="form-label">Enter Name <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Enter Your Full Name *" id="validationCustom01"
                        required>
                    <div class="invalid-feedback">
                        Please Enter Name.
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <label for="validationCustom02" class="form-label">Email <span>*</span></label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Your Email*"
                        required>
                    <div class="invalid-feedback">
                        Please Enter Email.
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <label for="validationCustomUsername" class="form-label">Subject <span>*</span></label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" placeholder="Enter Your Subject *"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                        Please provide Subject.
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <label for="validationCustom03" class="form-label">Phone <span>*</span></label>
                    <input type="text" class="form-control" id="validationCustom03"
                        placeholder="Enter Your Phone Number *" required>
                    <div class="invalid-feedback">
                        Please provide Number.
                    </div>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Message*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Enter Your Message *"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28263.91405291609!2d85.305455936364!3d27.686726926408802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1695967572780!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<?php include("includes/footer.php"); ?>