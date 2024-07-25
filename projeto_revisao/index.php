<head>

</head>
<body>
	<?php
	$string = "Cursos DIO";
	$numeros = 50;
	$array = array("PHP", "HTML", "CSS", "JS");
	date_default_timezone_set('America/Sao_Paulo');
	$data = date("d/m/Y H:i:s");
	?>
	<h1>
		Cursos de variáveis em PHP
	</h1>
	<h4>
		Essa é uma variável do tipo string.
			Para implementar uma variável do tipo string, utilizamos aspas simples ('') ou aspas duplas (""):
			<br> => $string = "...";
	</h4>
	<?php
	echo $string;
	?>
	<h4>Essa é uma variável do tipo número, ou como também é conhecida, integer.
		 Para implementar essa variável utilizamos somente os números desta forma:
			<br> => $$numeros = ...;
	</h4>
	<?php
	echo $numeros;
	?>
	<h4>Essa é uma variável com um array. Para implementar um array utilizamos
		 o seguinte formato: <br> => $array = array(...); </h4>
	 <?php
	print_r($array)
	?>
	<h4>Vamos agora implementar uma variável do tipo data utilizando uma função própria do php 
		<br> => $data = date("d/m/Y H:i:s");
	</h4>
	<?php
	print($data)
	?>
</body>
</html>
