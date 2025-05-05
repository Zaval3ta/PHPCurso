<?php
declare(strict_types=1); //Para tipar el codigo

$sale = new Sale(10.5,date("Y-m-d"));
$sale = new Sale(10.5,date("Y-m-d"));
echo Sale::$count." "; //Las propiedades estaticas se invocan desde la clase
Sale::reset(); //Los metodos estaticos se invocan desde la clase
$sale = new Sale(10.5,date("Y-m-d"));
echo Sale::$count;
echo"<p>Tipo de clase:</p>";
echo gettype($sale->total);



echo "<p></p>";
print_r($sale);
echo "<p></p>";
echo $sale -> createInvoice();

class Sale{
  public float $total;
  public string $date;
  public static $count; //-> Elemento estatico
  //Constructor
  public function __construct(float $total,string $date)
  {
    $this -> total = $total;
    $this -> date = $date;
    self::$count++; // -> No necesitas un objeto para invocarlo
    //Las propiedades estaticas se comparten con los objetos, ya que le pertenecen a la clase
  }
//Metodo estatico
  public static function reset(){
    self::$count = 0;
  }
  //Destructor
  public function __destruct()
  {
    echo "<br>";
    echo "Se ha eliminado el objeto";
  }

  public function createInvoice(): string{
    return "Se crea la factura";
  }
  
}

