/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.{html,js,php}",
    "./packages/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: "25px",
      screens: {
        sm: "600px",
        md: "728px",
        lg: "984px",
        xl: "1200px",
      },
    },
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
