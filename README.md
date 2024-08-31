# Mak Solutions

Bem-vindo ao Mak Solutions! Este é o site institucional da Mak Solutions. Siga as instruções abaixo para configurar e executar o projeto localmente.

## Pré-requisitos

Certifique-se de ter os seguintes softwares instalados:
- PHP (versão 8.3 ou superior)
- Composer
- Node.js (versão 18 ou superior)
- npm

## Instalação

1. **Clone o repositório**

   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd <NOME_DIRETORIO>
    ```
2. Copie o arquivo `.env.example` para um novo arquivo `.env`:
    ```bash
    cp .env.example .env
    ```

3. Edite o arquivo `.env` para definir as configurações do banco de dados e outras variáveis de ambiente conforme necessário.
- Configure a conexão com o banco de dados antes de rodar os proximos comandos.

4. Instale as dependências do PHP:
    ```bash
    composer install
    ```

5. Configure a variável `APP_URL` no arquivo `.env`, pois os próximos comandos precisam dessa configuração.


6. Execute o seguinte comando para rodar migrações, seeds, gerar a chave da aplicação e outras configurações iniciais:
    ```bash
    php artisan app:install
    ```

## Instalação das Dependências Node.js

7. Instale as dependências do Node.js:
    ```bash
    npm install
    ```

8. Gere os arquivos de build:
    ```bash
    npm run build
    ```

9. Inicie o servidor local

    Execute o comando abaixo para iniciar o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

    O painel admin estará acessível em http://127.0.0.1:8000/admin com as credenciais:

   - Email: admin@example.com
   - Senha: password123
