/*a) Obter todos os beneficiários ativos;*/
SELECT
	*
FROM
	beneficiario
WHERE
	situacao = 'A';

/*b) Obter todos os beneficiários ativos que possuam ao menos um veículo ativo;*/
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

/*c) Obter todos os beneficiários que tenha mais de 40 anos;*/
SELECT
	nome,
	dataNascimento 
FROM
	beneficiario b
WHERE
	FLOOR(DATEDIFF(NOW(), b.dataNascimento) / 365) >= 40;

/*d) Obter todos os beneficiários que possuam veículos com mais de dois produtos ativos;*/
select b.*
from produtoVeiculo pv
inner join veiculo v ON v.id = pv.idVeiculo 
inner join beneficiario b  ON b.id = v.idBeneficiario 
group by idVeiculo
having count(idVeiculo) >= 2

/*e) Cadastrar um beneficiário;*/
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


/*f) Cadastrar um veículo ativo para o beneficiário criado no passo anterior e vincular a ele o produto 
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

/*g) Inativar todos os veículos de ano de fabricação menor do que 2001.*/
UPDATE
	infor430_php_marlon.veiculo
SET
	situacao = 'I'
WHERE
	anoFabricacao < 2001;


/*Desafio:
Exclua os registros da tabela produtoVeiculo cujo o veículo ou produto estejam inativos.*/

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