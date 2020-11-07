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
			var nacionalidades = [
				{
					"nome":"Português",
					"aliados":["Temiminós","Tabajaras","Tupiniquins*","Tupinambás*"],
					"inimigos":["Franceses","Tamoios","Potiguares","Caetés","Aimorés","Tupiniquins*","Tupinambás*"],
					"flavor": ""
				},
				{
					"nome":"Espanhol",
					"aliados":[],
					"inimigos":[],
					"flavor": ""
				},
				{
					"nome":"Francês",
					"aliados":["Tamoios","Potiguares"],
					"inimigos":["Portugueses","Temiminós","Tabajaras"],
					"flavor": ""
				},
				{
					"nome":"Holandês",
					"aliados":[],
					"inimigos":[],
					"flavor": ""
				},
				{
					"nome":"Tremembé",
					"aliados":["Potiguares*"],
					"inimigos":["Tabajaras","Potiguares*"],
					"flavor": "Povo tapuia de língua própria, eram um povo nômade que vivia da caça e da pesca."
				},
				{
					"nome":"Tabajara",
					"aliados":["Portugueses"],
					"inimigos":["Franceses","Potiguares","Tremembés"],
					"flavor": "Povo tupi do sertão."
				},
				{
					"nome":"Potiguar",
					"aliados":["Franceses","Tremembés*"],
					"inimigos":["Portugueses","Tabajaras","Caetés","Tremembés*"],
					"flavor": "Povo tupi, eram grandes arqueiros e guerreiros."
				},
				{
					"nome":"Caeté",
					"aliados":[],
					"inimigos":["Portugueses","Potiguares","Tupinambás","Tupinaés"],
					"flavor": ""
				},
				{
					"nome":"Tupinambá",
					"aliados":[],
					"inimigos":["Tupiniquins","Caetés","Tupinaés","Maracás"],
					"flavor": "Povo tupi que vivia no litoral e nos rios do interior. Milhares haviam sido catequizados por isso viviam perto de Salvador."
				},
				{
					"nome":"Tupinaé",
					"aliados":[],
					"inimigos":["Caetés","Tupinambás","Caetés"],
					"flavor": "Povo tupi, deslocado do litoral pelos Tupinambás, conhecidos por sua música, tangiam tambores, trombetas e um grande tubo."
				},
				{
					"nome":"Maracá",
					"aliados":[],
					"inimigos":["Tupinaés","Tupinambás"],
					"flavor": "Povo tapuia de língua própria. Gostavam de música e cantavam canções sem palavras."
				},
				{
					"nome":"Aimoré",
					"aliados":[],
					"inimigos":["Portugueses"],
					"flavor": "Povo tapuia considerado o povo mais cruel do litoral. Eram excelentes guerreiros e arqueiros, eram mais altos e robustos que os povos tupis, sendo chamados de 'gigantes'. Apesar de serem corredores velozes, não sabiam nadar."
				},
				{
					"nome":"Tupiniquim",
					"aliados":["Portugueses*"],
					"inimigos":["Tupinambás","Papanases","Portugueses*"],
					"flavor": "Povo tupi, foram os primeiros a ter contato com os portugueses."
				},
				{
					"nome":"Papaná",
					"aliados":[],
					"inimigos":["Goitacases","Tupiniquins"],
					"flavor": "Povo tapuia com alguns costumes similares aos povos tupis. Viviam da caça e da pesca"
				},
				{
					"nome":"Goitacá",
					"aliados":[],
					"inimigos":["Papanases","Tupiniquins","Portugueses*"],
					"flavor": "Povo tapuia, eram excelentes corredores e nadadores, caçavam tubarões a nado, viviam em palafitas e faziam 'comércio a distância' com os europeus, deixando a mercadoria próximo aos assentamentos, e voltando para pegar os itens deixados pelos colonos."
				},
				{
					"nome":"Tamoio",
					"aliados":["Franceses"],
					"inimigos":["Portugueses","Temiminós","Goitacases","Guaianases"],
					"flavor": "Povo tupi que conquistou o litoral séculos antes da chegada dos portugueses, contruiam casas e aldeias mais estáveis que os outros povos tupis, e alguns já tinham até se adaptado ao uso de armas de fogo."
				},
				{
					"nome":"Temiminó",
					"aliados":["Portugueses"],
					"inimigos":["Franceses","Tamoios"],
					"flavor": "Povo tupi aliado dos portugueses, seu cacique Arariboia, 'Cobra das Tempestades', fundou a cidade de Niterói em 1573."
				},
				{
					"nome":"Guaianá",
					"aliados":[],
					"inimigos":["Carijós","Tamoios"],
					"flavor": "Povo tapuia, viviam em covas na serra paulista."
				},
				{
					"nome":"Carijó",
					"aliados":[],
					"inimigos":["Guaianases"],
					"flavor": "Povo guarani que vivia em covas na serra paulista."
				},
				{
					"nome":"Guarani",
					"aliados":[],
					"inimigos":[],
					"flavor": "A palavra 'guarani' significa 'guereeiro', sendo assim, lutaram contra os portugueses e migraram para não serem escravizados."
				},
				{
					"nome":"Sudanes",
					"aliados":[],
					"inimigos":[],
					"flavor": ""
				},
				{
					"nome":"Bantos",
					"aliados":[],
					"inimigos":[],
					"flavor": ""
				},
				{
					"nome":"Guineano",
					"aliados":[],
					"inimigos":[],
					"flavor": ""
				}];
			var caracteristicas = [
				{"nome":"Adaptável","flavor":"consegue se adaptar mais facilmente a situações estranhas ou inesperadas."},
				{"nome":"Agitado","flavor":"não consegue ficar parado. Este personagem tem sempre que estar fazendo alguma coisa, sem importar o que."},
				{"nome":"Agressivo","flavor":"tende a confrontar aqueles que não compartilham sua opinião."},
				{"nome":"Amante da natureza ","flavor":"se sente muito bem na natureza, e é contra qualquer destruição dela."},
				{"nome":"Apaixonado","flavor":"se apaixona facilmente."},
				{"nome":"Ardiloso","flavor":"sente prazer em enganar outros"},
				{"nome":"Arrogante","flavor":"se acha melhor que todos os outros ao seu redor"},
				{"nome":"Atração a animais","flavor":"animais, principalmente os domésticos, sentem-se muito à vontade perto desta pessoa. Não quer dizer, porém, que a pessoa gosta deles."},
				{"nome":"Atraente","flavor":"outras pessoas acham o personagem fisicamente atraente."},
				{"nome":"Audaz","flavor":"é ousado, disposto a fazer coisas inesperadas"},
				{"nome":"Autoritário","flavor":"tenta impor sua vontade aos outros, geralmente através de alguma base de poder (política ou financeira)."},
				{"nome":"Avarento","flavor":"não há dinheiro neste mundo que satisfaça o personagem, ele sempre quer mais."},
				{"nome":"Bobo","flavor":"faz piadas sem graça e não se importa quando outros o acham ridículo"},
				{"nome":"Caloroso","flavor":"é capaz de estabelecer rapidamente familiaridade e intimidade com outros."},
				{"nome":"Carinhoso","flavor":"gosta de dar e receber carinho."},
				{"nome":"Charmoso","flavor":"o personagem, nas suas falas e maneirismos, é encantador para outros."},
				{"nome":"Colérico","flavor":"é facilmente irritável."},
				{"nome":"Compassivo","flavor":"sente compaixão pelos outros."},
				{"nome":"Competitivo","flavor":"tudo se torna uma competição para o personagem, que sempre quer mostrar sua superioridade."},
				{"nome":"Confuso","flavor":"não entende muito bem o que acontece no mundo ao seu redor"},
				{"nome":"Conquistador","flavor":"está sempre atrás de interesses românticos, sem pensar nas consequências. Após a conquista, perde interesse rapidamente."},
				{"nome":"Conservador","flavor":"evita a ousadia, sempre seguindo o caminho mais seguro."},
				{"nome":"Constante","flavor":"quem conhece bem este personagem sempre sabe o que ele vai fazer em qualquer situação. É uma pessoa previsível, sem surpresas."},
				{"nome":"Corajoso","flavor":"é capaz de enfrentar o medo e agir em circunstâncias perigosas."},
				{"nome":"Covarde","flavor":"evita o perigo a qualquer custo."},
				{"nome":"Crédulo","flavor":"é ingênuo. O personagem acredita em tudo."},
				{"nome":"Crítico","flavor":"critica quase tudo ao seu redor."},
				{"nome":"Curioso", "flavor": "quer entender o porquê de tudo."},
				{"nome":"Desconfiado", "flavor": "não confia nos outros."},
				{"nome":"Desleal", "flavor": "não tem problema nenhum em trair outros a qualquer momento."},
				{"nome":"Destemido", "flavor": "mostra uma coragem cega. Nunca sente medo e enfrenta o perigo sem pensar."},
				{"nome":"Determinado", "flavor": "é uma pessoa resolvida. Após começar um curso de a…le caminho até o fim, com um foco quase fanático."},
				{"nome":"Diplomático", "flavor": "é capaz de agir como intermediário entre outros."},
				{"nome":"Disciplinado", "flavor": "consegue controlar suas ações, mesmo quando confrontado com tentação ou preguiça."},
				{"nome":"Divertido", "flavor": "eleva o astral de outros na sua companhia."},
				{"nome":"Egocêntrico", "flavor": "só pensa em si, nunca nos outros."},
				{"nome":"Empreendedor", "flavor": "sempre procura novos negócios."},
				{"nome":"Energético", "flavor": "parece incansável quando está no meio de uma tarefa que quer terminar."},
				{"nome":"Evasivo", "flavor": "parece sempre ter alguma coisa a esconder e faz o possível para desviar a atenção dos outros."},
				{"nome":"Excêntrico", "flavor": "possui hábitos que outros acham estranhos."},
				{"nome":"Fanático", "flavor": "acredita fielmente em alguma organização ou causa e tenta levar todo mundo ao seu redor a compartilhar sua opinião."},
				{"nome":"Fanfarrão", "flavor": "sempre elogia seus próprios feitos, que podem ou não ser de verdade."},
				{"nome":"Franco", "flavor": "sempre fala o que pensa, sem levar em conta a possível reação dos outros."},
				{"nome":"Frio", "flavor": "é extremamente difícil ganhar a intimidade desta pessoa, que tende a ser distante e reservada."},
				{"nome":"Generoso", "flavor": "está sempre disposto a compartilhar o que tem."},
				{"nome":"Grosseiro", "flavor": "é uma pessoa rude. Falta educação no seu tratamento com os outros."},
				{"nome":"Guloso", "flavor": "gosta de exagerar no consumo de alguma coisa, normalmente a comida ou a bebida."},
				{"nome":"Hipocondríaco", "flavor": "sempre acha que sofre de alguma enfermidade."},
				{"nome":"Honesto", "flavor": "quase sempre fala a verdade, apesar das consequências. Mente apenas em circunstâncias excepcionais."},
				{"nome":"Imaginativo", "flavor": "tende a ter muitas ideias."},
				{"nome":"Impaciente", "flavor": "não gosta de ficar esperando em nenhuma circunstância."},
				{"nome":"Impressionável", "flavor": "é facilmente levado pelos argumentos de outros."},
				{"nome":"Impulsivo", "flavor": "age levado por seus impulsos, sem pensar muito nas consequências."},
				{"nome":"Indeciso", "flavor": "tem dificuldade em fazer escolhas."},
				{"nome":"Inflexível", "flavor": "dificilmente vai mudar de ideia. É uma pessoa teimosa, rígida."},
				{"nome":"Instável", "flavor": "é totalmente imprevisível."},
				{"nome":"Invejoso", "flavor": "nunca se satisfaz com o que tem"},
				{"nome":"Irresponsável", "flavor": "não cumpre suas responsabilidades"},
				{"nome":"Leal", "flavor": "nunca abandona um amigo."},
				{"nome":"Malicioso", "flavor": "encontra prazer em fazer maldades com outros."},
				{"nome":"Mal-humorado", "flavor": "é difícil encontrar esta pessoa de bom humor."},
				{"nome":"Manipulador", "flavor": "engana os outros para seu próprio bem."},
				{"nome":"Melancólico", "flavor": "possui ar de tristeza."},
				{"nome":"Mentiroso", "flavor": "mente de forma compulsiva."},
				{"nome":"Metódico", "flavor": "organiza a solução de todos os problemas como uma série de passos para resolver."},
				{"nome":"Modesto", "flavor": "é uma pessoa humilde, que não se gaba sobre os próprios feitos."},
				{"nome":"Nervoso", "flavor": "está sempre preocupado com alguma coisa."},
				{"nome":"Nostálgico", "flavor": "sempre fala do passado com saudades."},
				{"nome":"Otimista", "flavor": "consegue enxergar um lado bom em toda situação."},
				{"nome":"Paciente", "flavor": "consegue suportar qualquer chatice com tranquilidade."},
				{"nome":"Paranoico", "flavor": "sempre acha que alguém o está perseguindo."},
				{"nome":"Perfeccionista", "flavor": "não aceita que nenhuma tarefa esteja terminada até cuidar dos mínimos detalhes"},
				{"nome":"Perseverante", "flavor": "quando este personagem acredita que tem que fazer …o final, mesmo em caso de dificuldade ou cansaço."},
				{"nome":"Pessimista", "flavor": "só enxerga o lado ruim das situações."},
				{"nome":"Possessivo", "flavor": "é difícil fazer esta pessoa abrir mão de algum pertence, mesmo quando a posse da coisa a atrapalha."},
				{"nome":"Preguiçoso", "flavor": "raramente se sente motivado para fazer alguma coisa."},
				{"nome":"Prudente", "flavor": "busca maneiras de evitar o perigo antes de enfrentá-lo."},
				{"nome":"Rancoroso", "flavor": "não perdoa as ofensas, carregando um ódio por todos que o magoam."},
				{"nome":"Repulsivo", "flavor": "outras pessoas sentem aversão por esta pessoa, por…característica física ou pela personalidade dela."},
				{"nome":"Responsável", "flavor": "sempre cumpre seus compromissos."},
				{"nome":"Risonho", "flavor": "ri facilmente em qualquer situação."},
				{"nome":"Romântico", "flavor": "adora todos os costumes e práticas sociais relacionados ao romance e ao amor."},
				{"nome":"Sarcástico", "flavor": "adora apontar a ironia das situações."},
				{"nome":"Sensual", "flavor": "desperta o desejo físico em quem busca um par romântico."},
				{"nome":"Sociável", "flavor": "só se sente confortável na convivência com outras pessoas."},
				{"nome":"Solitário", "flavor": "prefere ficar sozinho a maior parte do tempo."},
				{"nome":"Sonhador", "flavor": "quer fazer grandes coisas na vida, muito além da realidade do momento."},
				{"nome":"Superficial", "flavor": "julga as pessoas pela aparência física e posição dentro da sociedade, não por seu caráter."},
				{"nome":"Tagarela", "flavor": "fala sem parar."},
				{"nome":"Tempestuoso", "flavor": "o temperamento desta pessoa pode mudar a qualquer momento."},
				{"nome":"Tímido", "flavor": "sente vergonha de se expor."},
				{"nome":"Trabalhador", "flavor": "não tem nenhum problema em fazer trabalhos físicos, quando consegue ajudar."},
				{"nome":"Volúvel", "flavor": "muda de ideia facilmente."}
				]
			var etnias = [
				"Branco",
				"Negro",
				"Indígena",
				"Mulato",
				"Mameluco",
				"Cafuzo"];
			var habilidades = [
				{
					"nome":"Habilidades Gerais",
					"habilidades":[
						{"nome":"Acrobacia","niveis":["rolamentos básicos e estrelinhas","saltos mortais e piruetas","andar na corda bamba e fazer rotações e saltos entre barras"]},
						{"nome":"Corrida","niveis":["correr com uma velocidade acima da média","correr distâncias maiores e em terrenos mais difíceis","correr grandes distâncias em terrenos difíceis"]},
						{"nome":"Equitação","niveis":["cavalgar animais treinados e aplicar cuidados básicos aos cavalos","cavalgar em maior velocidade ou controlar animais mais temperamentais","pular, correr e domar cavalos"]},
						{"nome":"Força Física","niveis":["carregar armas pesadas","levantar e carregar pesos acima do normal ou realizar feitos de força além do comum","realizar atos de força nos limites do corpo humano é uma façanha difícil ou lendária"]},
						{"nome":"Furtividade","niveis":["esconder-se em condições ideais","esconder-se em situações adversas","esconder-se e locomover-se de forma despercebida ao disfarçar seu som, aparência e cheiro"]},
						{"nome":"Medicina de campo","niveis":["tratar feridas básicas e remover um ponto de dano","remover dois pontos de dano","remover três pontos de dano"]},
						{"nome":"Natação","niveis":["nadar em águas calmas","nadar em águas agitadas, fazer mergulho livre e socorrer outros em perigo","nadar grandes distâncias, socorrer pessoas em circunstâncias extremas e segurar o fôlego durante vários minutos debaixo da água"]},
						{"nome":"Prestidigitação","niveis":["enganar os olhos de um espectador com ilusionismo","enganar múltiplos espectadores"," furtar objetos dos bolsos ou fazer outros feitos notáveis com as mãos, sem ninguém perceber"]}]
				},
				{
					"nome":"Habilidades Silvestres",
					"habilidades":[
						{"nome":"Armadilhas","niveis":["capturar animais pequenos","armadilhas mais complexas e escondê-las","montar armadilhas capazes de prender grandes animais ou até mesmo seres humanos"]},
						{"nome":"Canoagem","niveis":["remar e navegar uma canoa","navegar águas mais difíceis com correnteza","navegar corredeiras"]},
						{"nome":"Comida silvestre","niveis":["alimentar uma pessoa","alimentar um grupo","alimentar uma pessoa em circunstâncias adversas (como neve ou deserto) ou para alimentar um grupo sob condições diversas"]},
						{"nome":"Escalada","niveis":["escalar uma superfície fácil de pedra, uma corda ou uma árvore","escaladas maiores ou mais difíceis","escaladas em situações mais difíceis (superfícies molhadas, retas), ou, com o equipamento certo, escalar montanhas"]},
						{"nome":"Fauna silvestre","niveis":[" indicar hábitos básicos de animais comuns, como sua alimentação ou período de atividade","reconhecer um animal pelas pegadas, ou identificar um pássaro incomum por seu canto","representar um conhecimento profundo, como descobrir a última refeição e condição física de um animal pelo esterco, ou reconhecer a hierarquia entre um grupo de animais"]},
						{"nome":"Folclore","niveis":["o personagem adquire conhecimento de lendas e costumes"]},
						{"nome":"Herbalismo","niveis":["curar 1 ponto de dano em qualquer pessoa","consegue tratar febres, doenças e venenos comuns","doenças e venenos incomuns"]},
						{"nome":"Navegação terrestre","niveis":["reconhecer os pontos cardeais","encontrar um caminho quando perdido na selva","reencontrar um lugar previamente visitado"]},
						{"nome":"Rastreamento","niveis":["identificar vestígios mais óbvios de pessoas e animais"," rastrear algum animal ou pessoa sob condições ideais","rastrear pessoas e animais sob condições mais difíceis"]}]
				},
				{
					"nome":"Armas",
					"habilidades":[
						{"nome":"Armas de arremesso","descricao":["estas armas são balanceadas para o arremesso, mas também podem ser utilizadas no corpo a corpo, se o personagem tiver a habilidade certa","Lança, Faca de Arremesso, Machado de arremesso"]},

						{"nome":"Armas de corte","descricao":["armas utilizadas para golpes cortantes ou para esfaquear o oponente", "Adaga, Alfanje, Espada de Lâmina Larga*, Faca, Machete"]},

						{"nome":"Armas de fogo","descricao":["ao longo do século XVI, as armas de fogo começaram a se tornar as armas dominantes", "Arcabuz, Mosquete, Pistola"]},

						{"nome":"Armas de golpe","descricao":["armas que dependem da força física do combatente para causar dano de impacto", "Machado de guerra, Martelo de guerra, Porrete"]},

						{"nome":"Armas de haste","descricao":["armas de haste comprida", "Alabarda, Martelo de Lucerne, Pique"]},

						{"nome":"Armas de sopro","descricao":["existem vários tipos e tamanhos de zarabatanas", "Zarabatana"]},

						{"nome":"Armas mecânicas","descricao":["a besta, mesmo com sua popularidade diminuída, continuava sendo uma opção nas batalhas ao longo do século XVI", "Besta"]},

						{"nome":"Arquearia","descricao":["O arco é arma tradicional do mundo inteiro. Enquanto o século XVI viu seu uso diminuir na Europa, o arco e flecha continuou sendo a arma mais usada nas Américas, devido ao seu uso pelos povos nativos", "Arco e flecha"]},

						{"nome":"Esgrima","descricao":["estudo de luta com as espadas compridas de origem europeia", "Rapieira"]},

						{"nome":"Armas exóticas","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]}
					]
				},
				{
					"nome":"Artes Marciais",
					"habilidades":[
						{"nome":"Boxe","niveis":["dar golpes fortes com os punhos (dano 1)","ganha um ponto a mais de resistência","ganha outro ponto de resistência"]},
						{"nome":"Capoeira","niveis":["pode usar esta habilidade para atacar com os pés (dano 1) ou para esquivas durante o combate","",""]},
						{"nome":"Luta livre","niveis":["pode usar esta habilidade para tentar imobilizar oponentes de tamanho e força humanas","",""]},]
				},
				{
					"nome":"Habilidades Sociais",
					"habilidades":[
						{"nome":"Barganha","niveis":["negociar o custo de bens e serviços","negociar o custo de bens e serviços com mais facilidade","pode ser utilizada para convencer um vendedor mais “duro” ou conseguir um desconto maior"]},
						{"nome":"Oratória","niveis":["desenvolvimento do poder da voz para persuadir um grupo"]},
						{"nome":"Persuasão","niveis":["habilidade de persuadir outros, de levá-los para seu lado da discussão"]}]
				},
				{
					"nome":"Habilidades Militares e Navais",
					"habilidades":[
						{"nome":"Artilharia","niveis":["a artilharia só pode ser utilizada de pontos fixos, como fortalezas e navios. Artilharia não tem precisão para ser utilizada em pequenas batalhas. Estas peças servem para atacar grandes alvos, como navios e edifícios, ou para atirar no meio de exércitos."]},

						{"nome":"Militar","niveis":["n uma habilidade básica para quem participa de guerras, como soldados e guerreiros nativos. Inclui aprendizagem de combate em grupo, cuidado de higiene e equipamento durante campanhas, nervos para enfrentar a batalha","começa a aprender táticas militares, podendo organizar pequenos grupos em batalha","aprende estratégia: como equipar grupos, preparar linhas de suprimento e escolher terrenos para travar batalhas"]},

						{"nome":"Náutica","niveis":[" aprende a trabalhar com o vento, atar nós, limpar e cuidar de embarcações. Também consegue navegar barcos a vela pequenos","navegar rotas conhecidas, lidar com mares perigosos e enfrentar situações táticas","melhora as habilidades de navegação"]}]
				},
				{
					"nome":"Artesanatos",
					"habilidades":[

						{"nome":"Alfaiataria","descricao":["alfaiates trabalham com a confecção de roupas. Pode-se demorar um dia para criar uma roupa simples, ou um mês para as mais difíceis (após obter todos os materiais necessários)"]},

						{"nome":"Armaria","descricao":["Através do manuseio de madeira e metal, os armeiros são especialistas no reparo e fabricação de armas de fogo. Uma encomenda mais simples, como um arcabuz com fecho de mecha, pode ser fabricada em duas semanas. Uma arma com fecho de roda é um trabalho mais complexo, que deve levar dois ou três meses. Trabalhos de qualidade excepcional podem levar seis meses"]},

						{"nome":"Ferraria","descricao":["ferreiros trabalham com objetos de ferro. Um objeto simples pode ser criado em questão de horas, uma arma básica em uma semana e um objeto excepcional pode levar meses"]},

						{"nome":"Marcenaria","descricao":["marceneiros trabalham com criação de móveis e outros objetos de madeira. Peças básicas podem levar um dia para fazer, já peças decorativas, de madeiras especiais, podem levar meses"]},

						{"nome":"Ourivesaria","descricao":["o ourives faz trabalhos em prata e ouro. Trabalhos simples levam dias, e trabalhos grandes e complexos podem levar seis meses ou mais"]},

						{"nome":"Sapataria","descricao":["o sapateiro monta calçados de couro. Um par básico de calçados pode levar um dia para ser feito, um par mais elaborado pode levar semanas"]},

						{"nome":"Tanoaria","descricao":["tanoeiros confeccionam barris. A montagem de um barril leva um dia. Tanoeiros de níveis maiores são especialistas na seleção e formação da madeira, criando barris de melhor qualidade e maior durabilidade"]}]
				},
				{
					"nome":"Artes",
					"habilidades":[

						{"nome":"Culinária","descricao":["tendo os ingredientes certos, é capaz de criar pratos saborosos e até inéditos"]},

						{"nome":"Dança","descricao":["estuda as técnicas de dança"]},

						{"nome":"Desenho","descricao":["desenhista trabalha com carvão, lápis, xilogravura ou outras formas de desenho"]},

						{"nome":"Entalhe","descricao":["consegue entalhar desenhos ou esculturas de madeira"]},

						{"nome":"Escultura","descricao":["apreende esculpir obras de argila ou mármore"]},

						{"nome":"Pintura","descricao":["trabalha com pintura em aquarela ou tinta a óleo"]},

						{"nome":"Poesia","descricao":["pode trabalhar com poesia, letras ou peças"]},

						{"nome":"Teatro","descricao":["tem habilidade nas artes cênicas, ou como ator/atriz de peças ou em outras áreas, como marionetes"]},

						{"nome":"Vocal","descricao":["faz treinamento da voz para cantar"]}]
				},
				{
					"nome":"Instrumentos Musicais",
					"habilidades":[

						{"nome":"Instrumentos de corda","descricao":["alaúde, cistre"]},

						{"nome":"Instrumentos de corda e arco","descricao":["viola, viola da gamba"]},

						{"nome":"Instrumentos de embocadura","descricao":[" flauta, flauta doce, corneta, corneto, trombeta"]},

						{"nome":"Instrumentos de palheta","descricao":["baixão, charamela, fagote"]},

						{"nome":"Instrumentos de percussão","descricao":["atabaque, pandeiro, tambor"]},

						{"nome":"Instrumentos de tecla","descricao":["cravo, clavicórdio"]}]
				},
				{
					"nome":"Outros Ofícios",
					"habilidades":[
						{"nome":"Adestramento de cães","descricao":["é especialista em treinar cachorros. Nas suas viagens, pode levar um ou dois cachorros comuns"]},

						{"nome":"Administração","descricao":["administração pode lidar com cargos envolvendo organização e burocracia, e pode servir em certos cargos governamentais. Os que também adquirem a habilidade acadêmica de Direito podem trabalhar como juízes, promotores e outros cargos"]},

						{"nome":"Agricultura","descricao":["Quem estuda agricultura é o lavrador ou trabalhador rural. Esta pessoa entende as técnicas do campo: quando e como plantar e colher produtos agrícolas"]},

						{"nome":"Arquitetura","descricao":["arquitetos lidam com planejamento e supervisão de construção de prédios"]},

						{"nome":"Barbearia-cirurgia","descricao":["Além de cortar barbas e cabelo, os barbeiros-cirurgiões podiam praticar pequenas cirurgias, como lancetar, arrancar dentes, ou amputar membros. Infelizmente, um dos seus tratamentos mais comum da época, sangria com sanguessugas ou flebotomia, era pouco eficaz na cura de doenças"]},

						{"nome":"Carpintaria","descricao":["carpinteiros trabalham com construção em madeira"]},

						{"nome":"Cartografia","descricao":["cartógrafos trabalham na confecção de mapas"]},

						{"nome":"Comércio","descricao":["comerciante lida com venda e compra de bens, precisa entender de logística de transporte e armazenagem, preço com base em oferta e demanda, avaliação da qualidade dos produtos e outros assuntos relacionados"]},

						{"nome":"Condução de gado","descricao":["boieiros (antigo nome para os vaqueiros/boiadeiros) trabalham com criação, proteção e controle de gado"]},

						{"nome":"Contabilidade","descricao":[" pessoas que trabalham com contabilidade ocupam o cargo de tesoureiro"]},

						{"nome":"Engenharia","descricao":["engenheiros trabalham na projeção e supervisão na construção de projetos de engenharia civil (estradas, pontes) e mecânica (moinhos, engenhos de açúcar)"]},

						{"nome":"Escriba","descricao":["escrivães trabalham com a escrita e o arquivamento de documentos"]},

						{"nome":"Fabricação de flechas","niveis":["personagem pode gastar um dia na confecção de flechas, criando 5 flechas","personagem pode gastar um dia na confecção de flechas, criando 10 flechas","personagem pode gastar um dia na confecção de flechas, criando 20 flechas"]},

						{"nome":"Mineração","descricao":["este personagem é especialista em reconhecer depósitos de minerais e em técnicas de extração"]},

						{"nome":"Pedraria","descricao":["os pedreiros trabalham com o uso de pedra em construção"]}]
				},
				{
					"nome":"Estudos Acadêmicos",
					"habilidades":[
						{"nome":"Astronomia","descricao":["estudo dos movimentos das estrelas e planetas dentro da 'esfera celestial'"]},

						{"nome":"Direito","descricao":["estudo da filosofia e prática de lei"]},

						{"nome":"Filosofia","descricao":["estudo de lógica, razão e metafísica, a essência dos seres"]},

						{"nome":"Física","descricao":["estudo dos fenômenos naturais"]},

						{"nome":"Humanidades","descricao":["inclui as áreas de gramática, o estudo de palavras e expressão linguística, nas formas de oração e poesia, e retórica, o estudo teórico de oratória e formação de argumentos para persuasão"]},

						{"nome":"Matemática","descricao":["inclui as áreas de aritmética, o estudo de números e seus relacionamentos, e geometria, o estudo de medidas."]},

						{"nome":"Medicina","descricao":["os médicos (chamados de “físicos”) podem recomendar remédios e tratamentos para doenças e condições comuns"]},

						{"nome":"Teologia","descricao":["estudo da Bíblia e as doutrinas da Igreja"],"requisitos":["Latim2","Latim2","Latim2"]}]
				},
				{
					"nome":"Graças Divinas",
					"habilidades":[
						{"nome":"Fé","requisitos":["!Armas;!Arquearia;!Esgrima;!Fé;!Ifá","!Armas;!Arquearia;!Esgrima;!Fé;!Ifá","!Armas;!Arquearia;!Esgrima;!Fé;!Ifá"],"descricao":["Energia 5", "Energia 10","Energia 20"]},

						{"nome":"Proteção contra o mal","niveis":["Prever o mal","Defesa contra o mal","Afastar o mal"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["sente se existe algum perigo próximo, seja por causas naturais (fogo, tempestade), animais ou intenção humana. O poder não esclarece a forma exata do perigo, mas dá uma indicação da direção e o nível de perigo", "pede proteção contra ataques à sua pessoa ou contra outra pessoa escolhida (por toque). No caso de sucesso, qualquer ser (animal ou humano) estará sujeito a uma penalidade de -2 em qualquer ataque contra aquela pessoa durante o tempo da graça", "consegue mandar embora um ser maldoso ou perigoso (que seja pessoa, animal ou monstro)"]},


						{"nome":"Defesa contra magia","niveis":["Sentir magia","Proteção contra magia","Dissipar magia"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":[" pede a graça de sentir os efeitos de poderes ao redor dele", "ganha proteção pessoal contra poderes mágicos", "consegue anular algum efeito mágico"]},


						{"nome":"Profecia","niveis":["Visão divina","Sentir vida","Busca da verdade"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["para receber uma visão, o personagem tem de estar em algum momento de paz e oração, relaxado e preparado para receber esta bênção. Uma visão pode ou não aparecer, pode ter ou não ter utilidade e pode até confundir mais que ajudar", "esta graça alerta o personagem sobre o estado de uma pessoa conhecida, mesmo que aquela pessoa esteja a milhares de quilômetros de distância", "quando usada com sucesso, deixa o personagem saber sem sombra de dúvida se outra pessoa está mentindo ou não. Em casos de grande sucesso, o personagem pode até receber uma visão que mostra o que é a verdade"]},


						{"nome":"Recuperação","niveis":["Aliviar dor","Remover febre","Expulsar males"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["recupera danos em uma parte do corpo e alivia a dor das outras, deixando aquela pessoa agir de forma normal. O personagem recupera imediatamente dois pontos de dano e, se continuar com menos de quatro pontos de resistência, não sofre a perda de um nível nos seus testes de habilidade durante as próximas 24 horas","esta graça pode remover doenças e venenos listados como “comum” (como, por exemplo, o veneno da Armadeira gigante), e qualquer doença acompanhada de febre (varíola, peste, gripe e outras parecidas). Em caso de sucesso, o alvo começa a melhorar imediatamente, mas em caso de fracasso, o personagem nunca mais poderá fazer outro teste para remover aquela doença ou veneno da pessoa","Este é o maior nível de cura, e pode aliviar enfermidades gravíssimas, como tuberculose, gota, diabetes e outras. É efetivo contra doenças e venenos listados como “incomum”, enlouquecimento sobrenatural, paralisia e os poderes de fôlego Enviar doença e Passar veneno. Também funciona em situações extraordinárias de saúde, por exemplo, quando alguém engole um anzol. Em caso de sucesso, o alvo começa a melhorar imediatamente, mas em caso de fracasso, o personagem nunca mais pode fazer outro teste para curar a mesma condição daquela pessoa"]},


						{"nome":"Acontecimentos milagrosos","niveis":["Estender o clima","Estender o dia","Divina coincidência"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["esta graça segura uma chuva ou outro fenômeno natural durante até quatro horas, dando tempo para o personagem buscar abrigo","esta graça pode ser invocada durante viagens terrestres ou marinhas, fazendo que as horas do dia pareçam estender-se além do normal para o personagem e seu grupo. Assim, eles conseguem andar o dobro da distância que andariam normalmente durante aquele dia. Este poder não afeta batalhas ou interações com outros personagens, apenas deslocamentos entre lugares","em momentos de grande necessidade, o personagem pode pedir uma ajuda divina, que acaba aparecendo como uma coincidência inesperada"]},


						{"nome":"Pão de cada dia","niveis":["Restaurar alimentação","Encontrar alimentação","Multiplicar alimentação"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["pede que alguma comida ou bebida estragada volte a ser comestível","em situações de necessidade, esta graça ajuda o personagem a encontrar comida e água","em tempos de necessidade, esta graça permite que pouca comida alimente um número de pessoas além do normal"]},


						{"nome":"Benção","niveis":["Abençoar +1","Abençoar +2","Abençoar +3"],"requisitos":["Fé1","Fé2","Fé3"],"descricao":["oferece bônus de +1 nos testes do ser ou objeto abençoado","oferece bônus de +2 nos testes do ser ou objeto abençoado","oferece bônus de +3 nos testes do ser ou objeto abençoado"]}]
				},
				{
					"nome":"Poderes de Fôlego",
					"habilidades":[
						{"nome":"Fôlego","requisitos":["!Armas;!Arquearia;!Esgrima;!Fé;!Ifá","!Armas;!Arquearia;!Esgrima;!Fé;!Ifá","!Armas;!Arquearia;!Esgrima;!Fé;!Ifá"],"descricao":["Energia 5", "Energia 10","Energia 20"]},

						{"nome":"Cura","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Fôlego1","Fôlego2","Fôlego3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Defesa","niveis":["Dar sorte","Proteção","Corpo fechado"],"requisitos":["Fôlego1","Fôlego2","Fôlego3"],"descricao":["o alvo ganha +1 em todos os testes de habilidade até o próximo amanhecer. Ao contrário de outros poderes, é possível acumular mais de um bônus de Dar sorte, sob uma condição especial: o alvo pode somar até três aplicações deste poder ao mesmo tempo, contanto que receba de pajés diferentes", "O personagem ganha uma proteção que força uma penalidade de -2 ao teste de qualquer um que tente feri-lo por meio de armas, magia, doença ou veneno","no caso de sucesso, não há arma, fogo ou outro elemento que consiga ferir o personagem. Ele pode ser derrubado por um golpe, amarrado ou detido por outros meios, ou afetado por poderes mágicos, mas não sofrerá dano algum. O efeito dura três rodadas de uma batalha"]},

						{"nome":"Vida","niveis":["Dar força","Curar doença","Devolver a vida"],"requisitos":["Fôlego1","Fôlego2","Fôlego3"],"descricao":["este poder recarrega as energias do alvo, tirando qualquer sinal de cansaço e fadiga. O alvo ganha o aumento de um ponto na sua resistência máxima durante 24 horas", "este poder pode curar qualquer doença (comum ou incomum). Também serve para remover enlouquecimento causado por criaturas sobrenaturais. Em caso de fracasso, o mesmo pajé nunca mais pode tentar curar a doença da mesma pessoa de novo","o pajé pode soprar a vida de volta para dentro de um recém-morto. Este poder funciona em casos como falta de ar (estrangulação, afogamento), ataque cardíaco e perda de sangue, mas não serve em nenhum caso onde a causa da morte ainda persista no corpo"]},

						{"nome":"Dano","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Fraqueza","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Morte","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Mundo espiritual","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Tempo","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Controle da natureza","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]},
						{"nome":"Contra magia","niveis":["Aprendiz","Praticante","Mestre"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["Energia 5", "Energia 10","Energia 20"]}]
				},
				{
					"nome":"Poderes de Ifá",
					"habilidades":[
						{"nome":"Ifá","requisitos":["!Armas;!Arquearia;!Esgrima;!Fé;!Fôlego","!Armas;!Arquearia;!Esgrima;!Fé;!Fôlego","!Armas;!Arquearia;!Esgrima;!Fé;!Fôlego"],"descricao":["Energia 5", "Energia 10","Energia 20"]},


						{"nome":"Cura","niveis":["Curar danos","Curar maldades","Afastar morte"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["o uso deste poder cura dois pontos de dano do alvo. Não pode ser utilizado no mesmo alvo mais de uma vez por dia", "este poder cura os efeitos de qualquer veneno, paralisia ou doença (comum ou incomum). Também pode remover energias negativas do corpo causadas por Enfraquecer inimigo ou os poderes de Fôlego Indefeso ou Remover força","preserva o corpo de um recém-morto (menos de um minuto) por 24 horas, sendo assim possível reverter os efeitos que causaram a morte e devolver a vida. Se a causa de morte não for anulada dentro deste período, a vida do alvo torna-se irrecuperável"]},


						{"nome":"Saúde","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Detecção","niveis":["Detectar veneno","Detectar magia","Curar à distância"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Energia negativa","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Influência","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Manuseio espiritual","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Ifá1","Ifá2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Influência","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Ifá1","Fôlego2","Ifá3"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]}
					]
				},{
				"nome":"Línguas",
				"habilidades":[
					{"nome":"Português","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Latim","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Espanhol","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Francês","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Árabe","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Tupi","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Guarani","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Aimoré","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Goitacá","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Maracá","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Tremembé","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Evê","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Fon","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Ioruba","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Quicongo","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Quimbundo","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},
					{"nome":"Umbundo","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"]},	
				]}];
			
			function CreateNacionalidade(){
                $('#select-nacionalidade').remove();
                var c = document.createDocumentFragment();
                var select = document.createElement("select");
                select.id = "select-nacionalidade";

                var option = document.createElement("option");
                	option.value = "";
    				option.text = "(...)";
				select.appendChild(option);

                for(var i = 0; i < nacionalidades.length; i++){
                	var option = document.createElement("option");
	                	option.value = nacionalidades[i].nome;
	    				option.text = nacionalidades[i].nome;
    				select.appendChild(option);
                }

                c.appendChild(select);
                $('#holder-nacionalidade').append(c);

	            $('#select-nacionalidade').on('change', function() {
			  		console.log(this.value);
				});
            };

			function CreateIdade(){
                $('#select-idade').remove();
                var c = document.createDocumentFragment();
                var select = document.createElement("select");
                select.id = "select-idade";

                var option = document.createElement("option");
                	option.value = "";
    				option.text = "(...)";
				select.appendChild(option);

                for(var i = 16; i < 61; i++){
                	var option = document.createElement("option");
	                	option.value = i;
	    				option.text = i;
    				select.appendChild(option);
                }

                c.appendChild(select);
                $('#holder-idade').append(c);

	            $('#select-idade').on('change', function() {
			  		console.log(this.value);
				});
            };

			function CreateEtnia(){
                $('#select-etnia').remove();
                var c = document.createDocumentFragment();
                var select = document.createElement("select");
                select.id = "select-etnia";

                var option = document.createElement("option");
                	option.value = "";
    				option.text = "(...)";
				select.appendChild(option);

                for(var i = 0; i < etnias.length; i++){
                	var option = document.createElement("option");
	                	option.value = etnias[i];
	    				option.text = etnias[i];
    				select.appendChild(option);
                }

                c.appendChild(select);
                $('#holder-etnia').append(c);

	            $('#select-etnia').on('change', function() {
			  		console.log(this.value);
				});
            };

			function CreateCaracteristicas(){
                $('#holder-caracteristicas').empty();
                for(var i = 0; i < caracteristicas.length; i++){
	                var c = document.createDocumentFragment();
	                var div_holder = document.createElement("div");
	                div_holder.className = "caracteristicas-tooltip-holder";

	                var span_tooltip = document.createElement("span");
	                	span_tooltip.className = "caracteristicas-tooltip-text";
	                	span_tooltip.innerHTML = caracteristicas[i].flavor;

                	var checkbox = document.createElement('input');
                		checkbox.className = "input-caracteristicas";
						checkbox.id = "input-caracteristicas-"+caracteristicas[i].nome;
						checkbox.name = "caracteristicas";
						checkbox.type = "checkbox";
						checkbox.value = caracteristicas[i].nome;

					var label = document.createElement('label')
						label.htmlFor = "input-caracteristicas-"+caracteristicas[i].nome;
						label.appendChild(document.createTextNode(caracteristicas[i].nome));

					div_holder.appendChild(span_tooltip);
					div_holder.appendChild(checkbox);
					div_holder.appendChild(label);
                	c.appendChild(div_holder);

                	$('#holder-caracteristicas').append(c);
                }


	            var limit = 3;
				$('input.input-caracteristicas').on('change', function(evt) {
				   if($("input[name='caracteristicas']:checked").length > limit) {
				       this.checked = false;
				   }
				});
            };

     		//niveis
     		//niveis
     		//niveis
     		//niveis
     		//niveis
     		//niveis
     		//descricao
     		//descricao

			function CreateHabilidades(){
                $('#holder-habilidades').empty();
                for(var i = 0; i < habilidades.length; i++){
	                var c = document.createDocumentFragment();
	                var div_holder = document.createElement("div");
	                	div_holder.className = "habilidades-categoria-holder";

	                	var span_name = document.createElement("span");
	                		span_name.className = "habilidades-categoria-name";
	                		span_name.innerHTML = habilidades[i].nome;
						div_holder.appendChild(span_name);


	                	var div_niveis_holder = document.createElement("div");
	                		div_niveis_holder.className = "habilidades-niveis-holder";
                			for(var j = 0; j < habilidades[i].habilidades.length; j++){
                				var span_name_habilidade = document.createElement("span");
			                		span_name_habilidade.className = "habilidades-habilidade-name";
			                		span_name_habilidade.innerHTML = habilidades[i].habilidades[j].nome;
									div_niveis_holder.appendChild(span_name_habilidade);
                					
									for(var k = 1; k <= 3; k++){
				                		var _id = habilidades[i].habilidades[j].nome.replace(/ /g,'');
				                		var span_holder = document.createElement("span");
		                					span_holder.className = "habilidades-habilidade-nivel-holder";
							                var checkbox = document.createElement('input');
						                		checkbox.className = "input-habilidades";
												checkbox.id = "input-habilidades-"+_id+k;
												checkbox.name = "habilidades";
												checkbox.type = "checkbox";
												checkbox.value = k;

											var label = document.createElement('label')
												label.htmlFor = "input-habilidades-"+_id+k+"-label";
												label.appendChild(document.createTextNode("Nível "+k));

											span_holder.appendChild(checkbox);
											span_holder.appendChild(label);
										div_niveis_holder.appendChild(span_holder);
	                				}


				                	if(habilidades[i].habilidades[j].niveis != undefined){
		                				console.log(habilidades[i].habilidades[j].niveis);
				                	}else if(habilidades[i].habilidades[j].descricao != undefined){
		                				console.log(habilidades[i].habilidades[j].descricao);
				                	}else if(habilidades[i].habilidades[j].requisitos != undefined){
		                				console.log(habilidades[i].habilidades[j].requisitos);
				                	}
	                		}
                	div_holder.appendChild(div_niveis_holder);
                	c.appendChild(div_holder);

                	$('#holder-habilidades').append(c);
                }


	   //          var limit = 3;
				$('input.input-habilidades').on('change', function(evt) {
					var r = /\d+/;
					var number = parseInt(this.id.match(r));
					var id = this.id.replace(/[0-9]/g, '');
					number--;
				   	for(var i = 1; i <= number; i++){
				   		$("#"+id+i).prop("checked",true);
				   	}

				   // if($("input[name='caracteristicas']:checked").length > limit) {
				   //     this.checked = false;
				   // }
				});
            };

            $(document).ready(function() {
            	CreateCaracteristicas();
            	CreateNacionalidade();
            	CreateHabilidades();
            	CreateIdade();
            	CreateEtnia();
            });


		</script>
		<style type="text/css">
			html, body{
				width: 100%;
				height: 100%;
				margin: 0;
			    background-color: white;
			}

			#holder-caracteristicas, #holder-habilidades{
				display: grid;
    			grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
			}

			.caracteristicas-tooltip-holder{
			    position: relative;
			    display: block;
			    border-bottom: 1px dotted black;
			    cursor: pointer;
			}

			.caracteristicas-tooltip-holder label{
			    cursor: pointer;
			}

			.caracteristicas-tooltip-holder .caracteristicas-tooltip-text {
			    visibility: hidden;
			    background-color: black;
			    color: #fff;
			    text-align: center;
			    padding: 5px 0;
			    border-radius: 6px;
			    position: absolute;
			    transform: translateY(24px);
			    z-index: 1;
			}
			.caracteristicas-tooltip-holder:hover .caracteristicas-tooltip-text {
				visibility: visible;
			}

			.habilidades-niveis-holder{
			    display: flex;
    			flex-direction: column;
			}

		</style>
	</head>
	<body> 
		<div>
			<form id="form">
				<div>
					<div id="holder-nacionalidade">

					</div>
					<div id="flavor-nacionalidade">
						<span></span>
					</div>
				</div>

				<div>
					<div id="holder-etnia">
						
					</div>
				</div>

				<input class="input-field" id="input-nome" type="text" name="nome" required="true">
				
				<div>
					<div id="holder-idade">

					</div>
				</div>
				<div>
					<div id="holder-caracteristicas">
						
					</div>
				</div>
				<div>
					<div id="holder-habilidades">
						
					</div>
				</div>

				<input class="input-field" id="input-historia" type="text" name="historia" required="true">
				<input class="submit" type="submit" name="submit" value="ENTRAR">
			</form>
		</div>
	</body>
</html>