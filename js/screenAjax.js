$(document).ready(()=>{
    $(window).resize((event)=>{
        var currentWidth =  $(window).width()
        $(".card-container").load("../Controllers/resizeController.php",{
            Winwidth: currentWidth       
        });
    });
});