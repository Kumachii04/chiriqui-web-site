document.addEventListener('DOMContentLoaded', () => {
    const lugarCards = document.querySelectorAll('.lugar-card');
    
    lugarCards.forEach(card => {
        card.addEventListener('click', () => {
            alert(`Mostrando detalles de: ${card.querySelector('h3').textContent}`);
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const platoCards = document.querySelectorAll('.plato-card');
    
    platoCards.forEach(card => {
        card.addEventListener('click', () => {
            alert(`Mostrando detalles de: ${card.querySelector('h3').textContent}`);
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector(".nav-menu");
    const toggleBars = menuToggle.querySelectorAll("span");

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("active");
        toggleBars.forEach((bar) => bar.classList.toggle("active"));
    });
});
