# AulaBanco

Base de Dados

Pessoas

Tabelas: 
	Pessoas (id, Nome, Altura, Idade, Peso)
	Universidade (id, Nome, Campus)
	Pessoas_Universidade (id_pessoa,id_universidade)
	Conteúdo (id)

Estrutura de Pastas:
	api (View)
		Arquivos referentes as rotas.
	control (Controller)
		Arquivo controlador de cada modelo.
	model (Model)
		Arquivo de modelagem de cada um dos dados.

Arquivos Importantes:
.htaccess (Utilizado em servidores NGINX e Apache, redireciona todas as rotas para o arquivo index.php)
index.php (Lista e redireciona as rotas para os seus devidos arquivos)