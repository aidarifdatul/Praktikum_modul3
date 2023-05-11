import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', //memanggil file css
                'resources/js/app.js', //memanggil file js
            ],
            refresh: true,
        }),
    ],
});
