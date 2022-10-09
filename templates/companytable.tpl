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
			<td><a class="tiker" href="information/{$company->tiker}">{$company->tiker}</a></td>
				<td>{$company->company}</td>
				<td>{$company->sector}</td>
				<td>
					<a href="delete/{$company->company}" type='button' class='btn btn-danger'>Borrar</a>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>
{include file="templates/form_alta.tpl" }
{include file="templates/footer.tpl" }