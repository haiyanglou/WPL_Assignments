function pageLoad(){
document.getElementById("btn").onclick = okayClick;
}

var p = document.createElement("p");
p.innerHTML = "Input Successful";
p.style.color="green";

var p1 = document.createElement("p1");
p1.innerHTML = "You should enter values for all input fields";
p1.style.color="red";


function okayClick(){
if (document.getElementById("uname").value != "" && document.getElementById("pwd").value != "" 
    && document.getElementById("phone").value != ""){
document.getElementById("p1").appendChild(p);}
else
document.getElementById("p1").appendChild(p1);
}



window.onload = pageLoad;  