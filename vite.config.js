import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/front/css/app.scss', 'esources/assets/front/js/app.js'],
            refresh: true,
        }),
    ],
});
