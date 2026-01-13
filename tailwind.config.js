/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Theme
    './wp-content/themes/Abogados/**/*.php',
    './wp-content/themes/Abogados/assets/js/**/*.js',

    // Plugins (formularios)
    './wp-content/plugins/contact-form-7/**/*.php',
    './wp-content/plugins/fluentform/**/*.php',

    // Shortcodes guardados en WP
    './wp-content/uploads/**/*.php',
  ],

  safelist: [
    // Layout
    'space-y-4',
    'relative',
    'block',
    'absolute',
    '-top-2',
    'left-3',
    'bg-white',
    'px-1',

    // Textos label
    'text-[11px]',
    'leading-[1.4]',
    'text-[#6a754f]',

    // Inputs
    'w-full',
    'border',
    'border-[#d8d4c8]',
    'bg-white',
    'px-4',
    'py-2.5',
    'text-base',
    'leading-[1.25]',
    'text-[#3f3f39]',
    'shadow-[0_2px_6px_rgba(0,0,0,0.08)]',

    // Focus
    'focus:border-[#596636]',
    'focus:ring-2',
    'focus:ring-[#c7c1b1]',
    'focus:outline-none',

    // Textarea
    'min-h-[120px]',
    'resize-y',

    // Botón
    'h-11',
    'bg-[#596636]',
    'text-white',
    'hover:bg-[#4e5a2f]',
    'transition',
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
