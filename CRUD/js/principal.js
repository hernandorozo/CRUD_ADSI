var rol=document.getElementById("rol").value; 
alert("mnmnmnasd" + rol);

if(rol=="ADMIN")
{
    document.getElementById("1").style.visibility="visible";
    document.getElementById("2").style.visibility="visible";
    document.getElementById("3").style.visibility="visible";
    document.getElementById("4").style.visibility="visible";
    //document.getElementById("caja1").style.visibility="hidden";
}
if(rol=="CAJERO")
{
    document.getElementById("1").style.visibility="visible";
    document.getElementById("2").style.visibility="hidden";
    document.getElementById("3").style.visibility="visible";
    document.getElementById("4").style.visibility="hidden";
}