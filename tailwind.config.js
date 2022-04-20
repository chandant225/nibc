module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {},
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    variants: {},
    plugins: [require("@tailwindcss/ui")],
};
