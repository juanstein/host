var ingresosDeLunes = [10, -5, 3, 0];

function seAbre (horarios, minimo) {
    var temprano = 0;
    for (var i = 0; i < horarios.length; i++){
        if (horarios[i] < 1){
        temprano = temprano + 1;
    }
    if (temprano >= minimo){
        return true;
    } else {
        return false;
        }
    }
		console.log(temprano);
}
seAbre(ingresosDeLunes, 2);
