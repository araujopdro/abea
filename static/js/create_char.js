//  let character = {
//   "name":"",
//   "age":16,
//   "nationality":"",
//   "history":"",
//   "feats":[],
//   "skills":[],
//   "skills_lvl":[],
//   "base_energy":0,
//   "sp":20,
//   "money":1000,
//   "items":""
// }

let character = {
	"age": "21",
	"base_energy": 0,
	"feats": "14,154,384,504",
	"history": "paçoca téstê",
	"items": "roupas simples, asdoknadkn",
	"money": 1000,
	"name": "Eduardo García",
	"nationality": 4,
	"skills": "174,184,514,504,294,404,44,164,1084,1104",
	"skills_lvl": "2,1,1,1,1,1,3,2,1,1",
	"sp": 0
}

let ethnicities = {{ ethnicities|tojson|safe }};
$( document ).ready(function() {
  var limit = 4;
  $('input.chckbx').change(function() {
    if(this.checked){
      $(this).parent().addClass("selected-feat");
    }else{
      $(this).parent().removeClass("selected-feat");
        $(".feat-holder").show();
    }

    if($("input[name='feat-checkbox']:checked").length == limit){
        $(".feat-holder:not(.selected-feat)").hide();
    }
  });

  $('#text-items').change(function() {
		character.items = $('#text-items').val();
  });

  $("#idade-slider").change(function(){
  	$("#hist-idade").text("idade: "+this.value);
    character.age = this.value;
    if(this.value <= 22) {
    	$("#idade-warning").hide()
    } else{
    	$("#idade-warning").show()
    }
  });

  $("#etnia-select").change(function(){
		let idx = ethnicities.findIndex(x => x.title == this.value);
		$("#et-flavor-holder").show();
		$("#et-flavor").text(ethnicities[idx].flavor);
  	$("#hist-etnia").text("etnia: "+this.value);
  });

  $("#hist-hist-textarea").keyup(function(){
  	character.history = $("#hist-hist-textarea").val();
  	$("#hist-hist").html("histórico: <i class='ms-2 fas fa-check-circle'></i>");
  });
});

function getRandomInt(max) {
		return Math.floor(Math.random() * max);
}

function ShowCharacter(){
	//$("exampleModalLabel").html(character.name+"<br><span><small>"+character.age+"</span></small>");
	console.log(character)
}

function SaveCharacter() {
	// character.feats = character.feats.join(",");
	// character.skills = character.skills.join(",");
	// character.skills_lvl = character.skills_lvl.join(",");
	$.ajax({
      url: '/create_char',
      type:'POST',
      contentType: "application/json;charset=utf-8",
      data: JSON.stringify(character),
      success: function(msg)
      {   
        console.log(msg)
      }               
  });
}

let nations = {{ nations|tojson|safe }};
function SetName(){
	let idx = nations.findIndex(x => x.id == character.nationality);

  let nomes = nations[idx].first_names.split(",");
  let sobre = nations[idx].last_names.split(",");

  let rnd_nome = getRandomInt(nomes.length)
  let rnd_sobre  = getRandomInt(sobre.length);

  character.name = nomes[rnd_nome] + " " + sobre[rnd_sobre];

  $("#hist-nome").text("nome: "+character.name);
  $("#nome").val(nomes[rnd_nome]);
  $("#sobre").val(sobre[rnd_sobre]);
}

function NivelSkill(skill_id, new_nvl){
	let idx = character.skills.indexOf(skill_id);
  let cur_nvl = character.skills_lvl[idx];

  if(new_nvl != cur_nvl){
  	switch(cur_nvl){
  		case 1:
  				character.sp += 1;
  			break
  		case 2:
  				character.sp += 3;
  			break
  		case 3:
  				character.sp += 7;
  			break
  	}

  	switch(new_nvl){
  		case 1:
  				character.sp -= 1;
  			break
  		case 2:
  				character.sp -= 3;
  			break
  		case 3:
  				character.sp -= 7;
  			break
  	}
  	character.skills_lvl[idx] = new_nvl;
  }
  $("#sp-title").text("ph: "+character.sp);
}

function SelectCaracteristicas(id){
  if(character.feats.includes(id)){
      character.feats.splice(character.feats.indexOf(id), 1)
  }else{
      character.feats.push(id)
  }
}

function ToggleHab() {
  $("#dist-toggle").toggleText('Distribuir Pontos', 'Selecionar Habilidades');
  $("#dist-holder").toggleClass("d-flex").toggleClass("d-none");
  $("#accordion_flush2").toggle();
  $("#sp-title").text("ph: "+character.sp);
}

function SelectNation(_nation){
	$("#hist-nome").text("nome:");
	$("#hist-nome").prop('disabled', false);

	$("#nasc-flavor-title").empty();
	$("#nasc-flavor-title").append("") "<span class='flag-icon flag-icon-squared me-2 flag-icon-'"+_nation.flag+"'></span>"+_nation.title
	$("#nasc-flavor-holder").show();
	$("#nacs-flavor").text(_nation.flavor);

	let nation_class = "flag-icon flag-icon-squared ms-2 me-1 flag-icon-"+_nation.flag
	$("#hist-nac").html("nacionalidade:<span class='"+nation_class+"'></span>"+_nation.title);
  character.nationality = _nation.id;
}

function SelectHab(nvl_id, pvw_id, skill_id) {
  $("#hab-info").hide();

  $("#dist-warning").hide();
  $("#dist-toggle").prop("disabled", false);

  $('#'+nvl_id).toggle();
  $('#'+pvw_id).toggle();
  $('#hab-points-'+skill_id).toggleClass("d-flex").toggleClass("d-none");


  if(character.skills.includes(skill_id)){
  		let idx = character.skills.indexOf(skill_id);

      NivelSkill(skill_id, 0);

      character.skills.splice(idx, 1);
      character.skills_lvl.splice(idx, 1);
  }else{
      character.skills.push(skill_id);
      character.skills_lvl.push(0);
  }
}

function Navigate(i){
	switch(i){
		case 'geral':
			$(".arw-icon").addClass("inactive").removeClass("active");
			$(".menu-icon").addClass("inactive").removeClass("active");

			$("#menu-icon-geral").removeClass("inactive").addClass("active");

			$(".page-holder").hide();
			$("#visaogeral-holder").show();
			break;
		case 'hist':
			$(".arw-icon").addClass("inactive").removeClass("active");
			$(".menu-icon").addClass("inactive").removeClass("active");

			$("#menu-icon-geral").removeClass("inactive").addClass("active");

			$("#arw-icon-historia").removeClass("inactive").addClass("active");
			$("#menu-icon-historia").removeClass("inactive").addClass("active");

			$(".page-holder").hide();
			$("#historia-holder").show();
			break;
		case 'car':
			$(".arw-icon").addClass("inactive").removeClass("active");
			$(".menu-icon").addClass("inactive").removeClass("active");

			$("#menu-icon-geral").removeClass("inactive").addClass("active");

			$("#arw-icon-historia").removeClass("inactive").addClass("active");
			$("#menu-icon-historia").removeClass("inactive").addClass("active");

			$("#arw-icon-caracteristicas").removeClass("inactive").addClass("active");
			$("#menu-icon-caracteristicas").removeClass("inactive").addClass("active");

			$(".page-holder").hide();
			$("#feats-holder").show();
			break;
		case 'hab':
			$(".arw-icon").addClass("inactive").removeClass("active");
			$(".menu-icon").addClass("inactive").removeClass("active");

			$("#menu-icon-geral").removeClass("inactive").addClass("active");

			$("#arw-icon-historia").removeClass("inactive").addClass("active");
			$("#menu-icon-historia").removeClass("inactive").addClass("active");

			$("#arw-icon-caracteristicas").removeClass("inactive").addClass("active");
			$("#menu-icon-caracteristicas").removeClass("inactive").addClass("active");
			
			$("#arw-icon-habilidades").removeClass("inactive").addClass("active");
			$("#menu-icon-habilidades").removeClass("inactive").addClass("active");

			$(".page-holder").hide();
			$("#hab-holder").show();
			break;
		case 'bens':
			$(".arw-icon").addClass("active").removeClass("inactive");
			$(".menu-icon").addClass("active").removeClass("inactive");
			
			$(".page-holder").hide();
			$("#bens-holder").show();
			break;
	}
}