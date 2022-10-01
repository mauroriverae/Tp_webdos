<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sector</th>
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$companies item=$company}	
			<tr class="">
				<td>{$company->tiker}</td>
				<td>{$company->company}</td>
				<td>{$company->sector}</td>
			</tr>
		{/foreach}
	</tbody>
</table>