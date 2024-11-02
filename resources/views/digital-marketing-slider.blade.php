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
            padding: ;
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
<section class="py-5 ">
    <div class="gtco-testimonials py-5 ">
        <div class="py-3 text-center">
            <h1 class="fw-bold ">Check Out Our Digital Marketing Packages</h1>
            <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                style="width: 250px;">
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/basic-seo-services.webp" alt="" class="img-fluid">
                    <div class="card-body">
                        <h5>Basic Seo<br /><span></span></h5>
                        <p class="card-text">30 Days Result Guarantee.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/starter-seo-services.webp" alt="">
                    <div class="card-body">
                        <h5>Standard Seo<br /><span> </span></h5>
                        <p class="card-text">30 Days Result Guarantee.</p>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/advance-seo-services.webp" alt="">
                    <div class="card-body">
                        <h5>Advance Seo<br /><span>
                            </span></h5>
                        <p class="card-text">30 Days Result Guarantee.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/ecommerce-seo.webp" alt="">
                    <div class="card-body">
                        <h5> E-Commerce Seo<br /><span></span></h5>
                        <p class="card-text">30 Days Result Guarantee.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/strarter-facebook-leads.webp" alt="">
                    <div class="card-body">
                        <h5> Starter Facebook Leads<br /><span></span></h5>
                        <p class="card-text">Weekly Basic Lead delivery.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/standerd-facebook-leads.webp" alt="">
                    <div class="card-body">
                        <h5> Standard Facebook Leads<br /><span></span></h5>
                        <p class="card-text">Weekly Basic Lead delivery.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/advance-facebook-leads.webp" alt="">
                    <div class="card-body">
                        <h5> Advance Facebook Leads<br /><span></span></h5>
                        <p class="card-text">Weekly Basic Lead delivery.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center">
                    {{-- <i class="fa fa-user fa-7x"></i> --}}
                    <img class="card-img-top" src="assets/images/digital-marketing/basic-orm.webp" alt="">
                    <div class="card-body">
                        <h5> ORM Package<br /><span></span></h5>
                        <p class="card-text">30 Days Delivery.</p>
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
