### Modelo MVC Conceito
> Este é um modelo MVC desenvolvido para auxiliar desenvolvedores à adaptarem seu próprio modelo.

### Objetivo
> O objetivo desta seção é demonstrar de forma documental como utilizar cada parte do código, para fácil modificações das funcionalidades do código.

### Arquitetura MVC
#### Model (M):
> Sempre que você pensar em manipulação de dados, pense em model. Ele é responsável pela leitura e escrita de dados, e também de suas validações.

#### View (V):
> Simples: a camada de interação com o usuário. Ela apenas faz a exibição dos dados, sendo ela por meio de um html ou xml.

#### Controller (C):
> O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário. Exemplo comunicação MVC

![Fonte:https://tableless.com.br/mvc-afinal-e-o-que/] (https://raw.githubusercontent.com/diegoeis/tableless-static-images/master/2015/02/laravel-introducao.jpg)

### Como utilizar a arquitetura do projeto?

##### Config
> Nesta etapa é realizada qualquer tipo de configuração de sua aplicação. Vale ressaltar que não existe uma regra para esta etapa, deve-se somente desenvolver-se o que o programador achar que necessita ser compartilhado e centralizado entre outras partes de seu código!

Exemplos:
- Authentication Database e Environments: (Ambientes de desenvolvimento podendo ser teste ou produção). Ex: /config/database.php
```php
<?php
const env = array( // Variavel de ambiente de desenvolvimento (teste x produção)
    'development'=>array( // Ambiente (Environment)
        'dbtype'=>'mysql',  //Tipo de base
        'host'=>'localhost',  // Nome do host
        'user'=>'user', // Usuário
        'password'=>'123456', // Senha
        'dbname'=>'conceito' // Nome da tabela
    ),'production'=>array(
        'dbtype'=>'mysql',
        'host'=>'localhost',
        'user'=>'user',
        'password'=>'123456',
        'dbname'=>'conceito'
    )
);
```

- Variáveis: globais de diretórios públicos, endereços URL's, etc. Ex: /config/path.php
```php
<?php 
  define('URL',"http://" . $_SERVER['HTTP_HOST'] . "/conceito/");
```
#### Libs
> Nesta etapa é realizada a centralização das funções "OPERANTES" e "GLOBAIS" do projeto. Aqui estão todas as classes responsáveis pelo dinamismo do Controller, Model, View, Público, Sessão e outros intermediadores afins. Logo, você está disponível para adicionar novas funcionalidades.

Exemplos:
- Bootstrap: Responsável pela roteirização "automática" de todo o projeto, sendo assim, a comunicação entre o MVC, definição de URLs Views e Parâmetros.
- Controller: Intermediador entre a Classe View e Model. Neste módulo é possível realizar inicialização de objetos centrais e obrigatórios em todo o projeto.
- Database: Inicializador de instância de conexão com banco de dados.
- Model: Responsável pela modularização da Conexão (Database) para uma variável manipulável. Importante para que a chamada pelo CRUD nos Controllers e Models exclusivos, possam ser efetuados individualmente sem replicação de código.
- Session: Responsável pela manipulação de Sessão dos usuários.
- View: Renderizador das views criadas no projeto e gerenciador de padrões de layout.

#### Controllers
> Nesta etapa será onde você criará seus controllers separadamente com métodos, atributos e configurações exclusivas. O tipo de retorno definido atualmente para a View será o formato JSON(Utilizado em API's) que poderá ser recebido através de Jquery AJAX.

Exemplos:
- Controller específico: Você poderá criar seus métodos que poderão ser acessado através de POST ou GET. Logo estes poderão executar diversas tarefas, desde que o controller criado esteja de acordo com as regras de funcionamento.

> Observação: É importante ressaltar que não é necessário um controller possuir uma View, assim como uma View necessita de um controller para renderizá-la. Também vale ressaltar que os padrões de nomes dos arquivos devem seguir de acordo!
Ex: /controllers/home.php

```php
<?php
  class Home extends Controller{
      function __construct(){
          parent::__construct();
      }
      public function index(){ 
          $this->view->render('home/index',true); // Caso URL = 'home/' ou 'home/index' retorna view com o PATH => dir(home) / arquivo(index)(.php). Assim é renderizada uma View.
      }
      public function GetAllMenuCategories(){ // Método criado para retornar todas a categorias do banco de dados
          $data = $this->model->GetAllMenuCategories(); // Variável de resultado => dados, receberá a consulta realiza pela variável global model, que tem um método de pesquisa chamado GetAllMenuCategories()
          print(json_encode($data,JSON_UNESCAPED_UNICODE)); // É escrito o resultado da API na página para consumo na View.
      }
```
Exemplo:
> Endereço URL(www.conceito.com/home/index/GetAllMenuCategories) 

Resultado:
```json
[{"id":"1","nome":"Roupas"},{"id":"2","nome":"Acessórios"}]
```

#### Models
> Nesta etapa será onde você criará seus Models separadamente para realização de CRUD ao Banco de Dados. Havendo a possibilidade de envio de parâmetros.

Exemplos:
- Model específico: Cria consulta/deleta/cria/edita dados ao Banco de dados.

Exemplo: /models/home_model.php

```php
<?php

  class Home_Model extends Model{

      function __construct(){
          parent::__construct();
      }

      public function GetAllMenuCategories(){
          $sth = $this->db->prepare("SELECT * FROM categorias");
          $sth->execute();
          $data = $sth->fetchAll(PDO::FETCH_OBJ);
          return $data;
      }
```
#### Public
> Nesta etapa é onde será realizada a importação de arquivos públicos para cada view.

Exemplos:
- CSS: Estilização de views. Aqui você pode criar pastas para cada view, e dentro especificar os arquivos.
- JS(JavaScript): Linguagem de programação em browser. Aqui você pode criar pastas para cada view, e dentro especificar os arquivos.
- IMG(Imagens): Imagens que serão usadas em suas views. Aqui você pode criar pastas para cada view, e dentro especificar os arquivos.

#### Views
> Nesta etapa é onde você criará suas views que serão utilizadas durante a aplicação para seus usuários. SOMENTE O QUE SERÁ UTILIZADO PELO USUÁRIO.

Exemplos:
- Arquivos de Layout Default(Padrão): Header, Footer, Categories.
- Pasta da Views: Pasta que conterá todos os arquivos em PHP da View.
- Arquivos: Criação de Multiplos layouts e lógicas.
- Pasta de Error: Pasta que conterá todos os arquivos em PHP de Errors da View.
- Arquivos: Criação de Multiplos layouts de erros com mensagem configurável.

#### Index.php Raíz
> Este é o arquivo principal que conterá a lógica de URL amigável (configura em .htaccess) da aplicação.

Exemplos:
- URL Tradicional: www.conceito.com/home/index.php?name=user
- URL Amigável: www.conceito.com/home/index/user
