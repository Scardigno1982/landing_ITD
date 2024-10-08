/*
 * Autor: Sergio Scardigno
 * Correo: sergioscardigno82@gmail.com
 * Fecha de creación: 2024-10-08
 * Última modificación: 2024-10-08
 * Descripción: Contenido de JS
 * Versión: 1.0
 * Si necesita realizar alguna modificación, no dude en contactarme.
 */

document.getElementById('menu-button').addEventListener('click', function () {
    var menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
});

// Función para cerrar el menú cuando se hace clic en un enlace.
document.querySelectorAll('#menu a').forEach(function (link) {
    link.addEventListener('click', function () {
        var menu = document.getElementById('menu');
        menu.classList.add('hidden'); // Cierra el menú al hacer clic en cualquier enlace
    });
});

// Función para animar los números desde 0 hasta el valor objetivo.
function animateNumber(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000; // Duración de la animación en milisegundos.
    const start = 0;
    const range = target - start;
    const increment = target > 100 ? 50 : 1; // Incremento más rápido para números mayores.
    const stepTime = Math.abs(Math.floor(duration / range));

    let current = start;
    const timer = setInterval(() => {
        current += increment;
        element.textContent = `+${Math.min(current, target)}`;
        if (current >= target) {
            clearInterval(timer);
        }
    }, stepTime);
}

// Ejecutar la animación de números cuando el DOM esté completamente cargado.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.number').forEach((element) => {
        animateNumber(element);
    });
});

// Función para mostrar un elemento por su id.
function toggleVisibility(id) {
    const container = document.getElementById('collapse-technologies');
    if (!container) return; // Si el contenedor no existe, no hacer nada

    const paragraphs = container.querySelectorAll('p[id]');

    paragraphs.forEach((paragraph) => {
        if (paragraph.id !== id) {
            paragraph.style.display = 'none';
        }
    });

    const element = document.getElementById(id);
    if (element) {
        if (element.style.display === 'none' || element.style.display === '') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
}

// Función para cambiar el idioma de la página y actualizar los textos.
function changeLanguage(lang) {
    fetch(`src/lang/get_translations.php?lang=${lang}`)
        .then((response) => response.json())
        .then((translations) => {
            const updateText = (id, text) => {
                const element = document.getElementById(id);
                if (element) {
                    element.innerText = text;
                }
            };

            updateText('home', translations['home']);
            updateText('service', translations['service']);
            updateText('technologies', translations['technologies']);
            updateText('it-developers', translations['it-developers']);
            updateText('contact-menu', translations['contact-menu']);

            const heroTextElement = document.getElementById('hero-text');
            if (heroTextElement) {
                heroTextElement.innerHTML =
                    translations['hero'] +
                    '<img src="src/img_webp/logo-zap.webp" alt="ZAP Logo" class="inline-block w-30 h-auto mx-2">' +
                    translations['hero-next'];
            }

            updateText('icon1-text', translations['icon1']);
            updateText('icon2-text', translations['icon2']);
            updateText('icon3-text', translations['icon3']);
            updateText('icon4-text', translations['icon4']);
            updateText('service-container', translations['service-container']);
            updateText('service-subtitulo', translations['service-subtitulo']);
            updateText(
                'service-subtitulo-descripcion',
                translations['service-subtitulo-descripcion']
            );
            updateText('technologies', translations['technologies']);
            updateText('SAPDMC', translations['SAPDMC']);
            updateText('SAPMII', translations['SAPMII']);
            updateText('SAPPCO', translations['SAPPCO']);
            updateText('SAPSecurity', translations['SAPSecurity']);
            updateText('SAPBTP', translations['SAPBTP']);
            updateText('SAPBasis', translations['SAPBasis']);
            updateText(
                'SAPIntegrationSuite',
                translations['SAPIntegrationSuite']
            );

            // Actualizar la variable de sesión para el idioma seleccionado.
            fetch(`src/lang/get_translations.php?lang=${lang}`)
                .then((response) => {
                    if (response.ok) {
                        return response.text();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(() => {
                    window.location.reload(); // Recargar la página para aplicar el cambio de idioma.
                })
                .catch((error) => {
                    console.error('Error updating language:', error);
                });
        });
}

// Agregar evento de clic a botones para alternar visibilidad de elementos colapsables.
const buttons = document.querySelectorAll('[data-collapse-toggle]');
buttons.forEach((button) => {
    button.addEventListener('click', () => {
        const id = button.getAttribute('data-collapse-toggle');
        const content = document.getElementById(id);
        if (content) {
            content.classList.toggle('hidden');
        }
    });
});

// Agrega un padding al menu para que se pueda ver el título de la sección
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const href = this.getAttribute('href');
        if (href === '#') {
            console.error('El enlace "#" no es un selector válido');
            return; // Ignora el enlace vacío
        }

        const targetElement = document.querySelector(href);
        if (targetElement) {
            const offset = window.innerWidth < 1024 ? 170 : 170; // Ajusta según el dispositivo
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.scrollY - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth',
            });
        }
    });
});
