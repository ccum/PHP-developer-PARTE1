<?php
function build($cadena)
{
	$alphas = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R','S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

	$nuevaCadena = "";
	$nuevoCaracter="";
	for ($i = 0; $i < strlen($cadena); $i++)
	{
	   
	    if(in_array($cadena[$i], $alphas, true))
	    {
		    $posicionCaracter = array_search($cadena[$i],$alphas);
		    
		    if($posicionCaracter==26)
		    {
		    	$nuevoCaracter=$alphas[0];
		    }
		    else if($posicionCaracter==53)
		    {
		    	$nuevoCaracter=$alphas[27];
		    }
		    else
		    {
		    	$nuevoCaracter=$alphas[$posicionCaracter +1];
		    }
	    	

	    }
	    else
	    {
	    	$nuevoCaracter =$cadena[$i];
	    }
	    $nuevaCadena = $nuevaCadena . $nuevoCaracter;
	}

    return $nuevaCadena;
}



echo build("123 abcd*3   \t");
echo build("**Casa 52   \t");
echo build("**Casa 52Z   \t");

?>

