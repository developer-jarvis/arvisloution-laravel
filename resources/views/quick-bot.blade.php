<style>
    .floating-buttons {
        position: fixed;
        bottom: 20px;
        left: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 1000;
    }

    .floating-buttons a {
        width: 50px;
        height: 50px;
        background-color: #25d366;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .floating-buttons a.phone-btn {
        background-color: #007bff;
    }

    .floating-buttons a:hover {
        transform: scale(1.1);
    }

    .floating-buttons i {
        font-size: 24px;
    }
   
    @media (max-width: 768px) {
        .floating-buttons {
            bottom: 15px;
            left: 15px;
        }

        .floating-buttons a {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }
    }
</style>
<div class="floating-buttons d-none d-lg-block">
    <a href="https://wa.me/918603999789" target="_blank" class="whatsapp-btn mb-2" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="tel:+918603999789" class="phone-btn" aria-label="Phone">
        <i class="fas fa-phone"></i>
    </a>
</div>
