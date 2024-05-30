<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p= new Pessoa('Ronaldo', 25, 'M'); 
        $p1= new Pessoa('Maria', 23, 'F'); 
        
        
        $L=new Livro("penis largo", "bernardinho", 550, $p);
        $L1=new Livro("Arrotinhos", "marcus", 1200, $p1);
        
        
        
        
        $L->abrir();
        $L->folhear(900);
        $L->detalhes();
        echo"<br></br>";
        $L1->abrir();
        $L1->folhear(80);
        $L1->detalhes();
        
        
        ?>
<pre/>
    </body>
</html>
