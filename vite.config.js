import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    server: {
        hmr: {
            host: "localhost"
        }
    },
    build: {
        outDir: 'public/build', // Para evitar sobrescrever o conteúdo da pasta public
        rollupOptions: {
            input: [
                // Arquivos CSS
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/style.css',
                'resources/css/index.css',
                'resources/css/footer.css',
                'resources/css/company.css',
                'resources/css/menu.css',
                'resources/css/services_desktop.css',
                'resources/css/services_document_management.css',
                'resources/css/services_labeling_machines.css',
                'resources/css/services_printing.css',
                'resources/css/news.css',
                'resources/css/errors/404.css',
                'resources/css/animate.min.css',

                // Arquivos JS
                'resources/js/app.js',
                'resources/js/components/modals/suprimentosModal.js',
                'resources/js/components/modals/chamadoModal.js',
            ],
            output: {
                entryFileNames: 'assets/[name].js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name][extname]',
            },
        },
    },
    plugins: [
        laravel({
            input: [                
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/style.css',
                'resources/css/index.css',
                'resources/css/footer.css',
                'resources/css/company.css',
                'resources/css/menu.css',
                'resources/css/services_desktop.css',
                'resources/css/services_document_management.css',
                'resources/css/services_labeling_machines.css',
                'resources/css/services_printing.css',
                'resources/css/news.css',
                'resources/css/errors/404.css',
                'resources/css/animate.min.css',

                // Arquivos JS
                'resources/js/app.js',
                'resources/js/components/modals/suprimentosModal.js',
                'resources/js/components/modals/chamadoModal.js',
            ],
            refresh: true,
        }),
    ],
});