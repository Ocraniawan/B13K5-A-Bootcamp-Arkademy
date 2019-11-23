function arkademy(kelipatan){
	var data = [];
  
	 if (typeof (kelipatan) === 'number') {
		for (var i = 1; i <=kelipatan; i++) {
		var angka = i;
		if (i % 3 === 0) {
			angka = 'Arka';
		}
		if (i % 7 === 0) {
            angka = 'Demy';
        }
        if ((i % 3 === 0 && i % 7 === 0)) {
        	angka = 'Arkademy';
        }
        data.push(angka);
        }
      	 console.log(data);
		}   else {
        console.log('Input harus angka!');
    }
}

arkademy(21);
arkademy("Arkademy");
