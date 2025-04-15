window.addEventListener('load', function () {
    alert("Selamat datang di website Michelle Munayang!");
});

const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        console.log(`Navigasi ke: ${link.textContent}`);
    });
});

const yearSpan = document.createElement('span');
yearSpan.textContent = new Date().getFullYear();

const footer = document.querySelector('footer p');
if (footer) {
    footer.innerHTML = `&copy; ${yearSpan.textContent} Michelle Munayang`;
}
