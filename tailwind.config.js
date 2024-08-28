/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{js,jsx,ts,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui'],
        'poppins': ['Poppins', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        'deep-muted-blue': '#495982',
        'deep-muted-blue-light': '#6B7AA1',
        'darker-shade-blue': "#3B476B",
      }
    },
  },
  plugins: [],
};
