function clickIci(){
alert("Clicked!");
}
function changeColor(){
 var userChange = "userTex";
 var textbox = document.getElementsById(userChange);
 var changeDiv = "div1";
 var div = document.getElementsById(changeDiv);
 var color = textbox.value;
 div.style.backgroundColor = color;
}