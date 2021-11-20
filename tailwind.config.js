module.exports = {
    purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ['Montserrat','sans-serif']
        },
        extend: {
            backgroundImage: {
                'hero': "url('/image/inicio.jpg')",
            },
        },
        variants: {
            extend: {},
        },
        plugins: [],
    }
}
