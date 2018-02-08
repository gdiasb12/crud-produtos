## CADASTRO DE PRODUTOS - LARAVEL

Simples cadastro de produtos para fins academicos.


## DESENVOLVIDO POR

Gabriel Dias (www.illusionbr.com | gdiasb12@gmail.com)

## Passos

 1.Baixar Projeto 
	> git clone git@github.com:gdiasb12/crud-produtos.git

 2.Instalar dependências usando composer
	> composer install

 3.Gerar chave para o projeto
	> php artisan key:generate

 4.Configurar conexão com banco de dados (.env)
	> DB_CONNECTION=mysql
	> DB_HOST=ip_servidor
	> DB_PORT=porta_servidor
	> DB_DATABASE=nome_banco
	> DB_USERNAME=usuario
	> DB_PASSWORD=senha

 5.Rodar migrations
	> php artisan migrate

 6.Iniciar servidor para o projeto
	> php artisan Serve	