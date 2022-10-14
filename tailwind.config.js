/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ["./**/*.{html,php}",],
  darkMode: 'class',
  theme: {
    screens: {
      '3xs': '320px',
      '2xs': '500px',
      'xs': '600px',
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
        'vi': '0px 3px 7px -1px rgba(43,4,98,0.6)',
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
          '22%': {
            transform: 'translateY(-25%)'
          },
          '42%': {
            transform: 'translateY(25%)'
          },
          '62%': {
            transform: 'translateY(-12%)'
          },
          '82%': {
            transform: 'translateY(12%)'
          },
          '100%': { 
            transform: 'translateY(0)',
            opacity: 1,
          },
        },
        letterl: {
          '0%': { 
            transform: 'translateY(-50%)',
            opacity: 0,
          },
          '20%': {
            transform: 'translateY(25%)'
          },
          '40%': {
            transform: 'translateY(-25%)'
          },
          '60%': {
            transform: 'translateY(12%)'
          },
          '80%': { 
            transform: 'translateY(-12%)',
          },
          '100%': { 
            transform: 'translateY(0%)',
            opacity: 1,
          },
        }
      },
      animation: {
        letterj: 'letterj 5s ease-in-out',
        letterl: 'letterl 5s ease-in-out',
      },
    },
  },
  plugins: [],
}