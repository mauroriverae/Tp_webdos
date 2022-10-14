{include file="templates/header.tpl" }
<h1 class="h1">{$sector}</h1>
<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sector</th>
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$type item=$sector}	
			<tr class="">
				<td>{$sector->Tiker}</td>
				<td>{$sector->Company}</td>
				<td>{$sector->Sector}</td>
			</tr>
		{/foreach}
	</tbody>
</table>

{include file="templates/footer.tpl" }