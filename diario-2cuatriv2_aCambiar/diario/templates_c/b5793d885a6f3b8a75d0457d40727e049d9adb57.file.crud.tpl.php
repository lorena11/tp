<?php /* Smarty version Smarty-3.1.14, created on 2016-10-12 23:15:49
         compiled from "templates\crud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724557fea805df9515-77233602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5793d885a6f3b8a75d0457d40727e049d9adb57' => 
    array (
      0 => 'templates\\crud.tpl',
      1 => 1475422538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724557fea805df9515-77233602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'errores' => 0,
    'error' => 0,
    'novedades' => 0,
    'novedad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fea8061b8a89_83338085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fea8061b8a89_83338085')) {function content_57fea8061b8a89_83338085($_smarty_tpl) {?><div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <!--      Categorías     -->
  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <div>
        <ul id="aMostrar"class="list-group">
          <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <li class="list-group-item">
              <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

                <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_categoria&idCategoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['idCategoria'];?>
"></a>
                <img src="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['img'];?>
" alt="imagen-categoria-<?php echo $_smarty_tpl->tpl_vars['categoria']->value['idCategoria'];?>
" class="img-responsive"  />
          <?php } ?>
        </ul>
      </div>
      

      <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php } ?>
          </ul>
        </div>
      <?php }?>

      <form action="index.php?action=crud_agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="category">Categoría</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Categoría">
        </div>
        <div class="form-group">
          <label for="imagesToUpload">Imagenes</label>
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        </div>
        <button type="submit" class="btn btn-default">Agregar Categoría</button>
      </form>
    </div>

    <!--      novedades -->
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Novedades</label>
      <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['novedad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['novedad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['novedades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['novedad']->key => $_smarty_tpl->tpl_vars['novedad']->value){
$_smarty_tpl->tpl_vars['novedad']->_loop = true;
?>
          <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['novedad']->value['nombre'];?>

            <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_novedad&idNovedad=<?php echo $_smarty_tpl->tpl_vars['novedad']->value['idNovedad'];?>
"></a></li>
        <?php } ?>
      </ul>

      <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php } ?>
          </ul>
        </div>
      <?php }?>

      <form action="index.php?action=crud_agregar_novedad" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="noved">Novedades</label>
          <input type="text" class="form-control" id="noved" name="noved" placeholder="nombre evento">
        </div>
        <div class="form-group">
          <label for="date">Fecha</label>
          <input type="text" class="form-control" id="fecha" placeholder="Fecha">
        </div>
        <div class="form-group">
          <div>
            <label for="category">Categoria</label>
          </div>
          <select class="form-control" id="category">
            <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
              <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
            <?php } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-default" id="agregarNovedad">Agregar Evento</button>
      </form>
    </div>

  </div>
  

</div>
<?php }} ?>