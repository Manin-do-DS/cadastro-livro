# Sistema-de-Login
sistema de login do fabiano

# Descrição
Este projeto é uma aplicação web simples que tem funções de login, criação, alteração e deletamento de uma conta pessoal.
Foi feito usando Visual Studio, Mysql workbench, xampp e foi feito na linguagem PHP
Autor: Henry wilson duarte gabriel e guilherme notoroberto herminelli perrota

# Funcionalidades
O programa:
Cadastra uma conta usando email, nome e senha.
Faz o login de uma conta já cadastrada.
Altera dados da conta.
Deleta a conta se desejado.

# O que é preciso para a execução
Será preciso ter  Mysql workbench, xampp, Visual Studio e um brownser

# Como fazer funcionar
Primeiro será necessario abrir o modelo do banco de dados e sincroniza-lo, depois será preciso abrir a pasta config, ir no arquivo Database e mudar host, username e password para as do seu SQL.
Agora você irá colocar todos os arquivos em uma pasta só, depois coloque o na pasta HTDOCS localizado na área onde o xampp foi instalado, Abra o xampp e inicie o APACHE.
para acessar o site você colocara no navegador http://localhost/login-oo/public/inicial.html.

Caso você queira fazer um teste com uma conta já cadastrada terá o dump que você poderá importar usando o SQL abrindo uma local instance, indo em administrator e data import/restore agora é só selecionar o arquivo dump chamado login_usuario.sql.
As informações da conta é: 
Email: joao@gmail.com
Senha: 123
Nome: joao tulio
