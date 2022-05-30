# exa-unicen-finales-scrapper

(DEPRECADO)

usa un ws oculto de unicen.edu.ar y obtiene una lista de todos los proximos finales de la facultad de exactas en formato json

```JavaScript
const axios = require('axios'); 

//Regex to filter the json of the HTML request
const regex = new RegExp('dataSet = \'(.*?)\'');

axios.get('https://aulas.exa.unicen.edu.ar/') 
	.then(({ data }) => {

   	//find regex match and parse json
	var json = data.match(regex)[1]; 
	console.log(json);

});
```
trozo de json de ejemplo:
```
{
  "id":115,"meet":"https:\\meet.google.com\ntk-vcxj-vry",
  "fecha":"2021-08-13","hora":"13:00:00",
  "nombre":"Programac. 2",
  "responsable":"Berdun, Luis Sebastian",
  "mail":"prog2-tudai@alumnos.exa.unicen.edu.ar",
  "horas":"58.5952667858333"
}
```
