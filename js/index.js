$( document ).ready(function() {

});

function windowSize(){
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
    

    //if(w/h > 0.9){
        $("#background-img" ).css("width", "100%");
        $("#background-img" ).css( "height", "auto");
    //}else{
    //    $( "#background-img" ).css( "height", "100%");
    //    $( "#background-img" ).css( "width", "auto");
    //}
};

window.addEventListener("load", windowSize);
window.addEventListener("resize", windowSize);