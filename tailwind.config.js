import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    // Configuración para el modo oscuro
    darkMode: false, // Desactiva el modo oscuro completamente
    theme: {
        extend: {
            // Aquí puedes extender colores, fuentes o cualquier personalización del tema
            colors: {
                primary: '#ffffff', // Ejemplo: color blanco como principal
            },
        },
    },
    plugins: [forms],
};
