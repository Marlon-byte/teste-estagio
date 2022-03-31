 <?php

/*a) Ler um número (de 1 a 12) e informe o mês correspondente por extenso.*/

$mes=5;
switch($mes){
	case"1":
	echo"Janeiro";
	break;
	case"2":
	echo"Fevereiro";
	break;

	case"3":
	echo"Março";
	break;

	case"4":
	echo"Abril";
	break;

	case"5":
	echo"Maio";
	break;

	case"6":
	echo"Junho";
	break;

	case"7":
	echo"Julho";
	break;
	
	case"8":
	echo"Agosto";
	break;
	
	case"9":
	echo"Setembro";
	break;
	
	case"10":
	echo"Outubro";
	break;
	
	case"11":
	echo"Novembro";
	break;
	
	case"12":
	echo"Dezembro";
	break;
	default:
	echo"Dia inconrreto!";}


/*b) Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.*/


$data = "1995-07-04";
list($ano, $mes, $dia) = explode('-', $data);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
echo $idade;


/*c) Ler um número e imprimir a tabuada do mesmo.*/

$m=5;
for($i=0;$i<=10;$i++){
	$resultado=$m*$i;
	echo $resultado . PHP_EOL ;
}