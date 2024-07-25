<head>

</head>
<body>
	<?php
	$string = "Cursos DIO";
	$numeros = 50;
	$array = array("PHP", "HTML", "CSS", "JS");
	?>
	<h1>
		Cursos de variáveis em PHP
	</h1>
	<h4>
		Essa é uma variável do tipo string.
			Para implementar uma variável do tipo string, utilizamos aspas simples ('') ou aspas duplas (""):
	</h4>
	<?php
	echo $string;
	?>
	<h4>Essa é uma variável do tipo número, ou como também é conhecida, integer.
		 Para implementar essa variável utilizamos somente os números desta forma:
	</h4>
	<?php
	echo $numeros;
	?>
	<h4>Essa é uma variável com um array. Para implementar um array utilizamos
		 o seguinte formato:  </h4>
		 <?php
		print_r($array)
		 ?>
</body>
</html>
