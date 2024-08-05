document.getElementById('menu-button').addEventListener('click', function () {
    var menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
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
    const paragraphs = container.querySelectorAll('p[id]');

    paragraphs.forEach((paragraph) => {
        if (paragraph.id !== id) {
            paragraph.style.display = 'none';
        }
    });

    const element = document.getElementById(id);
    if (element.style.display === 'none' || element.style.display === '') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
// Función para cambiar el idioma de la página y actualizar los textos.
function changeLanguage(lang) {
    fetch(`src/lang/get_translations.php?lang=${lang}`)
        .then((response) => response.json())
        .then((translations) => {
            document.getElementById('home').innerText = translations['home'];
            document.getElementById('service').innerText =
                translations['service'];
            document.getElementById('technologies').innerText =
                translations['technologies'];
            document.getElementById('it-developers').innerText =
                translations['it-developers'];
            document.getElementById('contact-menu').innerText =
                translations['contact-menu'];

            document.addEventListener('DOMContentLoaded', () => {
                const heroTextElement = document.getElementById('hero-text');
                if (heroTextElement) {
                    heroTextElement.innerHTML =
                        translations['hero'] +
                        '<img src="src/img_webp/logo-zap.webp" alt="ZAP Logo" class="inline-block w-30 h-auto mx-2">' +
                        translations['hero-next'];
                } else {
                    console.error('Elemento con ID "hero-text" no encontrado.');
                }
            });

            document.getElementById('icon1-text').innerText =
                translations['icon1'];
            document.getElementById('icon2-text').innerText =
                translations['icon2'];
            document.getElementById('icon3-text').innerText =
                translations['icon3'];
            document.getElementById('icon4-text').innerText =
                translations['icon4'];
            document.getElementById('service-container').innerText =
                translations['service-container'];
            document.getElementById('service-subtitulo').innerText =
                translations['service-subtitulo'];
            document.getElementById('service-subtitulo-descripcion').innerText =
                translations['service-subtitulo-descripcion'];
            document.getElementById('technologies').innerText =
                translations['technologies'];
            document.getElementById('SAPDMC').innerText =
                translations['SAPDMC'];
            document.getElementById('SAPMII').innerText =
                translations['SAPMII'];
            document.getElementById('SAPPCO').innerText =
                translations['SAPPCO'];
            document.getElementById('SAPSecurity').innerText =
                translations['SAPSecurity'];
            document.getElementById('SAPBTP').innerText =
                translations['SAPBTP'];
            document.getElementById('SAPBasis').innerText =
                translations['SAPBasis'];
            document.getElementById('SAPIntegrationSuite').innerHTML =
                translations['SAPIntegrationSuite'];

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
        content.classList.toggle('hidden');
    });
});
