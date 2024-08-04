const mix = require('laravel-mix');
const WebpackObfuscator = require('webpack-obfuscator');
const TerserPlugin = require('terser-webpack-plugin');

mix
    .styles(['resources/css/style.css'], 'public/css/style.css')
    .styles(['resources/css/index.css'], 'public/css/index.css')
    .styles(['resources/css/footer.css'], 'public/css/footer.css')
    .styles(['resources/css/company.css'], 'public/css/company.css')
    .styles(['resources/css/menu.css'], 'public/css/menu.css')
    .styles(['resources/css/services_desktop.css'], 'public/css/services_desktop.css')
    .styles(['resources/css/services_document_management.css'], 'public/css/services_document_management.css')
    .styles(['resources/css/services_labeling_machines.css'], 'public/css/services_labeling_machines.css')
    .styles(['resources/css/services_printing.css'], 'public/css/services_printing.css')
    .styles(['resources/css/news.css'], 'public/css/news.css')
    .options({
        processCssUrls: false,
        postCss: [
            require('cssnano')({
                preset: 'default',
            }),
        ],
    })
    .version()
    .webpackConfig({
        optimization: {
            minimize: true,
            minimizer: [
                new TerserPlugin({
                    terserOptions: {
                        compress: {
                            drop_console: true,
                        },
                    },
                }),
            ],
        },
        plugins: [
            new WebpackObfuscator({
                rotateStringArray: true,
                // Outras opções podem ser configuradas aqui
            }, []),
        ],
    });
