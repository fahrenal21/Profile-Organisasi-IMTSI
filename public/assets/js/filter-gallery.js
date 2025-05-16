document.addEventListener('DOMContentLoaded', function () {
    console.log('Script loaded and DOMContentLoaded triggered');
    const dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
    console.log('Dropdown elements:', dropdownTriggerList);

    dropdownTriggerList.map(function (dropdownTriggerEl) {
        console.log('Initializing dropdown:', dropdownTriggerEl);
        return new bootstrap.Dropdown(dropdownTriggerEl);
    });

    // Filter logic
    const filterOptions = document.querySelectorAll('.filter-option'); // Semua opsi filter
    const galleryCards = document.querySelectorAll('.filter-item'); // Semua card di gallery
    const filterButton = document.getElementById('filterDropdown'); // Tombol filter dropdown

    filterOptions.forEach(option => {
        option.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah reload halaman
            const filter = this.getAttribute('data-filter'); // Ambil nilai filter dari data-filter
            const selectedText = this.textContent.trim(); // Ambil teks kategori yang dipilih
            console.log('Selected filter:', filter);

            // Perbarui teks pada button
            filterButton.innerHTML = `<i class="bi bi-chevron-down"></i> ${selectedText}`;

            // Tampilkan atau sembunyikan card sesuai filter
            galleryCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category'); // Ambil kategori dari data-category
                if (filter === 'all' || cardCategory === filter) {
                    card.style.display = 'block'; // Tampilkan card yang sesuai filter
                } else {
                    card.style.display = 'none'; // Sembunyikan card yang tidak sesuai filter
                }
            });
        });
    });
});
