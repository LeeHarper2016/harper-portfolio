module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/js/**/*.vue',
    './resources/views/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
              'header-bg': "url('/images/header-bg.jpg')"
            })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
