<?php     
// Include database configuration file 
require_once 'dbConnect.php';

// Retrieve JSON from POST body
$jsonStr = file_get_contents('php://input');
$jsonObj = json_decode($jsonStr);

//Regex constants
$regexTicketRemedy = "/([INC])([0]{4})([1|2])([0-9]{7})$/";
$regexFecha = "/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/";
$regexTicketProveedor = "/[@#$%^&*_+{}|<>?~]/";
$regexLlamadaGuardias = "/N\/A|N2 UC|N2 LOGISTICA|N2 DIGITAL|N2 DATACENTERS & CLOUD|N2 STORE & OFFICE/";
$regexGrupoEscalado = "/N1|N2 UC|N2 LOGISTICA|N2 DIGITAL|N2 DATACENTERS & CLOUD|N2 STORE & OFFICE/";
$regexDescripcion = "/[@#$%^&*_+{}|<>~]/";


if($jsonObj->request_type == 'addEditUser'){
    $user_data = $jsonObj->user_data;
    $ticket_remedy = !empty($user_data[0])?$user_data[0]:'';
    $fecha_creacion = !empty($user_data[1])?$user_data[1]:'';
    $ticket_proveedor = !empty($user_data[2])?$user_data[2]:'';
    $llamada_guardias = !empty($user_data[3])?$user_data[3]:'';
    $grupo_escalado = !empty($user_data[4])?$user_data[4]:'';
    $descripcion = !empty($user_data[5])?$user_data[5]:'';
    $ticket = !empty($user_data[6])?$user_data[6]:'';

    $err = '';
    
    //Regex 
    if(empty($ticket_remedy)){
        $err .= 'Por favor, introduzca el número de ticket.<br/>';
    }else{
        if(preg_match_all($regexTicketRemedy, $ticket_remedy) == 0){
        $err .= 'El ticket no tiene el formato correcto INC0000XXXXXXXX.<br/>';
        }
    }

    if(empty($fecha_creacion)){
        $err .= 'Por favor, introduzca una fecha.<br/>';
    }else{
        if(preg_match_all($regexFecha, $fecha_creacion) == 0){
        $err .= 'La fecha no tiene el formato correcto dd/mm/yyyy.<br/>';
        }
    }

    if(empty($ticket_proveedor)){
        $err .= 'Por favor, introduzca el ticket del proveedor.<br/>';
    }else{
        if(preg_match_all($regexTicketProveedor, $ticket_proveedor) !== 0){
        $err .= 'El ticket del proveedor no puede contener caracteres especiales.<br/>';
        }
    }

    if(empty($llamada_guardias)){
        $err .= 'Por favor, introduzca la llamada a guardias.<br/>';
    }else{
        if(preg_match_all($regexLlamadaGuardias, $llamada_guardias) == 0){
        $err .= 'Introduzca alguno de los siguientes grupos en llamada a guardias: 
        N/A, N2 UC, N2 LOGISTICA, N2 DIGITAL, N2 DATACENTERS & CLOUD, N2 STORE & OFFICE.<br/>';
        }
    }

    if(empty($descripcion)){
        $err .= 'Por favor, introduzca una descripción.<br/>';
    }else{
        if(preg_match_all($regexDescripcion, $descripcion) !== 0){
        $err .= 'El campo descripción no puede contener caracteres especiales.<br/>';
        }
    }
    
    if(!empty($user_data) && empty($err)){
        if(!empty($ticket)){
            // Update user data into the database
            $sql="update tratamiento set ticket_remedy='".$ticket_remedy."',
            fecha_creacion='".$fecha_creacion."', ticket_proveedor='".$ticket_proveedor."',
            llamada_guardias='".$llamada_guardias."', descripcion='".$descripcion."', grupo_escalado='".$grupo_escalado."', grupo_escalado='".$grupo_escalado."'
            where ticket='".$ticket."'";

            $update = $conn->query($sql);

            if($update){
                $output = [
                    'status' => 1,
                    'msg' => 'Se ha actualizado el ticket con éxito'
                ];
                echo json_encode($output);
            }else{
                echo json_encode(['error' => 'No se ha podido actualizar el ticket']);
            }
        }else{
            // Insert event data into the database
            $resuelto="NO";
            $sql="insert into tratamiento(fecha_creacion,ticket_proveedor,llamada_guardias,descripcion,ticket_remedy,grupo_escalado,resuelto)
            values('".$fecha_creacion."','".$ticket_proveedor."','".$llamada_guardias."','".$descripcion."','".$ticket_remedy."','".$grupo_escalado."','".$resuelto."')";
            
            $insert = $conn->query($sql);

            if($insert){
                $output = [
                    'status' => 1,
                    'msg' => 'Se ha añadido el ticket a la bitácora'
                ];
                echo json_encode($output);
            }else{
                echo json_encode(['error' => 'No se ha podido añadir el ticket']);
            }
        }
    }else{
        echo json_encode(['error' => trim($err, '<br/>')]);
    }

//Delete user
}elseif($jsonObj->request_type == 'deleteUser'){
    $ticket = $jsonObj->user_ticket;
    $sql = "DELETE FROM tratamiento WHERE ticket=$ticket";
    $delete = $conn->query($sql);

    if($delete){
        $output = [
            'msg' => 'Ticket eliminado con éxito'
        ];
        echo json_encode($output);
    }else{
        echo json_encode(['error' => 'No se ha podido eliminar el ticket']);
    }


//Solve user
}elseif($jsonObj->request_type == 'solveUser'){

    $ticket = $jsonObj->user_ticket;
    $sql="update tratamiento set resuelto='SI'
    where ticket='".$ticket."'";

    $delete = $conn->query($sql);

    if($delete){
        $output = [
            'msg' => 'Ticket resuelto'
        ];
        echo json_encode($output);
    }else{
        echo json_encode(['error' => 'No se ha podido resolver el ticket']);
    }
        }
