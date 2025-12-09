/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './assets/js/**/*.js',
    './**/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Manrope', 'Helvetica Neue', 'sans-serif'],
      serif: ['Cormorant Garamond', 'Times New Roman', 'serif'],
    },
    extend: {
      colors: {
        brand: '#535f35',
        'brand-soft': '#7f8762',
        dark: '#0f0f0f',
      },
    },
  },
  plugins: [],
};
