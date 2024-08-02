   // Simulate page load
   window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    const content = document.getElementById('content');

    // Hide loader and show content after page load
    setTimeout(() => {
        loader.style.display = 'none';
        content.classList.remove('opacity-0');
        content.classList.add('opacity-100');
    }, 3000); // Adjust timing as needed
});