const axios = require('axios'); 

const regex = new RegExp('dataSet = \'(.*?)\'');

axios.get('https://aulas.exa.unicen.edu.ar/') 
	.then(({ data }) => {

		var json = data.match(regex)[1];
		console.log(json);

});