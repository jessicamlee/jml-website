/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ["./**/*.{html,php}",],
  theme: {
    extend: {
      colors: {
        'winter': '#d3f7ff',
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