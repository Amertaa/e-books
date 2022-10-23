/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js,php}',],
  theme: {
    fontFamily:{
      'Cormorant': ['Cormorant Garamond', 'sans-serif'],
      'Nunito': ['Nunito', 'sans-serif'],
      'Quicksand': ['Quicksand', 'sans-serif'],
    },
    extend: {
      colors: {
        primary: '#BEEEB5',
        font: '#0D1B2A',
      },
    },
    screens: {
      'mobile':{ 'max':'428px'},
      'tablet':{ 'min':'429px', 'max':'820px'},
      'md': { 'min': '640px' },
      'desktop':{'min':'821px'},
      'lg': { 'min': '1024px' },
    }
  },
  plugins: [require('daisyui',)],
};
