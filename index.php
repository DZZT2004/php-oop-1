<?php
class Movie{
    public $nome;
    public $anno;
    public $tipo;

    function __construct($_nome, $_anno, $_tipo){
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->tipo = $_tipo;
    }

    public function getNome(){
        return $this->nome;
    }
}

$batman = new Movie('Batman', 2008, 'Azione');
$superman = new Movie('Superman', 2017, 'Azione');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Movie PHP</title>
</head>
<body>
    <?php echo $batman->nome . ' ' . $batman->anno . ' ' . $batman->tipo?><br>
    <?php echo $superman->nome . ' ' . $superman->anno . ' ' . $superman->tipo?><br>
</body>
</html>