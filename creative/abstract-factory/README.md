### Abstract Factory

é um padrão de projeto criacional que permite que você produza famílias de objetos relacionados sem ter que especificar suas classes concretas.

Isso que dizer que o Abstract Factory define uma interface para criar todos os produtos distintos, mas deixa a criação real do produto para classes fábrica concretas. Cada tipo de fábrica corresponde a uma determinada variedade de produtos.

O código cliente chama os métodos de criação de um objeto fábrica em vez de criar produtos diretamente com uma chamada de construtor (usando operador new). Como uma fábrica corresponde a uma única variante de produto, todos os seus produtos serão compatíveis.

O código cliente trabalha com fábricas e produtos somente através de suas interfaces abstratas. Ele permite que o mesmo código cliente funcione com produtos diferentes. Você apenas cria uma nova classe fábrica concreta e a passa para o código cliente.
### Aplicabilidade

- Quando um sistema deve ser independente de como seus produtos são criados, compostos e representados
- Quando um sistema deve ser configurado com uma entre várias famílias de produtos
- Quando uma família de produtos relacionados foi projetada para uso conjunto e você deve implementar essa restrição
- Quando você quer fornecer uma biblioteca de classes e quer revelar sua interface e não sua implementação
 - Não permita portanto que objetos sejam diretamente criados com new

### Exemplos
#### 00 exemplo concreto
Visão de como funciona a implementação desse padrão.


#### 01 different-page-elements
Neste exemplo, o padrão Abstract Factory fornece uma infraestrutura para criar vários tipos de modelos para diferentes elementos de uma página da web.

Uma aplicação Web pode suportar diferentes mecanismos de renderização ao mesmo tempo, mas apenas se suas classes forem independentes das classes concretas dos mecanismos de renderização. Portanto, os objetos da aplicação devem se comunicar com os objetos de modelo apenas por meio de suas interfaces abstratas. Seu código não deve criar os objetos de modelo diretamente, mas delegar sua criação a objetos fábrica especiais. Finalmente, seu código também não deve depender dos objetos fábrica, mas deve trabalhar com eles por meio da interface fábrica abstrata.

Como resultado, você poderá fornecer à aplicação o objeto fábrica que corresponde a um dos mecanismos de renderização. Todos os modelos, criados na aplicação, serão criados por essa fábrica e seu tipo corresponderá ao tipo da fábrica. Se você decidir alterar o mecanismo de renderização, poderá passar uma nova fábrica para o código cliente, sem quebrar algum código existente.


#### 02 Fabrica de móveis
Problema

Imagine que você está criando um simulador de loja de mobílias. Seu código consiste de classes que representam:

1. Uma família de produtos relacionados, como: **_Cadeira_** + **_Sofá_** + **_MesaDeCentro_**.

2. Várias variantes dessa família. Por exemplo, produtos **_Cadeira_** + **_Sofá_** + **_MesaDeCentro_** estão disponíveis nessas variantes: **_Moderno_**, **_Vitoriano_**, **_ArtDeco_**.
