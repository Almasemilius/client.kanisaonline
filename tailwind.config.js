import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#2082B3',
                secondary: '#2082B3',
                fading: '#C6C6C6',
                background: '#F6F6F6',
                description: '#888888',
                hint: '#DFDFDF',
                primaryfaded: '#E2F6FF',
                accent: '#3d4EC9'
            },

            container: {
                center: true,
                padding: '128px'
            }
        },
    },

    plugins: [forms],
};
