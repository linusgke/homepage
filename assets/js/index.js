function decodeMail(encoded) {
    const address = atob(encoded);
    window.location.href = 'mailto:' + address;
}