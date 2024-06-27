const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['Commissioner', ...defaultTheme.fontFamily.sans],
                heading: ['Satoshi-Variable', ...defaultTheme.fontFamily.sans],
            },
            animation: {
              'bounce-y': 'bounce-y 1s infinite',
              'vibrate': 'vibrate 0.5s alternate',
            },
            keyframes: {
                'bounce-y': {
                    '0%, 100%': {
                       transform: 'translateY(-18%)',
                       'animation-timing-function': 'cubic-bezier(0.8, 0, 1, 1)',
                    },
                    '50%': {
                      transform: 'translateY(18%)',
                      'animation-timing-function': 'cubic-bezier(0, 0, 0.2, 1)',
                    }
                },
                'vibrate': {
                  '10%, 90%': {
                    transform: 'translate3d(-1px, 0, 0)',
                  },
                  '20%, 80%': {
                    transform: 'translate3d(2px, 0, 0)',
                  },
                  '30%, 50%, 70%': {
                    transform: 'translate3d(-4px, 0, 0)',
                  },
                  '40%, 60%': {
                    transform: 'translate3d(4px, 0, 0)',
                  }
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
