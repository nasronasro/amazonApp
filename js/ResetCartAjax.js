$(document).ready(()=>{
    $("#resetBtn").click(()=>{
        $.get("../Controllers/ResetCart.php",()=>{
            $(".main-container").html("<h1>The cart is empty</h1>");
        })
    })
})