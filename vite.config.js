import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// Default Laravel output (commented out)
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/css/app.css',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//     ],
// });

// Vercel-compatible config with static output to 'dist'
export default defineConfig({
    build: {
        outDir: 'dist',
        emptyOutDir: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
