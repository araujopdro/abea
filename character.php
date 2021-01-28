<?php
	session_start();
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ABEA - Criador de Pesonagem</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="shortcut icon" type="image/png" href="imgs/favicon.png"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  		
  		<link rel="stylesheet" href="css/index.css">
	</head>
	<body> 
		<div class="container py-4 z-index-1" id="main-container">
			<div id="spinner-loading" class="spinner-border" style="width: 3rem; height: 3rem; position: absolute; left: 50%; top: 50%;" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
			<div class="page" id="preview-holder">
				<div class="row justify-content-center p-4 m-4">
					<div style="position: relative; width: 185px;">
						<span class="inner-shadow" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 3rem;"></span>
						<img class="profile-portrait" id="preview-portrait" src="/imgs/portraits/portrait0.jpg" style="width: 100%;">
					</div>
				</div>
				<div class="row flex-column p-2 m-2">
					<h1 class="mx-auto user-select-none"><span class="h3" style="visibility: hidden;">20</span><span id="preview-nome">Lorem Ipsum</span>, <span class="h3" id="preview-idade">20</span></h1>
					
					<h5 class="mx-auto my-2 user-select-none">
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
						<span id="preview-nacionalidade">Nacionalidade</span>
						<span class="mx-3"><i class="fas fa-flag"></i></span>
					</h5>
					<h6 class="mx-auto mt-1 mb-3 user-select-none">
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
						<span id="preview-etnia">Nacionalidade</span>
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
					</h6>
					<div class="row px-4 pb-4 mx-4 mt-4">
						<div class="mx-auto h5">
							<span>Bio</span>
						</div>
						<span class="px-4 ubuntu" id="preview-historia" style="font-size: 0.85rem"></span>
					</div>
				</div>

				<div class="row px-4 mx-4 justify-content-start">
					<h3 class="ml-4 user-select-none">
						<span class="mx-2"><i class="fas fa-user-cog"></i></span>
						<u>Características:</u>
					</h3>
				</div>

				<div class="row flex-column px-2 pb-2 mb-2">
					<div class="my-2 p-4 d-flex justify-content-around">
						<div>
						    <span for="car-preview-1" onclick="Strike(1)" id="car-preview-label-1" class="h3 user-select-none pointer">
							     Característica 1
							</span>
						</div>
						<div>
						    <span for="car-preview-2" onclick="Strike(2)" id="car-preview-label-2" class="h3 user-select-none pointer">
						    	Característica 2
						    </span>
						</div>
						<div>
						    <span for="car-preview-3" onclick="Strike(3)" id="car-preview-label-3" class="h3 user-select-none pointer">
						    	 Característica 3
						    </span>
						</div>
					</div>
				</div>
				<div class="row pb-4 px-4 mx-4 justify-content-start">
					<h3 class="ml-4 user-select-none">
						<span class="m-2"><i class="fas fa-user-check"></i></span>
						<u>Habilidades:</u>
					</h3>
				</div>
				<div class="row pb-4 px-4 mx-4 mb-4" id="preview-habilidades">

				</div>
				<div class="row px-4 m-4">
					<div class="pointer ml-4" onclick="Save()">
						<span class="ml-2" ><i class="fas fa-save"></i></span>
						<span>Salvar Itens</span>
					</div>
				</div>
				<div class="row pb-4 px-4 mx-4 justify-content-between">
					<h3 class="ml-4 user-select-none">
						<span class="m-2"><i class="fas fa-suitcase"></i></span>
						<u>Itens:</u>
					</h3>
					<div class="mr-4">
						<span class="h6 m-1"><i class="fas fa-coins"></i></span>
						<input class="h2 px-3 input-number inner-shadow" id="preview-dinheiro" type="number">
					</div>
				</div>
				<div class="row pb-4 px-4 mx-4 mb-4">
					<textarea class="item-holder mx-4 p-4 inner-shadow" id="preview-bens" style="height: 350px"></textarea>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var character_id = <?php echo json_encode($id); ?>;
		</script>
		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript" src="js/character.js"></script>
		<script type="text/javascript" src="js/refs.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
	</body>
</html>