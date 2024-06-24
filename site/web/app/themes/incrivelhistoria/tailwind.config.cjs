// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      },
        center: true,
    },
    extend: {
      height: {
        "97": "26rem",
        "70": "282px",
        "75": "304px",
        "76": "347px",
        "thumb": "80vh",
      },
      colors: {
        'IHazul': '#B4CEFC',
        'cinzapadrao': '#2D3441',
        'ihcurioslistas': '#EE8927',
        'ihbrasil': '#EE8927',
        'ihcrime': '#EE8927',
        'ihcor': '#1C2B33',
        'ihcat': '#BB2649',
        'ihcinza': '#707070',
        'ihcompl': '#fff', //complementary footer
      },
      backgroundPosition: {
        desktop: 'bottom 0px right 4rem',
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography')
  ],
};
