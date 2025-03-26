// Ambil semua tautan navigasi
const navLinks = document.querySelectorAll('nav a');

// Tambahkan event listener ke setiap tautan
navLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        // Hapus kelas 'active' dari semua tautan
        navLinks.forEach(link => link.classList.remove('active'));

        // Tambahkan kelas 'active' ke tautan yang diklik
        this.classList.add('active');
    });
});