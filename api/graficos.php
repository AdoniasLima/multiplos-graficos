<?php

/*
* Este código, adiciona as propriedades de cada gráfico para que no front-end tenha uma função 
* dinâmica para gerar todos os gráficos definidos nesta resposta.
*/

$a_graficos = [];

//Gráfico tipo bar
$a_graficos[] = [
	'id' => 'id_1',
	'tipo' => 'bar',
	'data' => [
		'labels' => ['Notebook', 'Celular', 'TV'],
	    'datasets' => [
	        [
	          'label' => "Vendas (milhões)",
	          'backgroundColor' => ["#3e95cd", "#8e5ea2","#3cba9f"],
	          'data' => [2478,5267,734]
	        ]
	  	]
	],
	'options' => [
		'legend' => ['display' => false],
		'title' => [
			'display' => true, 
			'text' => 'Vendas realizadas no ano de 2020'
		]
	]
];

//Gráfico tipo doughnut
$a_graficos[] = [
	'id' => 'id_2',
	'tipo'=> 'doughnut',
    'data'=> [
      'labels'=> ['Notebook', 'Celular', 'TV'],
      'datasets'=> [
	    [
	      'label'=> "Vendas (milhões)",
	      'backgroundColor'=> ["#3e95cd", "#8e5ea2","#3cba9f"],
	      'data'=> [2478,5267,734]
	    ]
      ]
    ],
    'options'=> [
      'title'=> [
        'display'=> true,
        'text' => 'Vendas realizadas no ano de 2020'
      ]
    ]
];

//Gráfico tipo pie
$a_graficos[] = [
	'id' => 'id_3',
	'tipo' => 'pie',
	'data' => [
      'labels' => ['Notebook', 'Celular', 'TV'],
      'datasets'=> [
      	[
	    	'label'=> "Vendas (milhões)",
	    	'backgroundColor'=> ["#3e95cd", "#8e5ea2","#3cba9f"],
	    	'data'=> [2478,5267,734]
      	]
  	  ]
    ],
    'options'=> [
      'title'=> [
        'display'=> true,
        'text'=> 'Vendas realizadas no ano de 2020'
      ]
    ]
];

echo json_encode($a_graficos);