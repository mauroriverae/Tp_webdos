{include file="templates/header.tpl" }
<h1 class="h1">{$tiker}</h1>
<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Index</th>
          <th scope="col">Market Cap</th>
          <th scope="col">Shares</th>
          <th scope="col"></th>
          
        </tr>
      </thead>
	  <tbody>
	  	{foreach from=$dates item=$date}	
			<tr class="">
			    <td>{$date->Tiker}</td>
				<td>{$date->Indexs}</td>
				<td>{$date->MarketCap}</td>
				<td>{$date->Shares}</td>
				{if ($smarty.session.email == 'adm')}
					<td>
						<a href="deleteDates/{$date->Tiker}" type='button' class='btn btn-danger'>Borrar</a>
						<a href="modifyDates/{$date->Tiker}" type='button' class='btn btn-warning'>modificar</a>
					</td>
					
				{else}
					<td></td>
				{/if}
			</tr>
		{/foreach}
	</tbody>
</table>
{if (!isset($date->Indexs) && ($smarty.session.email == 'adm'))}
	<form action="addDates" method="POST" enctype="multipart/form-data" class="my-4">
		<div class="row">
			<div class="col-9">
				<div class="form-group">
					<label>Tiker</label>
					<input name="tiker" type="text" class="form-control" value="{$tiker}" required>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label>Index</label>
					<input name="index" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-9">
				<div class="form-group">
					<label>Market Cap</label>
					<input name="marketcap" type="text" class="form-control" required>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label>Shares</label>
					<input name="shares" type="number" class="form-control" required>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-primary mt-2">Guardar</button>
    
	</form>
	<a href="https://finviz.com/" target="_blank" type='button' class='btn btn-info'>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
			<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
		</svg>
		Search
	</a>
	
{/if}

{include file="templates/footer.tpl" }