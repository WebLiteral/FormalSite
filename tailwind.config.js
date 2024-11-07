const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    function({ addUtilities }) {
      addUtilities({
        '.bg-checkered': {
          'background-image': 'repeating-conic-gradient(#000000 0% 25%, #ffffff 0% 50%)',
          'background-position': '0 0, 16px 16px',
          'background-size': '32px 32px',
          'background-color': '#ffffff',
        },
        '.bg-stripe': {
          'background-image': 'linear-gradient(0deg, transparent 50%, #000000 50%)',
          'background-size': '22px 22px',
          'background-color': '#ffffff',
        },
      })
    },
  ],
}
