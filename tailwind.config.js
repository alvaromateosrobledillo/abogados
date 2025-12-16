/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './wp-content/themes/Abogados/**/*.php',
    './wp-content/themes/Abogados/assets/js/**/*.js',
  ],
  theme: {
    fontFamily: {
      sans: ['Noyh', 'system-ui', 'sans-serif'],
      serif: ['Noyh', 'system-ui', 'sans-serif'],
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
