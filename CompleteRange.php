
<?php
class CompleteRange	 
{
    private $cadena;
    function __construct($tempCadena)
    {
        $this->cadena = $tempCadena;

    }

    public function build()
    {
        $array = explode(',', $this->cadena);
        $min = min($array);
		$max = max($array);
		$newArray = range($min, $max);
		return $newArray;
    }
}


$complete = new CompleteRange("1, 2, 4, 5");
$array1 = $complete->build();
foreach($array1 as $val)
{
    print $val. "\n";
}



?>