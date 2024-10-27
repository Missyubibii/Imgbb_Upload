/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#2a80b9', // Thêm màu tùy chỉnh
      },
    },
  },
  plugins: [],
}

