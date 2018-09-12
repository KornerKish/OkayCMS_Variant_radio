<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-09-12 20:02:49
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\products_sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8254028305b9946b94c5881-38650436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a5460e93578644331b865d017252dc5b48bd0ae' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\products_sort.tpl',
      1 => 1534613055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8254028305b9946b94c5881-38650436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ajax' => 0,
    'lang' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b9946b94eca44_03460057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9946b94eca44_03460057')) {function content_5b9946b94eca44_03460057($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="sort<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> fn_is_ajax<?php }?> clearfix">
        <span class="sort_title" data-language="products_sort_by"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_sort_by;?>
:</span>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='position') {?> active_up<?php }?> no_after" href="javascript:;" onclick="document.location.href = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
'">
            <span data-language="products_by_default"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_default;?>
</span>
        </a>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='price_desc') {?> active_down<?php }?>" href="javascript:;" onclick="document.location.href = '<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
<?php }?>'">
            <span data-language="products_by_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_price;?>
</span>
        </a>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='name_desc') {?> active_down<?php }?>" href="javascript:;" onclick="document.location.href = '<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
<?php }?>'">
            <span data-language="products_by_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_name;?>
</span>
        </a>

        <a class="sort_link <?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='rating_desc') {?> active_down<?php }?>" href="javascript:;" onclick="document.location.href = '<?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating','page'=>null),$_smarty_tpl);?>
<?php }?>'">
            <span data-language="products_by_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_rating;?>
</span>
        </a>
    </div>
<?php }?>
<?php }} ?>
