module.exports = {
  content: [
   "./*.php",
    "./*/*.php",

    ],
  theme: {
    extend: {
    colors: {
        primary: '#1DA1F2', // Custom primary color (change to your brand colors)
        secondary: '#14171A', // Custom secondary color
        accent: '#ff6363', // Accent color
        background: '#1b425c', // Background color
        text: '#333', // Text color
      },
    fontFamily: {
        sans: ['Nunito', 'sans-serif'], // Custom font for headings/body text
        serif: ['Merriweather', 'serif'], // Optional serif font
      },

        },
  },
  plugins: [
require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),

    ],
}

