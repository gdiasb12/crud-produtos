## CADASTRO DE PRODUTOS - LARAVEL

Simples cadastro de produtos para fins academicos.


## DESENVOLVIDO POR

Gabriel Dias (www.illusionbr.com | gdiasb12@gmail.com)

## Passos

 - Baixar Projeto <br>
	`git clone git@github.com:gdiasb12/crud-produtos.git`

 - Instalar dependências usando composer <br>
	`composer install`

 - Gerar chave para o projeto <br>
	`php artisan key:generate`

 - Configurar conexão com banco de dados (.env) <br>
        `DB_CONNECTION=mysql` <br>
	`DB_HOST=ip_servidor` <br>
	`DB_PORT=porta_servidor` <br>
	`DB_DATABASE=nome_banco` <br>
	`DB_USERNAME=usuario` <br>
	`DB_PASSWORD=senha`

 - Rodar migrations <br>
	`php artisan migrate`

 - Iniciar servidor para o projeto <br>
	`php artisan Serve`	
