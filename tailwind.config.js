/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ["./**/*.{html,php}",],
  theme: {
    screens: {
      '2xs': '320px',
      'xs': '500px',
      'sm': '640px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      '2xl': '1440px'
    },
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'sans-serif']
      },
      colors: {
        'dviolet': '#2b0462',
        'ghost': '#f7fcfe',
      },
      boxShadow: {
        'vi': '0px 3px 5px rgba(43,4,98,0.65)',
      },
      rotate: {
        '270': '270deg',
      },
    },
  },
  plugins: [],
}