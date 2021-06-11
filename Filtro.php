<?php 
class filtro{
    public static function filtrar ($dato){
        $dato=' '.$dato;
        
        $cad1 = strpos($dato, '<');
        $cad2 = strpos($dato, '#');
        $cad3 = strpos($dato, '=');
        $cad4 = strpos($dato, "'");

        if ($cad1 || $cad2 || $cad3 || $cad4 ){
            return true;
        }else{
            return false;
        }
    }

}
?>