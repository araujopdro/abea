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
				<div style="position: absolute; top: 3rem; right: 3rem;">
					<span class="display-3 pointer" onclick="Save()"><i class="fas fa-save"></i></span>
				</div>

				<div class="row justify-content-center p-4 m-4">
					<div style="position: relative; width: 185px;">
						<span class="crud-change-profile" data-toggle="modal" data-target="#crud-modal-profile"><i class="fas fa-user-edit"></i></span>
						<span class="inner-shadow" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 3rem;"></span>
						<img class="profile-portrait" id="crud-portrait" src="/imgs/portraits/portrait0.jpg" style="width: 100%;">
					</div>
				</div>
				<div class="row flex-column p-2 m-2">
					<h1 class="mx-auto user-select-none">
						<input class="h4 item-holder inner-shadow p-2" type="text" name="crud-nome" placeholder="Nome" id="crud-nome"><br>
						<input class="h5 item-holder inner-shadow p-2" type="number" name="crud-idade" placeholder="Idade" id="crud-idade">
					</h1>
					
					<h5 class="mx-auto my-2 user-select-none d-flex align-self-center">
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
						<span>
							<select class="item-holder inner-shadow p-1 px-2" id="crud-nacionalidade">
								
							</select>
						</span>
						<span class="mx-3"><i class="fas fa-flag"></i></span>
					</h5>

					<h6 class="mx-auto my-2 user-select-none d-flex align-self-center">
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
						<span>
							<select class="item-holder inner-shadow p-1 px-2" id="crud-etnia">
								
							</select>
						</span>
						<span class="mx-3" style="visibility: hidden;"><i class="fas fa-flag"></i></span>
					</h6>

					<div class="row px-4 pb-4 mx-4 mt-4">
						<div class="mx-auto h5">
							<span>Bio</span>
						</div>
						<span style="font-size: 0.85rem"></span>
						<textarea class="ubuntu item-holder mx-4 p-4 inner-shadow" id="crud-historia" style="height: 250px"></textarea>
					</div>
				</div>

				<div class="row px-4 mx-4 justify-content-start">
					<h3 class="ml-4 user-select-none">
						<span class="mx-2"><i class="fas fa-user-cog"></i></span>
						<u>Características:</u>
					</h3>
				</div>
				<div class="row p-3 m-4 mb-2 d-flex" id="holder-caracteristicas">

				</div>
				<div class="row pb-4 px-4 mx-4 justify-content-between">
					<div class="d-flex">
						<h3 class="ml-4 user-select-none">
							<span class="m-2"><i class="fas fa-user-check"></i></span>
							<u>Habilidades:</u>
						</h3>
						<span class="ml-4 m-2 pointer h6 ubuntu" data-toggle="modal" data-target="#crud-modal-hab">Add Habilidade <i class="fas fa-plus-square"></i></span></span>
					</div>
					<span class="h5 mr-4">PH: <span class=" ml-2" id="crud-ph"></span> | <span class="" id="crud-ph-total"></span></span>
				</div>
				<div class="row pb-4 px-4 mx-4 mb-4">
					<div class="col-12 d-flex flex-column" id="crud-habilidades">

					</div>
				</div>
				<div class="row pb-4 px-4 mx-4 justify-content-between">
					<h3 class="ml-4 user-select-none">
						<span class="m-2"><i class="fas fa-suitcase"></i></span>
						<u>Itens:</u>
					</h3>
					<div class="mr-4">
						<span class="h6 m-1"><i class="fas fa-coins"></i></span>
						<input class="h2 px-3 input-number inner-shadow" id="crud-dinheiro" type="number">
					</div>
				</div>
				<div class="row pb-4 px-4 mx-4 mb-4">
					<textarea class="item-holder mx-4 p-4 inner-shadow" id="crud-bens" style="height: 350px"></textarea>
				</div>
			</div>
		</div>

		<div class="modal fade" id="crud-modal-hab" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body row" id="habilidades-modal">

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" onclick="SaveHabilidades()">Salvar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="crud-modal-profile" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body justify-content-between" id="profiles-modal">

		      </div>
		    </div>
		  </div>
		</div>

		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>



		<script type="text/javascript">
			var character_id = <?php echo json_encode($id); ?>;
		</script>
		<script type="text/javascript" src="js/refs.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>

		<script type="text/javascript" src="js/crud.js"></script>
	</body>
</html>