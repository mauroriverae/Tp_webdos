{include file="templates/header.tpl" }

<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sector</th>
          <th scope="col"></th>
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$companies item=$company}	
			<tr class="">
				<td><a class="tiker" href="information/{$company->Tiker}">{$company->Tiker}</a></td>
				<td>{$company->Company}</td>
				<td>{$company->Sector}</td>
				{* Agregar nivel en la bD *}
				{* check enviar datos mediante injection *}
				{if ($smarty.session.email == 'adm')}
					<td>
						<a href="delete/{$company->Company}" type='button' class='btn btn-danger'>Borrar</a>
						<a href="modify/{$company->Tiker}" type='button' class='btn btn-warning'>modificar</a>
					</td>
					
				{else}
					<td></td>
				{/if}
			</tr>
		{/foreach}
	</tbody>
</table>
{if ($smarty.session.email == 'adm')} 
	{include file="templates/form_alta.tpl"}		
	
{else}
	<button class="btn bg-danger"><a class="navbar-brand" href="">Login</a></button>
{/if}
{include file="templates/footer.tpl" }