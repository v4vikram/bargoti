/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",                       // Include all root PHP files
    "./template-parts/**/*.php",     // Include template parts
    "./page-templates/**/*.php",     // Include page templates
    "./assets/**/*.js",              // Include JavaScript files
    "./**/*.html",                   // Include all HTML files
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
