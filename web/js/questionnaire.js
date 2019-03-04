var reponse_juste       = $('#rep0').val();
var score               = parseInt($('#score').text()) ;
var numero_question     = parseInt($('#numero_question').text()) ;

// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setDate(countDownDate.getDate() + 30);


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
function newQuestion(score_register){
    $('a[name="click_modal"]').click(function(){
       
        var pathArray = window.location.pathname.split('/');
        
        var newPathname="";
        for (i = 0; i < pathArray.length - 1; i++) {
            newPathname += "/";
            newPathname += pathArray[i];
        }
        
        $.ajax({
            type: "POST",
            data: "&score=" + score_register, 
            dataType : 'html',
            success: function (response) {
               window.location =  numero_question + "." + score_register;
            
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
        score = score + 1;
        $('#score').text(score);
    }
    else
    {
        $('#centralModalError').modal('show');
    }
    newQuestion(score);
});
}

function decompte(){
    
    
    var countdownNumberEl = document.getElementById('countdown-number');
            var countdown = 10; //choix du temps 
            
            countdownNumberEl.textContent = countdown;
            
            var x = setInterval(function() {
              countdown = --countdown <= 0 ? 0 : countdown; //permet de pas recommencer a l'infini le chrono une fois arrivé à 0
              countdownNumberEl.textContent = countdown;

              // If the count down is finished, write some text
      $('button[name="rep"]').click(function (e) { 
        e.preventDefault();
        clearInterval(x);
        newQuestion(score);
    });

    if (countdown <= 0) {
      clearInterval(x);
      $('#centralModalTimer').modal('show');
      newQuestion(score);
    }
              
            }, 1000);
}


decompte();
randomQuestion();
clickButton();

$('#progress_bar').width( score * 2  +"%");

