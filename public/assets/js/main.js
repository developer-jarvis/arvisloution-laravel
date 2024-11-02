// =================about us section counter start==============================
document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.count');
    const speed = 200; // Speed of incrementing

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target; // Ensure it ends exactly at the target
            }
        };

        updateCount();
    });
});
// ==================================about us counter end============================