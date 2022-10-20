import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                /* 'resources/js/navbar/navbar.js', */
                /* 'resources/js/animation_user/home.js',
                'resources/js/user/home.js', */
                'resources/js/components/navbar.js',
                'resources/js/components/register.js',


            ],
            refresh: true,
        }),
    ],
});
