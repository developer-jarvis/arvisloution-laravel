@include('include.head')

<style>
    @media (max-width: 992px) {
        .main-header {
            background-color: white !important;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            color: var(--primary-color) !important;
        }
    }

    .dropdown-menu .dropdown-item::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: width .3s;
    }

    .dropdown-item:hover::after {
        width: 100%;
    }

    .nav-link.dropdown-toggle {
        display: flex;
        align-items: center;
        justify-content: start;
    }

    .nav-link.dropdown-toggle span i {
        margin-left: 5px;
        vertical-align: middle;
        font-size: 12px;
        transition: transform 0.3s;
    }



    .navbar-nav .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        /* display: none; */
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem;
    }


    .main-header {
        background-color: transparent;
        padding: 10px;
        position: fixed;
        width: 100%;
        z-index: 999;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0);

    }

    .sticky-header {
        background-color: white;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }


    .navbar-nav .nav-link {
        color: white;
        transition: color 0.5s ease;
    }

    .sticky-header .navbar-nav .nav-link {
        color: var(--primary-color);
    }

    #checkbox {
        display: none;
    }

    .toggle {
        position: relative;
        width: 50px;
        height: 50px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: transform .5s ease-in-out;
    }

    .bars {
        width: 80%;
        height: 6px;
        background-color: var(--secondary-color);
        border-radius: 10px;
        transition: all .3s ease;
    }

    #bar2 {
        transition: transform .6s ease;
    }

    #bar1,
    #bar3 {
        width: 50%;
    }

    #checkbox:checked+.toggle .bars {
        position: absolute;
        transition: transform .5s ease-in-out;
    }

    #checkbox:checked+.toggle #bar2 {
        transform: scaleX(0);
    }

    #checkbox:checked+.toggle #bar1 {
        width: 100%;
        transform: rotate(45deg);
    }

    #checkbox:checked+.toggle #bar3 {
        width: 100%;
        transform: rotate(-45deg);
    }

    #checkbox:checked+.toggle {
        transform: rotate(360deg);
    }

    .main-header .dropdown-menu .dropdown-item {
        font-weight: 500;
    }

    .main-header .dropdown-menu .dropdown-item:hover {
        color: var(--secondary-color);
        transform: translateX(5px);
        transition: cubic-bezier(0.47, 0, 0.745, 0.715) 0.3s;
    }
</style>

<!-- =================================main header================================ -->
<section class="main-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <img src="assets/images/logo/logo.jpg" alt="Logo" style="width: 100px;" class="bouncing-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox" class="toggle">
                        <div class="bars" id="bar1"></div>
                        <div class="bars" id="bar2"></div>
                        <div class="bars" id="bar3"></div>
                    </label>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                <i class="fas fa-home "></i>
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-info-circle me-1"></i>
                                About
                                <span>
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('about') }}"><i
                                            class="fas fa-info-circle me-2"></i> About Us</a></li>
                                <li><a class="dropdown-item" href="{{ route('mission-vission') }}"><i
                                            class="fas fa-bullseye me-2"></i> Mission & Vision</a></li>
                                <li><a class="dropdown-item" href="{{ route('privacy-policy') }}"><i
                                            class="fas fa-user-shield me-2"></i> Privacy & Policy</a></li>
                                <li><a class="dropdown-item" href="{{ route('terms-conditions') }}"><i
                                            class="fas fa-file-contract me-2"></i> Terms of Services</a></li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fas fa-concierge-bell me-1"></i>
                                Services
                                <span>
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('website-design') }}"><i
                                            class="fas fa-laptop me-2"></i> Website Design</a></li>
                                <li><a class="dropdown-item" href="{{ route('software-development') }}"><i
                                            class="fas fa-code me-2"></i> Software Development</a></li>
                                <li><a class="dropdown-item" href="{{ route('digital-marketing') }}"><i
                                            class="fas fa-bullhorn me-2"></i> Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('search-engine-optimization') }}"><i
                                            class="fas fa-search me-2"></i> Search Engine Optimization</a></li>
                                <li><a class="dropdown-item" href="{{ route('paid-ad-service') }}"><i
                                            class="fas fa-ad me-2"></i> Paid ADs Service</a></li>
                                <li><a class="dropdown-item" href="{{ route('social-media-marketing') }}"><i
                                            class="fab fa-facebook-f me-2"></i> Social Media Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('websecurity') }}"><i
                                            class="fas fa-shield-alt me-2"></i> Web Security & Hacking Removal</a></li>
                                <li><a class="dropdown-item" href="{{ route('graphic-design') }}"><i
                                            class="fas fa-paint-brush me-2"></i> Graphic Design</a></li>
                                <li><a class="dropdown-item" href="{{ route('mobile-app') }}"><i
                                            class="fas fa-mobile-alt me-2"></i> Mobile App</a></li>
                                <li><a class="dropdown-item" href="{{ route('buisness-promotion') }}"><i
                                            class="fas fa-bullhorn me-2"></i> Business Promotion</a></li>
                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('website-designs') }}">
                                <i class="fas fa-tags "></i>
                                Product & Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('portfolio') }}">
                                <i class="fas fa-briefcase "></i>
                                Portfolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('contact-us') }}">
                                <i class="fas fa-envelope "></i>
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('career') }}">
                                <i class="fas fa-user-tie"></i>
                                Career
                            </a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a id="yourButtonId" class="nav-link active" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                               <i class="fas fa-robot "></i> Quick Enquiry
                            </a>
                            
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </div>
</section>
@include('off-canvas')
@include('quick-bot')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var mainHeader = document.querySelector('.main-header');
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        var lastScrollY = window.scrollY;
        var scrollThreshold = 150;
        var isSticky = false;

        navLinks.forEach(function(link) {
            link.style.color = 'white';
        });

        window.addEventListener('scroll', function() {
            var isMobile = window.innerWidth <= 992;

            if (window.scrollY > scrollThreshold) {
                if (window.scrollY > lastScrollY) {
                    mainHeader.classList.add('sticky-header');
                    mainHeader.style.backgroundColor = 'white';
                    navLinks.forEach(function(link) {
                        link.style.color = 'var(--primary-color)';
                    });
                } else {
                    mainHeader.classList.add('sticky-header');
                    mainHeader.style.backgroundColor = 'var(--primary-color)';
                    navLinks.forEach(function(link) {
                        link.style.color = 'white';
                    });
                }
            } else {
                mainHeader.classList.remove('sticky-header');
                mainHeader.style.backgroundColor = 'transparent';
                navLinks.forEach(function(link) {
                    link.style.color = 'white';
                });
            }

            lastScrollY = window.scrollY;
        });
    });
</script>
