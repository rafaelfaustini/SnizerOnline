function exec() {

document.body.style.backgroundColor = "#27ae60";
    var a1 = document.getElementById("a").value;
	var a2 = document.getElementById("d").value;
	var a3 = document.getElementById("g").value;
	var b1 = document.getElementById("b").value;
	var b2 = document.getElementById("e").value;
	var b3 = document.getElementById("h").value;
	var c1 = document.getElementById("c").value;
	var c2 = document.getElementById("f").value;
	var c3 = document.getElementById("i").value;
	var r1 = document.getElementById("j").value;
	var r2 = document.getElementById("k").value;
	var r3 = document.getElementById("l").value;



var d1 = (a1*b2*c3)+(b1*c2*a3)+(c1*a2*b3);
var d2= (a3*b2*c1)+(b3*c2*a1)+(c3*a2*b1);
var d3= d1-(d2);
var dx1= (r1*b2*c3)+(b1*c2*r3)+(c1*r2*b3);
var dx2= (r3*b2*c1)+(b3*c2*r1)+(c3*r2*b1);
var dx3= dx1-(dx2);
try {
 var dx=dx3/d3;
}

 catch(err) {
    var dx=0;
}
var dy1= (a1*r2*c3)+(r1*c2*a3)+(c1*a2*r3);
var dy2= (a3*r2*c1)+(r3*c2*a1)+(c3*a2*r1);
var dy3= dy1-(dy2);
try{
	var dy=dy3/d3;
}
 catch(err) {
	 var dy=0;
 }




var dz1= (a1*b2*r3)+(b1*r2*a3)+(r1*a2*b3);
var dz2= (a3*b2*r1)+(b3*r2*a1)+(r3*a2*b1);
var dz3= dz1-(dz2);
try{
	dz=dz3/d3;
}
catch(err){
	dz=0;
}

if (a1==null || a1=="",a2==null || a2=="",a3==null || a3=="",b1==null || b1=="",b2==null || b2=="",b3==null || b3=="",c1==null || c1=="",c2==null || c2=="",c3==null || c3=="",r1==null || r1=="",r2==null || r2=="",r3==null || r3=="")
{
alert("Por favor preencha todos os campos corretamente (Em caso de vazio preencha o coeficiente como 0)")
}
else
{
document.write('<img src="snizer.png"style="width:192px;height:108px;">');
document.write('<br><b><font color=white face="overpass">Regra de Cramer Online By Rafael Faustini</font></br></b>');
var d = new Date();
document.write('<font color=white face="overpass"><br><b>'+Date()+'</b><br><br></font>');
document.write('<font color=white face="overpass"><b>Sistema com 3 variaveis 3x3</b><br></font>');
document.write("<hr color=white>");
document.write('<font color=white face="overpass">A diagonal principal D é '+d1+'<br></font>');
document.write('<font color=white face="overpass">A diagonal secundária D é '+d2+'<br></font>');
document.write('<font color=white face="overpass">O valor de D é '+d3+'<br></font>');
document.write("<hr color=white>");

document.write('<font color=white face="overpass">A diagonal principal Dx é '+dx1+'<br></font>');
document.write('<font color=white face="overpass">A diagonal secundária Dx é '+dx2+'<br></font>');
document.write('<font color=white face="overpass">O valor de Dx é '+dx3+'<br></font>');
document.write('<font color=white face="overpass">O valor de X é '+dx+'<br></font>');
document.write("<hr color=white>");

document.write('<font color=white face="overpass">A diagonal principal de Dy é '+dy1+'<br></font>');
document.write('<font color=white face="overpass">A diagonal secundária de Dy é '+dy2+'<br></font>');
document.write('<font color=white face="overpass">O valor de Dy é '+dy3+'<br></font>');
document.write('<font color=white face="overpass">O valor de Y é '+dy+'<br></font>');
document.write("<hr color=white>");

document.write('<font color=white face="overpass">A diagonal principal de Dz é '+dz1+'<br></font>');
document.write('<font color=white face="overpass">A diagonal secundária de Dz é '+dz2+'<br></font>');
document.write('<font color=white face="overpass">O valor de Dz é '+dz3+'<br></font>');
document.write('<font color=white face="overpass">O valor de Z é '+dz+'<br></font>');
document.write("<hr color=white>");
document.write('<font color=white face="overpass">&#x25CB Esta versão está em testes, caso encontre algum problema contatar(contato@rafaelfaustini.com.br)<br><br><br></font>');
document.body.style.backgroundColor = "#27ae60";

}












}
