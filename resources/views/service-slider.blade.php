<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .gtco-testimonials {
            position: relative;
        }

        @media (max-width: 767px) {
            .gtco-testimonials {
                margin-top: 20px;
            }
        }

        .gtco-testimonials .owl-stage-outer {
            padding: 30px 0;
        }

        .gtco-testimonials .owl-nav {
            display: none;
        }

        .gtco-testimonials .owl-dots {
            text-align: center;
        }

        .gtco-testimonials .owl-dots span {
            position: relative;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: block;
            background: var(--color-primary) !important;
            border: 2px solid #01b0f8;
            margin: 0 5px;
        }

        .gtco-testimonials .owl-dots .active {
            box-shadow: none;
        }

        .gtco-testimonials .owl-dots .active span {
            background: #01b0f8;
            box-shadow: none;
            height: 12px;
            width: 12px;
            margin-bottom: -1px;
        }

        .gtco-testimonials .card {
            background: #fff;
            box-shadow: 0 8px 30px -7px #c9dff0;
            margin: 0 20px;
            padding: 0 10px;
            border-radius: 20px;
            border: 0;
        }



        .gtco-testimonials .card h5 {
            color: var(--color-secondary);
            font-weight: bold;
            line-height: 1.3;
        }

        .gtco-testimonials .card h5 span {
            font-size: 18px;
            color: #666666;
        }

        .gtco-testimonials .card p {
            /* font-size: 18px; */
            color: var(--color-primary);
            padding-bottom: 15px;
        }

        .gtco-testimonials .active {
            opacity: 0.5;
            transition: all 0.3s;
        }

        .gtco-testimonials .center {
            opacity: 1;
        }

        .gtco-testimonials .center h5 {
            font-size: 24px;
        }

        .gtco-testimonials .center h5 span {
            font-size: 20px;
        }



        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            outline: 0;
        }
    </style>
</head>
<section class="py-5 service-slider">
    <div class="gtco-testimonials py-5 ">
        <div class="py-3 text-center">
            <h1 class="fw-bold text-white">Our Services</h1>
            <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                style="width: 250px;">
            <p class="fw-bold text-white">WE HELP YOU CREATE LONG-STANDING ONLINE SUCCESS</p>
            <div class="line"></div>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/website-designs.webp" alt="">
                    <div class="card-body">
                        <h5>Websites Designs<br /><span></span></h5>
                        <p class="card-text">One of the most affordable for speech and hearing clinic in Samastipur and
                            of
                            here
                            service very awesome and quick</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/software-development.webp" alt="">
                    <div class="card-body">
                        <h5>Software Development<br /><span> </span></h5>
                        <p class="card-text">They are just wonderful. If the kids are with them, you can relax they are
                            in
                            the right
                            hands.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/digital-marketing.webp" alt="">
                    <div class="card-body">
                        <h5>Digital Marketing Service<br /><span>
                            </span></h5>
                        <p class="card-text">Good therapy centre with experienced therapist..I joined two months before.
                            Satisfied
                            with the development . Highly recommended if you have any type of ASD.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/seo.webp" alt="">
                    <div class="card-body">
                        <h5> Search Engine Optimization<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/google-&-facebook-ad.webp" alt="">
                    <div class="card-body">
                        <h5> Google & Facebook Ad<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/website-security.webp" alt="">
                    <div class="card-body">
                        <h5> Website Security<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/graphic-designs.webp" alt="">
                    <div class="card-body">
                        <h5> Graphic Designs<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/mobile-app.webp" alt="">
                    <div class="card-body">
                        <h5> Mobile App Development<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/service/business-promotion.webp" alt="">
                    <div class="card-body">
                        <h5> Buisness Promotion<br /><span></span></h5>
                        <p class="card-text">We have done therapy in Sir's DARBHANGA branch. Sir gave speech to the
                            child.
                            Sir works
                            very hard for the child. All the staff are very supportive and Sir himself too.</p>
                        <div class="py-2">
                            <button class="btn ">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                680: {
                    items: 2,
                    nav: false,
                    loop: false
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
    });
</script>
</body>
