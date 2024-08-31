<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SystemInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $this->call('key:generate');
            $this->call('migrate');
            $this->call('config:cache');
            $this->call('event:cache');
            $this->call('route:cache');
            $this->call('view:cache');
            $this->call('filament:optimize');
            $this->call('storage:link');
            $this->call('db:seed');
            $this->call('sitemap:generate');

            // Instalação das dependências do Node.js
            $this->info('Instalando dependências do Node.js...');
            exec('npm install', $output, $returnVar);
            if ($returnVar !== 0) {
                $this->error('Erro ao instalar as dependências do Node.js.');
                return;
            }

            // Gerando os arquivos de build
            $this->info('Gerando arquivos de build...');
            exec('npm run build', $output, $returnVar);
            if ($returnVar !== 0) {
                $this->error('Erro ao gerar os arquivos de build.');
                return;
            }
    
            $this->info('System installed successfully.');

        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

    }
}
