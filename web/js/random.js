var elems = [], tempElem, pn, args = orderElems.arguments;
 for( var i = 0, len = args.length; i < len; i++ )
  ( pn = ( elems[ i ] = tempElem = document.getElementById( args[ i ] ) ).parentNode).removeChild( tempElem );
  
 for( var i = len - 1, idx, tmp; i > -1; i--)
 { 
  while( ( idx = Math.floor( Math.random() * len ) ) == i );
  tmp = elems[ i ];
  elems[ i ] = elems[ idx ];
  elems[ idx ] = tmp;
 } 
 for( var i = 0; i < len; i++ )
  pn.appendChild( elems[ i ] );

orderElems( 'btn1', 'btn2', 'btn3','btn4' );