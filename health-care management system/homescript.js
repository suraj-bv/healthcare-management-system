document.addEventListener('DOMContentLoaded', function() {
    console.log("Healthcare Management System Home Page Loaded");

    // Handle button clicks within cards
    document.querySelectorAll('.card button').forEach(button => {
        button.addEventListener('click', () => {
            // Redirect 'Book Now' buttons to appointment.html
            if (button.textContent.trim() === 'Book Now') {
                console.log("Redirecting to appointment.html"); // Debugging: Log redirection
                window.location.href = 'appointment.html';
            }
        });
    });

    // Profile Panel toggle functionality
    const profileButton = document.getElementById('profile-btn');
    const profilePanel = document.getElementById('profile-panel');
    const closeButton = document.getElementById('close-btn');
    const logoutButton = document.getElementById('logout-btn');
    const contactButton = document.getElementById('contact-btn');
    const contactDetails = document.getElementById('contact-details');

    profileButton.addEventListener('click', () => {
        profilePanel.classList.toggle('show');
    });

    closeButton.addEventListener('click', () => {
        profilePanel.classList.remove('show');
    });

    // logoutButton.addEventListener('click', () => {
    //     alert('Logout feature is under development.');
    // });

    contactButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default link behavior
        contactDetails.classList.toggle('hidden');
    });

    // Feedback Slider functionality
    const feedbackSlides = document.querySelectorAll('.feedback-slide');
    const feedbackContainer = document.querySelector('.feedback-container');
    let currentSlide = 0;

    function showSlide(index) {
        feedbackContainer.style.transform = `translateX(-${index * 100}%)`;
    }

    showSlide(currentSlide);

    document.getElementById('prev-btn').addEventListener('click', () => {
        currentSlide = (currentSlide > 0) ? currentSlide - 1 : feedbackSlides.length - 1;
        showSlide(currentSlide);
    });

    document.getElementById('next-btn').addEventListener('click', () => {
        currentSlide = (currentSlide < feedbackSlides.length - 1) ? currentSlide + 1 : 0;
        showSlide(currentSlide);
    });
});
