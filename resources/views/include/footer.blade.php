<style>
    .footer-section {
        position: relative;
        color: var(--tertiary-color) !important;
        padding: 10px 0;
        overflow: hidden;
    }

    @media (max-width: 768px) {
        .footer-section {
            margin-bottom: 50px;
        }
    }

    .footer-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        opacity: 0.9;
    }

    .footer-section h4 {
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-section p {
        margin-bottom: 15px;
    }

    .footer-section .social-media-icons {
        margin-top: 15px;
    }

    .footer-section .social-media-icons li {
        margin-right: 15px;
    }

    .footer-section .social-media-icons a {
        color: var(--tertiary-color);
        transition: color 0.3s;
    }

    .footer-section .social-media-icons a:hover {
        color: #fff;
    }

    .footer-section .quick-links {
        list-style: none;
        padding: 0;
    }

    .footer-section .quick-links li {
        margin-bottom: 10px;
    }

    .footer-section .quick-links a {
        color: var(--tertiary-color);
        text-decoration: none;
    }

    .footer-section .quick-links a:hover {
        text-decoration: underline;
    }

    .footer-section .newsletter input[type="text"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 20px;
        outline: none;
        margin-bottom: 10px;
    }



    .footer-services ul li a {
        color: var(--tertiary-color) !important;
    }

    .footer-section .footer-services ul li:after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: var(--tertiary-color);
        transition: width 0.3s;
    }

    .footer-section .footer-services ul li:hover::after {
        width: 80%;
    }
</style>

<section class="footer-section">
    <video class="footer-video" autoplay muted loop>
        <source src="assets/images/banner/footer-banner.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-3">
                <div class="py-2">
                    <img src="assets/images/logo/logo.png" alt="Logo" class="img-fluid mb-3">
                    <p>Optimize Your Design Process</p>
                    <div class="py-2 social-media-icons">
                        <ul class="list-unstyled d-flex">
                            <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="py-2">
                    <h4 class="text-white">Contact Us</h4>
                    <hr>
                    <div class="py-1 social-media-icons">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-center justify-content-start">
                                <i class="fas fa-phone me-2"></i> 8603999789
                            </li>
                            <li class="mb-2 d-flex align-items-center justify-content-start">
                                <i class="fas fa-envelope me-2"></i> aarvisolution21@gmail.com
                            </li>
                            <li class="mb-2 d-flex align-items-center justify-content-start">
                                <i class="fas fa-map-marker-alt me-2"></i> shantiniketan, ground floor Dadi ji lane,
                                boring road Patna-01
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 footer-services">
                <div class="py-2">
                    <h4 class="text-white ">Services</h4>
                    <hr>
                    <div class="py-2">
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fas fa-laptop-code me-2 mb-2"></i> Website Design</a></li>
                            <li><a href=""><i class="fas fa-code me-2 mb-2"></i> Software Development</a></li>
                            <li><a href=""><i class="fas fa-bullhorn me-2 mb-2"></i> Digital Marketing</a></li>
                            <li><a href=""><i class="fas fa-search me-2 mb-2"></i> Search Engine Optimization</a>
                            </li>
                            <li><a href=""><i class="fas fa-ad me-2 mb-2"></i> Paid ADs Services</a></li>
                            <li><a href=""><i class="fas fa-share-alt me-2 mb-2"></i> Social Media Marketing</a>
                            </li>
                            <li><a href=""><i class="fas fa-shield-alt me-2 mb-2"></i> Web Security & Hacking
                                    Removal</a></li>
                            <li><a href=""><i class="fas fa-paint-brush me-2 mb-2"></i> Graphic Design</a></li>
                            <li><a href=""><i class="fas fa-mobile-alt me-2 mb-2"></i> Mobile App</a></li>
                            <li><a href=""><i class="fas fa-chart-line me-2 mb-2"></i> Business Promotion</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 footer-services">
                <div class="py-2">
                    <h4 class="text-white ">UseFull Links</h4>
                    <hr>
                    <div class="py-2">
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fas fa-laptop me-2 mb-2"></i> Website Designs</a></li>
                            <li><a href=""><i class="fas fa-ad me-2 mb-2"></i> Google Advertisement</a></li>
                            <li><a href=""><i class="fab fa-facebook-f me-2 mb-2"></i> Facebook Advertisement</a>
                            </li>
                            <li><a href=""><i class="fab fa-instagram me-2 mb-2"></i> Instagram Advertisement</a>
                            </li>
                            <li><a href=""><i class="fab fa-youtube me-2 mb-2"></i> Youtube Advertisement</a>
                            </li>
                            <li><a href=""><i class="fas fa-search-dollar me-2 mb-2"></i> SEO/ORM Services</a>
                            </li>
                            <li><a href=""><i class="fas fa-code me-2 mb-2"></i> Software Development</a></li>
                            <li><a href=""><i class="fas fa-bullhorn me-2 mb-2"></i> Business Promotions</a></li>
                            <li><a href=""><i class="fas fa-shield-alt me-2 mb-2"></i> Web Security Services</a>
                            </li>
                            <li><a href=""><i class="fas fa-paint-brush me-2 mb-2"></i> Graphic Design
                                    Services</a>
                            </li>
                            <li><a href=""><i class="fas fa-tasks me-2 mb-2"></i> On Demand Services</a></li>
                            <li><a href=""><i class="fas fa-server me-2 mb-2"></i> Domain Hosting Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="py-2">
                <div class="footer-bottom text-center text-md-start">
                    <p>&copy; 2024 <img src="assets/images/logo/logo.png" alt="" class="img-fluid"
                            style="width: 10%"> All Rights Reserved. Made with ❤️ by <a href="https://genmish.com"
                            target="_blank" class="text-white">Genmish.com</a></p>
                </div>
            </div>
        </div>

    </div>
    {{-- ===================================================== --}}
</section>
<section>
    <style>
        .medium-contact {
            bottom: 0px !important;
            background: var(--secondary-color);

            color: var(--tertiary-color);
        }

        .medium-contact i {
            width: 30px;
            height: 30px;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }



        .medium-contact-phone i {
            font-size: 30px;
            position: relative;
            left: 50%;
            bottom: 20px;
            transform: translate(-50%, 0%);
            border-radius: 50%;
            background: var(--secondary-color);
            box-shadow: 0px 0px 0px 5px var(--secondary-color), 0px 0px 0px 10px var(--tertiary-color), 0px 0px 0px 15px var(--secondary-color);
            padding: 25px;
            border-radius: 50%;
        }
    </style>
    <div class="container-fluid medium-contact d-lg-none d-sm-block fixed-bottom">
        <div class="row justify-content-between align-items-center text-center">
            <div class="col-2">
                <i class="fas fa-paper-plane ms-2"> <a id="yourButtonId" class="nav-link active" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                        aria-controls="offcanvasWithBothOptions">
                    </a></i>
            </div>
            <div class="col-2">
                <a href="mailto:aarvisolution21@gmail.com" class="text-white"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="col-2 medium-contact-phone">
                <a href="tel:8603999789"><i class="fas fa-phone-volume text-white"></i></a>
            </div>
            <div class="col-2">
                <a href="https://api.whatsapp.com/send?phone=8603999789" target="_blank" class="text-white"> <i
                        class="fab fa-whatsapp"></i></a>
            </div>
            <div class="col-2 custom-chat-launcher d-md-none">
                <i class="fas fa-user-plus"></i>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66eebb76e5982d6c7bb246e1/1i8a8oi1g';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();


    function handleChatWidget() {
        if (window.innerWidth >= 992) {
            Tawk_API.showWidget();
        } else {
            Tawk_API.hideWidget();
        }
    }

    document.querySelector('.custom-chat-launcher').addEventListener('click', function() {
        Tawk_API.maximize();
    });

    window.addEventListener('load', handleChatWidget);
    window.addEventListener('resize', handleChatWidget);
</script>
