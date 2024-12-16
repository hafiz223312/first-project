// Get modal elements
const modal = document.getElementById('modal');
const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');
const dismissModalButton = document.getElementById('dismissModalButton');
openModalButton.addEventListener('click', function() {
    modal.style.display = 'flex'; // Show the modal
});
closeModalButton.addEventListener('click', function() {
    modal.style.display = 'none'; // Hide the modal
});
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none'; 
    }
});

dismissModalButton.addEventListener('click', function() {
    modal.style.display = 'none'; // Hide the modal
});
