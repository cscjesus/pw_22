function decorar(){
    let parrafo = document.getElementById('texto');
    let estatus =parrafo.style.textDecoration;
    if(estatus=='underline')
        parrafo.style.textDecoration='none';
    else
        parrafo.style.textDecoration = 'underline';
}
function negrita(){
    let parrafo = document.getElementById('texto');
    let estatus = parrafo.style.fontWeight;
    if(estatus=='normal')
        parrafo.style.fontWeight ='bold';
    else
        parrafo.style.fontWeight ='normal';
}
function cambiarSize(){
    let parrafo = document.getElementById('texto');
    let size = document.getElementById('size').value;
    parrafo.style.fontSize =size+"px";
}
// <!-- jhl -->
