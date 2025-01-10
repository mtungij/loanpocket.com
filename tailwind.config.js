const defaultTheme = require("tailwindcss/defaultTheme");
const forms = require("@tailwindcss/forms");

module.exports = {
    darkMode: "class", // or 'media', depending on your preference

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    "50": "#ecfeff",  // light cyan
                    "100": "#cffafe", 
                    "200": "#a5f3fc", 
                    "300": "#67e8f9",  // light cyan
                    "400": "#22d3ee",  // cyan
                    "500": "#06b6d4",  // main cyan
                    "600": "#0891b2", 
                    "700": "#0e7490", 
                    "800": "#155e75", 
                    "900": "#164e63",  // darkest cyan
                    "950": "#0c3c49"
                }
            },

            fontFamily: {

                sans: ["Inter", ...defaultTheme.fontFamily.sans], // Using Inter as primary font

 
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
