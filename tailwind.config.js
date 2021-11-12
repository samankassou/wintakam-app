const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                first: {
                    light: '#034994',
                    DEFAULT: '#002042'
                }
            },
            opacity: ['disabled']
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    presets: [
        require('./vendor/ph7jack/wireui/tailwind.config.js')
    ],
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
            './vendor/ph7jack/wireui/resources/**/*.blade.php',
            './vendor/ph7jack/wireui/ts/**/*.ts',
            './vendor/ph7jack/wireui/src/View/**/*.php'
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
