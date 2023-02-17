// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
    typography: (theme) => ({
      DEFAULT: {
        css: {
          'a': {
            // color: theme('colors.blue.600'),
            textDecoration: 'underline',
          },
          'a:hover': {
            color: theme('colors.blue.600'),
            textDecoration: 'underline',
          },
        },
      },
    }),
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('@tailwindcss/typography'),
    require('flowbite/plugin')
  ],
};
