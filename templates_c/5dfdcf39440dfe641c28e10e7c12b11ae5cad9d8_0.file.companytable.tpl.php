<?php
/* Smarty version 4.2.1, created on 2022-10-11 02:31:19
  from 'C:\xampp\htdocs\web2\Tp Especial\Tp_webdos\templates\companytable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344b95793cb05_00620017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfdcf39440dfe641c28e10e7c12b11ae5cad9d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp Especial\\Tp_webdos\\templates\\companytable.tpl',
      1 => 1665448276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_alta.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6344b95793cb05_00620017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
	  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>	
			<tr class="">
			<td><a class="tiker" href="information/<?php echo $_smarty_tpl->tpl_vars['company']->value->Tiker;?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value->Tiker;?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['company']->value->Company;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['company']->value->Sector;?>
</td>
				<?php if (($_SESSION['email'] !== 'adm@adm')) {?>
					<td></td>
				<?php } else { ?>
					<td>
						<a href="delete/<?php echo $_smarty_tpl->tpl_vars['company']->value->Company;?>
" type='button' class='btn btn-danger'>Borrar</a>
					</td>
				<?php }?>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<?php if (($_SESSION['email'] !== 'adm@adm')) {?>
	<button class="btn bg-danger"><a class="navbar-brand" href="">Login</a></button>
<?php } else { ?>
	<?php $_smarty_tpl->_subTemplateRender("file:templates/form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		
<?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
