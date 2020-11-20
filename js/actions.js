function CreateNacionalidade(){
    $('#select-nacionalidade').remove();
    
    $('#holder-inimigos').hide();
    $('#holder-aliados').hide();

    var c = document.createDocumentFragment();
    var select = document.createElement("select");
    select.className = "form-control"
    select.id = "select-nacionalidade";

    var option = document.createElement("option");
        option.value = "";
        option.text = "(...)";
        option.selected = true;
        option.disabled = true;
    select.appendChild(option);

    for(var i = 0; i < nacionalidades.length; i++){
        var option = document.createElement("option");
            option.value = nacionalidades[i].nome;
            option.text = nacionalidades[i].nome;
        select.appendChild(option);
    }

    var label = document.createElement("label");
        label.htmlFor = "select-nacionalidade";
        label.appendChild(document.createTextNode("Escolha a sua nacionalidade."));

    var small = document.createElement("small");
        small.appendChild(document.createTextNode("Sua nacionalidade não afeta suas habilidades diretamente."));
        small.className = "form-text text-muted";


    c.appendChild(label);
    c.appendChild(select);
    c.appendChild(small);
    $('#holder-nacionalidade').prepend(c);

    $('#select-nacionalidade').on('change', function() {
        $("#random-name").show();
        var selected_nacionalidade = $(this).val();
        $("#preview-nacionalidade").text(selected_nacionalidade);
        if($('#select-etnia').val() != ""){
            var smallet = document.createElement("small");
                smallet.innerHTML = "  ("+$('#select-etnia').val()+")";
                smallet.id = "preview-etnia";
            $("#preview-nacionalidade").append(smallet);
        }


        var selected_nacionalidade_id = -1;
        for(var i = 0; i < nacionalidades.length; i++){
            if(selected_nacionalidade == nacionalidades[i].nome){
                selected_nacionalidade_id = i;
                break;
            }
        }
        
        $('#holder-naci-flavor').empty();
        $('#holder-inimigos').empty();
        $('#holder-aliados').empty();

        $('#holder-inimigos').hide();
        $('#holder-aliados').hide();
        
        var spant = document.createElement("span");
            spant.className = "nacionalidade-aliados-title";
            spant.innerHTML = "Aliados";
            $('#holder-aliados').append(spant);

        var spantb = document.createElement("span");
            spantb.className = "nacionalidade-inimigos-title";
            spantb.innerHTML = "Inimigos";
            $('#holder-inimigos').append(spantb);

        for(var j = 0; j < nacionalidades[selected_nacionalidade_id].aliados.length; j++){
            var span = document.createElement("span");
                span.className = "nacionalidade-aliados";
                span.innerHTML = nacionalidades[selected_nacionalidade_id].aliados[j];
            $('#holder-aliados').append(span);
            $('#holder-aliados').slideDown();
        }
        for(var j = 0; j < nacionalidades[selected_nacionalidade_id].inimigos.length; j++){

            var span = document.createElement("span");
                span.className = "nacionalidade-inimigos";
                span.innerHTML = nacionalidades[selected_nacionalidade_id].inimigos[j];
            $('#holder-inimigos').append(span);
            $('#holder-inimigos').slideDown();
        }
        var span_title = document.createElement("div");
            span_title.className = "nacionalidade-flavor-title";
            span_title.innerHTML = nacionalidades[selected_nacionalidade_id].nome;

        var span = document.createElement("div");
            span.className = "nacionalidade-flavor";
            span.innerHTML = nacionalidades[selected_nacionalidade_id].flavor;
        $('#holder-naci-flavor').append(span_title);
        $('#holder-naci-flavor').append(span);
        $('#holder-naci-icon').attr("src", nacionalidades[selected_nacionalidade_id].icon);

    });};

function CreateIdade(){
    $('#select-idade').remove();
    var c = document.createDocumentFragment();
    var select = document.createElement("select");
    select.className = "form-control";
    select.id = "select-idade";

    var option = document.createElement("option");
        option.value = "";
        option.text = "(...)";
        option.selected = true;
        option.disabled = true;
    select.appendChild(option);

    for(var i = 16; i < 61; i++){
        var option = document.createElement("option");
            option.value = i;
            var ph;
            if(i<=17){
                //ph = " | ph:15";
                ph = "";
            }else if(i > 17 && i <= 22){
                //ph = " | ph:20 - Recomendado";
                ph = " - Recomendado";
            }else if(i > 22 && i <= 27){
                //ph = " | ph:25";
                ph = "";
            }else if(i > 27 && i <= 32){
                //ph = " | ph:30";
                ph = "";
            }else if(i > 32 && i <= 37){
                //ph = " | ph:35";
                ph = "";
            }else if(i > 38){
                //ph = " | ph:40";
                ph = "";
            }
            option.text = i+"  "+ph;
        select.appendChild(option);
    }

    var label = document.createElement("label");
        label.htmlFor = "select-idade";
        label.appendChild(document.createTextNode("Escolha a sua idade."));

    var small = document.createElement("small");
        small.appendChild(document.createTextNode("Sua idade determina o número pontos de habilidade que você receberá."));
        small.className = "form-text text-muted";

    c.appendChild(label);
    c.appendChild(select);
    c.appendChild(small);
    $('#holder-idade').append(c);

    $('#select-idade').on('change', function() {
        $("#preview-idade").text($(this).val());
    });};

function CreateEtnia(){
    $('#select-etnia').remove();
    var c = document.createDocumentFragment();
    var select = document.createElement("select");
    select.className = "form-control";
    select.id = "select-etnia";

    var option = document.createElement("option");
        option.value = "";
        option.text = "(...)";
        option.selected = true;
        option.disabled = true;
    select.appendChild(option);

    for(var i = 0; i < etnias.length; i++){
        var option = document.createElement("option");
            option.value = etnias[i];
            option.text = etnias[i];
        select.appendChild(option);
    }

    var label = document.createElement("label");
        label.htmlFor = "select-etnia";
        label.appendChild(document.createTextNode("Escolha a sua etnia."));

    var small = document.createElement("small");
        small.appendChild(document.createTextNode("Sua etnia não afeta suas habilidades diretamente."));
        small.className = "form-text text-muted";


    c.appendChild(label);
    c.appendChild(select);
    c.appendChild(small);
    $('#holder-etnia').append(c);

    $('#select-etnia').on('change', function() {
        $("#preview-etnia").remove();
        var smallet = document.createElement("small");
            smallet.innerHTML = "  ("+this.value+")";
            smallet.id = "preview-etnia";
        $("#preview-nacionalidade").append(smallet);
    });};

function CreateCaracteristicas(){
    $('#holder-caracteristicas').empty();
    for(var i = 0; i < caracteristicas.length; i++){
        var c = document.createDocumentFragment();
        var div_holder = document.createElement("div");
        div_holder.className = "caracteristicas-holder";
        div_holder.id = "caracteristicas-"+caracteristicas[i].nome.replace(/ /g,'-');

        var small = document.createElement("small");
            small.className = "caracteristicas-text";
            small.innerHTML = caracteristicas[i].flavor;

        var checkbox = document.createElement('input');
            checkbox.className = "input-caracteristicas";
            checkbox.id = caracteristicas[i].nome.replace(/ /g,'-');
            checkbox.name = "caracteristicas";
            checkbox.type = "checkbox";
            checkbox.value = caracteristicas[i].nome;

        var label = document.createElement('label')
            label.htmlFor = "input-caracteristicas-"+caracteristicas[i].nome.replace(/ /g,'-');
            label.appendChild(document.createTextNode(caracteristicas[i].nome));
            label.className = "label-caracteristicas";

        div_holder.appendChild(checkbox);
        div_holder.appendChild(label);
        div_holder.appendChild(small);
        c.appendChild(div_holder);

        $('#holder-caracteristicas').append(c);
    }

    $('input.input-caracteristicas').on('change', function(evt) {
        ChangeCaracteristicas(this);
    });};

function ChangeCaracteristicas(_el){
    console.log(_el);
    var limit = 3;
    if(!_el.checked){
        console.log("not checked")
        PreviewCaracteristica(-1, "#preview-caracteristica-"+_el.id, null);
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
        console.log("limit")
    }

    if(_el.checked){
        console.log("checked")
        car_selecionadas.push(_el.id);
        PreviewCaracteristica(1, "#preview-caracteristica-"+_el.id, _el.value);
        if($("input[name='caracteristicas']:checked").length == limit){
            $(".caracteristicas-holder:not(#caracteristicas-"+car_selecionadas[0]+",#caracteristicas-"+car_selecionadas[1]+",#caracteristicas-"+car_selecionadas[2]+")").slideUp('fast');
        }
    }};

function CreateHabilidades(){
    $('#holder-habilidades').empty();
    for(var i = 0; i < habilidades.length; i++){
        var c = document.createDocumentFragment();
        var div_holder = document.createElement("div");
            div_holder.className = "habilidades-categoria-holder";

            var span_name = document.createElement("span");
                span_name.className = "habilidades-categoria-name";
                span_name.id = habilidades[i].nome.replace(/ /g,'-');
                span_name.innerHTML = habilidades[i].nome;
                span_name.onclick = function(){ToggleCategoria(this)};
            div_holder.appendChild(span_name);

            var div_habilidade_holder = document.createElement("div");
                div_habilidade_holder.className = "habilidades-habilidade-holder";
                div_habilidade_holder.id = "habilidades-categoria-holder-"+habilidades[i].nome.replace(/ /g,'-');
                for(var j = 0; j < habilidades[i].habilidades.length; j++){
                    var _id = habilidades[i].habilidades[j].nome.replace(/ /g,'-');

                    var span_name_habilidade = document.createElement("span");
                        span_name_habilidade.className = "habilidades-habilidade-name";
                        span_name_habilidade.id = _id;
                        span_name_habilidade.innerHTML = habilidades[i].habilidades[j].nome;
                        span_name_habilidade.onclick = function(){ToggleNiveis(this)};
                        div_habilidade_holder.appendChild(span_name_habilidade);
                        

                        var div_niveis_holder = document.createElement("div");
                            div_niveis_holder.className = "habilidades-niveis-holder";
                            div_niveis_holder.id = _id+"-niveis";


                        var small = document.createElement("small");
                            small.className = "habilidades-descricao";

                        if(habilidades[i].habilidades[j].descricao != undefined){
                            if(habilidades[i].habilidades[j].descricao.length == 1){
                                small.innerHTML = habilidades[i].habilidades[j].descricao[0];
                                div_niveis_holder.appendChild(small);
                            }
                            else if(habilidades[i].habilidades[j].descricao.length == 2){
                                small.innerHTML = habilidades[i].habilidades[j].descricao[0]+" <small><i><strong>"+habilidades[i].habilidades[j].descricao[1]+"</i></strong></small>";
                                div_niveis_holder.appendChild(small);
                            }
                        }
                        for(var k = 1; k <= 3; k++){
                            var span_holder = document.createElement("span");
                                span_holder.className = "habilidades-habilidade-nivel-holder";
                                var checkbox = document.createElement('input');
                                    if(habilidades[i].habilidades[j].requisitos != undefined && habilidades[i].habilidades[j].requisitos[k-1] != null){
                                        checkbox.className = "input-habilidades";
                                        var requisitos_list = habilidades[i].habilidades[j].requisitos[k-1].split(";");
                                        for(var z = 0; z < requisitos_list.length; z++){
                                            checkbox.classList.add("requisito-"+requisitos_list[z]);
                                            //span_name_habilidade.classList.add("requisito-"+requisitos_list[z]+"-title");
                                        }

                                        checkbox.disabled = true;
                                    }else{
                                        checkbox.className = "input-habilidades";
                                    }

                                    // if(habilidades[i].habilidades[j].proibicoes != undefined && habilidades[i].habilidades[j].proibicoes[k-1] != null){
                                    //  var proibicoes_list = habilidades[i].habilidades[j].proibicoes[k-1].split(";");
                                    //  for(var z = 0; z < proibicoes_list.length; z++){
                                    //      checkbox.classList.add("not-requisito-"+proibicoes_list[z]);
                                    //  }
                                    // }

                                    // if(habilidades[i].habilidades[j].proibicoes != undefined && habilidades[i].habilidades[j].proibicoes[k-1] != null){
                                    //  var proibicoes_list = habilidades[i].habilidades[j].proibicoes[k-1].split(";");
                                    //  for(var z = 0; z < proibicoes_list.length; z++){
                                    //      checkbox.classList.add("proibicoes-"+proibicoes_list[z]);
                                    //  }
                                    // }

                                    checkbox.id = _id+k;
                                    checkbox.name = "habilidades";
                                    checkbox.type = "checkbox";
                                    checkbox.value = _id+k;

                                var label = document.createElement('label')
                                    label.className = "label-habilidade";
                                    label.htmlFor = "input-habilidades-"+_id+k+"-label";
                                    if(k == 1){
                                        label.appendChild(document.createTextNode("Aprendiz ("+k+")"));
                                        var small_custo = document.createElement("small");
                                            small_custo.innerHTML = " - custo PH: 1 - bônus em testes: +3";
                                            small_custo.className = "small-custo";
                                        label.appendChild(small_custo);
                                    }else if(k == 2){
                                        label.appendChild(document.createTextNode("Praticante ("+k+")"));
                                        var small_custo = document.createElement("small");
                                            small_custo.innerHTML = " - custo PH: 2 - bônus em testes: +6";
                                            small_custo.className = "small-custo";
                                        label.appendChild(small_custo);
                                    }else{
                                        label.appendChild(document.createTextNode("Mestre ("+k+")"));
                                        var small_custo = document.createElement("small");
                                            small_custo.innerHTML = " - custo PH: 4 - bônus em testes: +9";
                                            small_custo.className = "small-custo";
                                        label.appendChild(small_custo);
                                    }

                                var small_nivel = document.createElement("small");
                                    small_nivel.className = "habilidades-nivel";
                                if(habilidades[i].habilidades[j].niveis != undefined){
                                    small_nivel.innerHTML = habilidades[i].habilidades[j].niveis[k-1];
                                }

                                var small_descricao = document.createElement("small");
                                    small_descricao.className = "habilidades-descricao3";
                                if(habilidades[i].habilidades[j].descricao != undefined && habilidades[i].habilidades[j].descricao.length == 3){
                                    small_descricao.innerHTML = habilidades[i].habilidades[j].descricao[k-1];
                                }

                                span_holder.appendChild(checkbox);
                                span_holder.appendChild(label);
                                span_holder.appendChild(small_nivel);
                                span_holder.appendChild(small_descricao);
                            div_niveis_holder.appendChild(span_holder);
                        }
                        div_habilidade_holder.appendChild(div_niveis_holder);
                }

        div_holder.appendChild(div_habilidade_holder);
        c.appendChild(div_holder);
        $('#holder-habilidades').append(c);
        $(".habilidades-niveis-holder").slideUp('fast');
        $(".habilidades-habilidade-holder").slideUp('fast');
    }


    //var limit = 20;
    $('input.input-habilidades').on('change', function(evt) {
        ChangeHabilidade(this.id);
    });};   
function ChangeHabilidade(hab){
    var r = /\d+/;
    var number = parseInt(hab.match(r));
    var id = hab.replace(/[0-9]/g, '');

    PreviewHabilidade(-1, ".preview-habilidade-"+id);
    
    var el = $("#"+hab);
    if(el[0].checked){
        DiminuirPtsH(number);
        AumentarResistencia(id,number);
        
        $("#"+id).addClass("after"+number);
        
        var s = id.replace("-"," ");
        
        PreviewHabilidade(1, "preview-habilidade-"+id, s+" "+number)

        var _hab = [];
        $.each($("input[name='habilidades']:checked"), function(){
            _hab.push($(this).val());
        });
        hab_selecionadas = _hab;

        $(".requisito-"+id+number).each(function() {
            var class_list = $(this).attr("class");
            var class_arr = class_list.split(/\s+/);
                class_arr.shift();
            var rqlist = [];
            for(var i = 0; i < hab_selecionadas.length; i++){
                rqlist.push("requisito-"+hab_selecionadas[i]);
            }

            if(class_arr.every(r => rqlist.includes(r))){
                $(this).prop("disabled", false);
            }else{
                $(this).prop("disabled", true);
            }
        });
        $("#"+id).addClass("bold");
    }else{
        AumentarPtsH(number);
        DiminuirResistencia(id,number);

        var c = document.createDocumentFragment();
        var span = document.createElement("span");
            span.className = "preview-habilidade-"+id;
            var a = number - 1;
            var d = id.replace('-',' ');
            span.innerHTML = d+" "+a;
            c.appendChild(span);

        if(number == 1){
            $("#"+id).removeClass("bold");
            $("#"+id).removeClass("after1");
            $("#"+id).removeClass("after2");
            $("#"+id).removeClass("after3");

            var c = hab_selecionadas.indexOf(id+3);
            if(c >= 0){
                $(".requisito-"+id+3).prop("checked", false);
                $(".requisito-"+id+3).prop("disabled", true);
                $(".requisito-"+id+3).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after3");
                });
            }
            var b = hab_selecionadas.indexOf(id+2);
            if(b >= 0){
                $(".requisito-"+id+2).prop("checked", false);
                $(".requisito-"+id+2).prop("disabled", true);
                    $(".requisito-"+id+2).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after2");
                });
            }
            var a = hab_selecionadas.indexOf(id+1);
            if(a >= 0){
                $(".requisito-"+id+1).prop("checked", false);
                $(".requisito-"+id+1).prop("disabled", true);
                    $(".requisito-"+id+1).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after1");
                    $("#"+_id).removeClass("bold");
                });
                }
            var _hab = [];
            $.each($("input[name='habilidades']:checked"), function(){
                _hab.push($(this).val());
            });
            hab_selecionadas = _hab;
        }else if(number == 2){
            $("#preview-habilidades").append(c);
            $("#"+id).removeClass("after1");
            $("#"+id).removeClass("after2");
            $("#"+id).removeClass("after3");
            $("#"+id).addClass("after1");

            var c = hab_selecionadas.indexOf(id+3);
            if(c >= 0){
                $(".requisito-"+id+3).prop("checked", false);
                $(".requisito-"+id+3).prop("disabled", true);
                    $(".requisito-"+id+3).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after3");
                });
            }
            var b = hab_selecionadas.indexOf(id+2);
            if(b >= 0){
                $(".requisito-"+id+2).prop("checked", false);
                $(".requisito-"+id+2).prop("disabled", true);
                    $(".requisito-"+id+2).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after2");
                });
            }

            var _hab = [];
            $.each($("input[name='habilidades']:checked"), function(){
                _hab.push($(this).val());
            });
            hab_selecionadas = _hab;
        }else if(number == 3){
            $("#preview-habilidades").append(c);
            $("#"+id).removeClass("after1");
            $("#"+id).removeClass("after2");
            $("#"+id).removeClass("after3");
            $("#"+id).addClass("after2");

            var c = hab_selecionadas.indexOf(id+3);
            if(c >= 0){
                $(".requisito-"+id+3).prop("checked", false);
                $(".requisito-"+id+3).prop("disabled", true);
                    $(".requisito-"+id+3).each(function() {
                    var _r = /\d+/;
                    var _number = parseInt(this.id.match(_r));
                    var _id = this.id.replace(/[0-9]/g, '');
                    $("#"+_id).removeClass("after3");
                });
            }

            var _hab = [];
            $.each($("input[name='habilidades']:checked"), function(){
                _hab.push($(this).val());
            });
            hab_selecionadas = _hab;
        }
        number++;
        for(var i = number; i <= 3; i++){
            $("#"+id+i).prop("checked",false);
        }
    };};

function AddBens(obj){
    bens_iniciais.push(obj);
    var c = document.createDocumentFragment();
    var span = document.createElement("span");
        span.innerHTML = obj;
        c.appendChild(span);
    $("#preview-bens").append(span);};

function ToggleCategoria(el){
	$("#habilidades-categoria-holder-"+el.id.replace(/ /g,'-')).slideToggle('fast', function() {
	    if ($(this).is(':visible'))
	        $(this).css('display','flex');
	});}

function ToggleNiveis(el){
	$("#"+el.id+"-niveis").slideToggle('fast', function() {
	    if ($(this).is(':visible'))
	        $(this).css('display','flex');
	});}


function RandomName(){
	for(var i = 0; i < nacionalidades.length; i++){
		if($('#select-nacionalidade').val() == nacionalidades[i].nome){
			var a = randomInteger(0, nacionalidades[i].nomes.length-1);
			var b = randomInteger(0, nacionalidades[i].sobrenomes.length-1);
			sorted_names.push(nacionalidades[i].nomes[a]+" "+nacionalidades[i].sobrenomes[b]);
			$('#input-nome').val(nacionalidades[i].nomes[a]+" "+nacionalidades[i].sobrenomes[b]);
			$('#preview-nome').text(nacionalidades[i].nomes[a]+" "+nacionalidades[i].sobrenomes[b]);
			cur_name = sorted_names.length-1;
		}
	}
	if(sorted_names.length >= 2){
		$("#previous-name").show();
	}}

function PreviousName(){
	if(cur_name - 1 < 0){
		$("#previous-name").hide();
		return;
	}
	cur_name--;
	$('#input-nome').val(sorted_names[cur_name]);
	$('#preview-nome').text(sorted_names[cur_name]);};



function RandomPortrait(){

	var a = randomInteger(0, 124);
	
	sorted_portraits.push(a);
	$('#input-portrait').attr("src", "/imgs/portraits/portrait"+a+".jpg");
	$('#preview-portrait').attr("src", "/imgs/portraits/portrait"+a+".jpg");
	cur_portrait = sorted_portraits.length-1;

	if(sorted_portraits.length >= 2){
		$("#previous-portrait").show();
	}};

function PreviousPortrait(){
	if(cur_portrait - 1 < 0){
		$("#previous-portrait").hide();
		return;
	}
	cur_portrait--;
	$('#input-portrait').attr("src", "/imgs/portraits/portrait"+sorted_portraits[cur_portrait]+".jpg");
	$('#preview-portrait').attr("src", "/imgs/portraits/portrait"+sorted_portraits[cur_portrait]+".jpg");}

function AumentarPtsH(_number){
	if(_number == 3){
		char_pts_h += 4;
	}else{
		char_pts_h += _number;
	}
  	$("#preview-pts-h").text(char_pts_h.toString());}

function DiminuirPtsH(_number){
	if(_number == 3){
		char_pts_h -= 4;
	}else{
		char_pts_h -= _number;
	}
  	$("#preview-pts-h").text(char_pts_h.toString());}

function AumentarResistencia(_id, _number){
	var i = hab_resistencia.indexOf(_id);
	if(_number == 3 && i > -1){
		char_resistencia++;
	  	$("#preview-resistencia").text(char_resistencia.toString());
	}}

function DiminuirResistencia(_id, _number){
	var i = hab_resistencia.indexOf(_id);
	if(_number == 3 && i > -1){
		char_resistencia--;
	  	$("#preview-resistencia").text(char_resistencia.toString());
	}}

function randomInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;}

function TitleCriar(){
    $("#page-title").text("Criar Personagem");
}

function PreviewCaracteristica(_i, _id, _value){
    if(_i > 0){
        var c = document.createDocumentFragment();
        var span = document.createElement("span");
            span.innerHTML = _value;
            span.id = _id;
            c.appendChild(span);
        $("#preview-caracteristicas").append(c);
    }else{
        $(_id).remove();
    }
}

function PreviewHabilidade(_i, _id, _value){
    if(_i > 0){
        var c = document.createDocumentFragment();
        var span = document.createElement("span");
            span.innerHTML = _value;
            span.className = _id;
            c.appendChild(span);
        $("#preview-habilidades").append(c);
    }else{
        $(_id).remove();
    }
}

function SetEdit(msg){
    $('#input-nome').val(msg.nome);
    sorted_portraits = [msg.perfil];
    $('#input-portrait').attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
    $('#select-idade').val(msg.idade);
    $('#select-nacionalidade').val(msg.nacionalidade);
    $('#select-etnia').val(msg.etnia);

    var array_a = msg.habilidades.split(',');
    hab_selecionadas = array_a;
    for(var i = 0; i < array_a.length; i++){
        var el_h = $('#'+array_a[i]);
        $(el_h[0]).attr('checked',true);
        ChangeHabilidade(array_a[i]);
    }

    var array_b = msg.caracteristicas.split(',');
    for(var i = 0; i < array_b.length; i++){
        $("#"+array_b[i]).attr('checked',true);
        var mds = $("#"+array_b[i])[0];
        mds.checked = true;
        ChangeCaracteristicas(mds);
    }

    $('#input-historia').val(msg.historia);
}

function SetPreview(msg){
    $("#preview-nome").text(msg.nome);
    $('#preview-portrait').attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
    $("#preview-idade").text(msg.idade);
    $("#preview-nacionalidade").text(msg.nacionalidade);
    var smallet = document.createElement("small");
        smallet.innerHTML = "  ("+msg.etnia+")";
        smallet.id = "preview-etnia";
    $("#preview-nacionalidade").append(smallet);

    var re = /[^0-9](?=[0-9])/g; 
    var array_b = msg.caracteristicas.split(',');
    for(var i = 0; i < array_b.length; i++){
        var result = array_b[i].replace("-", " ").replace(re, '$& ');
        PreviewCaracteristica(1, "preview-caracteristica-"+array_b[i], result);
    }

    var array_a = msg.habilidades.split(',');
    for(var i = 0; i < array_a.length; i++){
        var value = array_a[i].replace('-',' ').replace(re, '$& ');
        var id = array_a[i].replace(/[0-9]/g, '');
            
        PreviewHabilidade(-1, ".preview-habilidade-"+id);
        PreviewHabilidade(1, "preview-habilidade-"+id, value);
    }
    
    char_resistencia = msg.resistencia;
    $("#preview-resistencia").text(char_resistencia.toString());

    //char_pts_h = msg.pts_h;
    //$("#preview-pts-h").text(char_pts_h.toString());

    char_din = msg.dinheiro;
    $("#preview-dinheiro").text(char_din.toString());

    var array_c = msg.bens.split(',');
    $("#preview-bens").empty();
    bens_iniciais = [];
    for(var i = 0; i < array_c.length; i++){
        AddBens(array_c[i])
    }};

function ClearVars(){
    bens_iniciais = [];
    car_selecionadas = [];
    hab_selecionadas = [];
    char_resistencia = 10;
    char_pts_h = 20;
    char_din = 1000;

    sorted_names = [];
    cur_name = 0;
    sorted_portraits = [];
    cur_portrait = 0;

    cur_selected_char = -1;
}

function ClearPreview(){
    $("#preview-nome").text("");
    $("#preview-idade").text("");
    $('#input-portrait').attr("src", "/imgs/portraits/portrait0.jpg");
    $('#preview-portrait').attr("src", "/imgs/portraits/portrait0.jpg");
    $("#preview-nacionalidade").empty();
    $("#preview-caracteristicas").empty();
    $("#preview-habilidades").empty();
    $("#preview-pts-h").text(char_pts_h.toString());
    $("#preview-resistencia").text(char_resistencia.toString());
    $("#preview-bens").empty();
    $("#preview-dinheiro").text(char_din.toString());
}

function ClearEdit(){
    $("#select-nacionalidade").val("");
    $("#select-etnia").val("");
    $("#input-nome").val("");
    $("#select-idade").val("");
    $('input[name="caracteristicas"]').each(function() {
        this.checked = false;
    });
    $(".caracteristicas-holder").slideDown('fast');
    $('input[name="habilidades"]').each(function() {
        if(this.checked){
            this.checked = false;
            var id = this.id.replace(/[0-9]/g, '');
            $("#"+id).removeClass("bold after1 after2 after3");
            $(".requisito-"+this.id).prop("disabled", true);
        }
    });
    $("#input-historia").val("");
    AddBens("Rede");
    AddBens("Mochila");
    AddBens("Roupas comuns");
}