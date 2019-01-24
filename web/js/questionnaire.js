
$('#questionnaire2').click(function (e) { 
    e.preventDefault();

    $.ajax({
        type: "post",
        url: "login",
        dataType: "html",
        success: function (response) {
            $("#QuestionnaireModal").modal('show');
        }
    });
    
});

