$(document).ready(function() {
    var test = $("#nbrQuestion").text();
    if( test  >= 30 )
    {   
        $('#centralModalSuccess').modal('show');
        $('#ajout').attr('disabled', true);
    }
});


