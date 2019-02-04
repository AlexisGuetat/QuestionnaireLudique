var reponse_juste   = $('#rep0').val();
var score           = parseInt($('#score').text()) ;


//FONCTION JS PERMETTANT D'ATTRIBUER UNE VALEUR ALEATOIRE AU QUESTION
function randomQuestion(){
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
}

//CHARGE LA QUESTION SUIVANTE
function newQuestion(){
    $('a[name="click_modal"]').click(function(){
       
        var pathArray = window.location.pathname.split('/');
        var num_question = parseInt(pathArray[8]) + 1;
    
        var newPathname="";
        for (i = 0; i < pathArray.length - 1; i++) {
            newPathname += "/";
            newPathname += pathArray[i];
        }
    
        $.ajax({
            type: "GET",
            data: "num_question=" + $('#numero_question').text(),
            dataType : 'html',
            success: function (response) {
                window.location =  num_question ;
            }
        });
        
    });
    }

    
//AU CLIQUE D'UN BOUTON DIRE SI LA REPONSE CLIQUER EST JUSTE OU NON ET AFFICHER UNE POP UP 
function clickButton(){
$('button[name="rep"]').click(function(){
    
    if( $(this).val() ==  reponse_juste)
    {
        $('#centralModalSuccess').modal('show');
        score++;
    }
    else
    {
        $('#centralModalError').modal('show');
    }
    console.log(score);
    newQuestion();
});
}



randomQuestion();
clickButton();

$('#score').text(score);
$('#progress_bar').width( 80  +"%");