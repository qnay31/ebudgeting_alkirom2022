<?php
    require '../function.php';
	
	if(isset($_POST["id"])){
		foreach($_POST["id"] as $id){
			$query = "UPDATE data_akun SET
            `team` = '' WHERE nomor_id=?";
			$team = $conn->prepare($query);
			$team->bind_param("i", $id);
			$team->execute();

			$query2 = "UPDATE income_media SET
            `team` = '' WHERE nomor_id=?";
			$team2 = $conn->prepare($query2);
			$team2->bind_param("i", $id);
			$team2->execute();

			
			$query3 = "UPDATE laporan_media SET
            `team` = '' WHERE nomor_id=?";
			$team3 = $conn->prepare($query3);
			$team3->bind_param("i", $id);
			$team3->execute();
            
		}
	}
?>