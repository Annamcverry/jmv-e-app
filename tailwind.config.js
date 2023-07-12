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
            fontSize: {
                '2xl': ['1.5rem', {
                  lineHeight: '2rem',
                  letterSpacing: '-0.01em',
                  fontWeight: '500',
                }],
                '3xl': ['1.875rem', {
                  lineHeight: '2.25rem',
                  letterSpacing: '-0.02em',
                  fontWeight: '700',
                }],
              }
        },
    },
   

    plugins: [forms],
};
