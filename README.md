# Como utilizar:

obs: necessário ter instalado laravel 8 e composer 2

1. Realizar os passos abaixo para rodar o projeto: <br>
- composer update <br>
- php artisan migrate <br>
- acessar no navegador: http://localhost:8000/ <br>

obs: no arquivo "teste_de_logica.php" se encontra o exercício 2 de lógica. No diretório pmk-dump-banco se encontra o dump do banco <br>
obs: por favor, se possível, enviar um feedback do projeto para mim. Isso ajuda bastante :D

---

# PMK

# PROCESSO SELETIVO – PROGRAMADOR PHP 
Prezado Candidato, 
Abaixo seguem as instruções, bem como o formato para envio do seu  trabalho. 

1. Projeto Cadastro para Doadores. (Não será necessário um CRUD, apenas  a inserção do cadastro). <br>
a. Informações necessárias para o cadastro: <br>
• Nome; <br>
• Email; <br>
• CPF; <br>
• Telefone; <br>
• Data de Nascimento; <br>
• Data do Cadastro; <br>
• Intervalo de Doação (Único, Bimestral, Semestral, Anual); • Valor da Doação; <br>
• Forma de Pagamento (Débito e Crédito); <br>
- Se for Débito, gravar as informações da conta; <br> 
- Se for Crédito, gravar a bandeira do cartão, 6 primeiros números, e  4 últimos números. <br>
• Endereço. <br><br>
b. Validação do Cadastro (Obrigatório)  <br>
• Ao inserir o cartão de crédito será necessário verificar se já não tem um  cartão na base de dados com os mesmos 6 primeiros números e 4 últimos, caso exista, informa a seguinte mensagem para o usuário: “Não  foi possível cadastrar esse número de cartão, entre em contato com o  seu supervisor”. <br>

2. Exercício de Lógica <br>
Dado o seguinte array: [20,65,682,1050,1558,4032,5065,5095,6063,15000]; <br>
Faça uma função que pega a diferença entre os índices (exemplo: 65-20; 682- 65) e verifique se a diferença dividida por 4 é uma divisão exata, no final a função deve  retornar os valores que divido por 4 resulta em uma divisão exata. <br>
Exemplo: 65-20 = 45 <br>
45/4 (não é uma divisão exata porque o resto é 1); <br>
Divisão exata: visão que tem como resto o valor 0.<br>

3. Junto com o teste, enviar também o DUMP do banco de dados. <br>
Critérios técnicos para desenvolvimento do projeto: <br>
- O projeto deve ser escrito em PHP Orientado a Objetos,  utilizando banco de dados Mysql; <br>
- Boas práticas de programação serão avaliadas; <br>
- Desejável (não obrigatório) uso de javascript. <br>
Obs: Publicar o projeto em um repositório GIT e nos enviar o  endereço. Entregar o que for possível fazer dentro do prazo. <br>
Boa sorte!<br>

![image](https://user-images.githubusercontent.com/58126824/185301798-e49af699-917e-407d-bbf4-1c4fcf444377.png)
