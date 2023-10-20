/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/*.blade.php","./resources/views/**/*.blade.php"],
  theme: {
    extend: {
      height: {
        '1/2-screen': '50vh',
        '3/4-screen': '75vh',
        '150' : '37.5rem',
      },
    },
  },
  plugins: [],
}

