function calcItemPrice() {
   var orangeQuantity = document.getElementById("orangeId").value;
   var orangePrice = orangeQuantity * 0.10;

   var mangoQuantity = document.getElementById("mangoId").value;
   var mangoPrice = mangoQuantity * 0.15;

   var bananaQuantity = document.getElementById("bananaId").value;
   var bananaPrice = bananaQuantity * 0.20;
   
   var tangerineQuantity = document.getElementById("tangerineId").value;
   var tangerinePrice = tangerineQuantity * 0.30;

   var appleQuantity = document.getElementById("appleId").value;
   var applePrice = appleQuantity * 0.50;

   var totalPrice = orangePrice + mangoPrice + bananaPrice + tangerinePrice + applePrice ;
   var tax = totalPrice * .01;
   var shpping = totalPrice * .05;

   var subTotal = totalPrice + tax + shpping;
   var toBeFixed = subTotal.toFixed(2);

   document.getElementById("total").innerHTML =toBeFixed;
}
