document.getElementById('feedback-button').addEventListener('click', function() {
    Swal.fire({
        title: 'Do you like this website?',
        showDenyButton: true,
        confirmButtonText: 'Yes, I like it!',
        denyButtonText: `No, I don't like it`,
        icon: 'question',
        allowOutsideClick: false
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'I’m very happy that you like it!',
                text: 'I hope it becomes a wonderful memory on this website.',
                icon: 'success',
                confirmButtonText: 'Thank you!',
                allowOutsideClick: false
            });
        } else if (result.isDenied) {
            Swal.fire({
                title: 'Alright, Kak Piyak.',
                text: 'I will strive to improve the website in the future.',
                icon: 'info',
                confirmButtonText: 'Got it!',
                allowOutsideClick: false
            });
        }
    });
});