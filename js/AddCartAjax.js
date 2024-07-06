$(document).ready(()=>{
    $(".addToCart").click((e)=>{
        var idnum = e.target.id.substring(7)
        
        var name = $("#product-name"+idnum).text()
        var price = $("#product-price"+idnum).text()
        $.post("../Controllers/AddCart.php",{    
            label: name,
            price: price
        },(data)=>{
            console.log(data)
        })
    })
})