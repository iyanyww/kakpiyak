    // Mencegah klik kanan di seluruh halaman
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    // Mencegah pemilihan teks
    document.addEventListener('selectstart', function(e) {
        e.preventDefault();
    });

    // Mencegah penyalinan teks
    document.addEventListener('copy', function(e) {
        e.preventDefault();
    });