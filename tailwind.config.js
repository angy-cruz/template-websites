/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  mode: 'jit',
  theme: {
    extend: {
      fontFamily: {
        body: ['"Open Sans"'],
      },
      backgroundImage: {
        "hero-mobile": "url('/img/banner-mobile.png')",
        "hero-desktop": "url('/img/banner-desktop.png')",
      },
      lineHeight: {
        "extra-loose": "2.5",
        12: "3rem",
      },
      colors: {
        primary: "#191919",
        secondary: "#0F172A",
        third: "#FE860E",
        fourth: "#2A3B46",
        fifth: "#0F172A",

        textHover: "#898198",
        formBg: "#F5F5F5",

        darkGray: "#191A1B",
        mediumGray: "#292D32",
        neutralGray: "#666666",
        lightGray: "#D2D2D2",
        grayWhite: "#F0F0F0",
        navGray: "#797C94",
      },
      height: {
        100: "26rem",
        120: "28rem",
        128: "32rem",
      },
      dropShadow: {
        'white': '0px 0px 18px rgba(255, 255, 255, 0.45)',
      }
    },
  },
  plugins: [],
}
