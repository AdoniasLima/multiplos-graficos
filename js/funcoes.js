$(document).ready(function (){
	
	//Request
	$.get("api/graficos.php", function(data, status){
		
		//JSON.paser() analisa a string JSON, construindo o valor ou um objeto JavaScript descrito pela string.
		data = JSON.parse(data);

		//Percorrendo o array e gerando gráfico de vários tipos
		for (var i = 0; i < data.length; i++) {
			
			//Tem que adicionar o elemento canvas no html antes de instanciar a classe
			$("#divGraficos").append('<div style="width: 100%; height: 400px; margin: 10px auto;"><canvas id="'+ data[i].id +'"></canvas></div>');

			new Chart(document.getElementById(data[i].id), {
			    type: data[i].tipo,
			    data: data[i].data,
			    options: data[i].options
			});
		}
	});
});