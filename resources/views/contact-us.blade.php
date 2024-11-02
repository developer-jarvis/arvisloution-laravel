@include('include.header')
{{-- ============================================ --}}
<style>
    .contact-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
        /* Set height as needed */
    }

    .contact-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
    }


    .contact-video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        z-index: 1;
    }

    .contact-content-overlay {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 2;
    }

    .breadcrumb-title {
        font-size: 3rem;
        color: white;
    }

    @media screen and (max-width: 768px) {
        .contact-banner {
            padding-top: 70px;
        }

        .contact-content-overlay h1 {
            font-size: 1.5rem;
        }
    }
</style>
<section class="contact-banner">
    <div class="position-relative">
        <div class="contact-container">
            <video src="assets/images/banner/contact-banner.mp4" autoplay loop muted playsinline></video>
            <div class="contact-video-overlay"></div>
            <div class="contact-content-overlay container text-center py-5 d-md-block d-sm-block d-lg-none">
                <h1 class="breadcrumb-title text-white">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="" class="">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
{{-- =================================================== --}}
<style>
    .contact-us .card i {
        font-size: 20px;
        color: var(--tertiary-color);
        background: var(--background-color);
        padding: 10px;
        border-radius: 10px;
        height: 40px;
        width: 40px;
    }

    .contact-us .card {
        border-top: 2px solid var(--secondary-color);
    }
</style>
<section class="py-5 contact-us">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="py-2 text-center">
                <h2>Contact Us</h2>
                <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                style="width: 230px;">
            </div>
            <div class="col-md-4 ">
                <div class="card text-start mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">General Information & Billing/Order</h4>
                            <i class="fas fa-headset"></i>
                        </div>
                        <hr>
                        <p class="card-text"><i class="fa fa-phone-volume me-2"></i>+91 8603999789</p>
                        <hr>
                        <p class="card-text"><i class="fa fa-envelope-open-text me-2"></i>aarvisolution21@gmail.com</p>
                    </div>
                </div>

                <div class="card text-start mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Job & Hiring</h4>
                        <hr>
                        <p class="card-text"><i class="fa fa-phone-volume me-2"></i>+91 8603999789</p>
                        <hr>
                        <p class="card-text"><i class="fa fa-envelope-open-text me-2"></i>aarvisolution21@gmail.com</p>
                    </div>
                </div>

                <div class="card text-start mb-3">
                    <div class="card-body">
                        <h4 class="card-title">WhatsApp no.</h4>
                        <hr>
                        <p class="card-text"><i class="fab fa-whatsapp me-2"></i>8603999789</p>
                        <hr>
                        <p class="card-text"><i class="fa fa-envelope-open-text me-2"></i>aarvisolution21@gmail.com</p>
                    </div>
                </div>

                <div class="card text-start mb-3">
                    <div class="card-body ">
                        <h4 class="card-title">Office Address</h4>
                        <hr>
                        <li class="mb-2 d-flex align-items-start justify-content-start">
                            <i class="fas fa-map-location me-2"></i> shantiniketan, ground floor Dadi ji lane,
                            boring road Patna-01
                        </li>

                    </div>
                </div>

            </div>

            <div class="col-md-8">

                <div class="card text-start">
                    <div class="card-body">
                        <video src="assets/images/contact/contact.mp4" autoplay loop muted playsinline
                            class="w-100 rounded"></video>
                        <div class="py-3">
                            <h4 class="card-title">Send Us Message </h4>
                            <p class="fw-bold">Find the Perfect Solution for Your Business</p>
                        </div>
                        <form action="" method="POST">
                            <div class="row py-2">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Your Name*" required>
                                </div>
                                <div class="col-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <input type="tel" class="form-control" name="number"
                                        placeholder="Enter Your Phone Number*" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Enter Your Address">
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <select name="service" id="" value="" name="service" class="form-select">
                                    <option value="">Select Your Service</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="content-writing">Content Writing</option>
                                    <option value="branding">Branding</option>
                                </select>
                            </div>
                            <div class="col-12 py-2">
                                <textarea name="message" id="" cols="3" rows="" name="message" class="form-control"
                                    placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="py-2">
                                <button type="submit" name="submit" class="btn">
                                    Submit 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('emails.mail')
<style>
    .iframe-section {
        background: var(--background-color);
    }
</style>
<section class="py-3 iframe-section">
    <div class="container">
        <div class="row ">
            <div class="py-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.7121962155747!2d85.11499597396495!3d25.614478114675617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed598f312899f7%3A0xb03bf8366406ad!2sAarvi%20Solution!5e0!3m2!1sen!2sin!4v1729058807034!5m2!1sen!2sin"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
{{-- =====================footer start======================= --}}
@include('include.footer')
