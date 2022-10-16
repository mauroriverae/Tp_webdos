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
				{if ($smarty.session.email !== 'mauro@mauro')}
					<td></td>
				{else}
					<td>
						<a href="deleteDates/{$date->Tiker}" type='button' class='btn btn-danger'>Borrar</a>
						<a href="modifyDates/{$date->Tiker}" type='button' class='btn btn-warning'>modificar</a>
					</td>
				{/if}
			</tr>
		{/foreach}
	</tbody>
</table>
{if !isset($date->Indexs)}
	<form action="addDates" method="POST" class="my-4">
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
{/if}
{include file="templates/footer.tpl" }