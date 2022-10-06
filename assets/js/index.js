document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('imageModal');
    const images = document.querySelectorAll('.fullscreen');
    const modalImage = document.getElementById('modalImage');
    const captionText = document.getElementById('caption');

    images.forEach(img => {
        img.addEventListener('click', function () {
            modal.style.display = 'block';
            modalImage.src = img.src;
            captionText.innerHTML = this.alt;
        });
    });

    const closeSpan = document.getElementById('close');
    closeSpan.onclick = function () {
        modal.style.display = 'none';
    }

    document.onkeydown = function (e) {
        if (e.key === 'Escape') {
            modal.style.display = 'none';
        }
    };
});

function decodeMail(encoded) {
    const address = atob(encoded);
    window.location.href = 'mailto:' + address;
}