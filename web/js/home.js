//Déclaration des different type de sondage
var tab_choices=new Array();
tab_choices['c3']=new Array("Textuel","/media/pictures/icone_autre.png");
tab_choices['c1']=new Array("Lieux","/media/pictures/icone_map.png");
tab_choices['c2']=new Array("Date","/media/pictures/icone_calendrier.png");

var span_select= document.getElementsByClassName("span_select");
var input_hidden=document.getElementById("form_Type");

function saveState(choice){
	for (var i=0;i < span_select.length;i++){
		span_select[i].firstChild.setAttribute("src",tab_choices[choice.id][1]);
		span_select[i].lastChild.nodeValue=tab_choices[choice.id][0] ;
	}	
	input_hidden.value=choice.id;
}