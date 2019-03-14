$(".supprimer").click(function (e) { 
    e.preventDefault();

    var titre = $('#titre').text();

    $.ajax({
        type: "post",
        url: "{{ path('administrateur_delete') }}",
        data: "titre=" + titre,
        dataType: "html",
        success : function(code_html, statut){ // code_html contient le HTML renvoyé
            $(document).html(code_html);
        }
    });

    //$reponseAjax = $ajax
});