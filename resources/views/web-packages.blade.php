
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .packages {
            position: relative;
        }

        @media (max-width: 767px) {
            .packages {
                margin-top: 20px;
            }
        }

        .packages .owl-stage-outer {
            padding: 30px 0;
        }

        .packages .owl-nav {
            display: none;
        }

        .packages .owl-dots {
            text-align: center;
        }

        .packages .owl-dots span {
            position: relative;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: block;
            background: var(--color-primary) !important;
            border: 2px solid #01b0f8;
            margin: 0 5px;
        }

        .packages .owl-dots .active {
            box-shadow: none;
        }

        .packages .owl-dots .active span {
            background: #01b0f8;
            box-shadow: none;
            height: 12px;
            width: 12px;
            margin-bottom: -1px;
        }

        .packages .card {
            background: #fff;
            box-shadow: 0 8px 30px -7px #c9dff0;
            margin: 0 20px;
            /* padding: 0 10px; */
            border-radius: 20px;
            border: 0;
        }



        .packages .card h5 {
            color: var(--color-secondary);
            font-weight: bold;
            line-height: 1.3;
        }

        .packages .card h5 span {
            font-size: 18px;
            color: #666666;
        }

        .packages .card p {
            /* font-size: 18px; */
            color: var(--color-primary);
            padding-bottom: 15px;
        }

        .packages .active {
            opacity: 0.5;
            transition: all 0.3s;
        }

        .packages .center {
            opacity: 1;
        }

        .packages .center h5 {
            font-size: 24px;
        }

        .packages .center h5 span {
            font-size: 20px;
        }



        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            outline: 0;
        }
    </style>
</head>
<section class="py-5 ">
    <div class="packages py-5 ">
        <div class="py-3 text-center">
            <h1 class="fw-bold ">Check Out Our Website Packages            </h1>
            <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                style="width: 250px;">
           
            <div class="line"></div>
        </div>
        <div class="owl-carousel packages-carousel owl-theme">
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/single-page-website.webp" alt="">
                    <div class="card-body">
                        <h5>Single Page Website<br /><span></span></h5>
                        <p class="card-text fw-bold">3 to 5 days [1 Page]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/starter-website-designs.webp" alt="">
                    <div class="card-body">
                        <h5>Starter Website Design<br /><span> </span></h5>
                        <p class="card-text fw-bold">5 to 7 days [5 to 7 Page]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/standerd-website-designs.webp" alt="">
                    <div class="card-body">
                        <h5>Standard Website Design<br /><span>
                            </span></h5>
                            <p class="card-text fw-bold">7 to 10 days [7 to 12 Page]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/advance-website-designs.webp" alt="">
                    <div class="card-body">
                        <h5> Advance Website Design<br /><span></span></h5>
                        <p class="card-text fw-bold">10 to 15 days [12 to 18 Page]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/pro-website-designs.webp" alt="">
                    <div class="card-body">
                        <h5> Pro Website Designs<br /><span></span></h5>
                        <p class="card-text fw-bold">15 to 25 days [20 to 30 Pages]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/basic-ecommerce-website.webp" alt="">
                    <div class="card-body">
                        <h5> Basic E-commerce Website<br /><span></span></h5>
                        <p class="card-text fw-bold">10 to 15 days [15+ Pages]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/advance-ecommerce-website.webp" alt="">
                    <div class="card-body">
                        <h5> Advanced E-commerce Websites<br /><span></span></h5>
                        <p class="card-text fw-bold">15 to 25 days [20+ Pages]</p>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/school-collage-website.webp" alt="">
                    <div class="card-body">
                        <h5> School/College Websites<br /><span></span></h5>
                        <p class="card-text fw-bold">30 days [50+ Pages]</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/website-design/custom-website-designs.webp" alt="">
                    <div class="card-body">
                        <h5> Custom Web Application<br /><span></span></h5>
                        <p class="card-text fw-bold">30 days [Contact Us]</p>
                       
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
        $(".packages-carousel").owlCarousel({
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

