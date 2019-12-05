<?php
	$dbc = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
	$statement=$dbc->prepare("SELECT animals.PuppyName, breeds.BreedName, animals.Description, animals.Price, animals.Picture FROM animals JOIN breeds ON animals.BreedID=breeds.Breed");
	$statement->execute();
	$data=$statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Animals</title>
	<Style>
		body{
			background: #C7C7C8;
			font-family: arial;
			margin: 0px;
		}
		div.header{
			height: 70px;
			background-color: #2A3D5E;
		}
		div.PuppiesData p{
			font-size: 15pt;
			color: #EDEDED;
			background-color: #4C638C;
			padding: 23px 10px;
			float: right;
			position: relative;
			bottom: 20px
		}
		div.tbl{
			background-color:rgba(0,0,0,0.2); 
			height: 100%;
			width: 47.5%;
			position: relative;
			left: 25%;
			color: black;
		}
		table{
			text-align:center;
		}
		th{
			border: 1px solid black;
			background-color: #4C638C;
			padding:5px;
		}
		td{
			border: 1px solid black;
		}
		a{
			text-decoration: none;
			color:white;
		}
	</Style>
</head>
<body>
	<div class="header">
		<div class="PuppiesData">
			<p>Puppies Data</p>
		</div>
	</div>
	<br>
	<div class="tbl">
		<table>
			<tr>
				<th>Puppy Name</th>
				<th>Breed Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Pictures</th>
			</tr>
				<?php foreach ($data as $value):?>
					<tr>
						<td><?php echo $value['PuppyName'] ?></td>
						<td><?php echo $value['BreedName'] ?></td>
						<td><?php echo $value['Description'] ?></td>
						<td><?php echo "$". $value['Price'] ?></td>
						<td><img src="puppies_images/<?php echo $value['Picture']?>" alt="<?php echo $value['Picture']?>" class="gambar"/></td>
					</tr>
				<?php endforeach;?>
		</table>
		<br>
		<a href='tambah.php'><i>(+) Add Animals</i></a>
	</div>

</body>
</html>
