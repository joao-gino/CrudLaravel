## CRUD utilizando Laravel procurando fazer requisições via jQuery

### Bom, este projeto foi desenvolvido rapidamente para a escrita de um artigo com o objetivo de ensinar a fazer um CRUD inicial para quem está começando.
#### Link do artigo (ainda em desenvolvimento): https://ginooss.medium.com/

### Eu escolhi explicar o projeto dividindo-o em três partes, Front-end, Back-end e DB.
##
#### Front-end
##### Como alguns sabem, o Laravel é baseado na estrutura MVC, então o Front-end da aplicação foram basicamente as 'views' (O 'V' do 'MVC').
##### Então, o arquivo está no diretório ./resources/views/home.blade.php
##### Neste arquivo contém:
- HTML, para a estruturação da página como um todo;
- PHP, para gerar dados recebidos do Controller;
- jQuery, para fazer as requisições e alguns controles no próprio HTML.
#### Back-end
##### Nesta parte, os principais são o Controller e as Routes
- Controllers são utilizados para fazer as interações com o DB e realizar cálculos para entregar dados confiáveis para o Front-end;
- Routes são desenvolvidas para realizar requisições, seja do tipo GET, POST, PUT ou DELETE (as principais).
#### Database (SQL Server)
- O SGBD utilizado foi o SQL Server Management Studio para a criação de uma instância local (na própria máquina);
- A tabela criada foi a 'produtos' com os campos 'id', 'nome' e 'quantidade'.
##
#### IMAGEM DA APLICAÇÃO
<p align="center">
	<img src=".\assets\printApp.png" width="900">
</p>