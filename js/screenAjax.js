$(document).ready(()=>{
    ajustToSize();
    $(window).resize((event)=>{
        ajustToSize();
    });

function ajustToSize(){
    var currentWidth =  $(window).width()
        $(".card-container").load("../Controllers/resizeController.php",{
            Winwidth: currentWidth       
        });
}
});