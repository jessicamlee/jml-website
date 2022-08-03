/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ["./**/*.{html,php}",],
  darkMode: 'class',
  theme: {
    screens: {
      '2xs': '320px',
      'xs': '500px',
      'sm': '640px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px'
    },
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'sans-serif']
      },
      colors: {
        'dviolet': '#2b0462',
        'ghost': '#f7fcfe',
        'vindigo': '#16042e',
      },
      boxShadow: {
        'vi': '0px 3px 5px rgba(43,4,98,0.65)',
      },
      rotate: {
        '270': '270deg',
      },
      keyframes: {
        letterj: {
          '0%': { 
            transform: 'translateY(50%)',
            opacity: 0,
          },
          '12%': {
            transform: 'translateY(-25%)'
          },
          '22%': {
            transform: 'translateY(25%)'
          },
          '32%': {
            transform: 'translateY(-12%)'
          },
          '40%': { 
            transform: 'translateY(0)',
            opacity: 1,
          },
          '99%': { 
            transform: 'translateY(100%)',
            opacity: 0.05,
          },
          '100%': {
            opacity: 0,
          }
        },
        letterl: {
          '0%': { 
            transform: 'translateY(-50%)',
            opacity: 0,
          },
          '10%': {
            transform: 'translateY(25%)'
          },
          '20%': {
            transform: 'translateY(-25%)'
          },
          '30%': {
            transform: 'translateY(12%)'
          },
          '40%': { 
            transform: 'translateY(0)',
            opacity: 1,
          },
          '99%': { 
            transform: 'translateY(-100%)',
            opacity: 0.05,
          },
          '100%': {
            opacity: 0,
          }
        }
      },
      animation: {
        letterj: 'letterj 8s ease-in-out infinite',
        letterl: 'letterl 8s ease-in-out infinite',
      },
    },
  },
  plugins: [],
}