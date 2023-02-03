<?php
/*
    
class BD{


    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia)){
            
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=id20245793_verificentros','id20245793_luisarmando07','lCQ!ns*D~XPI1S4D',$opciones);
            //echo "<br>conectado... <br>";
        }

        return self::$instancia;

    }

}



Database name
verificentros
Database username
LuisArmando07
Password
lCQ!ns*D~XPI1S4D
*/






class BD{

    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia)){
            
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=verificentros','root','',$opciones);
            //echo "<br>conectado... <br>";
        }

        return self::$instancia;

    }

}