@include('include.header')
{{-- ============================================ --}}
<style>
    .gallery-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
        /* Set height as needed */
    }

    .gallery-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        background-position: 100% center;
    }

    .gallery-video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        z-index: 1;
    }

    .gallery-content-overlay {
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
        .gallery-banner {
            padding-top: 40px;
        }

        .gallery-content-overlay h1 {
            font-size: 1.5rem;
        }
    }
</style>
<section class="gallery-banner">
    <div class="position-relative">
        <div class="gallery-container">
            <video src="assets/images/banner/gallery-banner.mp4" autoplay loop muted playsinline></video>
            <div class="gallery-video-overlay"></div>
            <div class="gallery-content-overlay container text-center py-5 d-md-block d-sm-block d-lg-none">
                <h1 class="breadcrumb-title text-white">Portfolio</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="" class="">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
{{-- =================================================== --}}
<style>
    .gallery-card {
        position: relative;
        overflow: hidden;
        border: none;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    }

    .gallery-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .gallery-card-img {
        width: 100%;
        height: 150px;
        object-fit: contain;
        transition: transform 0.5s ease-in-out, opacity 0.3s ease-in-out;
    }

    .gallery-card:hover .gallery-card-img {
        transform: scale(1.1);
        opacity: 0.8;
    }

    .gallery-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .gallery-card:hover .gallery-card-overlay {
        opacity: 9;
    }

    .gallery-card-overlay-text {
        font-size: 1.5rem;
        letter-spacing: 2px;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="py-2 text-center">
                <div class="h2">Our Portfolio</div>
                <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                    style="width: 230px;">
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://admissionpartner.in/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="assets/images/portfolio/admission-partner.jpeg" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="https://srkeducation.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://srkeducation.com/images/logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="https://www.tirupatiinteriordesign.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://www.tirupatiinteriordesign.com/images/tirupati-logo-1.png"
                            alt="Portfolio Image" class="card-img-top rounded img-fluid gallery-card-img"
                            loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://zeeprofessional.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://zeeprofessional.com/wp-content/uploads/2023/08/Zee-Professional-Logo.png"
                            alt="Portfolio Image" class="card-img-top rounded img-fluid gallery-card-img"
                            loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://courtmarriagekaro.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://courtmarriagekaro.com/assets/img/Court%20Marrage%20Logo%20(1).png"
                            alt="Portfolio Image" class="card-img-top rounded img-fluid gallery-card-img"
                            loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://snehilgreenzone.in/" target="_blank" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://snehilgreenzone.in/assets/image/logo/green_zone.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://naftindia.co/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/3448naft_logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://sarikaroenterprises.in/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/3908sarika_logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://taskblessings.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://taskblessings.com/assets/images/logo/task-logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://thelawpedia.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://thelawpedia.com/images/logo/logo.jpeg" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://vastavindia.in/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/9052vastav-logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://vihuinfra.in/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/8051vihu_infra_logo1.jpg" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://patnapsychiatry.in/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/9697healthy_minds-logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://sriramtravelsrourkela.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/2762logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://anindrasleepdisorderclinic.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/2293logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://drajaysclinic.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/8726logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://prakritisexandgenderclinic.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://genmish.com/admin/partner/63002.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="http://localhost/university-junction/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="http://localhost/university-junction/assets/images/logo/logo-1.png"
                            alt="Portfolio Image" class="card-img-top rounded img-fluid gallery-card-img"
                            loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="https://biharadmission.com/" target="_blank">
                    <div class="card gallery-card rounded">
                        <img src="https://biharadmission.com/assets/images/logo/logo.png" alt="Portfolio Image"
                            class="card-img-top rounded img-fluid gallery-card-img" loading="lazy">
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-overlay-text">View Website</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<script></script>
{{-- ==================================================== --}}
@include('include.footer')
