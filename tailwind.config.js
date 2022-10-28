/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto'],
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': {'min': '1260px'},
                'mobile': {'max': '640px'}
            },
            colors: {
                'img': '#57585a',
            }
        },
    },
  plugins: [
      require('tw-elements/dist/plugin')
  ],
}
