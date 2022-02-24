function saludar(){
  var nombre = document.getElementById('txtNombre').value;
  var apellido = document.getElementById('txtApellido').value;
  alert("Bienvenido "+nombre+" "+apellido);
  //console.log("Bienvenido "+nombre+" "+apellido);
  //alert('Hola mundo');
}
function cambiarColor(){
  var color = document.getElementById('miColor').value;
  var lienzo = document.getElementById('miDiv');
  lienzo.style.background=color;
  //alert('hola color');
}