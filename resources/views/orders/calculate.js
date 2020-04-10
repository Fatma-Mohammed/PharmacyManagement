let total_price=document.getElementById("total_price");
let medicine_price=document.getElementById("medicine_price");
let quantity=document.getElementById("quantity");
document.getElementById("calculate").addEventListener("click",(ev)=>total_price.value= (quantity*medicine_price));