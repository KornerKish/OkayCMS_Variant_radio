<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-09-12 20:38:31
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9891097945b7c59e820f338-76932195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74dcda7512b821b7acd54ba3f16263844a4abb84' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\product_list.tpl',
      1 => 1536773907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9891097945b7c59e820f338-76932195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b7c59e8273b99_04990661',
  'variables' => 
  array (
    'product' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'settings' => 0,
    'comparison' => 0,
    'wished_products' => 0,
    'currency' => 0,
    'v' => 0,
    'first' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7c59e8273b99_04990661')) {function content_5b7c59e8273b99_04990661($_smarty_tpl) {?>
<div class="preview fn_product">
    <div class="fn_transfer clearfix">

        <?php if ($_GET['module']=="ComparisonView") {?>
            <a href="#" class="fn_comparison selected remove_link" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                <?php echo $_smarty_tpl->getSubTemplate ('svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'remove_icon'), 0);?>
 
                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
</span>
            </a>
        <?php }?>

        <?php if ($_GET['module']=="WishlistView") {?>
            <a href="#" class="fn_wishlist selected remove_link" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                <?php echo $_smarty_tpl->getSubTemplate ('svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'remove_icon'), 0);?>
 
                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
</span>
            </a>
        <?php }?>

        
        <a class="preview_image" href="<?php if ($_GET['module']=='ComparisonView') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
<?php }?>" <?php if ($_GET['module']=='ComparisonView') {?>data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                <img class="fn_img preview_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php } else { ?>
                <img class="fn_img preview_img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="250" height="250" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                <img class="promo_img" src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
' title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
        </a>

        <div class="overlay_buttons">
            
            <?php if ($_GET['module']!="ComparisonView") {?>
                <?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                    <a class="fn_comparison comparison_button" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
"></a>
                <?php } else { ?>
                    <a class="fn_comparison comparison_button selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
"></a>
                <?php }?>
            <?php }?>

            
            <?php if ($_GET['module']!="WishlistView") {?>
                <?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist wishlist_button selected" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
"></a>
                <?php } else { ?>
                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist wishlist_button" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
"></a>
                <?php }?>
            <?php }?>
        </div>

        
        <a class="product_name" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>

        <div class="price_container">
            
            <div class="old_price<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden<?php }?>">
                <span class="fn_old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>

            
            <div class="price">
                <span class="fn_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
        </div>

        <form class="fn_variants preview_form" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
            <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                
                <p class="fn_not_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                    <span data-language="out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->out_of_stock;?>
</span>
                </p>
            <?php } else { ?>
                
                <button class="button buy fn_is_preorder<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>" type="submit" data-language="pre_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pre_order;?>
</button>
            <?php }?>

            
            <button class="button buy fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" type="submit"><span data-language="add_to_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->add_to_cart;?>
</span></button>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value->variant_radio) {?>
                <div style="margin-top: 10px; margin-left: -113px;" class="fn_variant <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden<?php }?>">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <input type="radio" id="variant<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" class="radio" data-variant="variant"
                               name="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"
                               data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" <?php if ((empty($_smarty_tpl->tpl_vars['first']->value))) {?> checked="checked" <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?> <?php }?>
                               data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?>
                            data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?>
                            data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                        <label for="variant<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></label>
                        <br/>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <select name="variant" data-variant="variant"
                        class="fn_variant variant_select<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden<?php }?>">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
"
                                data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
                    <?php } ?>
                </select>
            <?php }?>
        </form>
    </div>
</div>
<?php }} ?>
