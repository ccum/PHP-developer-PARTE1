
<?php
class ClearPar	 
{
    private $cadena;
    function __construct($tempCadena)
    {
        $this->cadena = $tempCadena;

    }

    public function build()
    {
        $nuevaCadena = "";
        for ($i = 0; $i < strlen($this->cadena); $i++)
		{
			if($i + 1<strlen($this->cadena))
			{
				if($this->cadena[$i]=="(" and $this->cadena[$i + 1]==")")
				{
					$nuevaCadena = 	$nuevaCadena. $this->cadena[$i]. $this->cadena[$i + 1];
					$i++;			
				};
			}
		}
		return $nuevaCadena;

    }
}

$clear = new ClearPar("()())()");
echo $clear->build();



?>