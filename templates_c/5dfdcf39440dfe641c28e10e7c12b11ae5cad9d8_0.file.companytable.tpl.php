<?php
/* Smarty version 4.2.1, created on 2022-10-01 02:40:49
  from 'C:\xampp\htdocs\web2\Tp Especial\Tp_webdos\templates\companytable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63378c91a5c241_18774012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfdcf39440dfe641c28e10e7c12b11ae5cad9d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp Especial\\Tp_webdos\\templates\\companytable.tpl',
      1 => 1664584848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63378c91a5c241_18774012 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
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
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table><?php }
}
