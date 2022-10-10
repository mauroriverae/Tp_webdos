{include file="templates/header.tpl" }
<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sector</th>
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$tecnology item=$tech}	
			<tr class="">
				<td>{$tech->Tiker}</td>
				<td>{$tech->Company}</td>
				<td>{$tech->Sector}</td>
			</tr>
		{/foreach}
	</tbody>
</table>

{include file="templates/footer.tpl" }