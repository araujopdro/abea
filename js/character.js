console.log(character_id);
$( document ).ready(function() {
	function GetChars(){
        $.ajax({
            url: '/php/consulta.php',
            type:'POST',
            contentType: "application/x-www-form-urlencoded;charset=utf-8",
            data:
            {
                id: character_id
            },
            success: function(msg)
            {	
        		$("#preview-nome").text(msg.nome);
        		$("#preview-idade").text(msg.idade);
        		$("#preview-historia").text(msg.historia);
                $("#preview-etnia").text("("+msg.etnia+")");
    			$("#preview-portrait").attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
        		$("#preview-nacionalidade").text(nacionalidades[msg.nacionalidade].nome);
    			var _caracteristicas = msg.caracteristicas.split(',');
        		for(var i = 0; i < 3; i++){
        			$("#car-preview-label-"+(i+1)).text(caracteristicas[_caracteristicas[i]].nome);
        		}
                var _habilidades = msg.habilidades.split(',');
                for(var j = 0; j < _habilidades.length; j++){
                    var _h = parseInt(_habilidades[j])%1000;
                    var _nivel = 0;
                    var div = document.createElement("div");
                        div.className = "col-4 d-flex flex-column"

                    for(var k = 0; k < 3; k++){
                        var parsed = parseInt(_habilidades[j]);
                        if(parsed%(3000 + (2000 * k)) < 500){
                            _nivel = k+1;
                        }
                    }

                    var span = document.createElement("span");
                        span.className = "h4 text-left user-select-none mt-4";
                        span.innerHTML = habilidades[_h].nome+" "+_nivel;

                    div.appendChild(span);
                    $("#preview-habilidades").append(div);
                }
        		$("#preview-bens").val(msg.bens);
        		$("#preview-dinheiro").val(msg.dinheiro);

        		setTimeout(function(){ $("#preview-holder").show(); $("#spinner-loading").hide()}, 2000);
        		
            }               
        });
    }
    GetChars();
});

function Strike(id){
    $("#car-preview-label-"+id).toggleClass("strike");
}

function Save(){
    var _data = {
        "id":character_id,
        "dinheiro":$("#preview-dinheiro").val(),
        "bens":$("#preview-bens").val()
    };

    $("#preview-holder").hide(); 
    $("#spinner-loading").show();
    
    console.log("Save",_data)
    $.ajax({
        url: '/php/edit_goods.php',
        type:'POST',
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        data: _data,
        success: function(msg)
        {   
            setTimeout(function(){
                window.location.href="character.php?id="+character_id;
            }, 1500);
        }               
    });
}