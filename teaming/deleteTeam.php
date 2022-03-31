<?php
    require '../function.php';
	
	if(isset($_POST["id"])){
		foreach($_POST["id"] as $id){
			$query = "UPDATE data_akun SET
            `team` = '' WHERE nomor_id=?";
			$team = $conn->prepare($query);
			$team->bind_param("i", $id);
			$team->execute();
            
		}
	}
?>