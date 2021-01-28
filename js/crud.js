console.log(character_id);
$( document ).ready(function() {
	if(character_id){
        GetChars();
    }else{
        setTimeout(function(){ $("#preview-holder").show(); $("#spinner-loading").hide()}, 2000);
    };
    CreateCaracteristicas();
    CreateNacionalidade();
    HabilidadesModal();
    ProfileModal();

    $("#crud-idade").change(function() {
        CalculatePH(this.value);
    });
});


var selected_profile = 0;
var car_selecionadas = [];
var hab_selecionadas = [];

var hab_selecionadas_total = 20;
var hab_selecionadas_cost = 0;

function CalculatePH(_val){
    var i = parseInt(_val);
    console.log(i)
    if(i<=17){
        hab_selecionadas_total = 15;
    }else if(i > 17 && i <= 22){
        hab_selecionadas_total = 20;
    }else if(i > 22 && i <= 27){
        hab_selecionadas_total = 25;
    }else if(i > 27 && i <= 32){
        hab_selecionadas_total = 30;
    }else if(i > 32 && i <= 37){
        hab_selecionadas_total = 35;
    }else if(i > 38){
        hab_selecionadas_total = 40;
    }
    $("#crud-ph-total").text(hab_selecionadas_total);
    CalculateCost();
}

function CalculateCost(){
    hab_selecionadas_cost = 0;
    var cost = 0;
    for(var i = 0; i < hab_selecionadas.length; i++){
        var _cost = parseInt(hab_selecionadas[i]);

        for(var j = 0; j < 3; j++){
            if(_cost%(3000 + (2000 * j)) < 500){
                cost = j+1;
                if(cost == 3){
                    cost = 4;
                }
                hab_selecionadas_cost += cost;
            }
        }
    }
    $("#crud-ph").text(hab_selecionadas_cost);
    if(hab_selecionadas_cost > hab_selecionadas_total){
        $("#crud-ph").addClass("red");
    }else{
        $("#crud-ph").removeClass("red");
    }
}

function HabilidadesModal(_habilidades){
    $("#habilidades-modal").empty();
    var _title = "";
    for(var i = 0; i < habilidades.length; i++){
        if(_title != habilidades[i].categoria){
            _title = habilidades[i].categoria;
            var _c = document.createDocumentFragment();
            var _div_holder = document.createElement("div");
            _div_holder.className = "habilidades-title col-12 my-4 mb-1 h4";
            _div_holder.innerHTML = _title;
            _c.appendChild(_div_holder);
            $("#habilidades-modal").append(_c);
        }

        var c = document.createDocumentFragment();
        var div_holder = document.createElement("div");
        div_holder.className = "habilidades-holder-modal col-4 d-flex align-items-baseline justify-content-start";
        div_holder.id = "habilidades-"+i;

        var checkbox = document.createElement('input');
            checkbox.className = "input-habilidades pointer";
            checkbox.id = "input-habilidades-"+i;
            checkbox.name = "habilidades";
            checkbox.type = "checkbox";
            checkbox.value = i;


        (function(i) {
            checkbox.onchange = function() {
                ChangeHabilidades(this.value, this.checked);
            }
        })(i);

        var label = document.createElement('label');
            label.appendChild(document.createTextNode(habilidades[i].nome));
            label.className = "label-habilidades ubuntu ml-2";

        div_holder.appendChild(checkbox);
        div_holder.appendChild(label);
        c.appendChild(div_holder);

        $("#habilidades-modal").append(c);
    }

    if(_habilidades){
        PreviewHabilidades(_habilidades);
    }
}

function ChangeHabilidades(id, bool){
    if(bool){
        hab_selecionadas.push(3000+parseInt(id));
    }else{
        var idx = -1;
        for(var i = 0; i < hab_selecionadas.length; i++){
            if(id == hab_selecionadas[i]%1000){
                idx = i;
            }
        }
        hab_selecionadas.splice(idx, 1);
    }
}

function SaveHabilidades(){
    $('#crud-modal-hab').modal('hide');
    PreviewHabilidades(hab_selecionadas);
    CalculateCost();
}

function PreviewHabilidades(_habilidades){
    $('#crud-habilidades').empty();
    var _c = document.createDocumentFragment();
    var _div_holder = document.createElement("div");
    _div_holder.className = "habilidades-holder-preview d-flex flex-row-reverse";

    for(var a = 3; a > 0; a--){
        var _span = document.createElement('span');
            _span.className = "mx-2";
            _span.innerHTML = "."+a;
        _div_holder.appendChild(_span);
    }

    _c.appendChild(_div_holder);
    $("#crud-habilidades").append(_c);

    for(var j = 0; j < _habilidades.length; j++){
        var k = parseInt(_habilidades[j])%1000;

        $("#input-habilidades-"+(k)).prop("checked", true);

        var c = document.createDocumentFragment();
        var div_holder = document.createElement("div");
        div_holder.className = "habilidades-holder-preview d-flex justify-content-between";

        var span = document.createElement("h4");
        span.className = "habilidades-preview-text col-9";
        span.innerHTML = habilidades[k].nome;

        var d = document.createDocumentFragment();
        var d_holder = document.createElement("div");
        div_holder.className = "d-flex justify-content-between";

        var dif = 3000;
        for(var m = 0; m < 3; m++){
            var checkbox = document.createElement('input');
                checkbox.className = "input-habilidades-"+habilidades[k].nome+" pointer mx-2";
                checkbox.id = "input-habilidades-"+habilidades[k].nome+"-"+m;
                checkbox.name = habilidades[k].nome;
                checkbox.type = "radio";
                checkbox.value = dif+k;
                if(_habilidades[j] == dif+k){
                    checkbox.checked = true;
                }

                (function(m) {
                    checkbox.onchange = function() {
                        var idx = -1;
                        for(var j = 0; j < hab_selecionadas.length; j++){
                            if(this.value%1000 == hab_selecionadas[j]%1000){
                                idx = j;
                            }
                        }
                        hab_selecionadas[idx] = this.value;
                        CalculateCost();
                    }
                })(m);

            d_holder.appendChild(checkbox);
            dif += 2000;
        }

        div_holder.appendChild(span);
        div_holder.appendChild(d_holder);
        c.appendChild(div_holder);

        $("#crud-habilidades").append(c);
    }
}


function ProfileModal(){
    for(var i = 1; i < 126; i++){
        var c = document.createDocumentFragment();
        var span = document.createElement("span");
        span.id = "profile-modal-"+i;
        span.className = "profile-modal";

        (function(i) {
            span.onclick = function() {
                selected_profile = i;
                $("#crud-portrait").attr("src","/imgs/portraits/portrait"+selected_profile+".jpg");
                $('#crud-modal-profile').modal('hide');
            }
        })(i);


        var img = document.createElement("img");
            img.src = "/imgs/portraits/portrait"+i+".jpg";

        span.appendChild(img);
        c.appendChild(span);

        $("#profiles-modal").append(c);
    }
}

function CreateNacionalidade(){
    var option = document.createElement("option");
        option.value = "";
        option.text = "(...)";
        option.selected = true;
        option.disabled = true;
    $("#crud-nacionalidade").append(option);

    for(var i = 0; i < nacionalidades.length; i++){
        var option = document.createElement("option");
            option.value = i;
            option.text = nacionalidades[i].nome;
        $("#crud-nacionalidade").append(option);
    }
}

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
            checkbox.id = "input-caracteristica-"+i;
            checkbox.name = "caracteristicas";
            checkbox.type = "checkbox";
            checkbox.value = caracteristicas[i].nome;

        (function(i) {
            checkbox.onchange = function() {
                ChangeCaracteristicas(i);
            }
        })(i);

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
};

function ChangeCaracteristicas(_id){
    var limit = 3;

    var _el = $("#input-caracteristica-"+_id)[0];
    if(!_el.checked){
        if($("input[name='caracteristicas']:checked").length < limit){
            $(".caracteristicas-holder").show();
        }
        for(var i = 0; i < car_selecionadas.length; i++){
            if(_id == car_selecionadas[i]){
                car_selecionadas.splice(i, 1);
            }
        }
    }

    if(_el.checked){
        car_selecionadas.push(_id.toString());
        if($("input[name='caracteristicas']:checked").length == limit){
            $(".caracteristicas-holder:not(#caracteristicas-"
                +car_selecionadas[0]
                +",#caracteristicas-"
                +car_selecionadas[1]
                +",#caracteristicas-"
                +car_selecionadas[2]+")").hide();
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
            $("#crud-nome").val(msg.nome);
            $("#crud-idade").val(msg.idade);
            CalculatePH(msg.idade);
            $("#crud-historia").val(msg.historia);
            $("#crud-portrait").attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
            $("#crud-nacionalidade").val(msg.nacionalidade);
            var _caracteristicas = msg.caracteristicas.split(',');
            for(var i = 0; i < _caracteristicas.length; i++){
                $("#input-caracteristica-"+_caracteristicas[i]).prop("checked", true);
                ChangeCaracteristicas(_caracteristicas[i]);
            }

            HabilidadesModal(msg.habilidades.split(','));
            hab_selecionadas = msg.habilidades.split(',');
            CalculateCost();

            $("#preview-bens").val(msg.bens);
            $("#preview-dinheiro").val(msg.dinheiro);

            setTimeout(function(){ $("#preview-holder").show(); $("#spinner-loading").hide()}, 2000);
        }               
    });
}