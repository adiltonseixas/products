# Desafio Técnico Processo Seletivo Olist


## Descrição técnica:
- **API:** Desenvolvida utilizando o framework Laravel, seguindo o modelo MVC. Gerados serviços de CRUD simples para produtos e categoria de produtos conforme solicitado pelo 
desafio.
- **Banco de Dados:** Utilizado Banco de Dados em SQL Lite recomendado para aplicações com menos robustez como a solicitada durante o desafio.
Foram criadas apenas duas tabelas para apresentar as informações solicitadas no desafio. Uma  tabela de produtos e uma tabela de categoria que terá associação com o cliente 
através de Foreign Key.
Para construção das tabelas foi utilizado o conceito de Migrations do Laravel e as Migrations utilizadas se encontra disponíveis no caminho padrão disponibilizado pelo laravel. 
Também foi desenvolvida uma carga de Seed para cadastrar um dado inicial após a criação do banco de dados. 

## Passo a Passo para Executar o Projeto

###  API - Os comandos devem ser executados dentro da pasta api
1. Ter **php 7.3** ou superior instalado e serviço apache, recomendado wamp ou xampp pois já vem com serviço apache também - **Disponível em:** https://www.wampserver.com/en/
2. Ter composer instalado - **Disponível em:** https://getcomposer.org/download/
3. Realizar o clone do projeto.
4. Dentro da pasta da api, executar o comando **composer install** para garantir atualização de todas as dependências necessárias para o projeto.
5. O arquivo do banco de dados database.sqlite já se encontra disponível no projeto no caminho **api/database/database.sqlite**. 
Caso deseje criar uma nova base de dados basta apenas excluir o arquivo chamado database.sqllite no caminho **api/database/** e criar um novo arquivo com o mesmo nome. 
Executar o comando **sh scripts/resetDatabase.sh** este é um comando customizado para resetar o banco de dados cada vez que houver necessidade. 
Se desejar, outra forma de criação é gerar um arquivo vazio no caminho no caminho **api/database/database.sqlite** e executar os comandos **php artisan migrate** parar criação de 
tabelas e executar seeds com o comando **php artisan db:seed**
6. Criar um arquivo de configuração **.env** baseado no arquivo exemplo **.env.example** disponível no projeto e no parâmetro **DB_DATABASE** informar o endereço absoluto do arquivo database.sqlite. 
**Exemplo: DB_DATABASE=C:\Users\adilt\Documents\projetos\products\api\database\database.sqlite**
7. Executar o comando **php artisan serve** para iniciar execução da api.

## Estrutura do Projeto

```
api
└───app                     # App
    └───Console             # Contem arquivos de commands
    └───Exceptions          # Exceptions
    └───Http                # Contem controllers e middlewares
        └───Controllers     # Responsável por fazer o controle de requisições
        └───Middleware      # Responsável por fazer o controle intermediario entre o client e o controller
        └───Traits          # Camada que contém classes genéricas para reutilização de código 
    └───Providers           # Providers
    └───Respository         # Camada responsável por acesso com o banco de dados
    └───Services            # Camada responsável pela regra de negócio
    └───Models.php          # Contém arquivos de Model da aplicação
└───bootstrap               # Contem arquivo de configuração de utilização de funcionalidades do projeto (middleware, eloquent e etc.)
└───config                  # Config
└───database                # Contem as migrations, seeders e factories
└───public                  # Public
└───resources               # Resource
└───routes                  # Contem o arquivos que armazena os end-points
└───scripts                 # Scrips para determinada ação (Contem o RUN da API)
└───storage                 # Storage
└───tests                   # Contem os tests da API
└───vendor                  # Vendor
└───.env.example            # Exemplo do arquivos de configuração de acesso ao banco de dados do projeto
```
