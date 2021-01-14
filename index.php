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
  		<link rel="stylesheet" href="css/index.css">
	</head>
	<body> 
		<div class="container-fluid">
			<div class="row" id="main">
			</div>
			<div class="row" id="preview-holder"></div>
		</div>
		
		<div style="width: 100%;position: fixed;top: 0;" id="header">
			
		</div>

		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>

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
				$.get("html_modules/char_preview.html", function (data) {
                    $("#preview-holder").append(data);
                });


		      	$.get("html_modules/navbar.html", function (data) {
                    $("#main").append(data);
                    var nav_active = $("#nav-home");
                    nav_active.addClass("active");

                    $( "#form-buscar" ).submit(function( e ) {
				        e.preventDefault();
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
				            	ClearPreview();
			        			$('#buscar-submit').attr("disabled",false);
			        			$('#form-buscar').trigger("reset");
				        		SetPreview(msg);
				        		cur_selected_char = msg.id;
				            }                
				        });
				    });
                });
			});
		</script>
	</body>
</html>