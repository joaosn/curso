SELECT 
	a.`id` AS CODIGO
	,a.`nome` AS NOME
	,b.`titulo` AS SALARIO 
FROM `usuarios` a
	INNER JOIN `faixas` b ON a.`salarios` = b.`id` 
WHERE b.`id` = '1'; 