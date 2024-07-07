$(document).ready(()=>{
    
    $(".addToCart").click((e)=>{
        var idnum = e.target.id.substring(7)
        
        var name = $("#product-name").text()
        var price = $("#product-price").text().substring(1)
        var idInc;

        $.get("../Controllers/recoverCurrentId.php",(data2)=>{
            idInc = data2
            e.target.id = idInc 
                
            $.post("../Controllers/AddCart.php",{   
                id : idInc, 
                label: name,
                price: price
            },(data)=>{
                console.log(" id is :"+idInc)
            })
        });

        
    })
})