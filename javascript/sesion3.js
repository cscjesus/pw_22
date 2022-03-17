function decorar(){
    let parrafo = document.getElementById('texto');
    parrafo.style.textDecoration = 'underline';
}
function negrita(){
    let parrafo = document.getElementById('texto');
    parrafo.style.fontWeight ='bold';
}
function cambiarSize(){
    let parrafo = document.getElementById('texto');
    let size = document.getElementById('size').value;
    parrafo.style.fontSize =size+"px";
}