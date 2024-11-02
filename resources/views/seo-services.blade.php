@include('include.header')
{{-- ============================================ --}}
<section class="breadcrumb-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('assets/images/banner/buisness-promotion-banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container text-center d-md-block d-sm-block d-lg-none">
        <h1 class="breadcrumb-title text-white">Buy Package According Your needs</h1>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb justify-content-center ">
                <li class="breadcrumb-item"><a href="index.php" class="">Home</a></li>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Buy Package According Your
                    needs</li>
            </ol>
        </nav>
    </div>
</section>
{{-- =================================================== --}}
<style>
     .mini-side-bar {
    }
    .side-bar{
        height: 100%;
        position: sticky;
        top: 0px;
    }

    .right-side-bar {
      overflow-y: scroll;
    }

   

    .mini-dashboard .side-bar .select {
        background: var(--primary-color);
        color: var(--tertiary-color);
        border-radius: 5px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 1px;
    }

    .mini-dashboard .side-bar .select p {
        font-weight: 700;
        color: white;
        font-size: 18px;
        letter-spacing: 2px;
    }

    .mini-dashboard .side-bar .box {
        background: white;
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .mini-dashboard .side-bar .box img {
        width: 15%;
    }

    .mini-dashboard .side-bar .box i {
        display: none;
        float: right;
        color: var(--tertiary-color);
        font-size: 20px;
        padding: 5px;
        background-color: var(--primary-color);
        border-radius: 50%;
        margin-top: 8px;
    }

    .mini-dashboard .box:focus i {
        display: block;
    }
</style>
<section class="py-5">
    <div class="container-fluid mini-dashboard">
        <div class="row justify-content-start ">
            <div class="py-2 text-center">
                <h2>Seo Services</h2>
                <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                style="width: 230px;">
                <p class="lead fw-bold">Buy Package According Your needs</p>
            </div>
            <div class="col-md-4 side-bar">
                <div class=" select text-center">
                    <p>Select Category <i class="fa fa-angle-down ms-3"></i></p>
                </div>
                <div class="row">
                    <a href="{{ route('website-designs') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/website.webp" alt="" class="img-fluid">
                            Website Designs
                        </div>
                    </a>
                    <a href="{{ route('google-advertisement') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/google_ads.webp" alt="" class="img-fluid">
                            Google Advertisement
                        </div>
                    </a>
                    <a href="{{ route('facebook-advertisement') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/facebook-ads.webp" alt=""
                                class="img-fluid">
                            Facebook Advertisement
                        </div>
                    </a>
                    <a href="{{ route('instagram-ads') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/instagram_ads.webp" alt=""
                                class="img-fluid">
                            Instagram Advertisement
                        </div>
                    </a>
                    <a href="{{ route('youtube-ads') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/youtube_ads.webp" alt="" class="img-fluid">
                            Youtube Advertisement
                        </div>
                    </a>
                    <a href="{{ route('seo-services') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/seo-services.webp" alt=""
                                class="img-fluid">
                            SEO/ORM Services
                        </div>
                    </a>
                    <a href="{{ route('software-developments') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/software-development.webp" alt=""
                                class="img-fluid">
                            Software Development
                        </div>
                    </a>
                    <a href="{{ route('buisness-promotions') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/business-promotion.webp" alt=""
                                class="img-fluid">
                            Buisness Promotions
                        </div>
                    </a>
                    <a href="web-security">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/web-security.webp" alt=""
                                class="img-fluid">
                            Web
                            Security Services
                        </div>
                    </a>
                    <a href="{{ route('graphic-designs') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/graphic-designs.webp" alt=""
                                class="img-fluid">
                            Graphic Designs Services
                        </div>
                    </a>
                    <a href="{{ route('on-demand-services') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/ondemand.webp" alt="" class="img-fluid"> On
                            Demand Services
                        </div>
                    </a>
                    <a href="{{ route('domain-hosting-services') }}">
                        <div class="col-12 box">
                            <img src="assets/images/websites-designs/domain-hosting.webp" alt=""
                                class="img-fluid">
                            Domain Hosting Services
                        </div>
                    </a>

                </div>
            </div>

            <div class="col-md-8 right-side-bar">
                <div class="row justify-content-center align-items-center bg-light mb-3">
                    <div class="col-md-4">
                        <img src="assets/images/seo-services/basic-seo.webp" alt="" class="img-fluid">
                        <div class="py-4 text-center">
                            <a href="" class="btn btn-primary">Order Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Basic Seo</h3>
                        <hr>
                        <div class="py-2">
                            <ul>
                                <li>Website Analysis</li>
                                <li>Research Keywords
                                </li>
                                <li>1 Keywords Ranking Website (Website Name)
                                </li>
                                <li>Improve Wesbite Speeds or response time
                                </li>
                                <li>Compress Css, Js, Images or Dom
                                </li>
                                <li>Onpage / Offpage SEO
                                </li>
                                <li>Analyze Your Business Competitor & Make Strategy
                                </li>
                                <li>Webmaster & Analytic/Tag manager add
                                </li>
                                <li>Local Google Search Engine
                                </li>
                                <li>SEO Monitoring
                                </li>
                                <li>High Quality Backlink Create </li>
                                <li>Website Domain Authority & Page Authority improved
                                </li>
                                <li>SEO Report Deliverables (Monthly)
                                </li>
                                <li>Website 1st page ranking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center bg-light mb-3">
                    <div class="col-md-4">
                        <img src="assets/images/seo-services/standerd-seo.webp" alt="" class="img-fluid">
                        <div class="py-4 text-center">
                            <a href="" class="btn btn-primary">Order Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Standerd SEO</h3>
                        <hr>
                        <div class="py-2">
                            <ul>
                                <li>Website Analysis</li>
                                <li>Research Keywords
                                </li>
                                <li>1 Keywords Ranking Website (Website Name)
                                </li>
                                <li>Improve Wesbite Speeds or response time
                                </li>
                                <li>Compress Css, Js, Images or Dom
                                </li>
                                <li>Onpage / Offpage SEO
                                </li>
                                <li>Analyze Your Business Competitor & Make Strategy
                                </li>
                                <li>Webmaster & Analytic/Tag manager add
                                </li>
                                <li>Local Google Search Engine
                                </li>
                                <li>SEO Monitoring
                                </li>
                                <li>High Quality Backlink Create </li>
                                <li>Website Domain Authority & Page Authority improved
                                </li>
                                <li>SEO Report Deliverables (Monthly)
                                </li>
                                <li>Website 1st page ranking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center bg-light mb-3">
                    <div class="col-md-4">
                        <img src="assets/images/seo-services/advance-seo.webp" alt="" class="img-fluid">
                        <div class="py-4 text-center">
                            <a href="" class="btn btn-primary">Order Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Advance SEO</h3>
                        <hr>
                        <div class="py-2">
                            <ul>
                                <li>Website Analysis</li>
                                <li>Research Keywords
                                </li>
                                <li>1 Keywords Ranking Website (Website Name)
                                </li>
                                <li>Improve Wesbite Speeds or response time
                                </li>
                                <li>Compress Css, Js, Images or Dom
                                </li>
                                <li>Onpage / Offpage SEO
                                </li>
                                <li>Analyze Your Business Competitor & Make Strategy
                                </li>
                                <li>Webmaster & Analytic/Tag manager add
                                </li>
                                <li>Local Google Search Engine
                                </li>
                                <li>SEO Monitoring
                                </li>
                                <li>High Quality Backlink Create </li>
                                <li>Website Domain Authority & Page Authority improved
                                </li>
                                <li>SEO Report Deliverables (Monthly)
                                </li>
                                <li>Website 1st page ranking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center bg-light mb-3">
                    <div class="col-md-4">
                        <img src="assets/images/seo-services/ecommerce-seo.webp" alt="" class="img-fluid">
                        <div class="py-4 text-center">
                            <a href="" class="btn btn-primary">Order Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>E-commerce SEO</h3>
                        <hr>
                        <div class="py-2">
                            <ul>
                                <li>Website Analysis</li>
                                <li>Research Keywords
                                </li>
                                <li>1 Keywords Ranking Website (Website Name)
                                </li>
                                <li>Improve Wesbite Speeds or response time
                                </li>
                                <li>Compress Css, Js, Images or Dom
                                </li>
                                <li>Onpage / Offpage SEO
                                </li>
                                <li>Analyze Your Business Competitor & Make Strategy
                                </li>
                                <li>Webmaster & Analytic/Tag manager add
                                </li>
                                <li>Local Google Search Engine
                                </li>
                                <li>SEO Monitoring
                                </li>
                                <li>High Quality Backlink Create </li>
                                <li>Website Domain Authority & Page Authority improved
                                </li>
                                <li>SEO Report Deliverables (Monthly)
                                </li>
                                <li>Website 1st page ranking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center bg-light mb-3">
                    <div class="col-md-4">
                        <img src="assets/images/seo-services/orm-package.webp" alt="" class="img-fluid">
                        <div class="py-4 text-center">
                            <a href="" class="btn btn-primary">Order Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>ORM Packege</h3>
                        <hr>
                        <div class="py-2">
                            <ul>
                                <li>Website Analysis</li>
                                <li>Standerd SEO
                                </li>
                                <li>Search position monitoring
                                </li>
                                <li>Search position protected
                                </li>
                                <li>Google alert tracking
                                </li>
                                <li>Local listings and reviews (GMB)
                                </li>
                                <li>Content Marketing
                                </li>
                                <li>Social Media Manage
                                </li>
                                <li>SEO Monitoring
                                </li>
                                <li>High Quality Backlink Create
                                </li>
                                <li>Website Domain Authority & Page Authority improved </li>
                                <li>ORM Report Deliverables (Monthly)
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- =================================================== --}}
@include('include.footer')
