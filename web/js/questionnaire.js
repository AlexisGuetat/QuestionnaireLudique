
//FONCTION JS PERMETTANT D'ATTRIBUER UNE VALEUR ALEATOIRE AU QUESTION
var reponse_juste   = $('#rep0').val();

$(document).ready(function() {

var reponse0        = $('#rep0').val();
var reponse1        = $('#rep1').val();
var reponse2        = $('#rep2').val();
var reponse3        = $('#rep3').val();

var reponses = Array(reponse0,reponse1,reponse2,reponse3);
var reponse;

for(var i = 0 ; i< 4 ; i++)
{   
    reponse = reponses[Math.floor(Math.random()*reponses.length)];
    $('#rep' + i ).val(reponse).html("<b>"+reponse+"</b>");
    for(var j = 0; j< reponses.length ; j++)
        {
            if(reponse == reponses[j]) { reponses.splice(j,1); }
        }
}
});

//AU CLIQUE D'UN BOUTON DIRE SI LA REPONSE CLIQUER EST JUSTE OU NON ET AFFICHER UNE POP UP 
$('button[name="rep"]').click(function(){
    
    if( $(this).val() ==  reponse_juste)
    {
        
        $('#centralModalSuccess').modal('show');
    }
    else
    {
        
        $('#centralModalError').modal('show');
    }
});