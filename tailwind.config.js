module.exports = {
  purge: [],
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
