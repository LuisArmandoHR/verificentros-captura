<?php

    include_once '../configuraciones/bd.php';
    // inicializa conexion con base de datos
    $conexionBD = BD::crearInstancia();

    // Establezco todas las variables POST del registro
    $id=isset($_POST['id'])?$_POST['id']:'';
    $Creacion=isset($_POST['Creacion'])?$_POST['Creacion']:'';
    $Clave=isset($_POST['Clave'])?$_POST['Clave']:'';
    $Estatus=isset($_POST['Estatus'])?$_POST['Estatus']:'';
    $Folio=isset($_POST['Folio'])?$_POST['Folio']:'';
    $Fecha=isset($_POST['Fecha'])?$_POST['Fecha']:'';
    $Hora=isset($_POST['Hora'])?$_POST['Hora']:'';
    $Tecnico=isset($_POST['Tecnico'])?$_POST['Tecnico']:'';
    $Propietario=isset($_POST['Propietario'])?$_POST['Propietario']:'';
    $Domicilio=isset($_POST['Domicilio'])?$_POST['Domicilio']:'';
    $CodigoPostal=isset($_POST['CodigoPostal'])?$_POST['CodigoPostal']:'';
    $Municipio=isset($_POST['Municipio'])?$_POST['Municipio']:'';
    $Estado=isset($_POST['Estado'])?$_POST['Estado']:'';
    $ProximaVerificacion=isset($_POST['ProximaVerificacion'])?$_POST['ProximaVerificacion']:'';
    $Marca=isset($_POST['Marca'])?$_POST['Marca']:'';
    $Submarca=isset($_POST['Submarca'])?$_POST['Submarca']:'';
    $Modelo=isset($_POST['Modelo'])?$_POST['Modelo']:'';
    $Vin=isset($_POST['Vin'])?$_POST['Vin']:'';
    $Placa=isset($_POST['Placa'])?$_POST['Placa']:'';
    $Cilindros=isset($_POST['Cilindros'])?$_POST['Cilindros']:'';
    $HcCrucero=isset($_POST['HcCrucero'])?$_POST['HcCrucero']:'';
    $HcRealenti=isset($_POST['HcRealenti'])?$_POST['HcRealenti']:'';
    $CoCrucero=isset($_POST['CoCrucero'])?$_POST['CoCrucero']:'';
    $CoRealenti=isset($_POST['CoRealenti'])?$_POST['CoRealenti']:'';
    $O2Crucero=isset($_POST['O2Crucero'])?$_POST['O2Crucero']:'';
    $O2Realenti=isset($_POST['O2Realenti'])?$_POST['O2Realenti']:'';
    $CoCo2MinCrucero=isset($_POST['CoCo2MinCrucero'])?$_POST['CoCo2MinCrucero']:'';
    $CoCo2MinRealenti=isset($_POST['CoCo2MinRealenti'])?$_POST['CoCo2MinRealenti']:'';
    $CoCo2MaxCrucero=isset($_POST['CoCo2MaxCrucero'])?$_POST['CoCo2MaxCrucero']:'';
    $CoCo2MaxRealenti=isset($_POST['CoCo2MaxRealenti'])?$_POST['CoCo2MaxRealenti']:'';
    $FactorLambdaCrucero=isset($_POST['FactorLambdaCrucero'])?$_POST['FactorLambdaCrucero']:'';
    $FactorLambdaRealenti=isset($_POST['FactorLambdaRealenti'])?$_POST['FactorLambdaRealenti']:'';

    // detecta si se presiono boton "guardar"
    $accion=isset($_POST['accion'])?$_POST['accion']:'';

    if($accion){
    
        // Crea consulta SQL con el formato ":variable" para realizar un reemplazo de parametro
        $sql="INSERT INTO verificaciones(id,Creacion,Clave,Estatus,Folio,Fecha,Hora,Tecnico,Propietario,Domicilio,CodigoPostal,Municipio,Estado,ProximaVerificacion,Marca,Submarca,Modelo,Vin,Placa,Cilindros,HcCrucero,HcRealenti,CoCrucero,CoRealenti,O2Crucero,O2Realenti,CoCo2MinCrucero,CoCo2MinRealenti,CoCo2MaxCrucero,CoCo2MaxRealenti,FactorLambdaCrucero,FactorLambdaRealenti) VALUES (NULL,CURRENT_TIMESTAMP(), :Clave, :Estatus, :Folio, :Fecha, :Hora, :Tecnico, :Propietario, :Domicilio, :CodigoPostal, :Municipio, :Estado, :ProximaVerificacion, :Marca, :Submarca, :Modelo, :Vin, :Placa, :Cilindros, :HcCrucero, :HcRealenti, :CoCrucero, :CoRealenti, :O2Crucero, :O2Realenti, :CoCo2MinCrucero, :CoCo2MinRealenti, :CoCo2MaxCrucero, :CoCo2MaxRealenti, :FactorLambdaCrucero, :FactorLambdaRealenti)";
        // Prepara una sentencia para su ejecución y devuelve un objeto sentencia
        $consulta=$conexionBD->prepare($sql);
        
        // Reemplaza los parametros indicados
        $consulta->bindParam(':Clave',$Clave);
        $consulta->bindParam(':Estatus',$Estatus);
        $consulta->bindParam(':Folio',$Folio,PDO::PARAM_INT);
        $consulta->bindParam(':Fecha',$Fecha);
        $consulta->bindParam(':Hora',$Hora);
        $consulta->bindParam(':Tecnico',$Tecnico);
        $consulta->bindParam(':Propietario',$Propietario);
        $consulta->bindParam(':Domicilio',$Domicilio);
        $consulta->bindParam(':CodigoPostal',$CodigoPostal,PDO::PARAM_INT);
        $consulta->bindParam(':Municipio',$Municipio);
        $consulta->bindParam(':Estado',$Estado);
        $consulta->bindParam(':ProximaVerificacion',$ProximaVerificacion);
        $consulta->bindParam(':Marca',$Marca);
        $consulta->bindParam(':Submarca',$Submarca);
        $consulta->bindParam(':Modelo',$Modelo,PDO::PARAM_INT);
        $consulta->bindParam(':Vin',$Vin);
        $consulta->bindParam(':Placa',$Placa);
        $consulta->bindParam(':Cilindros',$Cilindros,PDO::PARAM_INT);
        $consulta->bindParam(':HcCrucero',$HcCrucero,PDO::PARAM_INT);
        $consulta->bindParam(':HcRealenti',$HcRealenti,PDO::PARAM_INT);
        $consulta->bindParam(':CoCrucero',$CoCrucero);
        $consulta->bindParam(':CoRealenti',$CoRealenti);
        $consulta->bindParam(':O2Crucero',$O2Crucero);
        $consulta->bindParam(':O2Realenti',$O2Realenti);
        $consulta->bindParam(':CoCo2MinCrucero',$CoCo2MinCrucero);
        $consulta->bindParam(':CoCo2MinRealenti',$CoCo2MinRealenti);
        $consulta->bindParam(':CoCo2MaxCrucero',$CoCo2MaxCrucero);
        $consulta->bindParam(':CoCo2MaxRealenti',$CoCo2MaxRealenti);
        $consulta->bindParam(':FactorLambdaCrucero',$FactorLambdaCrucero);
        $consulta->bindParam(':FactorLambdaRealenti',$FactorLambdaRealenti);

        // ejecuta la consulta
        $consulta->execute();
        //print_r($consulta);
    }

?>


