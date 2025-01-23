import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';  // ou un autre plugin approprié

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
