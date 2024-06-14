import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import daisyui from "daisyui"

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                letter: ['Lora'],
            },
            fontSize: {
                'xl': ['1.25rem', '1.75rem'],
                '2xl': ['1.5rem', '2rem'],
                '3xl': ['1.875rem', '2.25rem'],
                '4xl': ['2.25rem', '3rem'],
            },
            boxShadow: {
                'yellow': '4px 4px 0px 0px rgb(255, 222, 89)',
                'primary': '4px 4px 0px 0px rgb(255, 222, 89)',
                'accent': '4px 4px 0px 0px rgb(255, 222, 89)',
                'black': '4px 4px 0px 0px rgb(0, 0, 0)',
                'gray': '4px 4px 0px 0px rgb(229,229,229)',
            }
        },
    },

    plugins: [forms, typography, daisyui],

    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#006D77",
                    "primary-content": "#ffffff",
                    "secondary": "#83C5BE",
                    "secondary-content": "#ffffff",
                    "accent": "#E29578",
                    "accent-content": "#ffffff",
                    "neutral": "#FFDDD2",
                    "neutral-content": "#333333",
                    "base-100": "#ffffff",
                    "info": "#0096c7",
                    "success": "#83C5BE",
                    "warning": "#E29578",
                    "error": "#d81159",
                },
            }
        ],
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        themeRoot: ":root", // The element that receives theme color CSS variables
    },
};
