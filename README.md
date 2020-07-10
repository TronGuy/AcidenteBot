# AcidenteBot

**AcidenteBot** é um *ChatBot* simples, construído com front-end e back-end. O objetivo deste projeto foi para o aprendizado de programação de BOTS e foi utilizado para a obtenção de **NOTA** da disciplina de _**INTELIGÊNCIA ARTIFICIAL**_. O projeto foi feito com o nome de uma _**EMPRESA FICTÍCIA**_ em que foi apelidado de **WaySolution**. A aplicação possui **FRONT-END** com design responsivo e **BACK-END** com integração ao **MySql**. 

## Licença

Os códigos presentes nesta aplicações são de licença **MIT**. Fica livre a qualquer pessoa o livre uso dos códigos presentes neste projeto, desde que respeite as diretrizes da LICENÇA **MIT**


## Imagens
   ![AcidenteBot_1](https://github.com/LouizF/AcidenteBot/blob/master/AcidenteBot/1.png)
   ![AcidenteBot_2](https://github.com/LouizF/AcidenteBot/blob/master/AcidenteBot/2.png)
   ![AcidenteBot_3](https://github.com/LouizF/AcidenteBot/blob/master/AcidenteBot/3.png)
   ![AcidenteBot_4](https://github.com/LouizF/AcidenteBot/blob/master/AcidenteBot/4.png)

## Uso

O código tem seu funcionamento baseado em JSON,que posteriormente é passado ao chatBot

        -> A primeira posição do array será a primeira resposta do Bot

        -> E a segunda resposta será mostrada após a ação do usuário,e assim
           sucessivamente.

        -> Os valores do chat posteriormente podem ser alterados por SCRIPT   

        * "chat-msg": "mensagem que irá ser enviada pelo Bot",

        * name : pode ser atribuido a um nome personalizado em que pode ser chamado   depois,porém não é necessário para o funcionamento do software,podendo ser retirado da estrutura
        
        * type: pode ser input ou radio. Input será uma entrada de texto enquanto radio será uma opção a ser apresentada

        * children : são subdivisões de uma opção,direcionando o fluxo do chat



### Exemplos

```javascript
    var tags = [
        {
    

            type: "input",
            tag: "text",
            "chat-msg": "Olá,qual é o seu nome?",
            name: "LouizF"
        },
    
        {
            type: "msg",
            "chat-msg": ", {{name}}!Bem-vindo!"
        }
    ];


    var tags = [{

            type:"radio",
            tag:"radio",
            "chat-msg":"Qual a resposta pra vida,o universo e tudo mais?",
            children:[{

                value:"42", //valor da resposta para ser usado posteriormente
                text:"42",
             },
             {
                value:"Macratéia!",
                text:"Macratéia",
                
             }]

         },
         

         {
            type:"msg",
            "chat-msg":"Guia do Mochileiro das Galáxias de Douglas Addams"
         }]




$(document).ready(function () {
    Chat.start($('#chat-context'), tags);
});
```
