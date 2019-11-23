function username (username) {
	var user = /^[a-z]{3,5}$/;
	return user.test(username);
}

function password (password) {
	var pass = /^([0-9]{3,})([-])([0-9]{3,})([A-Z]{4,})$/;
	return pass.test(password);
}

console.log(username("tania"));
console.log(username("Eka"));
console.log(password("021-333BUDI"));
console.log(password("021*4444DEA"));
console.log(password("987-654Oliv"));