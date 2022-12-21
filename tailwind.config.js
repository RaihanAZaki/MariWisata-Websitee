/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    // "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#3E82F8",
        secondary: "#64748b",
        dark: "#0f172a",
        white: "#F9F9F9",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [
    // require("flowbite/plugin")
  ],
};
