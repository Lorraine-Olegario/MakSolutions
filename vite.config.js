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
                'resources/css/font-awesome.min.css',

                // Arquivos JS
                'resources/js/aos.js',
                'resources/js/bootstrap.min.js',
                'resources/js/jquery-3.3.1.slim.min.js',
                'resources/js/popper.min.js',
            ],
            output: {
                assetFileNames: 'assets/[name][extname]', // Isso remove o hash dos nomes dos arquivos
            },
        },
    },
    plugins: [
        laravel({
            input: [
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
                'resources/css/font-awesome.min.css',
                'resources/js/aos.js',
                'resources/js/bootstrap.min.js',
                'resources/js/jquery-3.3.1.slim.min.js',
                'resources/js/popper.min.js',
            ],
            refresh: true,
        }),
    ],
});
