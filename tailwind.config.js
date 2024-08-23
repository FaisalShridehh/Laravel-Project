/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark': '#060606',
      },
      fontFamily: {
        "Hanken-Grotesk": ['"Hanken Grotesk"', "sans-serif"],
      },
      fontSize: {
        'xxs': '0.625rem', // 10px
      }
    },
  },
  plugins: [],
}

