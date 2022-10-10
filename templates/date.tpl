{* {include file="templates/header.tpl" }
 *}
<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Index</th>
          <th scope="col">Market Cap</th>
          <th scope="col">Shares</th>
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$dates item=$date}	
			<tr class="">
			    <td>{$date->Tiker}</td>
				<td>{$date->Index}</td>
				<td>{$date->MarketCap}</td>
				<td>{$date->Shares}</td>
				{* <td>
					<a href="delete/{$company->Company}" type='button' class='btn btn-danger'>Borrar</a>
				</td> *}
			</tr>
		{/foreach}
	</tbody>
</table>

{include file="templates/footer.tpl" }