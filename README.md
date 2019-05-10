# Modelo MVC Conceito
~~~~
Este é um modelo MVC desenvolvido para auxiliar desenvolvedores à adaptarem seu próprio modelo.
~~~~
## Objetivo
~~~~
O objetivo desta seção é demonstrar de forma documental como utilizar cada parte do código, para fácil modificações das funcionalidades do código.
~~~~
## Arquitetura MVC

- #### Model (M): 
> Sempre que você pensar em manipulação de dados, pense em model. Ele é responsável pela leitura e escrita de dados, e também de suas validações.
- #### View (V): 
> Simples: a camada de interação com o usuário. Ela apenas faz a  exibição dos dados, sendo ela por meio de um html ou xml.
- #### Controller (C): 
> O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário.
![Exemplo comunicação MVC](https://raw.githubusercontent.com/diegoeis/tableless-static-images/master/2015/02/laravel-introducao.jpg)
> Fonte: (https://tableless.com.br/mvc-afinal-e-o-que/)
