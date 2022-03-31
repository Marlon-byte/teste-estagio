/*a) Obter todos os benefici�rios ativos;*/
SELECT
	*
FROM
	beneficiario
WHERE
	situacao = 'A';

/*b) Obter todos os benefici�rios ativos que possuam ao menos um ve�culo ativo;*/
SELECT
	*
FROM
	veiculo v
inner join beneficiario b
on
	v.idBeneficiario = b.id
WHERE
	v.situacao = 'A'
	and b.situacao = 'A' ;

/*c) Obter todos os benefici�rios que tenha mais de 40 anos;*/
SELECT
	nome,
	dataNascimento 
FROM
	beneficiario b
WHERE
	FLOOR(DATEDIFF(NOW(), b.dataNascimento) / 365) >= 40;

/*d) Obter todos os benefici�rios que possuam ve�culos com mais de dois produtos ativos;*/
select b.*
from produtoVeiculo pv
inner join veiculo v ON v.id = pv.idVeiculo 
inner join beneficiario b  ON b.id = v.idBeneficiario 
group by idVeiculo
having count(idVeiculo) >= 2

/*e) Cadastrar um benefici�rio;*/
INSERT
	INTO
	infor430_php_marlon.beneficiario
(id,
	nome,
	documento,
	dataNascimento,
	sexo,
	situacao,
	logradouro,
	numero,
	bairro,
	cidade,
	estado,
	email,
	telefone)
VALUES(51,
'FIlipe',
'11212365475',
'1978-04-28',
'M',
'A',
'South Hobartside',
'265',
'Haley Canyon',
'Sarzedo',
'EE',
'filipe.batz@example.org',
'+553135989749');


/*f) Cadastrar um ve�culo ativo para o benefici�rio criado no passo anterior e vincular a ele o produto 
"ASSISTENCIA 24 HORAS";*/
INSERT
	INTO
	infor430_php_marlon.veiculo
(id,
	idBeneficiario,
	placa,
	chassi,
	renavam,
	modelo,
	montadora,
	anoFabricacao,
	anoModelo,
	situacao)
VALUES(99,
51,
'GV84696',
'966081488623b0de6',
'14585901936',
'Fiat Uno Escadao',
'Fiat',
2004,
2005,
'A');

/*g) Inativar todos os ve�culos de ano de fabrica��o menor do que 2001.*/
UPDATE
	infor430_php_marlon.veiculo
SET
	situacao = 'I'
WHERE
	anoFabricacao < 2001;


/*Desafio:
Exclua os registros da tabela produtoVeiculo cujo o ve�culo ou produto estejam inativos.*/

DELETE
	v
FROM
	infor430_php_marlon.produtoVeiculo v
INNER JOIN veiculo v
  ON
	idVeiculo = v.id
INNER JOIN produto p
  ON
	idProduto = p.id
WHERE
	v.situacao = 'I'
	OR p.situacao = 'I';