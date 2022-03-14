<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Marcas y Modelos de Automovil</title>
</head>
<body>
<div class="container">
<?php 
    $d= new Datos();
    $listadatos = $d->getDatos();
    echo '<hr/>';
    foreach($listadatos as $valores){
        echo "  <div class='card' style='width: 18rem;''>";
        echo "  <img class='card-img-top' src='https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2017/02/futuro-clasico-alfa-romeo-4c.jpg' alt='Card image cap'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>Auto</h5>";
        echo "    <p class='card-text'>";
        echo "       Codigo:". $valores->get_cd();
        echo '       <br>';
        echo "       Marca y Modelo :".$valores->get_marca() .$valores->get_modelo();
        echo '       <br>';
        echo "       Precios:". $valores->get_price();
        echo "    </p>";
        echo "  </div>";
        echo "</div>";
    }
    ?>

</div>
</body>
</html>

<?php 
class Automovil{
    public $cd;
    public $marca;
    public $modelo;
    public $precio;

    //constructor
    public function __construct($cd,$marca,$modelo,$precio)
    {
        $this->cd=$cd;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
    }

    public function get_cd(){
        return $this->cd;
    }


    public function get_marca(){
        return $this->marca;
    }

    public function get_modelo(){
        return $this->modelo;
    }

     public function get_price(){
        return $this->precio;
    }
}

class Datos{
    function getDatos(){
        $lista=array();
        $u=new Automovil( " HNDCV" ," Honda"," Civic", " $22,000.00 - $23,734.00");
        array_push($lista,$u);

        $u=new Automovil(" HYDENT"," Hyundai"," Elantra", " $17,985.00 - $19,000.00");
        array_push($lista,$u);

        $u=new Automovil(" KIPNCT"," Kia"," Picanto", " $11,028.00 - $19,150.00 ");
        array_push($lista,$u);

        return $lista;
    }
}
?>