var reponse_juste       = $('#rep0').val();
var score               = parseInt($('#score').text()) ;
var numero_question     = parseInt($('#numero_question').text()) ;

// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setDate(countDownDate.getDate() + 30);


function decompte(){    
    
    var countdownNumberEl = document.getElementById('countdown-number');

           var countdown = 20 ; //choix du temps            
           countdownNumberEl.textContent = countdown;            
           var x = setInterval(function() {

             countdown = --countdown <= 0 ? 0 : countdown; //permet de pas recommencer a l'infini le chrono une fois arrivé à 0

             countdownNumberEl.textContent = countdown;             
              if(countdown==10){

               document.getElementById('countdown-number').style.color = "orange";              } 
               else if (countdown==5){

               document.getElementById('countdown-number').style.color = "red";

             }              // If the count down is finished, write some text


             if (countdown <= 0) {

                clearInterval(x);
                $('#centralModalTimer').modal('show');
                newQuestion();
            }            
    }, 1000);

}

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
   
        var pathArray = window.location.pathname.split('/');
        
        var newPathname="";
        for (i = 0; i < pathArray.length - 1; i++) {
            newPathname += "/";
            newPathname += pathArray[i];
        }
        
        $.ajax({
            type: "POST",
            data: "&score=" + score, 
            dataType : 'html',
            success: function (response) {
               window.location =  numero_question + "." + score;
            
            }
        });
    
    }


//AU CLIQUE D'UN BOUTON DIRE SI LA REPONSE CLIQUER EST JUSTE OU NON ET AFFICHER UNE POP UP 
function clickButton(){
$('button[name="rep"]').click(function(e){
    e.preventDefault();

    if( $(this).val() ==  reponse_juste)
    {   
        $('#centralModalSuccess').modal('show');         
    }
    else
    {
        $('#centralModalError').modal('show');
    }

    newQuestion()
});
}


/**
 * ICI ON SELECTIONNE LE NUMERO DE QUESTION 
 * AU BOUT DU QUEL ON AFFICHE LE MODAL POUR VOIR SON SCORE
 */
$(document).ready(function () {
    if(numero_question >= 10 )
    {
        $('#centralModalScore').modal('show');
    }
});
    

decompte();
randomQuestion();
clickButton();


$('#progress_bar').width( score * 2  +"%");

