const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',

    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'hero-pattern': "url('/img/lenovo.png')",
            })
        },
    },

    variants: {
        extend: {
            opacity: ['dark'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
