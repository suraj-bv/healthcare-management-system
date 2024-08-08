document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('confirmationModal');
    const closeModal = document.querySelector('.close');
    const confirmationMessage = document.getElementById('confirmationMessage');

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    window.bookAppointment = function(doctorName, appointmentDate) {
        // Save appointment to localStorage
        let appointments = JSON.parse(localStorage.getItem('appointments')) || [];
        appointments.push({ doctor: doctorName, date: appointmentDate });
        localStorage.setItem('appointments', JSON.stringify(appointments));

        // Show confirmation modal
        confirmationMessage.textContent = `Your appointment with ${doctorName} has been fixed for ${appointmentDate}.`;
        modal.style.display = 'block';
    }
});
