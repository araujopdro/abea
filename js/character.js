$( document ).ready(function() {
	function GetChars(){
        console.log("POST");
        $.ajax({
            url: '/php/consulta.php',
            type:'POST',
            contentType: "application/x-www-form-urlencoded;charset=utf-8",
            data:
            {
                id: 20
            },
            success: function(msg)
            {	
        		console.log(msg)
        		$("#preview-nome").text(msg.nome);
        		$("#preview-idade").text(msg.idade);
        		$("#preview-historia").text(msg.historia);
    			$("#preview-portrait").attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
        		$("#preview-nacionalidade").text(msg.nacionalidade);
    			var _caracteristicas = msg.caracteristicas.split(',');
        		for(var i = 0; i < 3; i++){
        			$("#car-preview-label-"+(i+1)).text(_caracteristicas[i]);
        		}
        		$("#preview-bens").val(msg.bens);
        		$("#preview-dinheiro").val(msg.dinheiro);

        		setTimeout(function(){ $("#preview-holder").show(); $("#spinner-loading").hide()}, 2000);
        		
            }               
        });
    }
    GetChars();
});