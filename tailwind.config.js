import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#6fa3ef', // Lighter shade of primary color
                    DEFAULT: '#3490dc', // Default primary color
                    dark: '#1e3a8a', // Darker shade of primary color
                },
                secondary: {
                    light: '#ffed4a',
                    DEFAULT: '#ffed4a',
                    dark: '#c2410c',
                },
            },
        },
    },

    plugins: [forms, typography],
};
