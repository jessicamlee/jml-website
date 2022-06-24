/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    extend: {
      boxShadow: {
        'vi': '0px 3px 5px rgba(43,4,98,0.65)',
      },
      rotate: {
        '270': '270deg',
      }
    },
    colors: {
      'winter': '#d3f7ff',
      'dviolet': '#2b0462',
      'ghost': '#f7fcfe',
    }
  },
  plugins: [],
}