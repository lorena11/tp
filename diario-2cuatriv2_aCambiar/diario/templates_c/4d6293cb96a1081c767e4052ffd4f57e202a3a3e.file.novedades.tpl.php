<?php /* Smarty version Smarty-3.1.14, created on 2016-10-13 00:43:16
         compiled from "templates\novedades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2463057fea8f6d5b499-46716628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6293cb96a1081c767e4052ffd4f57e202a3a3e' => 
    array (
      0 => 'templates\\novedades.tpl',
      1 => 1476312189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463057fea8f6d5b499-46716628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fea8f720f2b0_94878780',
  'variables' => 
  array (
    'novedades' => 0,
    'novedad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fea8f720f2b0_94878780')) {function content_57fea8f720f2b0_94878780($_smarty_tpl) {?><div class="container-fluid">
      <div class="row">
          <div class="col-md-12"><h3>Novedades</h3></div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>

              <th>Evento</th>
              <th>Organiza[categoria]</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php  $_smarty_tpl->tpl_vars['novedad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['novedad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['novedades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['novedad']->key => $_smarty_tpl->tpl_vars['novedad']->value){
$_smarty_tpl->tpl_vars['novedad']->_loop = true;
?>
            <tr class="success">

              <td><?php echo $_smarty_tpl->tpl_vars['novedad']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['novedad']->value['idCategoria'];?>
</td>
              <td></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-12 text-center">
         <ul class="pagination" id="myPager"></ul>
      </div>
  </div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
<?php }} ?>