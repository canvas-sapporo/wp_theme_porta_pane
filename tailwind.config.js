/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./src/**/*.{js,css}"
  ],
  theme: {
    extend: {
      fontSize: {
        'hero-title': ['44px', { lineHeight: '1.4', fontWeight: '700' }],
        'section-title': ['26px', { lineHeight: '1.4', fontWeight: '700' }],
        'sub-title': ['18px', { lineHeight: '1.4', fontWeight: '500' }],
        'body': ['16px', { lineHeight: '1.8', fontWeight: '400' }],
        'small-text': ['13px', { lineHeight: '1.4', fontWeight: '700' }],
        'emphasis': ['16px', { lineHeight: '1.4', fontWeight: '700' }],
        'cta': ['16px', { lineHeight: '1.4', fontWeight: '700' }],
      },
      fontFamily: {
        sans: ['"Zen Maru Gothic"', 'system-ui', 'sans-serif'],
      },
      colors: {
        'base': '#FBF7F0',
        'main': '#B76E4C',
        'sub': '#E3D2B8',
        'accent': '#556B5A',
        'text': '#332822',
      }
    },
    spacing: {
      '35': '35px',
      '48': '48px',
      '100': '100px',
    },
  },
  plugins: [],
}

