<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-09-13 20:09:07
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13784318455b9a99b318ed23-18991875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bb329a5321d84f6107bf8d760dbd66bca8b082' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\comparison.tpl',
      1 => 1534613055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13784318455b9a99b318ed23-18991875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'comparison' => 0,
    'id' => 0,
    'cf' => 0,
    'product' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b9a99b32154b7_63564088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9a99b32154b7_63564088')) {function content_5b9a99b32154b7_63564088($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->comparison_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<h1 class="h1">
    <span data-language="comparison_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_header;?>
</span>
</h1>

<?php if ($_smarty_tpl->tpl_vars['comparison']->value->products) {?>
    <div class="comparison_page clearfix block">
        <div class="comparison_left">
            <div class="fn_resize compare_controls">

                
                <?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>1) {?>
                    <div class="fn_show compare_show">

                        <a href="#show_all" class="active"><span data-language="comparison_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_all;?>
</span></a>

                        <a href="#show_dif" class="unique"><span data-language="comparison_unique"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_unique;?>
</span></a>

                    </div>
                <?php }?>

            </div>

            
            <div class="cprs_rating" data-use="cprs_rating">
                <span data-language="product_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
</span>
            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['comparison']->value->features) {?>
                <?php  $_smarty_tpl->tpl_vars['cf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cf']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cf']->key => $_smarty_tpl->tpl_vars['cf']->value) {
$_smarty_tpl->tpl_vars['cf']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cf']->key;
?>
                    <div class="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['cf']->value->not_unique) {?> not_unique<?php }?>" data-use="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <span data-feature="<?php echo $_smarty_tpl->tpl_vars['cf']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cf']->value->name;?>
</span>
                    </div>
                <?php } ?>
            <?php }?>

        </div>

        <div class="fn_comparison_products comparison_products">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison']->value->products; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
                <div class="comparison_item">
                    <div class="fn_resize">
                        <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>

                    
                    <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="cprs_rating">
                        <span class="rating_starOff">
                            <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                        </span>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <div class="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['comparison']->value->features[$_smarty_tpl->tpl_vars['id']->value]->not_unique) {?> not_unique<?php }?>">
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "&mdash;" : $tmp);?>

                            </div>
                        <?php } ?>
                    <?php }?>

                </div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="block padding">
        <span data-language="comparison_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_empty;?>
</span>
    </div>
<?php }?>
<?php }} ?>
