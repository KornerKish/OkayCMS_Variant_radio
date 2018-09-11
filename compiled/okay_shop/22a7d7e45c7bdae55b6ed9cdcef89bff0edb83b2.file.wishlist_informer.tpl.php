<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-21 21:28:56
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11756204635b7c59e84c3130-50458533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a7d7e45c7bdae55b6ed9cdcef89bff0edb83b2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\wishlist_informer.tpl',
      1 => 1534613055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11756204635b7c59e84c3130-50458533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b7c59e84cb5f8_25320615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7c59e84cb5f8_25320615')) {function content_5b7c59e84cb5f8_25320615($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span> <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
)</span>
    </a>
<?php } else { ?>
    <span>
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
    </span>
<?php }?>
<?php }} ?>
