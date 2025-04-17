$("#add").click(function( e ){
    num1 = Number( $('#no1').val() )    
    num2 = Number( $('#no2').val() )    


    $("#calculate").fadeIn();
    $("#calculate").text( num1 + num2 );
    
}

)
    
$("#sub").click(function( e ){
    num1 = Number( $('#no1').val() )    
    num2 = Number( $('#no2').val() )    


    $("#calculate").fadeIn();
    $("#calculate").text( num1 - num2 );
    
}

)
    
$("#mult").click(function( e ){
    num1 = Number( $('#no1').val() )    
    num2 = Number( $('#no2').val() )    


    $("#calculate").fadeIn();
    $("#calculate").text( num1 * num2 );
    
}

)
$("#div").click(function( e ){
    num1 = Number( $('#no1').val() )    
    num2 = Number( $('#no2').val() )    


    $("#calculate").fadeIn();
    $("#calculate").text( num1 / num2 );
    
}

)