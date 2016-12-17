var palo = "espadas";
function paloDeTruco (palo) {
	var cartas = [];
	for (var i = 1; i < 8; i++) {
		cartas.push(i + ' de ' + palo);
	}
	for (var j = 10; j < 13; j++) {
		cartas.push(j + ' de ' + palo);
	}
	return cartas;
}
paloDeTruco("espadas");
