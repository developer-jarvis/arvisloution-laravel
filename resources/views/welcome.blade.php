@include('include.header')
{{-- ======================header end========================== --}}
<section class="main-banner">
    <div class="">
        <div class=" position-relative">
            <div class="video-container ">
                <video src="assets/images/banner/banner.mp4" autoplay loop muted playsinline></video>
                <div class="video-overlay"></div>
                <div class="content-overlay">
                    <h1 class="d-none d-lg-block">Best Website Design Company In Boring Road Patna.</h1>
                    <h5 class="head-title ">Build Your Business into a Brand!</h5>
                    <a href="{{route('contact-us')}}" class="btn ">Explore Now <i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ===================about section================================== --}}

<section class=" about-us-section py-5">
    <div class="container box-shadow">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="py-2">
                    <h5 class="head-title">About Aarvi Solution</h5>
                </div>
                <div class="py-2">
                    <h2>Best Website Design Company In Boring Road Patna.</h2>
                    <hr>
                    <p>The visual impression is important whether your business is starting from scratch or competing
                        with the competition and remaining stable in the market. You require the assistance of an
                        established design firm if you want to advance your internet business.</p>
                    <p>
                        The best website design company in Boring Road Patna, As-Aarvi, enables your online business in
                        addition to creating websites. Our goal-oriented approach will assist you in creating a project
                        plan as well as in hitting your goal and successfully expanding your business.
                    </p>
                </div>
                <div class="py-3">
                    <div class="container text-center my-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="counter">
                                    <h1 class="count" data-count="50">0</h1>
                                    <p>Projects Done</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter">
                                    <h1 class="count" data-count="200">0</h1>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter">
                                    <h1 class="count" data-count="15">0</h1>
                                    <p>Professional Advisors</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 py-2">
                        <div class="card text-start">
                            <img class="card-img-top mx-auto" src="assets/images/about/card-1.webp" alt="Title" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Experiences</h4>
                                <p class="card-text">With over 6+ years of experience in the field, we provide website
                                    design services that combine expertise and innovation. Explore our platform to
                                    discover captivating and effective content for your website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-2">
                        <div class="card text-start ">
                            <img class="card-img-top mx-auto" src="assets/images/about/card-2.avif" alt="Title" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Budget Friendly</h4>
                                <p class="card-text">Discover our budget-friendly website designs tailored to your
                                    needs. All within your budget, with stunning aesthetics, faultless navigation, and
                                    responsive layouts. Get online Business with elegance without breaking your wallet!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 py-2 ">
                        <div class="card text-start">
                            <img class="card-img-top mx-auto" src="assets/images/about/card-3.avif" alt="Title" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Quality</h4>
                                <p class="card-text">We prioritize your project, work hard for each project, and offer
                                    you the best quality result, We maintain a long-term business relationship with
                                    every client and receive the greatest outcomes thanks to our commitment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-2">
                        <div class="card text-start">
                            <img class="card-img-top mx-auto" src="assets/images/about/card-4.avif" alt="Title" />
                            <div class="card-body text-center">
                                <h4 class="card-title">100% Satisfaction</h4>
                                <p class="card-text">Experience stunning website designs that guarantee 100% client
                                    satisfaction. Our carefully designed websites can help you reach your full online
                                    potential. Elevate your brand with us and enthrall your audience. Start right away!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================about section end==================================== --}}


{{-- ======================serices section start================================= --}}
@include('service-slider')
{{-- ===================serices section end================================ --}}
@include('technology-slider')
{{-- ===============testimonial start================================ --}}
@include('testimonial')
{{-- ==========================testimonial end============================== --}}

<section class="py-5 contact-us">
    <div class="container box-shadow">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="py-2">
                    <h4>Have Questions? Write a Message</h4>
                    <h4 class="fw-bold">Let's Talk About Your Project.</h4>
                    <div class="py-3">
                        <form action="{{route('emails.mail')}}" method="POST">
                            <div class="row py-2">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Your Name*">
                                </div>
                                <div class="col-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <input type="tel" class="form-control" name="number"
                                        placeholder="Enter Your Phone Number*">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Enter Your Address">
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <select name="service" id="" value="" class="form-select">
                                    <option value="">Select Your Service</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="content-writing">Content Writing</option>
                                    <option value="branding">Branding</option>
                                </select>
                            </div>
                            <div class="col-12 py-2">
                                <textarea name="message" id="" cols="3" rows="" class="form-control"
                                    placeholder="Enter Your Message*"></textarea>
                            </div>
                            <div class="py-2">
                                <button type="submit" class="btn">
                                    Submit <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="py-2">
                    <h4 class="fw-bold">Reach Out Now</h4>
                    <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3" style="width: 180px;">
                    <p class="fw-bold">Start the collaboration with us while figuring out the best solution based on your needs.</p>
                    <hr>
                </div>
                <div class="py-2 contact-icons ">
                    <div class="section d-flex">
                        <div class="box">
                            <i class="fa fa-phone-volume"></i>
                        </div>
                        <div class="boxs">
                            <h4>Phone No</h4>
                            <p><a href="tel:918603999789">8603999789</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="section d-flex">
                        <div class="box">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="boxs">
                            <h4>Whatsapp No No</h4>
                            <p><a href="tel:918603999789">8603999789</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="section d-flex">
                        <div class="box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="boxs">
                            <h4>Email Address</h4>
                            <p><a href="mailto:aarvisolution21@gmail.com">aarvisolution21@gmail.com</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="section d-flex">
                        <div class="box">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="boxs">
                            <h4>Visit Office</h4>
                            <p><a href="">shantiniketan, ground floor Dadi ji lane, boring road Patna-01</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- =================footer============================ --}}
@include('include.footer')
