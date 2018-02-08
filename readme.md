## CADASTRO DE PRODUTOS - LARAVEL

Simples cadastro de produtos para fins academicos.


## DESENVOLVIDO POR

Gabriel Dias (www.illusionbr.com | gdiasb12@gmail.com)

## Passos

- Baixar Projeto 
	git clone git@github.com:gdiasb12/crud-produtos.git

- Instalar dependências usando composer
	composer install

- Gerar chave para o projeto
	php artisan key:generate

- Configurar conexão com banco de dados (.env)
	DB_CONNECTION=mysql
	DB_HOST=ip_servidor
	DB_PORT=porta_servidor
	DB_DATABASE=nome_banco
	DB_USERNAME=usuario
	DB_PASSWORD=senha

- Rodar migrations
	php artisan migrate

- Iniciar servidor para o projeto
	php artisan Serve	