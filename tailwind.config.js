/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  // daisyui: {
  //   themes: [
  //     {
  //       mytheme: {
  //         // transparent: 'transparent',
  //         // current: 'currentColor',
  //         // black: colors.black,
  //         // white: colors.white,
  //         // gray: colors.gray,
  //         // emerald: colors.emerald,
  //         // indigo: colors.indigo,
  //         // yellow: colors.yellow,
        
  //       },
  //     },
  //   ],
  // },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
};
