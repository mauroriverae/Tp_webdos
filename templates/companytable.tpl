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
				<td>
					<a href="delete/{$company->Company}" type='button' class='btn btn-danger'>Borrar</a>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>
{include file="templates/form_alta.tpl" }
{include file="templates/footer.tpl" }