const { backgroundColor } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'media',

    theme: {
        extend: {
            fontFamily: {
                sans: ['BlinkMacSystem', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },

    variants: {
        extend: {
          opacity: ['disabled'],
        }
      },

    variants: {
        extend: {
          textColor: ['visited'],
        }
      },

};
