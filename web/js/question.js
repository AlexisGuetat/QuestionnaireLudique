$(document).ready(function() {
    var test = $("#nbrQuestion").text();
    if( test  >= 50 )
    {   
        $('#centralModalSuccess').modal('show');
        $('#ajout').attr('disabled', true);
    }
});