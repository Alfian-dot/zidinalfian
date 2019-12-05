<?php
	$dbc = new PDO('mysql:host=localhost;dbname=puppies', 'root','');
	$a = $dbc-> prepare("SELECT * FROM breeds");
	$a->execute();
	$data=$a->fetchAll();
	
	if(isset($_POST['submit'])){
		$Puppy = htmlentities($_POST['Puppy']);
		$BreedID = htmlentities($_POST['BreedID']);
		$Deskripsi = htmlentities($_POST['Deskripsi']);
		$Harga = htmlentities($_POST['Harga']);
		$Pict = htmlentities($_POST['Pict']);

		$b = $dbc->prepare("INSERT INTO animals(PuppyName,BreedID,Description,Price,Picture) VALUES (:PuppyName,:BreedID,:Description,:Price,:Picture)");
		$b->bindValue(":PuppyName", $Puppy);
		$b->bindValue(":BreedID", $BreedID);
		$b->bindValue(":Description", $Deskripsi);
		$b->bindValue(":Price", $Harga);
		$b->bindValue(":Picture", $Pict);
		$b->execute();
		header("location: sukses.php");
	}
?>

<!Doctype html>
<html lang="en">
<head>
	<title>Masukkan Data</title>
	<style>
		body{
			background: gray;
			font-family: arial;
			margin: 0px;
		}
		div.header{
			height: 70px;
			background-color: #2A3D5E;
		}
		div.registration p{
			font-size: 15pt;
			color: #EDEDED;
			background-color: #4C638C;
			padding: 23px 10px;
			float: right;
			position: relative;
			bottom: 20px
		}
		h1{
			color: white; 
			position: relative; 
			left: 225px
		}

		div.frm{
			background-color:rgba(0,0,0,0.2); 
			height: 100%;
			width: 50%;
			position: relative;
			left: 23%;
			color: black;
		}
		label.label{
			font-size: 15px;
			color: #e5e5e5;
			position: relative;
			left: 50px;
		}
		input.inp{
			width: 520px;
			padding: 8px 16px;
		    border: 3px solid #ccc;
		    transition: 0.5s;
		    margin-left: 50px;
		    color: black
		}
		select.inp{
			width: 555px;
			padding: 8px 16px;
		    border: 3px solid #cccccc;
		    transition: 0.5s;
		    margin-left: 50px;
		    color: #cccccc

		}
		.button{
			width: 100px;
			padding: 5px 8px;
		    border: 3px solid #cccccc;
		    margin-left: 17px;
		    position: relative;
		    left: 190px;
		    bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="registration">
			<p>Add to Puppies</p>
		</div>
	</div>
	<div class="frm">
		<div>
			<br>
			<h1>Animal Details</h1>
			<br>
		</div>
		<form method="POST" id="fm">
			<div>
				<label class="label">Puppy Name :</label>
					<br><br>
					<input type="text" name="Puppy" class="inp" placeholder="PuppyName" value=""/>
					<br><br><br>
			</div>
			<div>
				<label class="label">Breed ID :</label>
				<br><br>
				<select name="BreedID" class="inp">
					<?php foreach ($data as $value){
						echo"<option value=".$value['Breed'].">";echo $value['BreedName'];echo"</option>";
					}?>
				</select>
				<br><br><br>
			</div>
			<div>
				<label class="label">Description :</label>
				<br><br>
				<input type="text" name="Deskripsi" placeholder="Description" class="inp" value=""/>
				<br><br><br>
			</div>
			<div>
				<label class="label">Price :</label>
				<br><br>
				<input type="text" name="Harga" placeholder="Price" class="inp" value=""/>
				<br>
				<br><br>
			</div>
			<div>
				<label class="label">Picture :</label>
				<br><br>
				<input type="text" name="Pict" placeholder="Picture" class="inp" value=""/>
				<br><br>
			</div>
			<div>
				<br>
				<input type="submit" value="Submit" class="button" name="submit"/>
				<input type="reset" value="Reset"  class="button" name="reset"/>
			</div>
		</form>
		</div>
</body>
</html>