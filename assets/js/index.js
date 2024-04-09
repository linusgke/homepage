function decodeMail(encoded, redirect) {
    const address = atob(encoded);

    if (redirect) {
        window.location.href = 'mailto:' + address;
        return;
    }

    const element = document.getElementById('mail');
    element.href = 'mailto:' + address;
    element.textContent = address;
}