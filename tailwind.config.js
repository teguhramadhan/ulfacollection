import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                primary: "#405D5B",
                "soft-green": "#A7F3D0",
            },
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                libreBodoni: ["Libre Bodoni", "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
