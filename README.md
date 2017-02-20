## IntegerObject 1.0.0

Classe para gerenciamento de números inteiros


## Recursos
  - isEquals(IntegerObject $integer) - Método que verifica se o conteúdo do objeto corrente é igual ao do objeto IntegerObject informado
  - getValue() - Método que retorna o valor puro do número do objeto
  - parseFloatObject() - Método que converte um objeto IntegerObject em FloatObject
  - parseStringObject() - Método que converte um objeto IntegerObject em StringObject
  - addition(IntegerObject $integer) - Método que realiza a soma do número armazenado com o parametro informado pelo usuário
  - subtract(IntegerObject $integer) - Método que realiza a subtração do número armazenado com o parametro informado pelo usuário
  - multiply(IntegerObject $integer) - Método que realiza a multiplicação do número armazenado com o parametro informado pelo usuário
  - division(IntegerObject $integer) - Método que realiza a soma do número armazenado com o parametro informado pelo usuário
  - module(IntegerObject $integer) - Método que realiza a divisão até que reste apenas o resto da divisão
  - exponentiation(IntegerObject $integer) - Método que realiza operação de exponenciação de um número informado


## Utilização via composer

```sh
    "require": {
        ...
        "tayron/integer-object" : "1.0.0"
        ... 
    },    
```

## Exemplo de utilização
```
<?php
use Tayron\IntegerObject;
    
try{ 
    $numA = new IntegerObject('100');
    $numB = new IntegerObject(1);

    var_dump($numA);
    var_dump($numB);
    
    var_dump($numA->isEquals($numB));

    $numA = new IntegerObject('1');
    var_dump($numA->isEquals($numB));

    var_dump($numA->length());
    var_dump($numB->length());
}catch(\Exception $e){
    echo $e->getMessage();
}
```