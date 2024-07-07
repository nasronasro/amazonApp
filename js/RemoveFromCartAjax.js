$(document).ready(()=>{
    $(".removeBtn").click((event)=>{
        var idVal = event.target.id.substring(6)
        console.log("id value is : " + idVal)
        $.post("../Controllers/RemoveFromCart.php",{    
            id : idVal           
        },(data)=>{
            $(event.target).parent().remove()
        })
    })
})