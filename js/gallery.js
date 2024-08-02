function openModal(src, title, description) {
    document.getElementById('modal-image').src = src;
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-description').textContent = description;
    document.getElementById('gallery-modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('gallery-modal').classList.add('hidden');
}