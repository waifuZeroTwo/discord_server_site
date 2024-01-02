document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
function toggleIntro() {
    var fullIntro = document.getElementById("full-intro");
    var button = document.getElementById("expand-intro");

    if (fullIntro.style.display === "none") {
        fullIntro.style.display = "block";
        button.innerText = "Show less";
    } else {
        fullIntro.style.display = "none";
        button.innerText = "Click this if you like reading lol";
    }
}
function openOverlay(overlayId) {
    var overlay = document.getElementById(overlayId);
    overlay.style.display = 'block'; // Set display to block
    setTimeout(() => { overlay.classList.add('show'); }, 10); // Add 'show' class shortly after
}

function closeOverlay(overlayId) {
    var overlay = document.getElementById(overlayId);
    overlay.classList.remove('show'); // Remove 'show' class
    setTimeout(() => { overlay.style.display = 'none'; }, 500); // Set display to none after transition
}