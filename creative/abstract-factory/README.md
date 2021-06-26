### Abstract Factory

é um padrão de projeto criacional que permite que você produza famílias de objetos relacionados sem ter que especificar suas classes concretas.

### Aplicabilidade

- Quando um sistema deve ser independente de como seus produtos são criados, compostos e representados
- Quando um sistema deve ser configurado com uma entre várias famílias de produtos
- Quando uma família de produtos relacionados foi projetada para uso conjunto e você deve implementar essa restrição
- Quando você quer fornecer uma biblioteca de classes e quer revelar sua interface e não sua implementação
 - Não permita portanto que objetos sejam diretamente criados com new

### Exemplos
#### exemplo concreto
Visão de como funciona a implementação desse padrão.


#### Fabrica de móveis
Problema


Imagine que você está criando um simulador de loja de mobílias. Seu código consiste de classes que representam:

1. Uma família de produtos relacionados, como: **_Cadeira_** + **_Sofá_** + **_MesaDeCentro_**.

2. Várias variantes dessa família. Por exemplo, produtos **_Cadeira_** + **_Sofá_** + **_MesaDeCentro_** estão disponíveis nessas variantes: **_Moderno_**, **_Vitoriano_**, **_ArtDeco_**.
