console.log(character_id);
$( document ).ready(function() {
	if(character_id){
        GetChars();
    };
    CreateCaracteristicas();
});
var car_selecionadas = [];
function CreateCaracteristicas(){
    $('#holder-caracteristicas').empty();
    for(var i = 0; i < caracteristicas.length; i++){
        var c = document.createDocumentFragment();
        var div_holder = document.createElement("div");
        div_holder.className = "caracteristicas-holder";
        div_holder.id = "caracteristicas-"+i;

        var small = document.createElement("small");
            small.className = "caracteristicas-text ubuntu";
            small.innerHTML = caracteristicas[i].flavor;

        var checkbox = document.createElement('input');
            checkbox.className = "input-caracteristicas";
            checkbox.id = i;
            checkbox.name = "caracteristicas";
            checkbox.type = "checkbox";
            checkbox.value = caracteristicas[i].nome;

        var label = document.createElement('label')
            label.htmlFor = "input-caracteristicas-"+caracteristicas[i].nome.replace(/ /g,'-');
            label.appendChild(document.createTextNode(caracteristicas[i].nome));
            label.className = "label-caracteristicas h4";

        div_holder.appendChild(checkbox);
        div_holder.appendChild(label);
        div_holder.appendChild(small);
        c.appendChild(div_holder);

        $('#holder-caracteristicas').append(c);
    }

    $('input.input-caracteristicas').on('change', function(evt) {
        ChangeCaracteristicas(this);
    });
};

function ChangeCaracteristicas(_el){
    console.log(_el);
    var limit = 3;
    if(!_el.checked){
        console.log("not checked")

        if($("input[name='caracteristicas']:checked").length < limit){
            $(".caracteristicas-holder").slideDown('fast');
        }
        for(var i = 0; i < car_selecionadas.length; i++){
            if(_el.id == car_selecionadas[i]){
                    car_selecionadas.splice(i, 1);
            }
        }
    }

    if($("input[name='caracteristicas']:checked").length > limit) {
        _el.checked = false;
    }

    if(_el.checked){
        console.log("checked")
        car_selecionadas.push(_el.id);
        if($("input[name='caracteristicas']:checked").length == limit){
            $(".caracteristicas-holder:not(#caracteristicas-"+car_selecionadas[0]+",#caracteristicas-"+car_selecionadas[1]+",#caracteristicas-"+car_selecionadas[2]+")").slideUp('fast');
        }
    }
};




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
            console.log(msg)
            $("#crud-nome").val(msg.nome);
            $("#preview-idade").val(msg.idade);
            $("#crud-historia").val(msg.historia);
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