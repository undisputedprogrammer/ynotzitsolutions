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
            backgroundImage: {
                'hero-bg': "url('/images/home/IMAGE1.webp')",

              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                arialbold:['font-arial-bold'],
                arialnarrow: ['font-arial-narrow'],
                montserrat: ['Montserrat'],
                myriadpro: ['font-myriad-regular'],
                swiss : ['font-swiss'],
                gothoic: ['font-gothoic-bold'],
                montserratbold :['Montserrat Black'],
                montregular:['montserrat-regular'],
                montsemibold:['montserrat-semibold'],
                montlight:['montserrat-light'],
                montmedium:['montserrat-medium'],
                montbold:['montserrat-bold'],
            },
        },
    },

    plugins: [forms],
};
