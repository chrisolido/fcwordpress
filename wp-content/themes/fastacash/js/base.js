if( !window.location.hash && window.addEventListener ){
    window.addEventListener( "load",function() {
        setTimeout(function(){
            window.scrollTo(0, 0);
        }, 0);
    });
    
   
}