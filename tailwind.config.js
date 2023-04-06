/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '*.php',
    'templates/**/*.{php,twig}',
    './Components/**/*.{php,twig}'
  ],
  theme: {
    colors: {
      white: '#fff',
      black: '#000',
      blue: '#1113ff',
      current: 'currentColor',
      transparent: 'transparent'
    },
    screens: {
      sm: '640px',
      md: '780px',
      lg: '1180px',
      xl: '1440px'
    },
    extend: {
      borderWidth: {
        DEFAULT: '1px',
        0: '0',
        2: '2px',
        3: '3px',
        4: '4px'
      },
      spacing: {
        sm: '20px',
        md: '40px',
        lg: '60px',
        xl: '100px',
        xxl: '200px'
      }
    }
  },
  plugins: []
}
