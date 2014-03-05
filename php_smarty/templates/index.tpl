<h3>Listagem de Clientes</h3>

<ul>
	{section name=i loop=$clientes}
	<li>{$clientes[i].nome}</li>
	{/section}
</ul>

<hr/>

<table border="1">
	<tr>
		<td>Nome</td>
		<td>Sobrenome</td>
		<td>Empresa</td>
	</tr>
	{section name=i loop=$clientes}
	<tr>
		<td>{$clientes[i].nome}</td>
		<td>{$clientes[i].sobrenome}</td>
		<td>{$clientes[i].empresa}</td>
	</tr>
	{/section}
</table>