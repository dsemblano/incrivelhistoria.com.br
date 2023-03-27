// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      height: {
        "97": "30rem",
        "thumb": "80vh",
      },
      colors: {
        'IHazul': '#B4CEFC',
        'cinzapadrao': '#2D3441',
        'ihcurioslistas': '#EE8927',
        'ihbrasil': '#EE8927',
        'ihcrime': '#EE8927',
      }, // Extend Tailwind's default colors
      // typography: (theme) => ({
      //   DEFAULT: {
      //     css: {
      //       color: theme('colors.cinzapadrao'),
      //       'h1, h2, h3, h4, h5, blockquote, p, a': {
      //         color: theme('colors.cinzapadrao'),
      //       }
      //     }
      //   }
      // }),
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-debug-screens'),
    require('flowbite/plugin')
  ],
};
