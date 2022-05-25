function saludar(){
  var nombre = document.getElementById('txtNombre').value;
  var apellido = document.getElementById('txtApellido').value;
  
  alert("Bienvenido "+nombre+" "+apellido);
  var color = document.getElementById('miColor').value;
  var lienzo = document.getElementById('miDiv');
  lienzo.style.background=color;
  //console.log("Bienvenido "+nombre+" "+apellido);
  //alert('Hola mundo');
}
function cambiarColor(){
  /*var color = document.getElementById('miColor').value;
  var lienzo = document.getElementById('miDiv');
  lienzo.style.background=color;*/

  //alert('hola color');
}
function crearDegradado(){
  //alert("ok");
  var color1 = document.getElementById("color1").value;
  var color2 = document.getElementById("color2").value;
  var lienzo = document.getElementById("degradado");
  lienzo.style.background = "linear-gradient("+color1+","+color2+")";
}
// <!-- jhl -->
