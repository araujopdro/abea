<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ABEA - Criador de Pesonagem</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8" /> 
		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
		<link rel="shortcut icon" type="image/png" href="imgs/favicon.png"/>

		<script type="text/javascript">
			$( document ).ready(function() {
				$( "#form" ).submit(function( e ) {
			        e.preventDefault();
			        $('.submit').attr("disabled","disabled");
			        $.ajax({
			            url: 'cadastro.php',
			            type:'POST',
			            contentType: "application/x-www-form-urlencoded;charset=utf-8",
			            data:
			            {
			                nome: $('#input-nome').val(),
			                idade: $('#input-idade').val(),
			                nacionalidade: $('#input-nacionalidade').val(),
			                etnia: $('#input-etnia').val(),
			                caracteristicas: $('#input-caracteristicas').val(),
			                resistencia: $('#input-resistencia').val(),
			                habilidades: $('#input-habilidades').val(),
			                historia: $('#input-historia').val()
			            },
			            success: function(msg)
			            {	
			        		alert("Criado");
			            }               
			        });
			    });
			});
		</script>
		<style type="text/css">
			html, body{
				width: 100%;
				height: 100%;
				margin: 0;
			    background-color: black;
			}
		</style>
	</head>
	<body> 
		<div>
			<form id="form">
				<input class="input-field" id="input-nome" type="text" name="nome" required="true">
				<input class="input-field" id="input-idade" type="number" name="idade" required="true">
				<input class="input-field" id="input-nacionalidade" type="text" name="nacionalidade" required="true">
				<input class="input-field" id="input-etnia" type="text" name="etnia" required="true">
				<input class="input-field" id="input-caracteristicas" type="text" name="caracteristicas" required="true">
				<input class="input-field" id="input-resistencia" type="text" name="resistencia" required="true">
				<input class="input-field" id="input-habilidades" type="text" name="habilidades" required="true">
				<input class="input-field" id="input-historia" type="text" name="historia" required="true">
				<input class="submit" type="submit" name="submit" value="ENTRAR">
			</form>
		</div>
	</body>
</html>