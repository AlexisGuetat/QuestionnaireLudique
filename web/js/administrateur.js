$('#other').hide(); 
    $(document).ready(function() {   
    $('#theme').change(function(){   
    if($('#theme').val() === 'AUTRES')   
       {   
       $('#other').show();    
       }   
    else 
       {   
       $('#other').hide();      
       }   
    });   
    });