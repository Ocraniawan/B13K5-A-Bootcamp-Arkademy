function pairSocks(alwi) {
	var total = [];
	for (var i = 0; i < alwi.length; i++) {
		if (alwi[i] === alwi[i + 1]) {
			total++;
		}
			alwi.sort(function (a, b) {return a-b});
    	}
	return total+" Pairs";
}


console.log(pairSocks([5, 13, 7, 5, 9, 20, 9, 5, 14]));
console.log(pairSocks([5, 13, 7, 5, 9, 20, 9, 5, 14, 13, 14]));