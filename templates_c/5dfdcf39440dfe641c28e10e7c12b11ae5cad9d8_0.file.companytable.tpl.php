<?php
/* Smarty version 4.2.1, created on 2022-10-02 00:14:15
  from 'C:\xampp\htdocs\web2\Tp Especial\Tp_webdos\templates\companytable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338bbb7e22c52_82082393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfdcf39440dfe641c28e10e7c12b11ae5cad9d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp Especial\\Tp_webdos\\templates\\companytable.tpl',
      1 => 1664662454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6338bbb7e22c52_82082393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
      <thead>
        <tr>
          <th scope="col">Tiker</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sector</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['company']->value->tiker;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['company']->value->company;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['company']->value->sector;?>
</td>
				<td>
					<a href="delete/<?php echo $_smarty_tpl->tpl_vars['company']->value->company;?>
" type='button' class='btn btn-danger'>Borrar</a>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
