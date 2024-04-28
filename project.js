// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    fetchAvailableRooms();
    
    document.getElementById('book-room-form').addEventListener('submit', function(event) {
        event.preventDefault();
        bookRoom();
    });
});

function fetchAvailableRooms() {
    fetch('rooms.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('available-rooms').innerHTML = data;
        });
}

function bookRoom() {
    const formData = new FormData(document.getElementById('book-room-form'));
    
    fetch('bookings.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        fetchAvailableRooms(); // Refresh available rooms after booking
    });
}
