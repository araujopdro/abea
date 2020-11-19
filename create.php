<?php
	session_start();
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
  		<link rel="stylesheet" href="css/create.css">
	</head>
	<body> 
		<div style="width: 20%;background-color: black;color: white;position: fixed;top: 5%;left: 2.5%;display: flex;flex-direction: column;padding: 1em;border-radius: 0.6em;">
			<div style="display: flex;"><span style="width: 35%;display: block;margin-bottom: 1.5em;"><img style="width: 100%;" id="preview-portrait" src="/imgs/portraits/portrait0.jpg"></span></div>
			<div style="display: flex">
				<div style="flex: 1;margin-right: 1.5em;">
					<h6 style="color: lightcoral;">Nome:</h6>
					<h5 id="preview-nome"></h5>
				</div>
				<div style="display: flex;">	
					<h6 style="margin-right: 0.3em;color: lightcoral;">Idade:</h6>
					<h5 id="preview-idade"></h5>
				</div>
			</div>
			<div style="margin-top: 1em;">
				<h6 style="color: lightcoral;">Nacionalidade:</h6>
				<h5 id="preview-nacionalidade"> <small id="preview-etnia"></small></h5>
			</div>
			<div style="margin-top: 1em;">
				<h6 style="color: lightcoral;">Características:</h6>
				<h5 style="display: flex;flex-direction: column;" id="preview-caracteristicas"></h5>
			</div>
			<div style="margin-top: 1em;">
				<div style="display: flex">
					<h6 style="flex: 1;margin-right: 1.5em;color: lightcoral;">Habilidades:</h6>
					<div style="display: flex;">
						<h6 style="margin-right: 0.3em;color: lightcoral;">PH:</h6>
						<h5 id="preview-pts-h">20</h5>
					</div>
				</div>
				<div style="display: flex">
					<h5 style="display: flex;flex-direction: column;flex: 1;" id="preview-habilidades"></h5>
					<div style="display: flex;">
						<h6 style="margin-right: 0.3em;color: lightcoral;">Resist.:</h6>
						<h5 id="preview-resistencia">10</h5>
					</div>
				</div>
			</div>
			<div style="margin-top: 1em;">
				<div style="display: flex">
					<h6 style="flex: 1;margin-right: 1.5em;color: lightcoral;">Bens:</h6>
					<div style="margin-right: 2em;display: flex;">
						<h6 style="margin-right: 0.3em;color: lightcoral;">$:</h6>
						<h5 id="preview-dinheiro">1000</h5>
					</div>
				</div>
				<h5 style="display: flex;flex-direction: column;" id="preview-bens"></h5>
			</div>
		</div>


		<div id="main" style="width: 45vw;margin: auto;"></div>


		<div style="width: 45vw;
    margin: auto;
    padding: 1.5em 0 3em 0;">
			<form id="form">
				<h2 id="page-title" style="margin-top: 5%;">Criar Personagem</h2>
				<div style="margin: 1.25em 0" class="form-group" id="holder-nacionalidade">
					<div>
						<div style="display: flex;">
							<img style="flex: 0 0 25%;display: none;" id="holder-naci-icon" src="">
							<div style="flex: 1;margin: 1em 0;" id="holder-naci-flavor"></div>
						</div>
						<div style="display: flex;">
							<span style=" 
									display: flex;
								    flex-direction: column;
								    padding: 0.6em;
								    flex: 1;
								    background-color: rgba(60,180,50,0.6);
								    border-radius: 0.3em;
								    margin: 0 0.5em 0 0;" id="holder-aliados">
								
							</span>
							<span style="    
									display: flex;
								    flex-direction: column;
								    flex: 1;
								    padding: 0.6em;
								    background-color: rgba(180,60,50,0.6);
								    border-radius: 0.3em;
									margin: 0 0 0 0.5em;" id="holder-inimigos">
								
							</span>
						</div>
					</div>
				</div>
				<div style="margin: 1.25em 0" class="form-group" id="holder-etnia"></div>
				<div  class="form-group">
					<span style="display: block;width: 40%;"><img id="input-portrait" style="width: 100%;" src="/imgs/portraits/portrait0.jpg"></span>

				    <small class="form-text text-muted" id="random-portrait"><span class="clickable" onclick="RandomPortrait();">Clique aqui</span> para gerar um retrato aleatório.</small>
				    <small class="form-text text-muted" id="previous-portrait"><span class="clickable" onclick="PreviousPortrait();"><- Retrato anterior</span></small>
				</div>
				<div style="margin: 1.25em 0" class="form-group" id="holder-nome">
					<label for="input-nome">Escreva o seu nome.</label>
				    <input type="text" class="form-control" id="input-nome" placeholder="(...)">
				    <small class="form-text text-muted" id="random-name"><span class="clickable" onclick="RandomName();">Clique aqui</span> para gerar um nome aleatório.</small>
				    <small class="form-text text-muted" id="previous-name"><span class="clickable" onclick="PreviousName();"><- Nome anterior</span></small>
				</div>
				
				<div style="margin: 1.25em 0" class="form-group" id="holder-idade">

				</div>


				<div style="margin: 1.25em 0" id="caracteristicas">
					<label for="holder-caracteristicas">Escolha 3 características que melhor descrevem o seu personagem.<br><small>Estas características te ajudam a melhor interpretar o seu personagem. Tente escolher pelo menos uma característica considerada um defeito ou deficiêcia, isso tornará o seu personagem mais interresante.</small></label>
					<div id="holder-caracteristicas">
						
					</div>
				</div>
				<div style="margin: 1.25em 0" id="habilidades">
					<label for="holder-caracteristicas">Escolha as habilidades do seu personagem.<br><small>Se você está criando um personagem de maneira recomendada, escolha 1 habilidade para ser <i>Mestre</i>, 2 para ser <i>Praticante</i> e 7 para ser <i>Aprendiz</i>.</small></label>
					<div id="holder-habilidades">
						
					</div>
				</div>
				<div style="margin: 1.25em 0" id="bio">
					<label for="input-nome">Escreva um pouco sobre a sua história.<br><small>Use sua nacionalidade, etnia, características e habilidades para te ajudar a pensar na história do seu personagem.</small></label>
					<textarea class="form-control" id="input-historia" name="historia" required="true"></textarea>
				</div>
				<input id="cancelar" class="btn btn-danger my-2 my-sm-0" onclick="ClearCharacter()" value="CANCELAR">
				<input id="salvar" class="btn btn-success my-2 my-sm-0" type="submit" name="submit" value="SALVAR">
			</form>
		</div>

		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<script src="js/refs.js"></script>
		<script src="js/actions.js"></script>
		
		<script type="text/javascript">
			var bens_iniciais = [];
			var car_selecionadas = [];
			var hab_selecionadas = [];
			var char_resistencia = 10;
			var char_pts_h = 20;
			var char_din = 1000;

            var sorted_names = [];
            var cur_name = 0;
            var sorted_portraits = [];
            var cur_portrait = 0;

            var cur_selected_char = -1;

			$( document ).ready(function() {
		      	$.get("html_modules/navbar.html", function (data) {
                    $("#main").append(data);
                    var nav_active = $("#nav-create");
                    nav_active.addClass("active");

                    $( "#form-buscar" ).submit(function( e ) {
				        e.preventDefault();
				        ClearCharacter();
			        	$('#buscar-submit').attr("disabled",true);
				        $.ajax({
				            url: 'php/consulta.php',
				            type:'POST',
				            contentType: "application/x-www-form-urlencoded;charset=utf-8",
				            data:
				            {
				                nome: $('#busca').val()
				            },
				            success: function(msg)
				            {	
			        			$('#buscar-submit').attr("disabled",false);
			        			$('#form-buscar').trigger("reset");
				        		SetPreview(msg);
				        		cur_selected_char = msg.id;
				        		$("#page-title").text("Editar Personagem");
				            }               
				        });
				    });});

				$( "#form" ).submit(function( e ) {
			        e.preventDefault();
			        $('#salvar').attr("disabled",true);
			        
			        var char_habilidades = [];
			        $.each($("input[name='habilidades']:checked"), function(){
		                char_habilidades.push($(this).val());
		            });
			        
			        var char_caracteristicas = [];
			        $.each($("input[name='caracteristicas']:checked"), function(){
		                char_caracteristicas.push($(this).val());
		            });

			        var array_a = char_habilidades.toString();
			        var array_b = char_caracteristicas.toString();
			        var array_c = bens_iniciais.toString();

			        $.ajax({
			            url: 'php/cadastro.php',
			            type:'POST',
			            contentType: "application/x-www-form-urlencoded;charset=utf-8",
			            data:
			            {
			                nome: $('#input-nome').val(),
			                perfil: sorted_portraits[cur_portrait],
			                idade: $('#select-idade').val(),
			                nacionalidade: $('#select-nacionalidade').val(),
			                etnia: $('#select-etnia').val(),
			                caracteristicas: array_b,
			                resistencia: char_resistencia,
			                habilidades: array_a,
			                pts_h: char_pts_h,
			                dinheiro: char_din,
			                bens: array_c,
			                historia: $('#input-historia').val()
			            },
			            success: function(msg)
			            {	
			        		$('#salvar').attr("disabled",false);
			        		alert("Criado");

			        		ClearCharacter();
			            }               
			        });});

            	CreateCaracteristicas();
            	CreateNacionalidade();
            	CreateHabilidades();
            	CreateIdade();
            	CreateEtnia();

				AddBens("Rede");
				AddBens("Mochila");
				AddBens("Roupas comuns");

			    $("#input-nome").on("change paste keyup", function() {
				   $("#preview-nome").text($("#input-nome").val());
				});});
		</script>
	</body>
</html>