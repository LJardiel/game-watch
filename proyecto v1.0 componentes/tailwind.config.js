const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            //colores propios
            colors: {
                'negro': '#171717',
                'negrito': '#444444',
                'rojo': '#DA0037',
                'blanco': '#EDEDED',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
