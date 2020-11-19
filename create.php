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
		<script src="https://kit.fontawesome.com/3f043c6910.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
		<link rel="shortcut icon" type="image/png" href="imgs/favicon.png"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<script type="text/javascript">


			var nacionalidades = [
				{
					"nome":"Português",
					"aliados":["Temiminós","Tabajaras","Tupiniquins*","Tupinambás*"],
					"inimigos":["Franceses","Tamoios","Potiguares","Caetés","Aimorés","Tupiniquins*","Tupinambás*"],
					"nomes":[
						"Álvaro",
						"Álvares",
						"Antão",
						"António",
						"Antunes",
						"Bento",
						"Bentes",
						"Bermudo",
						"Bermudes",
						"Bernardo",
						"Bernardes",
						"Diogo",
						"Dias",
						"Diegues",
						"Domingos",
						"Domingues",
						"Egas",
						"Viegas",
						"Henrique",
						"Henriques",
						"Estêvão",
						"Esteves",
						"Fernão",
						"Fernandes",
						"García",
						"Geraldo",
						"Godím",
						"Gomes",
						"Guedes",
						"Gonçalo",
						"Gonçalves",
						"João ",
						"Lopes",
						"Marcos",
						"Marques",
						"Martinho",
						"Martin",
						"Mendes",
						"Moninho",
						"Moniz",
						"Nuno",
						"Nunes",
						"Paes",
						"Pero",
						"Peres",
						"Ramiro",
						"Ramires",
						"Rodrigo",
						"Rodrigues",
						"Sancho",
						"Sanches",
						"Simão",
						"Simões",
						"Soeiro",
						"Soares",
						"Telo",
						"Teles",
						"Vasco",
						"Vasques",
						"Vaz",
						"Vímara",
						"Vimaranes",
						"Guimarães",
						"Maria",
						"Leonor",
						"Matilde",
						"Beatriz",
						"Ana",
						"Mariana",
						"Madalena",
						"Catarina",
						"Carolina",
						"Francisca"
						],
					"sobrenomes":[
						"da Gama",
						"Vaz",
						"de Caminha",
						"Álvares",
						"Guimarães",
						"Bragança",
						"Braga",
						"Coimbra",
						"Sampaio",
						"Albuquerque",
						"Castro",
						"da Veiga",
						"Silva",
						"Santos",
						"Ferreira",
						"Pereira",
						"Oliveira",
						"Costa",
						"Rodrigues",
						"Martins",
						"Jesus",
						"Sousa",
						"Fernandes",
						"Gonçalves",
						"Gomes",
						"Lopes",
						"Marques",
						"Alves",
						"Almeida",
						"Ribeiro",
						"Pinto",
						"Carvalho",
						"Teixeira",
						"Moreira",
						"Correia",
						"Mendes",
						"Nunes",
						],
					"flavor": "De longe o povo europeu mais comum no Brasil na época, os portugueses vinham originalmente para usufruir da riqueza da terra nova e depois para colonizá-la.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Espanhol",
					"aliados":[],
					"inimigos":[],
					"nomes":[
						"Miguel",
						"Eduardo",
						"Isabel",
						"Lucia",
						"Paloma",
						"Rúbia",
						"Laura",
						"Anita",
						"Alba",
						"Tiago",
						"Diego",
						"Lorenzo",
						"Murilo",
						"Diogo",
						"Pablo",
						"Ruan",
						"Juan",
						"Iago",
						"Yago",
						"Santiago",
						"Cristian"],
					"sobrenomes":[
						"García",
						"Lopez",
						"Perez",
						"Gonzalez",
						"Sánchez",
						"Martinez",
						"Rodriguez",
						"Fernandez",
						"Gomez",
						"Martin",
						"Hernandez",
						"Ruiz",
						"Diaz",
						"Alvarez",
						"Jimenez",
						"Moreno",
						"Muñoz",
						"Alonso",
						"Gutierrez",
						"Romero",
						"Sanz",
						"Torres",
						"Suarez",
						"Ramirez",
						"Vázquez",
						"Navarro",
						"Dominguez",
						"Ramos",
						"Castro",
						"Gil",
						"Flores",
						"Morales",
						"Blanco",
						"Serrano",
						"Molina",
						"Ortiz"],
					"flavor": "Muitos espanhóis vinham para as terras brasileiras para colonizar as terras cedidas no Tratado de Tordesilhas.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Francês",
					"aliados":["Tamoios","Potiguares"],
					"inimigos":["Portugueses","Temiminós","Tabajaras"],
					"nomes":["Ames", "Aramis", "Arkansas", "Artois", "Astin", "Aubergine", "Aure", "Avignon", "Bardot", "Beaumont", "Bellamy", "Bern", "Berne", "Bijou", "Bijoux", "Blaise", "Blanchard", "Bouvier", "Burgundy", "Cabernet", "Cabriole", "Calloway", "Candide", "Cartier", "Chambray", "Chamonix", "Chandelier", "Chapin", "Charnell", "Chaucer", "Chevis", "Chiffon", "Ciel", "Clef", "Coeur", "Coligny", "Corbeau", "Corneille", "Coty", "Cress", "Currier", "Dandelion", "Danon", "Darcy", "Davignon", "Delaine", "Delaware", "De", "Leon", "Demi", "Denim", "Dessert", "Deveraux", "Devereaux", "Dior", "Dominique", "Elie", "Erté", "Harlequin", "Hilaire", "Izod", "Jacquard", "Jermaine", "Jocelin", "Jourdain", "Jules", "Jumeaux", "Juneau", "Lafayette", "Laramie", "Larue", "Lave", "Leal", "Le", "Blanc", "Levron", "Lieux", "Lisle", "Maine", "Marquette", "Marvel", "Michon", "Mirage", "Monet", "Noe", "Noel", "Noelle", "Normandy", "Nouvel", "Opaque", "Orane", "Oriel", "Orleans", "Patrice", "Pendant", "Petit", "Quincy", "Raine", "Remi", "Remy", "Renate", "Renaud", "Reverie", "Rigny", "Rousseau", "Sequin", "Severin", "Sidney", "Sigourney", "Suede", "Sy", "Sydnee", "Sydney", "Tananarive", "Tavin", "Theoren", "Toille", "Triage", "Turquoise", "Urbain", "Velour", "Vermont", "Vionnet", "Vogue", "Wisconsin"],
					"sobrenomes":["Abadie", "Allard", "Archambeau", "Auclair", "Barbier", "Baudelaire", "Beausoleil", "Berger", "Blanchet", "Boucher", "Brun", "Carpentier", "Cartier", "Charbonnier", "Chatelain", "Chevrolet", "De", "De", "Donadieu", "Dupont", "Durand", "Farrow", "Forestier", "Fortin", "Gagneux", "Garcon", "Guillaume", "Laferriere", "Laflamme", "Lagrange", "Lambert", "Langlois", "Lavigne", "Lefebre", "Lemaitre", "Leroux", "Le", "Martel", "Moulin", "Picard", "Pomeroy", "Proulx", "Richelieu", "Sartre", "Serrurier", "Thibaut", "Travers", "Vaillancourt", "Verne", "Violette"],

					"flavor": "Os franceses vinham para o Brasil em busca de pau-brasil e outras riquezas e eram uma presença quase constante na costa durante o século XVII. Eles formavam alianças com vários povos do litoral e travavam batalhas com os portugueses em águas e terras brasileiras.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Holandês",
					"aliados":[],
					"inimigos":[],
					"nomes":["Aechte", "Agnes", "Neese", "Alijt", "Baertge", "Baet", "Beatrijs", "Belye", "Belij", "Beverielle", "Claerkin", "Eva", "Geertruyt", "Trude", "Truyde", "Heyl", "Heiltgen", "Heyltgen", "Hilleken", "Jutte", "Katheline", "Kathrijn", "Katherijn", "Lijsbet", "Lijskin", "Lijss", "Lysken", "Machtelt", "Mechtelt", "Marij", "Mariss", "Marisse", "Margriete", "Griet", "Mergriet", "Stincken", "Wendelmoet", "Yolente", "Adam", "Adolf", "Adriaen", "Aelbert", "Aellaert", "Aerge", "Aernt", "Ambrosius81", "Amelonc", "Andries", "Ane", "Ansen", "Anthonis", "Aucker", "Barcke", "Bastyaen", "Beeck", "Berijs", "Bernt", "Bertelmeeus", "Bertout", "Block", "Boomkin", "Botghert", "Bouden", "Brantgen", "Brouwer", "Bruyn", "Bruynplas", "Bruys", "Bryn", "Calfgen", "Calis", "Kasijn", "Kerstiaen", "Charles", "Christoferus", "Kiggher", "Claes", "Clement", "Cnoep", "Coen", "Coenraet", "Colaert", "Coman", "Corijn", "Cornelis", "Craen", "Cryn", "Daem", "Dammas", "Adolf", "Danckaert", "Danel", "Delis", "Denijs", "Dirc", "Dixus", "Doede", "Doen", "Egbert", "Elaut", "Elias", "Elrick", "Elsken", "Emont", "Engbrecht", "Engel", "Ernst", "Evert", "Ewout", "Eymbert", "Garbrant", "Geen", "Geerbrant", "Geerlof", "Gelefas", "Gillis", "Genefaes", "Gheerlich", "Gherijt", "Ghijs", "Ghijsbrecht", "Giele", "Gijpken", "Gobel", "Gocken", "Godevaert", "Goedelt", "Goedert", "Goedkin", "Goedscalc", "Goerijs", "Goessel", "Goessen", "Goeswijn", "Goetgen", "Griffoen", "Gruter", "Hack", "Hairrijck", "Hamelt", "Hanssem", "Harbert", "Hartgeer", "Hase", "Hasman", "Hector", "Heynrick", "Hellinc", "Helmich", "Hemken", "Hemtgen", "Herman", "Hert", "Hertman", "Heyman", "Heynbrecht", "Hillebrant", "Hoven", "Hubert", "Huge", "Jacob", "Jacos", "Jan", "Jennin", "Joest", "Jonckhan", "Jorden", "Jortgen", "Yde", "Yewen", "Ysbrant", "Ysgerman", "Lambert", "Lambrecht", "Lanx", "Laurens", "Laussem", "Leenaert", "Lemmelroy", "Lens", "Lievin", "Lijbrecht", "Lijn", "Lob", "Lodewijck", "Lonijs", "Loy", "Louys", "Lubbert", "Lubbrecht", "Lucas", "Luytgen", "Manuel", "Maer", "Maes", "Marcelis", "Marcus", "Marten", "Matheeus", "Medaert", "Melcior", "Melis", "Messel", "Mette", "Meyner", "Michiel", "Moer", "Moes", "Mol", "Monic", "Nanne", "Nijs", "Noyken", "Noys", "Ogier", "Olivier", "Oste", "Ot", "Ouwels", "Paess", "Philip", "Pieter", "Pilgrim", "Pleskin", "Pouwels", "Querijn", "Reiner", "Reyer", "Reymbout", "Reymhout", "Reyns", "Rijc", "Rijckaert", "Rijckouts", "Robbert", "Roelof", "Roess", "Rover", "Rutger", "Sander", "Sarijs", "Scoutij", "Seyn", "Silvere", "Solin", "Spierinck", "Splinter", "Stans", "Steesken", "Steven", "Stoffel", "Stroys", "Stul", "Symon", "Tevin", "Thomas", "Thielma", "Thilmar", "Tybes", "Tyman", "Tygerma", "Tymer", "Faen", "Faes", "Valc", "Vastaer", "Veltgen", "Verbanu", "Vijncken", "Floer", "Florens", "Florijs", "Volkert", "Volpert", "Volquijn", "Vop", "Fock", "Forys", "Fraen", "Vrachtelt", "Vrederic", "Froyt", "Walraven", "Wemer", "Wensselijn", "Werbout", "Werner", "Wessel", "Wesser", "Weyncken", "Weyt", "Wiggert", "Wijck", "Wijnckel", "Wijnken", "Wijnrick", "Willeboort", "Willem", "Windermit", "Witte", "Wolf", "Wolfaert", "Wollebrant", "Wouter", "Zebert", "Zeel", "Zegher", "Zijbert", "Zijbout", "Zweer"],
					"sobrenomes":["Adolf", "Adriaen", "Aelbert", "Aelbertssoen", "Aelbrechtsz", "Alairtsz", "Aernt", "Aerntssoen", "Aerntsz", "Aerts", "Aertsz", "Airntsz", "Aellert", "Allertssoen", "Andriessoen", "Driesz", "Thuenisz", "Baak", "Bakensz", "Bandcker", "Barc", "Baricxsoen", "Baerntsz", "Beerntsz", "Bernisz", "Berntsz", "Berijssoen", "Meesz", "Meeusz", "Bertoutssoen", "Berwoutssoen", "Blocx", "Borgherssoen", "Borkel", "Boud", "Boudinsz", "Bruysz", "Celensoen", "Claes", "Claessoen", "Claesz", "Clais", "Claiszoon", "Clayszoon", "Coenraetssoen", "Cornelijs", "Cornelisz", "Corvincxz", "Costensz", "Daemsz", "Dammesz", "Danckairtsz", "Daneelszoon", "Dirck", "Dirckz", "Dircxz", "Dircxzoon", "Egbert", "Emout", "Engelbrecht", "Engelbrechtsz", "Evertssoen", "Eynbrecht", "Fokke", "Fockenz", "Fockez", "Foygensz", "Truyde", "Geerijtsz", "Geretssoen", "Gerijtszoon", "Gerrijtsz", "Gheretsz", "Gherijtssoen", "Geenenz", "Gijs", "Ghijse", "Gijsbert", "Ghijsbertsz", "Ghijsbrechts", "Ghijsbrechtsz", "Gijsberts", "Gijsbertsz", "Gelis", "Gielisz", "Gills", "Gobelssoen", "Godensoen", "Godscalckszoen", "Goedscalcxz", "Goedscalxz", "Goerijs", "Goerts", "Goessen", "Goessenz", "Govert", "Govertssoen", "Harber", "Has", "Heinric", "Heinensoen", "Heinricxsoen", "Heinricxz", "Heinrixdochter", "Heyn", "Heynricx", "Heynricxzoon", "Heynrijcxz", "Heyns", "Hermanssoen", "Hessel", "Heyman", "Hubert", "Hubrechtsz", "Hugen", "Hugensz", "Hugez", "Huygenz", "Jacop", "Coppin", "Jacobsz", "Jacops", "Jacopszoon", "Jan", "Jansdochter", "Janssoen", "Jansz Dochter", "Janszoon", "Joordensz", "Jordensz", "Karijnssoen", "Karrekijn", "Knapensoen", "Koenensoen", "Corstken", "Kerstenszoon", "Korstanssoen", "Korstensz", "Korstiansz", "Korstkensz", "Lambertssoen", "Lambertsz", "Lap", "Laurens", "Lauwerijszoon", "Lenairt", "Lenairtsz", "Lensensoen", "Lonijs", "Louf", "Lowijc", "Loys", "Luydolf", "Luydolfsz", "Maessen", "Mairtinszoon", "Mertinsz", "Matheeusz", "Mathijssoen", "Matthijsz", "Melis", "Ment", "Michiel", "Miechielsz", "Moertssoen", "Molendochter", "Monic", "Odolfssoen", "Ot", "Ottensoen", "Ottez", "Pauwel", "Pouwelsz", "Peterssoen", "Pieterssoen", "Pieterszoon", "Pietersz wijf", "Pijnssoen", "Raekaertssoen", "Reinersz", "Reynkensz", "Rengersz", "Robbert", "Roelof", "Roeleofsz", "Roelofsz", "Rutgeersz", "Sarijs", "Sander", "Sandersz", "Sceelkensoen", "Scellincsz", "Schellenz", "Steefkensz", "Stevensz", "Simonsz", "Symonssoen", "Syzensoen", "Thomaesz", "Thielmansz", "Tielmanssoen", "Torf", "Vastaert", "Vastairts", "Voppensoen", "Vranck", "Vredericxz", "Walich", "Wessel", "Wesselssoen", "Weymbert", "Weymbertsz", "Wiersicxsoen", "Willems", "Willemsz", "Willemszoons", "Wll", "Wouter", "Wouterssoen", "Woutersz", "Wyaertssoen", "Wiersz", "Yewen", "Yewensz", "Ysbrant", "Ysbrantsz", "van Afferden", "van Altvorst", "van Andels", "van Ass", "van Bairy", "van Baten", "van Beest", "van Befoert", "van Bellefelt", "van den Berge", "van Bergen", "van Blitterswijck", "van der Bochorst", "van Boemel", "van Boven", "van den broeck", "van Camer", "van Campen", "van Coeme", "van Cuyck", "van Dam", "van Dereinne", "van Dijck", "van Doern", "van Doren", "van Driele", "van Dunen", "van Eer", "van Eeuwijck", "van Elven", "van Eyck", "van Gedoe", "van Gent", "van Goch", "van Goer ende", "van den Grave", "van den Gruythuyse", "van Ham", "van Hemert", "van Harsem", "van Heer", "van Herp", "van der Heyck", "van Hoekelem", "van Hoemborch", "van Hoevel", "van Holc", "van Horter", "van Huesden", "van Huyns", "van Huyssen", "van Huysen", "van Ingen", "van Kempen", "van den Keerchove", "van der Kerken", "van Kuswijck", "van Cuuck", "van Cuyk", "van Licht", "van der Linden", "van Lippenhoven", "van Lyt", "van Loeven", "van Loon", "van Lynscoten", "van der Maes", "van der Mase", "van Mendich", "van Meren", "van Moeck", "van der Molen", "van Muers", "van Mulicum", "van Mulichum", "van Muylchum", "van Munster", "van Nairden", "van Nersen", "van Nuys", "van der Nypoert", "van Oesterwijck", "van Olmen", "van Orssoyen", "van den Oudenbergen", "van der Paert", "van der Poert", "van Pol", "van den Poele", "van Poll", "van Put", "van Raemsdonc", "van Remunde", "van Reyd", "van Rijn", "van Rijswijc", "van Ringe", "van Sande", "van Sautboemel", "van der Schueren", "van Seghem", "van der Spiegel", "van Stralen", "van Syberghen", "van Theese", "in den tol", "van Tryest", "van den Velde", "van der Voer", "van Vliteren", "van Vouden", "uten Waerde", "van Wamel", "van Wanen", "van Wel", "van Weric", "van Wey", "in den Wijnckel", "van Wijnderswyc", "van der Wolde", "van den Wyel", "van der Wyel", "van Zanten", "van Zoelem", "van Zwalmen", "Vrijthof", "Vrijthof"],
					"flavor": "Os holandeses vinahm originalmente ao Brasil para trabahar com produção de açúcar ou por simples curiosidade, mas na época que o Brasil caiu sob o controle dos inimigos deles, os espanhóis, os holandeses passaram a vir para colonizar.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tremembé",
					"aliados":["Potiguares*"],
					"inimigos":["Tabajaras","Potiguares*"],
					"flavor": "Povo tapuia de língua própria, eram um povo nômade que vivia da caça e da pesca.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tabajara",
					"aliados":["Portugueses"],
					"inimigos":["Franceses","Potiguares","Tremembés"],
					"flavor": "Povo tupi do sertão.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Potiguar",
					"aliados":["Franceses","Tremembés*"],
					"inimigos":["Portugueses","Tabajaras","Caetés","Tremembés*"],
					"flavor": "Povo tupi, eram grandes arqueiros e guerreiros.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Caeté",
					"aliados":[],
					"inimigos":["Portugueses","Potiguares","Tupinambás","Tupinaés"],
					"flavor": "",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tupinambá",
					"aliados":[],
					"inimigos":["Tupiniquins","Caetés","Tupinaés","Maracás"],
					"flavor": "Povo tupi que vivia no litoral e nos rios do interior. Milhares haviam sido catequizados por isso viviam perto de Salvador.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tupinaé",
					"aliados":[],
					"inimigos":["Caetés","Tupinambás","Caetés"],
					"flavor": "Povo tupi, deslocado do litoral pelos Tupinambás, conhecidos por sua música, tangiam tambores, trombetas e um grande tubo.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Maracá",
					"aliados":[],
					"inimigos":["Tupinaés","Tupinambás"],
					"flavor": "Povo tapuia de língua própria. Gostavam de música e cantavam canções sem palavras.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Aimoré",
					"aliados":[],
					"inimigos":["Portugueses"],
					"flavor": "Povo tapuia considerado o povo mais cruel do litoral. Eram excelentes guerreiros e arqueiros, eram mais altos e robustos que os povos tupis, sendo chamados de 'gigantes'. Apesar de serem corredores velozes, não sabiam nadar.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tupiniquim",
					"aliados":["Portugueses*"],
					"inimigos":["Tupinambás","Papanases","Portugueses*"],
					"flavor": "Povo tupi, foram os primeiros a ter contato com os portugueses.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Papaná",
					"aliados":[],
					"inimigos":["Goitacases","Tupiniquins"],
					"flavor": "Povo tapuia com alguns costumes similares aos povos tupis. Viviam da caça e da pesca",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Goitacá",
					"aliados":[],
					"inimigos":["Papanases","Tupiniquins","Portugueses*"],
					"flavor": "Povo tapuia, eram excelentes corredores e nadadores, caçavam tubarões a nado, viviam em palafitas e faziam 'comércio a distância' com os europeus, deixando a mercadoria próximo aos assentamentos, e voltando para pegar os itens deixados pelos colonos.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Tamoio",
					"aliados":["Franceses"],
					"inimigos":["Portugueses","Temiminós","Goitacases","Guaianases"],
					"flavor": "Povo tupi que conquistou o litoral séculos antes da chegada dos portugueses, contruiam casas e aldeias mais estáveis que os outros povos tupis, e alguns já tinham até se adaptado ao uso de armas de fogo.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Temiminó",
					"aliados":["Portugueses"],
					"inimigos":["Franceses","Tamoios"],
					"flavor": "Povo tupi aliado dos portugueses, seu cacique Arariboia, 'Cobra das Tempestades', fundou a cidade de Niterói em 1573.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Guaianá",
					"aliados":[],
					"inimigos":["Carijós","Tamoios"],
					"flavor": "Povo tapuia, viviam em covas na serra paulista.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Carijó",
					"aliados":[],
					"inimigos":["Guaianases"],
					"flavor": "Povo guarani que não comia carne humana, os carijós viviam da caça, pesca e lavoura. Moravam em casas fechadas,patadas com cascas de árvores. O único povo do litorâneo a usar roupas, devido ao frio do clima, os carijós cobriam os corpos com peles.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Guarani",
					"aliados":[],
					"inimigos":[],
					"flavor": "A palavra 'guarani' significa 'guereeiro', sendo assim, lutaram contra os portugueses e migraram para não serem escravizados.",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Sudanes",
					"aliados":[],
					"inimigos":[],
					"flavor": "",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Bantos",
					"aliados":[],
					"inimigos":[],
					"flavor": "",
					"icon":"/imgs/nacionalidades/escudo.png"
				},
				{
					"nome":"Guineano",
					"aliados":[],
					"inimigos":[],
					"flavor": "",
					"icon":"/imgs/nacionalidades/escudo.png"
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
						{"nome":"Acrobacia","niveis":["rolamentos básicos e estrelinhas","saltos mortais e piruetas","andar na corda bamba e fazer rotações e saltos entre barras"],
							"requisitos":[
								null,
								"Acrobacia1",
								"Acrobacia1;Acrobacia2"
							]},
						{"nome":"Corrida","niveis":["correr com uma velocidade acima da média","correr distâncias maiores e em terrenos mais difíceis","correr grandes distâncias em terrenos difíceis"],
							"requisitos":[
								null,
								"Corrida1",
								"Corrida1;Corrida2"
							]},
						{"nome":"Equitação","niveis":["cavalgar animais treinados e aplicar cuidados básicos aos cavalos","cavalgar em maior velocidade ou controlar animais mais temperamentais","pular, correr e domar cavalos"],
							"requisitos":[
								null,
								"Equitação1",
								"Equitação1;Equitação2"
							]},
						{"nome":"Força Física","niveis":["carregar armas pesadas","levantar e carregar pesos acima do normal ou realizar feitos de força além do comum","realizar atos de força nos limites do corpo humano é uma façanha difícil ou lendária"],
							"requisitos":[
								null,
								"Força-Física1",
								"Força-Física1;Força-Física2"
							]},
						{"nome":"Furtividade","niveis":["esconder-se em condições ideais","esconder-se em situações adversas","esconder-se e locomover-se de forma despercebida ao disfarçar seu som, aparência e cheiro"],
							"requisitos":[
								null,
								"Furtividade1",
								"Furtividade1;Furtividade2"
							]},
						{"nome":"Medicina de campo","niveis":["tratar feridas básicas e remover um ponto de dano","remover dois pontos de dano","remover três pontos de dano"],
							"requisitos":[
								null,
								"Medicina-de-campo1",
								"Medicina-de-campo1;Medicina-de-campo2"
							]},
						{"nome":"Natação","niveis":["nadar em águas calmas","nadar em águas agitadas, fazer mergulho livre e socorrer outros em perigo","nadar grandes distâncias, socorrer pessoas em circunstâncias extremas e segurar o fôlego durante vários minutos debaixo da água"],
							"requisitos":[
								null,
								"Natação1",
								"Natação1;Natação2"
							]},
						{"nome":"Prestidigitação","niveis":["enganar os olhos de um espectador com ilusionismo","enganar múltiplos espectadores"," furtar objetos dos bolsos ou fazer outros feitos notáveis com as mãos, sem ninguém perceber"],
							"requisitos":[
								null,
								"Prestidigitação1",
								"Prestidigitação1;Prestidigitação2"
							]}]
				},
				{
					"nome":"Habilidades Silvestres",
					"habilidades":[
						{"nome":"Armadilhas","niveis":["capturar animais pequenos","armadilhas mais complexas e escondê-las","montar armadilhas capazes de prender grandes animais ou até mesmo seres humanos"],
							"requisitos":[
								null,
								"Armadilhas1",
								"Armadilhas1;Armadilhas2"
							]},
						{"nome":"Canoagem","niveis":["remar e navegar uma canoa","navegar águas mais difíceis com correnteza","navegar corredeiras"],
							"requisitos":[
								null,
								"Canoagem1",
								"Canoagem1;Canoagem2"
							]},
						{"nome":"Comida silvestre","niveis":["alimentar uma pessoa","alimentar um grupo","alimentar uma pessoa em circunstâncias adversas (como neve ou deserto) ou para alimentar um grupo sob condições diversas"],
							"requisitos":[
								null,
								"Comida-silvestre1",
								"Comida-silvestre1;Comida-silvestre2"
							]},
						{"nome":"Escalada","niveis":["escalar uma superfície fácil de pedra, uma corda ou uma árvore","escaladas maiores ou mais difíceis","escaladas em situações mais difíceis (superfícies molhadas, retas), ou, com o equipamento certo, escalar montanhas"],
							"requisitos":[
								null,
								"Escalada1",
								"Escalada1;Escalada2"
							]},
						{"nome":"Fauna silvestre","niveis":[" indicar hábitos básicos de animais comuns, como sua alimentação ou período de atividade","reconhecer um animal pelas pegadas, ou identificar um pássaro incomum por seu canto","representar um conhecimento profundo, como descobrir a última refeição e condição física de um animal pelo esterco, ou reconhecer a hierarquia entre um grupo de animais"],
							"requisitos":[
								null,
								"Fauna-silvestre1",
								"Fauna-silvestre1;Fauna-silvestre2"
							]},
						{"nome":"Folclore","niveis":["o personagem adquire conhecimento de lendas e costumes"],
							"requisitos":[
								null,
								"Folclore1",
								"Folclore1;Folclore2"
							]},
						{"nome":"Herbalismo","niveis":["curar 1 ponto de dano em qualquer pessoa","consegue tratar febres, doenças e venenos comuns","doenças e venenos incomuns"],
							"requisitos":[
								null,
								"Herbalismo1",
								"Herbalismo1;Herbalismo2"
							]},
						{"nome":"Navegação terrestre","niveis":["reconhecer os pontos cardeais","encontrar um caminho quando perdido na selva","reencontrar um lugar previamente visitado"],
							"requisitos":[
								null,
								"Navegação-terrestre1",
								"Navegação-terrestre1;Navegação-terrestre2"
							]},
						{"nome":"Rastreamento","niveis":["identificar vestígios mais óbvios de pessoas e animais"," rastrear algum animal ou pessoa sob condições ideais","rastrear pessoas e animais sob condições mais difíceis"],
							"requisitos":[
								null,
								"Rastreamento1",
								"Rastreamento1;Rastreamento2"
							]}]
				},
				{
					"nome":"Armas",
					"habilidades":[
						{"nome":"Armas de arremesso","descricao":["estas armas são balanceadas para o arremesso, mas também podem ser utilizadas no corpo a corpo, se o personagem tiver a habilidade certa","Lança, Faca de Arremesso, Machado de arremesso"],
							"requisitos":[
								null,
								"Armas-de-arremesso1",
								"Armas-de-arremesso1;Armas-de-arremesso2"
							]},

						{"nome":"Armas de corte","descricao":["armas utilizadas para golpes cortantes ou para esfaquear o oponente", "Adaga, Alfanje, Espada de Lâmina Larga*, Faca, Machete"],
							"requisitos":[
								null,
								"Armas-de-corte1",
								"Armas-de-corte1;Armas-de-corte2"
							]},

						{"nome":"Armas de fogo","descricao":["ao longo do século XVI, as armas de fogo começaram a se tornar as armas dominantes", "Arcabuz, Mosquete, Pistola"],
							"requisitos":[
								null,
								"Armas-de-fogo1",
								"Armas-de-fogo1;Armas-de-fogo2"
							]},

						{"nome":"Armas de golpe","descricao":["armas que dependem da força física do combatente para causar dano de impacto", "Machado de guerra, Martelo de guerra, Porrete"],
							"requisitos":[
								null,
								"Armas-de-golpe1",
								"Armas-de-golpe1;Armas-de-golpe2"
							]},

						{"nome":"Armas de haste","descricao":["armas de haste comprida", "Alabarda, Martelo de Lucerne, Pique"],
							"requisitos":[
								null,
								"Armas-de-haste1",
								"Armas-de-haste1;Armas-de-haste2"
							]},

						{"nome":"Armas de sopro","descricao":["existem vários tipos e tamanhos de zarabatanas", "Zarabatana"],
							"requisitos":[
								null,
								"Armas-de-sopro1",
								"Armas-de-sopro1;Armas-de-sopro2"
							]},

						{"nome":"Armas mecânicas","descricao":["a besta, mesmo com sua popularidade diminuída, continuava sendo uma opção nas batalhas ao longo do século XVI", "Besta"],
							"requisitos":[
								null,
								"Armas-mecânica1",
								"Armas-mecânica1;Armas-mecânica2"
							]},

						{"nome":"Arquearia","descricao":["O arco é arma tradicional do mundo inteiro. Enquanto o século XVI viu seu uso diminuir na Europa, o arco e flecha continuou sendo a arma mais usada nas Américas, devido ao seu uso pelos povos nativos", "Arco e flecha"],
							"requisitos":[
								null,
								"Arquearia1",
								"Arquearia1;Arquearia2"
							]},

						{"nome":"Esgrima","descricao":["estudo de luta com as espadas compridas de origem europeia", "Rapieira"],
							"requisitos":[
								null,
								"Esgrima1",
								"Esgrima1;Esgrima2"
							]},

						{"nome":"Armas exóticas","descricao":["armas que dificilmente teriam chegado ao Brasil Colonial", "ex: Cimitara, Catana, Zweihänder"],
							"requisitos":[
								null,
								"Armas-exóticas1",
								"Armas-exóticas1;Armas-exóticas2"
							]}
					]
				},
				{
					"nome":"Artes Marciais",
					"habilidades":[
						{"nome":"Boxe","niveis":["dar golpes fortes com os punhos (dano 1)","ganha um ponto a mais de resistência","ganha outro ponto de resistência"],
							"requisitos":[
								null,
								"Boxe1",
								"Boxe1;Boxe2"
							]},
						{"nome":"Capoeira","descricao":["pode usar esta habilidade para atacar com os pés (dano 1) ou para esquivas durante o combate"],
							"requisitos":[
								null,
								"Capoeira1",
								"Capoeira1;Capoeira2"
							]},
						{"nome":"Luta livre","descricao":["pode usar esta habilidade para tentar imobilizar oponentes de tamanho e força humanas"],
							"requisitos":[
								null,
								"Luta-livre1",
								"Luta-livre1;Luta-livre2"
							]},]
				},
				{
					"nome":"Habilidades Sociais",
					"habilidades":[
						{"nome":"Barganha","niveis":["negociar o custo de bens e serviços","negociar o custo de bens e serviços com mais facilidade","pode ser utilizada para convencer um vendedor mais “duro” ou conseguir um desconto maior"],
							"requisitos":[
								null,
								"Barganha1",
								"Barganha1;Barganha2"
							]},
						{"nome":"Oratória","descricao":["desenvolvimento do poder da voz para persuadir um grupo"],
							"requisitos":[
								null,
								"Oratória1",
								"Oratória1;Oratória2"
							]},
						{"nome":"Persuasão","descricao":["habilidade de persuadir outros, de levá-los para seu lado da discussão"],
							"requisitos":[
								null,
								"Persuasão1",
								"Persuasão1;Persuasão2"
							]}]
				},
				{
					"nome":"Habilidades Militares e Navais",
					"habilidades":[
						{"nome":"Artilharia","descricao":["a artilharia só pode ser utilizada de pontos fixos, como fortalezas e navios. Artilharia não tem precisão para ser utilizada em pequenas batalhas. Estas peças servem para atacar grandes alvos, como navios e edifícios, ou para atirar no meio de exércitos."],
							"requisitos":[
								null,
								"Artilharia1",
								"Artilharia1;Artilharia2"
							]},

						{"nome":"Militar","niveis":["uma habilidade básica para quem participa de guerras, como soldados e guerreiros nativos. Inclui aprendizagem de combate em grupo, cuidado de higiene e equipamento durante campanhas, nervos para enfrentar a batalha","começa a aprender táticas militares, podendo organizar pequenos grupos em batalha","aprende estratégia: como equipar grupos, preparar linhas de suprimento e escolher terrenos para travar batalhas"],
							"requisitos":[
								null,
								"Militar1",
								"Militar1;Militar2"
							]},

						{"nome":"Náutica","niveis":[" aprende a trabalhar com o vento, atar nós, limpar e cuidar de embarcações. Também consegue navegar barcos a vela pequenos","navegar rotas conhecidas, lidar com mares perigosos e enfrentar situações táticas","melhora as habilidades de navegação"],
							"requisitos":[
								null,
								"Náutica1",
								"Náutica1;Náutica2"
							]}]
				},
				{
					"nome":"Artesanatos",
					"habilidades":[

						{"nome":"Alfaiataria","descricao":["alfaiates trabalham com a confecção de roupas. Pode-se demorar um dia para criar uma roupa simples, ou um mês para as mais difíceis (após obter todos os materiais necessários)"],
							"requisitos":[
								null,
								"Alfaiataria1",
								"Alfaiataria1;Alfaiataria2"
							]},

						{"nome":"Armaria","descricao":["Através do manuseio de madeira e metal, os armeiros são especialistas no reparo e fabricação de armas de fogo. Uma encomenda mais simples, como um arcabuz com fecho de mecha, pode ser fabricada em duas semanas. Uma arma com fecho de roda é um trabalho mais complexo, que deve levar dois ou três meses. Trabalhos de qualidade excepcional podem levar seis meses"],
							"requisitos":[
								null,
								"Armaria1",
								"Armaria1;Armaria2"
							]},

						{"nome":"Ferraria","descricao":["ferreiros trabalham com objetos de ferro. Um objeto simples pode ser criado em questão de horas, uma arma básica em uma semana e um objeto excepcional pode levar meses"],
							"requisitos":[
								null,
								"Ferraria1",
								"Ferraria1;Ferraria2"
							]},

						{"nome":"Marcenaria","descricao":["marceneiros trabalham com criação de móveis e outros objetos de madeira. Peças básicas podem levar um dia para fazer, já peças decorativas, de madeiras especiais, podem levar meses"],
							"requisitos":[
								null,
								"Marcenaria1",
								"Marcenaria1;Marcenaria2"
							]},

						{"nome":"Ourivesaria","descricao":["o ourives faz trabalhos em prata e ouro. Trabalhos simples levam dias, e trabalhos grandes e complexos podem levar seis meses ou mais"],
							"requisitos":[
								null,
								"Ourivesaria1",
								"Ourivesaria1;Ourivesaria2"
							]},

						{"nome":"Sapataria","descricao":["o sapateiro monta calçados de couro. Um par básico de calçados pode levar um dia para ser feito, um par mais elaborado pode levar semanas"],
							"requisitos":[
								null,
								"Sapataria1",
								"Sapataria1;Sapataria2"
							]},

						{"nome":"Tanoaria","descricao":["tanoeiros confeccionam barris. A montagem de um barril leva um dia. Tanoeiros de níveis maiores são especialistas na seleção e formação da madeira, criando barris de melhor qualidade e maior durabilidade"],
							"requisitos":[
								null,
								"Tanoaria1",
								"Tanoaria1;Tanoaria2"
							]}]
				},
				{
					"nome":"Artes",
					"habilidades":[

						{"nome":"Culinária","descricao":["tendo os ingredientes certos, é capaz de criar pratos saborosos e até inéditos"],
							"requisitos":[
								null,
								"Culinária1",
								"Culinária1;Culinária2"
							]},

						{"nome":"Dança","descricao":["estuda as técnicas de dança"],
							"requisitos":[
								null,
								"Dança1",
								"Dança1;Dança2"
							]},

						{"nome":"Desenho","descricao":["desenhista trabalha com carvão, lápis, xilogravura ou outras formas de desenho"],
							"requisitos":[
								null,
								"Desenho1",
								"Desenho1;Desenho2"
							]},

						{"nome":"Entalhe","descricao":["consegue entalhar desenhos ou esculturas de madeira"],
							"requisitos":[
								null,
								"Entalhe1",
								"Entalhe1;Entalhe2"
							]},

						{"nome":"Escultura","descricao":["apreende esculpir obras de argila ou mármore"],
							"requisitos":[
								null,
								"Escultura1",
								"Escultura1;Escultura2"
							]},

						{"nome":"Pintura","descricao":["trabalha com pintura em aquarela ou tinta a óleo"],
							"requisitos":[
								null,
								"Pintura1",
								"Pintura1;Pintura2"
							]},

						{"nome":"Poesia","descricao":["pode trabalhar com poesia, letras ou peças"],
							"requisitos":[
								null,
								"Poesia1",
								"Poesia1;Poesia2"
							]},

						{"nome":"Teatro","descricao":["tem habilidade nas artes cênicas, ou como ator/atriz de peças ou em outras áreas, como marionetes"],
							"requisitos":[
								null,
								"Teatro1",
								"Teatro1;Teatro2"
							]},

						{"nome":"Vocal","descricao":["faz treinamento da voz para cantar"],
							"requisitos":[
								null,
								"Vocal1",
								"Vocal1;Vocal2"
							]}]
				},
				{
					"nome":"Instrumentos Musicais",
					"habilidades":[

						{"nome":"Instrumentos de corda","descricao":["alaúde, cistre"],
							"requisitos":[
								null,
								"Instrumentos-de-corda1",
								"Instrumentos-de-corda1;Instrumentos-de-corda2"
							]},

						{"nome":"Instrumentos de corda e arco","descricao":["viola, viola da gamba"],
							"requisitos":[
								null,
								"Instrumentos-de-cordaearco1",
								"Instrumentos-de-cordaearco1;Instrumentos-de-cordaearco2"
							]},

						{"nome":"Instrumentos de embocadura","descricao":["flauta, flauta doce, corneta, corneto, trombeta"],
							"requisitos":[
								null,
								"Instrumentos-de-embocadura1",
								"Instrumentos-de-embocadura1;Instrumentos-de-embocadura2"
							]},

						{"nome":"Instrumentos de palheta","descricao":["baixão, charamela, fagote"],
							"requisitos":[
								null,
								"Instrumentos-de-palheta1",
								"Instrumentos-de-palheta1;Instrumentos-de-palheta2"
							]},

						{"nome":"Instrumentos de percussão","descricao":["atabaque, pandeiro, tambor"],
							"requisitos":[
								null,
								"Instrumentos-de-percussão1",
								"Instrumentos-de-percussão1;Instrumentos-de-percussão2"
							]},

						{"nome":"Instrumentos de tecla","descricao":["cravo, clavicórdio"],
							"requisitos":[
								null,
								"Instrumentos-de-tecla1",
								"Instrumentos-de-tecla1;Instrumentos-de-tecla2"
							]}]
				},
				{
					"nome":"Outros Ofícios",
					"habilidades":[
						{"nome":"Adestramento de cães","descricao":["é especialista em treinar cachorros. Nas suas viagens, pode levar um ou dois cachorros comuns"],
							"requisitos":[
								null,
								"Adestramento-de-cães1",
								"Adestramento-de-cães1;Adestramento-de-cães2"
							]},

						{"nome":"Administração","descricao":["administração pode lidar com cargos envolvendo organização e burocracia, e pode servir em certos cargos governamentais. Os que também adquirem a habilidade acadêmica de Direito podem trabalhar como juízes, promotores e outros cargos"],
							"requisitos":[
								null,
								"Administração1",
								"Administração1;Administração2"
							]},

						{"nome":"Agricultura","descricao":["Quem estuda agricultura é o lavrador ou trabalhador rural. Esta pessoa entende as técnicas do campo: quando e como plantar e colher produtos agrícolas"],
							"requisitos":[
								null,
								"Agricultura1",
								"Agricultura1;Agricultura2"
							]},

						{"nome":"Arquitetura","descricao":["arquitetos lidam com planejamento e supervisão de construção de prédios"],
							"requisitos":[
								null,
								"Arquitetura1",
								"Arquitetura1;Arquitetura2"
							]},

						{"nome":"Barbearia-cirurgia","descricao":["Além de cortar barbas e cabelo, os barbeiros-cirurgiões podiam praticar pequenas cirurgias, como lancetar, arrancar dentes, ou amputar membros. Infelizmente, um dos seus tratamentos mais comum da época, sangria com sanguessugas ou flebotomia, era pouco eficaz na cura de doenças"],
							"requisitos":[
								null,
								"Barbearia-cirurgia1",
								"Barbearia-cirurgia1;Barbearia-cirurgia2"
							]},

						{"nome":"Carpintaria","descricao":["carpinteiros trabalham com construção em madeira"],
							"requisitos":[
								null,
								"Carpintaria1",
								"Carpintaria1;Carpintaria2"
							]},

						{"nome":"Cartografia","descricao":["cartógrafos trabalham na confecção de mapas"],
							"requisitos":[
								null,
								"Cartografia1",
								"Cartografia1;Cartografia2"
							]},

						{"nome":"Comércio","descricao":["comerciante lida com venda e compra de bens, precisa entender de logística de transporte e armazenagem, preço com base em oferta e demanda, avaliação da qualidade dos produtos e outros assuntos relacionados"],
							"requisitos":[
								null,
								"Comércio1",
								"Comércio1;Comércio2"
							]},

						{"nome":"Condução de gado","descricao":["boieiros (antigo nome para os vaqueiros/boiadeiros) trabalham com criação, proteção e controle de gado"],
							"requisitos":[
								null,
								"Condução-de-gado1",
								"Condução-de-gado1;Condução-de-gado2"
							]},

						{"nome":"Contabilidade","descricao":[" pessoas que trabalham com contabilidade ocupam o cargo de tesoureiro"],
							"requisitos":[
								null,
								"Contabilidade1",
								"Contabilidade1;Contabilidade2"
							]},

						{"nome":"Engenharia","descricao":["engenheiros trabalham na projeção e supervisão na construção de projetos de engenharia civil (estradas, pontes) e mecânica (moinhos, engenhos de açúcar)"],
							"requisitos":[
								null,
								"Engenharia1",
								"Engenharia1;Engenharia2"
							]},

						{"nome":"Escriba","descricao":["escrivães trabalham com a escrita e o arquivamento de documentos"],
							"requisitos":[
								null,
								"Escriba1",
								"Escriba1;Escriba2"
							]},

						{"nome":"Fabricação de flechas","niveis":["personagem pode gastar um dia na confecção de flechas, criando 5 flechas","personagem pode gastar um dia na confecção de flechas, criando 10 flechas","personagem pode gastar um dia na confecção de flechas, criando 20 flechas"],
							"requisitos":[
								null,
								"Fabricação-de-flechas1",
								"Fabricação-de-flechas1;Fabricação-de-flechas2"
							]},

						{"nome":"Mineração","descricao":["este personagem é especialista em reconhecer depósitos de minerais e em técnicas de extração"],
							"requisitos":[
								null,
								"Mineração1",
								"Mineração1;Mineração2"
							]},

						{"nome":"Pedraria","descricao":["os pedreiros trabalham com o uso de pedra em construção"],
							"requisitos":[
								null,
								"Pedraria1",
								"Pedraria1;Pedraria2"
							]}]
				},
				{
					"nome":"Estudos Acadêmicos",
					"habilidades":[
						{"nome":"Astronomia","descricao":["estudo dos movimentos das estrelas e planetas dentro da 'esfera celestial'"],
							"requisitos":[
								null,
								"Astronomia1",
								"Astronomia1;Astronomia2"
							]},

						{"nome":"Direito","descricao":["estudo da filosofia e prática de lei"],
							"requisitos":[
								null,
								"Direito1",
								"Direito1;Direito2"
							]},

						{"nome":"Filosofia","descricao":["estudo de lógica, razão e metafísica, a essência dos seres"],
							"requisitos":[
								null,
								"Filosofia1",
								"Filosofia1;Filosofia2"
							]},

						{"nome":"Física","descricao":["estudo dos fenômenos naturais"],
							"requisitos":[
								null,
								"Física1",
								"Física1;Física2"
							]},

						{"nome":"Humanidades","descricao":["inclui as áreas de gramática, o estudo de palavras e expressão linguística, nas formas de oração e poesia, e retórica, o estudo teórico de oratória e formação de argumentos para persuasão"],
							"requisitos":[
								null,
								"Humanidades1",
								"Humanidades1;Humanidades2"
							]},

						{"nome":"Matemática","descricao":["inclui as áreas de aritmética, o estudo de números e seus relacionamentos, e geometria, o estudo de medidas."],
							"requisitos":[
								null,
								"Matemática1",
								"Matemática1;Matemática2"
							]},

						{"nome":"Medicina","descricao":["os médicos (chamados de “físicos”) podem recomendar remédios e tratamentos para doenças e condições comuns"],
							"requisitos":[
								null,
								"Medicina1",
								"Medicina1;Medicina2"
							]},

						{"nome":"Teologia","descricao":["estudo da Bíblia e as doutrinas da Igreja"],"requisitos":["Latim2","Teologia1;Latim2","Teologia2;Latim2"]}]
				},
				{
					"nome":"Graças Divinas",
					"habilidades":[
						{"nome":"Fé","requisitos":[null,"Fé1","Fé1;Fé2"],"proibicoes":["Armas-de-arremesso;Armas-de-corte;Armas-de-fogo;Armas-de-golpe;Armas-de-haste;Armas-de-sopro;Armasmecânicas;Arquearia;Esgrima;Armasexóticas;Fôlego;Ifá","Armas-de-arremesso;Armas-de-corte;Armas-de-fogo;Armas-de-golpe;Armas-de-haste;Armas-de-sopro;Armasmecânicas;Arquearia;Esgrima;Armasexóticas;Fôlego;Ifá","Armas-de-arremesso;Armas-de-corte;Armas-de-fogo;Armas-de-golpe;Armas-de-haste;Armas-de-sopro;Armasmecânicas;Arquearia;Esgrima;Armasexóticas;Fôlego;Ifá"],"descricao":["Energia 5", "Energia 10","Energia 20"]},

						{
							"nome":"Proteção contra o mal",
							"niveis":["Prever o mal","Defesa contra o mal","Afastar o mal"],
							"requisitos":[
								"Fé1",
								"Fé1;Fé2;Proteçãocontraomal1",
								"Fé1;Fé2;Fé3;Proteçãocontraomal1;Proteçãocontraomal2"
							],
							"descricao":["sente se existe algum perigo próximo, seja por causas naturais (fogo, tempestade), animais ou intenção humana. O poder não esclarece a forma exata do perigo, mas dá uma indicação da direção e o nível de perigo", "pede proteção contra ataques à sua pessoa ou contra outra pessoa escolhida (por toque). No caso de sucesso, qualquer ser (animal ou humano) estará sujeito a uma penalidade de -2 em qualquer ataque contra aquela pessoa durante o tempo da graça", "consegue mandar embora um ser maldoso ou perigoso (que seja pessoa, animal ou monstro)"]},

						{"nome":"Defesa contra magia","niveis":["Sentir magia","Proteção contra magia","Dissipar magia"],
						"requisitos":[
						"Fé1",
						"Fé1;Fé2;Defesacontramagia1",
						"Fé1;Fé2;Fé3;Defesacontramagia1;Defesacontramagia2"]
						,"descricao":["pede a graça de sentir os efeitos de poderes ao redor dele", "ganha proteção pessoal contra poderes mágicos", "consegue anular algum efeito mágico"]},


						{"nome":"Profecia","niveis":["Visão divina","Sentir vida","Busca da verdade"],
						"requisitos":["Fé1","Fé1;Fé2;Profecia1","Fé1;Fé2;Fé3;Profecia1;Profecia2"],
						"descricao":["para receber uma visão, o personagem tem de estar em algum momento de paz e oração, relaxado e preparado para receber esta bênção. Uma visão pode ou não aparecer, pode ter ou não ter utilidade e pode até confundir mais que ajudar", "esta graça alerta o personagem sobre o estado de uma pessoa conhecida, mesmo que aquela pessoa esteja a milhares de quilômetros de distância", "quando usada com sucesso, deixa o personagem saber sem sombra de dúvida se outra pessoa está mentindo ou não. Em casos de grande sucesso, o personagem pode até receber uma visão que mostra o que é a verdade"]},


						{"nome":"Recuperação","niveis":["Aliviar dor","Remover febre","Expulsar males"],"requisitos":["Fé1","Fé1;Fé2;Recuperação1","Fé1;Fé2;Fé3;Recuperação1;Recuperação2"],"descricao":["recupera danos em uma parte do corpo e alivia a dor das outras, deixando aquela pessoa agir de forma normal. O personagem recupera imediatamente dois pontos de dano e, se continuar com menos de quatro pontos de resistência, não sofre a perda de um nível nos seus testes de habilidade durante as próximas 24 horas","esta graça pode remover doenças e venenos listados como “comum” (como, por exemplo, o veneno da Armadeira gigante), e qualquer doença acompanhada de febre (varíola, peste, gripe e outras parecidas). Em caso de sucesso, o alvo começa a melhorar imediatamente, mas em caso de fracasso, o personagem nunca mais poderá fazer outro teste para remover aquela doença ou veneno da pessoa","Este é o maior nível de cura, e pode aliviar enfermidades gravíssimas, como tuberculose, gota, diabetes e outras. É efetivo contra doenças e venenos listados como “incomum”, enlouquecimento sobrenatural, paralisia e os poderes de fôlego Enviar doença e Passar veneno. Também funciona em situações extraordinárias de saúde, por exemplo, quando alguém engole um anzol. Em caso de sucesso, o alvo começa a melhorar imediatamente, mas em caso de fracasso, o personagem nunca mais pode fazer outro teste para curar a mesma condição daquela pessoa"]},


						{"nome":"Acontecimentos milagrosos","niveis":["Estender o clima","Estender o dia","Divina coincidência"],"requisitos":["Fé1","Fé1;Fé2;Acontecimentosmilagrosos1","Fé1;Fé2;Fé3;Acontecimentosmilagrosos1;Acontecimentosmilagrosos2"],"descricao":["esta graça segura uma chuva ou outro fenômeno natural durante até quatro horas, dando tempo para o personagem buscar abrigo","esta graça pode ser invocada durante viagens terrestres ou marinhas, fazendo que as horas do dia pareçam estender-se além do normal para o personagem e seu grupo. Assim, eles conseguem andar o dobro da distância que andariam normalmente durante aquele dia. Este poder não afeta batalhas ou interações com outros personagens, apenas deslocamentos entre lugares","em momentos de grande necessidade, o personagem pode pedir uma ajuda divina, que acaba aparecendo como uma coincidência inesperada"]},


						{"nome":"Pão de cada dia","niveis":["Restaurar alimentação","Encontrar alimentação","Multiplicar alimentação"],"requisitos":["Fé1","Fé1;Fé2;Pãodecadadia1","Fé1;Fé2;Fé3;Pãodecadadia1;Pãodecadadia2"],"descricao":["pede que alguma comida ou bebida estragada volte a ser comestível","em situações de necessidade, esta graça ajuda o personagem a encontrar comida e água","em tempos de necessidade, esta graça permite que pouca comida alimente um número de pessoas além do normal"]},


						{"nome":"Benção","niveis":["Abençoar +1","Abençoar +2","Abençoar +3"],"requisitos":["Fé1","Fé1;Fé2;Benção1","Fé1;Fé2;Fé3;Benção1;Benção2"],"descricao":["oferece bônus de +1 nos testes do ser ou objeto abençoado","oferece bônus de +2 nos testes do ser ou objeto abençoado","oferece bônus de +3 nos testes do ser ou objeto abençoado"]}]
				},
				{
					"nome":"Poderes de Fôlego",
					"habilidades":[
						{"nome":"Fôlego","requisitos":[null,"Fôlego1","Fôlego2"],"proibicoes":["Armas;Arquearia;Esgrima;Fé;Ifá","Armas;Arquearia;Esgrima;Fé;Ifá","Armas;Arquearia;Esgrima;Fé;Ifá"],"descricao":["Energia 5", "Energia 10","Energia 20"]},

						{"nome":"Cura","niveis":["Curar feridas","Curar veneno","Curar à distância"],"requisitos":["Fôlego1","Fôlego1;Fôlego2;Cura1","Fôlego1;Fôlego2;Fôlego3;Cura1;Cura2"],"descricao":["poder de curar feridas, quando usado com sucesso, inicia uma cura extraordinária da ferida. Quando o personagem toca o alvo, cura imediatamente dois pontos de dano", "poder cura os efeitos de qualquer veneno (comum ou incomum). A pessoa começa a melhorar na hora, e todo o veneno e seus efeitos somem do corpo do afetado dentro de uma hora","O pajé, sabendo que alguém está ferido, pode lançar uma cura à distância. O participante deve escolher entre Curar feridas ou Curar veneno. Não há limite de distância, mas uma penalidade pode ser aplicada ao teste em casos de distâncias muito grandes ou quando há desconhecimento do problema exato"]},

						{"nome":"Defesa","niveis":["Dar sorte","Proteção","Corpo fechado"],"requisitos":
						["Fôlego1",
						"Fôlego1;Fôlego2;Defesa1",
						"Fôlego1;Fôlego2;Fôlego3;Defesa1;Defesa2"]
						,"descricao":["o alvo ganha +1 em todos os testes de habilidade até o próximo amanhecer. Ao contrário de outros poderes, é possível acumular mais de um bônus de Dar sorte, sob uma condição especial: o alvo pode somar até três aplicações deste poder ao mesmo tempo, contanto que receba de pajés diferentes", "O personagem ganha uma proteção que força uma penalidade de -2 ao teste de qualquer um que tente feri-lo por meio de armas, magia, doença ou veneno","no caso de sucesso, não há arma, fogo ou outro elemento que consiga ferir o personagem. Ele pode ser derrubado por um golpe, amarrado ou detido por outros meios, ou afetado por poderes mágicos, mas não sofrerá dano algum. O efeito dura três rodadas de uma batalha"]},

						{"nome":"Vida","niveis":["Dar força","Curar doença","Devolver a vida"],"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Vida1",
						"Fôlego1;Fôlego2;Fôlego3;Vida1;Vida2"
						],"descricao":["este poder recarrega as energias do alvo, tirando qualquer sinal de cansaço e fadiga. O alvo ganha o aumento de um ponto na sua resistência máxima durante 24 horas", "este poder pode curar qualquer doença (comum ou incomum). Também serve para remover enlouquecimento causado por criaturas sobrenaturais. Em caso de fracasso, o mesmo pajé nunca mais pode tentar curar a doença da mesma pessoa de novo","o pajé pode soprar a vida de volta para dentro de um recém-morto. Este poder funciona em casos como falta de ar (estrangulação, afogamento), ataque cardíaco e perda de sangue, mas não serve em nenhum caso onde a causa da morte ainda persista no corpo"]},


						{"nome":"Dano","niveis":["Causar feridas","Passar veneno","Ferir à distância"],
						"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Dano1",
						"Fôlego1;Fôlego2;Fôlego3;Dano1;Dano2"
						],"descricao":[" causa um machucado físico em outra pessoa, parecido com um golpe fortíssimo de uma arma (dano 3)", " introduz um veneno comum no sangue do alvo. Este veneno causa uma fraqueza, reduzindo todos os ataques do alvo para 1 de dano e reduzindo em um nível a sua movimentação. Se o veneno não for curado dentro de um dia, a pessoa morre","produz o mesmo efeito que Causar feridas, porém o pajé pode aplicar este poder a qualquer um que se encontre dentro da sua linha de visão, sem necessidade de tocar o alvo"]},
						


						{"nome":"Fraqueza","niveis":["Dar azar","Indefeso","Corpo aberto"],
						"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Fraqueza1",
						"Fôlego1;Fôlego2;Fôlego3;Fraqueza1;Fraqueza2"
						],"descricao":["o alvo atingido leva uma penalidade igual a -1 em todos seus testes de habilidade durante as próximas vinte e quatro horas", "O personagem torna-se suscetível aos ataques de armas, magia, doença e veneno, dando um bônus de +2 a qualquer um que o ataque. Uma pessoa só pode ser amaldiçoada por um uso de Indefeso por vez. O efeito dura doze horas","durante três rodadas, o personagem torna-se altamente suscetível a qualquer dano. Qualquer golpe de arma causa o triplo do dano normal"]},



						{"nome":"Morte","niveis":["Remover força","Enviar doença"," Enviar morte"],"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Morte1",
						"Fôlego1;Fôlego2;Fôlego3;Morte1;Morte2"],"descricao":["o alvo fica exausto de repente, e tem que descansar uma rodada (perde a próxima ação) antes de fazer qualquer outra atividade", "aflige o alvo com uma doença comum. A doença impõe uma penalidade de -3 em todas as façanhas e baixa em um nível o movimento do alvo. Estes efeitos continuam até o alvo ser curado","o alvo sofre um ataque cardíaco e morre dentro de três rodadas. Uma graça de Dissipar magia ou Curar males ou o poder de Contrafeitiço, usado antes do sujeito morrer, pode salvá-lo. O poder Devolver a vida, usado logo depois da morte da pessoa, pode revivê-la. Caso contrário, não existe outra maneira de salvar a pessoa. Este poder requer grande força e o pajé que o invoca fica exausto física e espiritualmente. Após seu uso, o pajé precisa descansar durante um dia antes de fazer qualquer esforço físico maior ou usar outro poder."]},
						


						{"nome":"Mundo espiritual","niveis":["Comunicar-se com espíritos","Viagem espiritual","Transportar-se"],"requisitos":["!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima","!Armas;!Arquearia;!Esgrima"],"descricao":["o pajé conjura um espírito em busca de informação. Em caso de sucesso, consegue conjurar um espírito. Em caso de grande sucesso, consegue conjurar um espírito específico. Pode conjurar mortos que conhece, buscando informações que eles detinham em vida, ou falar com espíritos antigos, que podem saber de coisas históricas ou sobrenaturais. Mas, é importante lembrar que os espíritos podem mentir, como qualquer pessoa. Os espíritos que desejam mal ao pajé ou seus companheiros podem tentar enganá-lo. Este poder requer quatro horas de cerimônia para chamar o espírito", " o espírito do pajé sai de seu corpo e viaja pelo mundo paralelo dos espíritos. Pode conversar com qualquer espírito encontrado ao longo desta viagem. Também consegue espiar lugares físicos, porém precisa levar seu espírito para o lugar, flutuando a uma velocidade quatro vezes maior que o caminhar. Por exemplo, um pajé pode usar este poder para espiar o que está acontecendo em um acampamento rival a quatro horas de distância, gastando apenas uma hora para ir. Independente da distância percorrida, o pajé pode quebrar a conexão a qualquer momento e levar o espírito de volta ao corpo instantaneamente. Espíritos hostis ao personagem também podem atacá-lo, forçando-o a voltar ao seu corpo. Espíritos muito poderosos podem ter meios de prender o espírito do pajé e não permitir que ele volte para seu corpo. A cerimônia leva quatro horas para entrar no mundo espiritual, mais o tempo que o pajé passa nesta dimensão. É importante notar que o corpo físico do pajé torna-se altamente suscetível a ataques físicos enquanto seu espírito está fora, deixando-o sem defesa nenhuma. O corpo também começa a desidratar, e morrerá após três dias se o espírito não voltar para ele. Em caso de morte, o espírito do pajé permanece no mundo espiritual","Com este poder, o personagem consegue levar seu próprio corpo para o astral. O pajé é capaz de flutuar pelo mundo astral com sua velocidade normal de caminhar, e depois sair em outro lugar físico. Este ritual leva apenas uma hora para completar. O pajé pode passar até três dias no plano astral"]},



						{"nome":"Tempo","niveis":["Prever o tempo","Fenômenos naturais","Tempestade"],"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Tempo1",
						"Fôlego1;Fôlego2;Fôlego3;Tempo1;Tempo2"],"descricao":["permite ao pajé prever o tempo das próximas doze horas", "o pajé bondoso pode criar chuva, o elemento que dá vida às plantas. O pajé maldoso pode criar uma seca fortíssima, tirando a vida das plantas. O ritual leva quatro horas a completar e o efeito dura de um a seis dias","Com este poder, o pajé maldoso pode criar uma tempestade direcionada, lançando-a contra quem ele quiser. Esta tempestade terá chuva, vento e relâmpagos além do normal. O pajé bondoso pode usar este poder para acalmar uma tempestade (natural ou mágica), deixando uma chuva leve em seu lugar. Nos dois casos, o ritual leva apenas meia hora para completar"]},
						


						{"nome":"Controle da natureza","niveis":["Controle sobre plantas","Criar alimentos","Transformação"],"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Controledanatureza1",
						"Fôlego1;Fôlego2;Fôlego3;Controledanatureza1;Controledanatureza2"],"descricao":["o pajé bondoso pode fazer nascer uma planta nova, indo da semente até o broto em questão de meia hora. Para plantas menores (flores, ervas) a planta inteira cresce. No caso de uma árvore, ela cresce até um metro de altura. Uma árvore já madura ganha um ano de crescimento. O pajé maligno pode matar uma planta, fazendo até mesmo uma árvore grande decair. Nos dois casos, o ritual leva meia hora", "Com este poder, o pajé faz crescer uma pequena refeição vegetal, como um melão ou algumas cenouras, suficiente para alimentar uma pessoa. O ritual leva uma hora para completar","este poder permite ao pajé transformar-se em animal. No caso do pajé bondoso, o animal pode ser um pássaro ou peixe. No caso do pajé maldoso, pode se tornar uma onça ou uma jararaca. O efeito é instantâneo  e o pajé pode ficar até oito horas na forma animal"]},
						


						{"nome":"Contra magia","niveis":["Localizar magia","Identificar magia","Contrafeitiço"],"requisitos":[
						"Fôlego1",
						"Fôlego1;Fôlego2;Contramagia1",
						"Fôlego1;Fôlego2;Fôlego3;Contramagia1;Contramagia2"],"descricao":["o uso deste poder permite ao pajé saber quais são todos os itens mágicos e feitiços em efeito, sem identificar suas propriedades, dentro de um raio de trinta varas (33 metros)", "este poder, em caso de sucesso, permite ao pajé identificar as propriedades de um feitiço ou item mágico","este poder pode ser utilizado para cancelar um ritual em andamento ou pôr um fim nos efeitos de um poder com uma certa duração"]}]
				},
				{
					"nome":"Poderes de Ifá",
					"habilidades":[
						{
							"nome":"Ifá",
							"requisitos":[null,"Ifá1","Ifá2"],
							"descricao":["Energia 5", "Energia 10","Energia 20"]
						},

						{
							"nome":"Saúde",
					 		"niveis":["Curar danos","Curar maldades","Afastar morte"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Saúde1",
								"Ifá1;Ifá2;Ifá3;Saúde1;Saúde2"
							],
					 		"descricao":["deste poder cura dois pontos de dano do alvo. Não pode ser utilizado no mesmo alvo mais de uma vez por dia","Este poder cura os efeitos de qualquer veneno, paralisia ou doença (comum ou incomum). Também pode remover energias negativas do corpo causadas por Enfraquecer inimigo ou os poderes de Fôlego Indefeso ou Remover força","preserva o corpo de um recém-morto (menos de um minuto) por 24 horas, sendo assim possível reverter os efeitos que causaram a morte e devolver a vida. Se a causa de morte não for anulada dentro deste período, a vida do alvo torna-se irrecuperável"]
					 	},
						{
							"nome":"Detecção",
							"niveis":["Detectar veneno","Detectar magia","Detectar obstáculo"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Detecção1",
								"Ifá1;Ifá2;Ifá3;Detecção1;Detecção2"
							],
							"descricao":["o sacerdote consegue detectar a presença de venenos em alimentos, bebidas ou outros lugares", "Detecta a presença de magia no ambiente, seja poderes ou objetos. Identifica, inclusive, graças divinas ativas","O uso bem-sucedido deste poder permite ao sacerdote receber uma advertência sobre um obstáculo no seu caminho. O aviso é específico, e pode se referir a uma pessoa, criatura, objeto, lugar, situação ou qualquer outra coisa que pode impedir o sucesso do sacerdote no seu empreendimento atual"]
						},
						{
							"nome":"Proteção",
							"niveis":["Proteger contra inimigos","Proteger contra armas","Proteger contra magia"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Proteção1",
								"Ifá1;Ifá2;Ifá3;Proteção1;Proteção2"
							],
							"descricao":["o alvo pode escolher qualquer pessoa “inimiga” (que não precisa estar presente) para receber uma penalidade de -1 em qualquer teste contra o personagem. Também, se o personagem desejar evitar seu inimigo, torna-se mais difícil (porém não impossível) para aquele inimigo encontrá-lo. Este poder funciona até o próximo amanhecer", "este poder pode ser invocado durante combate, aplicando um bônus de +1 na defesa passiva do alvo até o final da batalha","qualquer magia maliciosa utilizada contra o alvo sofre uma penalidade de -3 na façanha. O efeito dura uma hora"]
						},
						{
							"nome":"Sorte",
							"niveis":["Sorte +1","Sorte +2","Sorte +3"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Sorte1",
								"Ifá1;Ifá2;Ifá3;Sorte1;Sorte2"
							],
							"descricao":["o alvo pode escolher lançar novamente um dado em todas as suas façanhas", "o alvo pode escolher lançar novamente até dois dados em todas as suas façanhas","o alvo pode escolher lançar novamente até três dados em todas as suas façanhas"]
						},
						{
							"nome":"Energia negativa",
							"niveis":["Causar dano","Enfraquecer inimigo","Afastar inimigo"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Energianegativa1",
								"Ifá1;Ifá2;Ifá3;Energianegativa1;Energianegativa2"
							],
							"descricao":["o uso deste poder causa dois pontos de dano. O contato físico é necessário", "o sacerdote consegue amaldiçoar um inimigo, causando uma penalidade de -2 em todos os testes do inimigo durante 24 horas. O ritual leva quatros horas e o inimigo não precisa estar presente","este poder permite ao sacerdote mandar embora alguém com pretensões maldosas ou hostis. O inimigo não buscará nem molestará o sacerdote de nenhuma forma durante seis horas. O inimigo precisa estar no campo de visão do sacerdote para o poder funcionar. Funciona contra pessoas e criaturas de tamanho I ou menor. Seguidores de Ifá, Fé ou Fôlego são imunes a este poder"]
						},
						{
							"nome":"Influência",
							"niveis":["Acalmar","Mudar sentimentos","Encantar"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Influência1",
								"Ifá1;Ifá2;Ifá3;Influência1;Influência2"
							],
							"descricao":["acalma alguém irritado ou bravo. Também pode ser usado para remover confusão ou loucura causada por criaturas sobrenaturais, fazendo o alvo pensar de forma clara e lúcida. O efeito é imediato, mas o alvo pode ficar irritado novamente, dependendo da situação", "influencia o sentimento do alvo sobre uma pessoa específica, fazendo o alvo ter uma opinião melhor ou pior daquela pessoa. O efeito dura seis horas, a não ser que seja anulado por Dissipar magia ou Contrafeitiço","Coloca um poderoso encantamento sobre uma pessoa ou criatura, que faz com que o alvo fique disposto a obedecer qualquer comando do sacerdote que não seja machucar si mesmo. O efeito dura 24 horas, a não ser que venha a ser anulado por Dissipar magia ou Contrafeitiço, ou quebrado pelo próprio sacerdote. O sacerdote pode controlar apenas um ser encantado por vez. O alvo possui consciência de tudo que é ordenado pelo sacerdote, e muitas vezes busca vingança após o término do efeito. O alvo precisa entender o comando do sacerdote antes de agir, o que limita o que o sacerdote consegue fazer com animais e outras criaturas de inteligência limitada. Se alguém atacar o alvo, este se protege normalmente. Se o sacerdote atacar o alvo ou mandar o alvo a atacar a si mesmo, o encantamento se quebra. Quem possui Fé ou Fôlego é imune a este poder"]
						},
						{
							"nome":"Manuseio espiritual",
							"niveis":["Comunicar-se com ancestrais","Encurtar o tempo","Criar Sigidi"],
					 		"requisitos":[
					 			"Ifá1",
								"Ifá1;Ifá2;Manuseioespiritual1",
								"Ifá1;Ifá2;Ifá3;Manuseioespiritual1;Manuseioespiritual2"
							],
							"descricao":["através da adivinhação, o sacerdote faz contato com um dos seus antepassados falecidos. Durante 10 minutos, o invocado pode responder perguntas para as quais sabia a resposta em vida. É necessário um ritual de quatro horas para utilizar este poder", "Tendo um alvo disposto (que pode ser ele mesmo), o sacerdote coloca esta pessoa no meio do caminho entre o mundo físico e o astral, desacelerando o tempo para que aquela pessoa possa andar quatro vezes mais rápido do que o faz normalmente. A pessoa não pode fazer outra coisa senão ir até seu destino escolhido, e o efeito some no momento em que ela chega. O sacerdote só consegue manter uma pessoa por vez sob este efeito","o Sigidi é uma criação de argila, animada através de um ritual. O sacerdote precisa primeiro fabricar o Sigidi, misturando elementos apropriados ao seu propósito, um processo que leva 24 horas. O Sigidi pode ser criado para imitar a forma de um ser humano ou outro mamífero, com ¼ a 1 vara de altura (28 a 110 centímetros). Depois de animado, o Sigidi pode ser ordenado a fazer uma tarefa qualquer para o sacerdote, por exemplo: levar ou procurar um objeto, ou atacar alguém. O Sigidi não consegue falar, mas se tiver mãos, poderá manusear objetos e facas. O Sigidi pode ser destruído com ataques físicos ou pelo uso de Dissipar magia ou Contrafeitiço. De qualquer modo, o Sigidi não dura mais de 24 horas, voltando a ser uma figura inanimada de argila depois"]}
					]
				},
				{
				"nome":"Línguas",
				"habilidades":[
					{"nome":"Português","descricao":[""],"requisitos":[null,"Português1","Português1;Português2"]},
					{"nome":"Latim","descricao":[""],"requisitos":[null,"Latim1","Latim1;Latim2"]},
					{"nome":"Espanhol","descricao":[""],"requisitos":[null,"Espanhol1","Espanhol1;Espanhol2"]},
					{"nome":"Francês","descricao":[""],"requisitos":[null,"Francês1","Francês1;Francês2"]},
					{"nome":"Árabe","descricao":[""],"requisitos":[null,"Árabe1","Árabe1;Árabe2"]},
					{"nome":"Tupi","descricao":[""],"requisitos":[null,"Tupi1","Tupi1;Tupi2"]},
					{"nome":"Guarani","descricao":[""],"requisitos":[null,"Guarani1","Guarani1;Guarani2"]},
					{"nome":"Aimoré","descricao":[""],"requisitos":[null,"Aimoré1","Aimoré1;Aimoré2"]},
					{"nome":"Goitacá","descricao":[""],"requisitos":[null,"Goitacá1","Goitacá1;Goitacá2"]},
					{"nome":"Maracá","descricao":[""],"requisitos":[null,"Maracá1","Maracá1;Maracá2"]},
					{"nome":"Tremembé","descricao":[""],"requisitos":[null,"Tremembé1","Tremembé1;Tremembé2"]},
					{"nome":"Evê","descricao":[""],"requisitos":[null,"Evê1","Evê1;Evê2"]},
					{"nome":"Fon","descricao":[""],"requisitos":[null,"Fon1","Fon1;Fon2"]},
					{"nome":"Ioruba","descricao":[""],"requisitos":[null,"Ioruba1","Ioruba1;Ioruba2"]},
					{"nome":"Quicongo","descricao":[""],"requisitos":[null,"Quicongo1","Quicongo1;Quicongo2"]},
					{"nome":"Quimbundo","descricao":[""],"requisitos":[null,"Quimbundo1","Quimbundo1;Quimbundo2"]},
					{"nome":"Umbundo","descricao":[""],"requisitos":[null,"Umbundo1","Umbundo1;Umbundo2"]}
				]}];

			var bens_iniciais = [];

			var car_selecionadas = [];
			var hab_selecionadas = [];
			var char_resistencia = 10;
			var char_pts_h = 20;
			var char_din = 1000;

			$( document ).ready(function() {
		      	$.get("navbar.html", function (data) {
                    $("#main").append(data);
                    var nav_active = $("#nav-create");
                    nav_active.addClass("active");


                    $( "#form-buscar" ).submit(function( e ) {
				        e.preventDefault();
				        $.ajax({
				            url: 'consulta.php',
				            type:'POST',
				            contentType: "application/x-www-form-urlencoded;charset=utf-8",
				            data:
				            {
				                nome: $('#busca').val()
				            },
				            success: function(msg)
				            {	
				            	console.log(msg);
				        		$('#input-nome').val(msg.nome);
				   				$("#preview-nome").text(msg.nome);
				        		sorted_portraits = [msg.perfil];
				    			$('#input-portrait').attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
				    			$('#preview-portrait').attr("src", "/imgs/portraits/portrait"+msg.perfil+".jpg");
				                $('#select-idade').val(msg.idade);
				  				$("#preview-idade").text(msg.idade);
				                $('#select-nacionalidade').val(msg.nacionalidade);
				  				$("#preview-nacionalidade").text(msg.nacionalidade);
				                $('#select-etnia').val(msg.etnia);
				                
				                var array_b = msg.caracteristicas.split(',');
				                car_selecionadas = array_b;
				                for(var i = 0; i < array_b.length; i++){
				                	$("#"+array_b[i]).attr('checked',true);
				                	console.log($("#"+array_b[i])[0]);
			                		//ChangeCaracteristicas();
				                }

				                char_resistencia = msg.resistencia;
				  				$("#preview-resistencia").text(char_resistencia.toString());

				                var array_a = msg.habilidades.split(',');
				                hab_selecionadas = array_a;
				                for(var i = 0; i < array_a.length; i++){
				                	var el_h = $('#'+array_a[i]);
				                	$(el_h[0]).attr('checked',true);
				                	ChangeHabilidade(array_a[i]);
				                }
				                
				                char_pts_h = msg.pts_h;
			  					$("#preview-pts-h").text(char_pts_h.toString());
				                char_din = msg.dinheiro;
			  					$("#preview-dinheiro").text(char_din.toString());

				                var array_c = msg.bens.split(',');
				                bens_iniciais = array_c;
				                $("#preview-bens").empty();
				                // for(var i = 0; i < array_c.length; i++){
				                // 	AddBens(array_c[i])
				                // }
				                
				                $('#input-historia').val(msg.historia);
				            }               
				        });
				    });
                });

				$( "#form" ).submit(function( e ) {
			        e.preventDefault();
			        //$('.submit').attr("disabled","disabled");
			        
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
			            url: 'cadastro.php',
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
			        		alert("Criado");
			            }               
			        });});

			    $("#input-nome").on("change paste keyup", function() {
				   $("#preview-nome").text($("#input-nome").val());
				});
			});

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
			  		//console.log(this.value);
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
			   		$("#preview-caracteristica-"+_el.id).remove();
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
			   		car_selecionadas.push(_el.id);
			   		var c = document.createDocumentFragment();
	            	var span = document.createElement("span");
	            		span.innerHTML = _el.value;
	            		span.id = "preview-caracteristica-"+_el.id;
						c.appendChild(span);
	            	$("#preview-caracteristicas").append(c);
			   	}


			   	if($("input[name='caracteristicas']:checked").length == limit){
			   		$(".caracteristicas-holder:not(#caracteristicas-"+car_selecionadas[0]+",#caracteristicas-"+car_selecionadas[1]+",#caracteristicas-"+car_selecionadas[2]+")").slideUp('fast');
			   	}else if($("input[name='caracteristicas']:checked").length < limit){
			   		$(".caracteristicas-holder").slideDown('fast');
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
							                	// 	var proibicoes_list = habilidades[i].habilidades[j].proibicoes[k-1].split(";");
							                	// 	for(var z = 0; z < proibicoes_list.length; z++){
						                		// 		checkbox.classList.add("not-requisito-"+proibicoes_list[z]);
							                	// 	}
							                	// }

							                	// if(habilidades[i].habilidades[j].proibicoes != undefined && habilidades[i].habilidades[j].proibicoes[k-1] != null){
							                	// 	var proibicoes_list = habilidades[i].habilidades[j].proibicoes[k-1].split(";");
							                	// 	for(var z = 0; z < proibicoes_list.length; z++){
						                		// 		checkbox.classList.add("proibicoes-"+proibicoes_list[z]);
							                	// 	}
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

            	$(".preview-habilidade-"+id).remove();
            	var el = $("#"+hab);
			 	if(el[0].checked){
			 		DiminuirPtsH(number);
			 		AumentarResistencia(id,number);
			 		//ChecarBens(id, 0);
			   		$("#"+id).addClass("after"+number);

			   		var c = document.createDocumentFragment();
                	var span = document.createElement("span");
                		span.className = "preview-habilidade-"+id;
                		var s = id.replace("-"," ");
                		span.innerHTML = s+" "+number;
						c.appendChild(span);
                	$("#preview-habilidades").append(c);
					
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
			 		//ChecarBens(id, 1);

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
                $('#preview-bens').empty();
				bens_iniciais.push(obj);
				for(var i = 0; i < bens_iniciais.length; i++){
					var c = document.createDocumentFragment();
	            	var span = document.createElement("span");
	            		span.innerHTML = bens_iniciais[i];
						c.appendChild(span);
	            	$('#preview-bens').append(c);
				}};

            $(document).ready(function() {
            	CreateCaracteristicas();
            	CreateNacionalidade();
            	CreateHabilidades();
            	CreateIdade();
            	CreateEtnia();

				AddBens("Rede");
				AddBens("Mochila");
				AddBens("Roupas comuns");
            });

            function ToggleCategoria(el){
            	$("#habilidades-categoria-holder-"+el.id.replace(/ /g,'-')).slideToggle('fast', function() {
				    if ($(this).is(':visible'))
				        $(this).css('display','flex');
				});
            }

            function ToggleNiveis(el){
            	$("#"+el.id+"-niveis").slideToggle('fast', function() {
				    if ($(this).is(':visible'))
				        $(this).css('display','flex');
				});
            }
            var sorted_names = [];
            var cur_name = 0;
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
            	}
            }

            function PreviousName(){
            	if(cur_name - 1 < 0){
            		$("#previous-name").hide();
            		return;
            	}
            	cur_name--;
            	$('#input-nome').val(sorted_names[cur_name]);
            	$('#preview-nome').text(sorted_names[cur_name]);
            }



            var sorted_portraits = [];
            var cur_portrait = 0;
            function RandomPortrait(){

        		var a = randomInteger(0, 124);
        		
    			sorted_portraits.push(a);
    			$('#input-portrait').attr("src", "/imgs/portraits/portrait"+a+".jpg");
    			$('#preview-portrait').attr("src", "/imgs/portraits/portrait"+a+".jpg");
    			cur_portrait = sorted_portraits.length-1;

            	if(sorted_portraits.length >= 2){
            		$("#previous-portrait").show();
            	}
            }

            function PreviousPortrait(){
            	if(cur_portrait - 1 < 0){
            		$("#previous-portrait").hide();
            		return;
            	}
            	cur_portrait--;
    			$('#input-portrait').attr("src", "/imgs/portraits/portrait"+sorted_portraits[cur_portrait]+".jpg");
    			$('#preview-portrait').attr("src", "/imgs/portraits/portrait"+sorted_portraits[cur_portrait]+".jpg");

            }

            var hab_resistencia = ["Acrobacia","Força-Física","Natação","Escalada","Boxe","Capoiera","Luta-livre"];

            function AumentarPtsH(_number){
            	if(_number == 3){
        			char_pts_h += 4;
            	}else{
        			char_pts_h += _number;
            	}
			  	$("#preview-pts-h").text(char_pts_h.toString());
            }

            function DiminuirPtsH(_number){
            	if(_number == 3){
        			char_pts_h -= 4;
            	}else{
        			char_pts_h -= _number;
            	}
			  	$("#preview-pts-h").text(char_pts_h.toString());
            }

            function AumentarResistencia(_id, _number){
            	var i = hab_resistencia.indexOf(_id);
            	if(_number == 3 && i > -1){
            		char_resistencia++;
				  	$("#preview-resistencia").text(char_resistencia.toString());
            	}
            }

            function DiminuirResistencia(_id, _number){
            	var i = hab_resistencia.indexOf(_id);
            	if(_number == 3 && i > -1){
            		char_resistencia--;
				  	$("#preview-resistencia").text(char_resistencia.toString());
            	}
            }

            function randomInteger(min, max) {
			  return Math.floor(Math.random() * (max - min + 1)) + min;
			}
		</script>
		<style type="text/css">
			html, body{
				width: 100%;
				height: 100%;
				margin: 0;
			    background-color: white;
			}
			h6, h5, h6{
				margin: 0;
			}

			.habilidades-habilidade-holder{
				display: flex;
				flex-direction: column;
   				margin-left: 15px;
			}

			.habilidades-niveis-holder{
			    display: flex;
			    flex-direction: column;
			    margin-left: 15px;
			}

			.habilidades-habilidade-name:before {
			    content: " » ";
			}

			.small-custo{
				font-weight: normal !important;
			}

			.bold{
				font-weight: bolder;
			}

			.after1:after{
			    content: " 1 ";
			}

			.after2:after{
			    content: " 2 ";
			}

			.after3:after{
			    content: " 3 ";
			}

			.label-caracteristicas, .label-habilidade{
				margin-left: 10px;
				margin-bottom: 0;
			}

			.caracteristicas-holder{

			}

			.caracteristicas-text{
			    display: block;
   				margin-bottom: 15px;
			}

			.habilidades-descricao{
				display: block;
   				margin-bottom: 5px;
			}

			.habilidades-nivel{
				display: block;
			}

			.clickable{
				text-decoration: underline;
				font-style: italic;
				cursor: pointer;
			}
			#previous-name,#previous-portrait, #random-name{
				display: none;
			}
			.habilidades-categoria-name{
				text-decoration: underline;
			}

			.habilidades-categoria-name:before {
			    content: " » ";
			}

			.nacionalidade-flavor-title{
				font-weight: bold;
			}

			.nacionalidade-aliados-title,.nacionalidade-inimigos-title{
				font-size: 1.2em;
				font-weight: bold;
			}
		</style>
	</head>
	<body> 


		<div style="width: 20%;background-color: black;color: white;position: fixed;top: 5%;left: 2.5%;display: flex;flex-direction: column;padding: 1em;border-radius: 0.6em;">
			<div style="display: flex;"><span style="width: 35%;display: block;margin-bottom: 1.5em;"><img style="width: 100%;" id="preview-portrait" src="/imgs/portraits/portrait0.jpg"></span></div>
			<div style="display: flex">
				<div style="flex: 1;margin-right: 1.5em;">
					<h6 style="color: lightcoral;">Nome:</h6>
					<h5 id="preview-nome"></h5>
				</div>
				<div style="margin-right: 2em;display: flex;">	
					<h6 style="margin-right: 0.3em;color: lightcoral;">Idade:</h6>
					<h5 id="preview-idade"></h5>
				</div>
			</div>
			<div style="margin-top: 1em;">
				<h6 style="color: lightcoral;">Nacionalidade:</h6>
				<h5 id="preview-nacionalidade"></h5>
			</div>
			<div style="margin-top: 1em;">
				<h6 style="color: lightcoral;">Características:</h6>
				<h5 style="display: flex;flex-direction: column;" id="preview-caracteristicas"></h5>
			</div>
			<div style="margin-top: 1em;">
				<div style="display: flex">
					<h6 style="flex: 1;margin-right: 1.5em;color: lightcoral;">Habilidades:</h6>
					<div style="margin-right: 2em;display: flex;">
						<h6 style="margin-right: 0.3em;color: lightcoral;">PH:</h6>
						<h5 id="preview-pts-h">20</h5>
					</div>
				</div>
				<div style="display: flex">
					<h5 style="display: flex;flex-direction: column;flex: 1;" id="preview-habilidades"></h5>
					<div style="margin-right: 2em;display: flex;">
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
				<h2 style="margin-top: 5%;">Criar Personagem</h2>
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
				<div id="bens-lists">
					

				</div>
				<input class="submit" type="submit" name="submit" value="ENTRAR">
			</form>
		</div>
	</body>
</html>