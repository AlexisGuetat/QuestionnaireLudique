  function orderElems()
    {
      var elems = [], tempElem, pn, args = orderElems.arguments;
                 
      for( var i = 0, len = args.length; i < len; i++ )
        ( pn = ( elems[ i ] = tempElem = document.getElementById( args[ i ] ) ).parentNode).removeChild( tempElem );
        for( var i = len - 1, idx, tmp; i > -1; i-- ){ 
          while(( idx = Math.floor( Math.random() * len )) == i );
            tmp = elems[ i ];
            elems[ i ] = elems[ idx ];
            elems[ idx ] = tmp;
            } 
              for( var i = 0; i < len; i++ )
              pn.appendChild( elems[ i ] );
    }
        orderElems( 'rep1', 'rep2', 'rep3', 'rep4' );

        for (var i = 0; i < 5; i++) {
          $('.divPrincipal').append('<div class="btn"></div>');
        }
        $( '.btn' ).each(function( index ) {
          $(this).css({
            left : ((Math.random() * $('.main').width())),
            top : ((Math.random() * $('.main').height()))
          });
        });
        
  /*$(".test").html($(".test .btn").sort(function(){
          return Math.random()-0.5;
      }));*/
        
      /*$(document).ready(function(){
        $('div').each(function(){
              // get current div
              var $div = $(this);
              // get array of list items in current div
              var $liArr = $div.children('div');
              // sort array of list items in current div randomly
              $liArr.sort(function(a,b){
                    // Get a random number between 0 and 10
                    var temp = parseInt( Math.random()*10 );
                    // Get 1 or 0, whether temp is odd or even
                    var isOddOrEven = temp%2;
                    // Get +1 or -1, whether temp greater or smaller than 5
                    var isPosOrNeg = temp>5 ? 1 : -1;
                    // Return -1, 0, or +1
                    return( isOddOrEven*isPosOrNeg );
              })
              // append list items to div
              .appendTo($div);            
        });
  });*/
        
                