<?php 

    $hname = 'localhost';
    $uname = 'u564408349_usuariopampa';
    $pass = 'E8+0zS0>a~';
    $db = 'u564408349_bancopampa';
    
    $con = mysqli_connect($hname,$uname,$pass,$db);

    if(!$con){
        die("não conexta".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $value = trim($value);
            $value = stripcslashes($value);
            $value = htmlspecialchars($value);
            $value = strip_tags($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function select($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Não é possível executar a consulta - ERROR");
            }
        }
        else{
            die("Não é possível montar a consulta - ERROR");
        }
    }

    function update($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Não é possível executar a atualização - ERROR");
            }
        }
        else{
            die("Não é possível montar a atualização - ERROR");
        }
    }

    function delete($sql, $values, $datatypes){

        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Não é possível deletar o dado");
            }
        }
        else{
            die("Não é possível conectar");
        }
    }
    
    function insert($sql, $values, $datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Não é possível inserir o dado");
            }
        }
        else{
            die("Não é possível conectar");
        }
    }
?>
