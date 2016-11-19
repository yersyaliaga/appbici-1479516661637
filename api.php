<?php 
include("db.php");
$method = $_SERVER['REQUEST_METHOD'];
mysqli_set_charset($conn,"utf8");

function utf8ize($mixed) {
    if (is_array($mixed)) {
        foreach ($mixed as $key => $value) {
            $mixed[$key] = utf8ize($value);
        }
    } else if (is_string ($mixed)) {
        return utf8_encode($mixed);
    }
    return $mixed;
}

switch ($method) {
  case 'POST':
	  if (isset($_POST["procedure"])) {
	  	$procedure = $_POST["procedure"];	  	
	  	switch($procedure){
	  		case '1':
	  			$user = $_POST["user"];
	  			$user = $_POST["password"];
	  			$queryString = "SELECT id from usuarios where user='".$user."' and password ='".$password."'";
				$query = mysqli_query($conn, $queryString);
				$personas = array();	
				if(mysqli_num_rows($query) > 0){
					while($row = mysqli_fetch_assoc($query)) {
						array_push($personas, array(
							"id" => $row["id"]
						));
					}
					return $personas;				
				} else {
					echo 'No hay nada';
					return "";
				} 
	  			break;  			
		}
	}
}

?>