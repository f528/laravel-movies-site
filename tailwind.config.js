



/** @type {import('tailwindcss').Config} */
export default {
    content: [

        "./resources/**/*.blade.php",
        "/resources/app.js",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width:{
                '96':'24rem',
            }

        },
    },
    plugins: [],
}
