<style>
    .gallery-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        padding: 20px 0;
        background-color:var(--tertiary-color);
        border-radius: 10px
    }

    .gallery {
        display: flex;
        gap: 10px;
        animation: scroll 30s linear infinite;
    }

    .gallery img {
        width: 200px;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .gallery img:hover {
        transform: scale(1.05);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-200px * 16 - 150px)); /* Adjust for total number of images (duplicated set) */
        }
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .gallery img {
            width: 150px;
            height: 100px;
        }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="py-3 text-center">
            <h2>Best Website Design Company in Boring Road Patna</h2>
        </div>
        <div class="col-md-12">
            <div class="gallery-container">
                <div class="gallery">
                    <!-- Original set of images -->
                    <img src="assets/images/techno-slider/1.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/2.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/3.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/4.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/5.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/7.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/8.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/9.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/10.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/1.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/12.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/13.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/14.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/15.webp" alt="" class="img-fluid">
                    <img src="assets/images/techno-slider/16.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
