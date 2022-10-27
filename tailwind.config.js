const colors = require('tailwindcss/colors')
module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    safelist: [
      'text-gray-400',
      'hover:text-gray-200',
    ],
    options: {
      keyframes: true
    },
  },
  theme: {
    extend: {
      backgroundImage: theme=>({
        'up': "url('data:image/png;base64,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')",
      })
    },
    backgroundPosition: {
      bottom: 'bottom',
      center: 'center',
      left: 'left',
      'left-bottom': 'left bottom',
      'left-top': 'left top',
      right: 'right',
      'right-bottom': 'right bottom',
      'right-top': 'right top',
      top: 'top',
      'top-9': 'center top 2.25rem',
    },
    colors: {
      primary: '#ffae00', // Orange
      title: '#353535', // Title Grey
      secondary: '#272626', // Text Grey
      gray: colors.warmGray,
      black: colors.black,
      white: colors.white,
      yellow: colors.amber,
      green: colors.emerald,
      red: colors.red,
      blue: colors.blue,
    },
    container: {
      center: true,
      // screens: {
      //   sm: "100%",
      //   md: "100%",
      //   lg: "940px",
      //   xl: "940px",
      //   "2xl": "940px"
      // }
    },
    fontFamily: {
      'sans': [
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'BlinkMacSystemFont',
        '"Segoe UI"',
        'Roboto',
        '"Helvetica Neue"',
        'Arial',
        '"Noto Sans"',
        'sans-serif',
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"',
      ],
      'serif': ['ui-serif', 'Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
      'mono': [
        'ui-monospace',
        'SFMono-Regular',
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace',
      ],
      'default': ['cabin','Arial','Sans-Serif']
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
