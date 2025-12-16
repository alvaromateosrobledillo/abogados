/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './wp-content/themes/Abogados/**/*.php',
    './wp-content/themes/Abogados/assets/js/**/*.js',
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
