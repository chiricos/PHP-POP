<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>orientado a objetos</title>
</head>
<body>
<h1>Programación orientada a objetos</h1>
<a href="curso1">curso1 atributos y metodos</a><br>
<a href="curso2">curso2 </a><br>
<a href="curso3">curso3 metodos __constrct __destruct</a><br>
<a href="curso4">curso4 modificadores de acceso</a><br>
<a href="curso5">curso5 herencia</a><br>
<a href="curso6">curso6 static</a><br>
<a href="curso7">curso7 Interfaces</a><br>
<a href="curso8">curso8 Clases y métodos abstractos</a><br>
<a href="curso9">curso9 Autoload</a><br>
<a href="curso10">curso10 Traits</a><br>
<a href="curso11">curso11 Namespaces</a><br>
<a href="proyecto">Proyecto </a><br>

<section>


    Una clase se divide en dos en atributos y metodos atributos son las variables y los metodos las funciones <br>

    <b>Atributos:</b>simples variables o arrays, definicion del tipo del atributo public private protected <br>

    <b>Métodos:</b>  Accede a atributos con $this-nombre, podemos acceder a otros métodos con $this o self:: <br>


    <b>modificadores de acceso :</b>
    Son simples propiedades que podemos añadirles a nuestros métodos y atributos de nuestra clase, estas nos ayudaran con los accesos y la extraccion de metodos o atributos
    <br>

    <b>public:</b>     cualquiera puede acceder a el <br>

    <b>private:</b>  solo se puede se llamado desde otro metodo de la misma clase. <br>

    <b>protected:</b>  puede ser llamado desde otro metodo y subclases(herencia) <br>

    <b>herencia:</b>  significa que pueden crear nuevas clases partiendo de clases existentes, que tendra todos los tributos
    y los metodos de su superclase o clase padre y ademas se le podrán añadir otros atributos y métodos propios <br>

    En PHP, a diferencia de otros lenguajes orientados a objetos (C++), una clase sólo puede derivar de una unica clase es decir
    php no permite herencia multiple <br>

    <b>static:</b>  una propiedad declarado como static no puede ser accedida con un objeto de clase instanciado, <br>
    aunque un método estático sí lo puede hacer- *un método estático no puede acceder a los atributos de la clase. <br>
    *indicamos primero el nombre de la clase, luego el operador '::' y por último indicamos en nombre del método estático a llamar.
    <br>
    * las propiedades estáticas no pueden ser accedidas a través del objeto utilizando el operador flecha <br>
    * Un método estático es lo más parecido a una función de un lenguaje estructurado. Solo que se lo encapsula dentro de una clase
    <br>

    <b>INTERFACES:</b>  permite crear código con el cual especificamos qué métodos deben ser implementados por una clase.
    <br>
    todos deben ser publicos, se utiliza el operador implements. se puede extender con extends <br>

    <b>CLASES Y MÉTODOS ABSTRACTOS:</b> <br>

    <b>CLASES ABSTRACTAS:</b>  Una clase abstracta tiene por objetivo agrupar atributos y métodos que luego serán heredados por otras subclases.
    <br>
    las clases definidas como abstractas no se pueden intaciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal.
    <br>
    Los métodos definidos como abstractos simplemente declaran la firma del método, pero no pueden definir la implementación
    <br>

    <b>MÉTODOS ABSTRACTOS:</b>

    Si queremos que las subclases implementen comportamientos obligatoriamente podemos definir métodos abstractos <br>
    Un método abstracto se declara en una clase pero no se lo implementa <br>

    <b> AUTOLOAD:</b>

    Se puede definir una funcion que es automaticamente. usaremos la funcion spl_autoload_register(), lo que va hacer
    <br>
    es auto-cargar clases desde una funcion donde intentemos cargar los archivos donde se encuentran esas clases. <br>
    <b>TRAITS:</b>
    Personalmente los cosidero como fragmentos de código que pueden ser reusados en clases, los cuales pueden tener un poco de similitud con una clase.
    Las clases pueden permitir user tantos traits sean posibles simplemente separándolos con una , estaría funcionando de manera correcta.
    <br>

    <b>Namespace: </b>
    Los namespaces son sin duda alguna una de las innovaciones que ha "revivido " a la comunidad de Php, estos hacen que la manera de programar con este lenguaje sea mas sencilla y a la vez mas comoda.
    <br>
    Los nombre de espacio nos ayudan a tener que colocar "sub-nombres " a nuestros archivos, clases o funciones. Sin duda alguna es una gran ventaja para todos los que programan con la POO.
    <br>


</section>
</body>
</html>
