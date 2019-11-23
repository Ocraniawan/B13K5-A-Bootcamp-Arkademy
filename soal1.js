function biodata (name,age) {
	var address = "Jl. Perintis Kemerdekaan VII Lr.07 - Makassar";
	var hobbies = ['Watching', 'Camping', 'Gaming'];
	var is_married = false;
	var	list_school = [{name: 'SDN 118 SANTUNG', year_in: 2002, year_out: 2008},
					   {name: 'SMP KRISTEN MAKALE', year_in: 2008, year_out:2011},
					   {name: 'SMKN 1 MAKALE', year_in: 2011, year_out:2014},
					   {major: 'Universitas Indonesia Timur', year_in: 2014, year_out: 2018},
					   {secondmajor: 'STMIK AKBA', year_in: 2018, year_out: 2019}
					];
	var skills = [{skill_name : 'Computer Technician', level: 'Expert'},
				  {skill_name : 'MS. OFFICE', level: 'Advanced'},
				  {skill_name : 'Graphic Design', level: 'Advanced'},
				  {skill_name : 'Desktop Programming', level: 'Advanced'},
				  {skill_name : 'Web Programming', level: 'Beginner'}
				];
	var interest_in_coding = true;

	var result = {name: name, age: age, address: address, hobbies: hobbies, 
				is_married: is_married, list_school: list_school, skills: skills,
				interest_in_coding: interest_in_coding};

	return JSON.stringify(result);

}

console.log(biodata("Ocraniawan Patattan", 23));