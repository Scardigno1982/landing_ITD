document.addEventListener('DOMContentLoaded', function () {
    // Configuración inicial
    var due_date = new Date('2024-09-30'); // Cambia esta fecha a la que desees
    var days_before_due_date_to_start_fading = 21; // Número de días antes de la due_date para comenzar a oscurecer

    // Obtener la fecha actual
    var current_date = new Date();

    // Cálculo de la diferencia en días entre la fecha actual y la fecha límite (due_date)
    var utc_due_date = Date.UTC(
        due_date.getFullYear(),
        due_date.getMonth(),
        due_date.getDate()
    );
    var utc_current_date = Date.UTC(
        current_date.getFullYear(),
        current_date.getMonth(),
        current_date.getDate()
    );
    var days_until_due = Math.floor(
        (utc_due_date - utc_current_date) / (1000 * 60 * 60 * 24)
    );

    // Calcular la opacidad basado en los días restantes
    var opacity = 1; // Valor por defecto (completamente visible)

    if (days_until_due <= days_before_due_date_to_start_fading) {
        var days_since_fade_start =
            days_before_due_date_to_start_fading - days_until_due;
        opacity = days_until_due / days_before_due_date_to_start_fading; // Opacidad basada en los días restantes
        opacity = opacity < 0 ? 0 : opacity; // Asegurar que la opacidad no sea menor a 0
    }

    // Aplicar la opacidad al body
    document.body.style.opacity = opacity;

    // Mostrar la información en la página
    var infoElement = document.getElementById('info');
    if (infoElement) {
        // Comprobar que el elemento existe
        var formattedDate = current_date.toLocaleDateString('es-ES', {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
        });
        if (days_until_due > 0) {
            infoElement.innerHTML = `Fecha actual: ${formattedDate} <br> Faltan ${days_until_due} días para ${due_date.toLocaleDateString(
                'es-ES'
            )}.`;
        } else {
            infoElement.innerHTML = `Fecha actual: ${formattedDate} <br> Ya ha pasado la fecha límite (${due_date.toLocaleDateString(
                'es-ES'
            )}).`;
        }
    }
});
