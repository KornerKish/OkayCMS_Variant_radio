<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-28 21:28:45
         compiled from "backend\design\html\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3099774435b85945d02c5e5-75132954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5d23f6ce50262c50b3199a1ed48d28211ddf4a6' => 
    array (
      0 => 'backend\\design\\html\\post.tpl',
      1 => 1534613053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099774435b85945d02c5e5-75132954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'btr' => 0,
    'lang_link' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'config' => 0,
    'related_products' => 0,
    'related_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b85945d0e50a9_84962131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85945d0e50a9_84962131')) {function content_5b85945d0e50a9_84962131($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->post_new, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['post']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_url') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='url_wrong') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12 ">
            <div class="boxed match_matchHeight_true">
                
                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="">
                                    <div class="input-group">
                                        <span class="input-group-addon">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item"> 
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['post']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="brand_images_list">
                        <li class="brand_image_item">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                                <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="category_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?> hidden<?php }?>">
                                <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                <input class="dropzone_image" name="image" type="file" />
                            </div>
                            <div class="category_image image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                <img src="" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_setting, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 toggle_body_wrap on fn_card">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_type, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <select name="type_post" class="selectpicker mb-1">
                                        <option value="blog" <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post=="blog") {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_articles, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="news" <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post=="news") {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_one_news, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="">
                                        <input name="date" class="form-control" type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-5 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card fn_sort_list">
                    <div class="okay_list ok_related_list">
                        <div class="okay_list_body sortable related_products ">
                            <?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?>
                                <div class="fn_row okay okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>
                                        <div class="okay_list_boding okay_list_related_photo">
                                            <input type="hidden" name=related_products[] value='<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
'>
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['related_product']->value->images[0]) {?>
                                                    <img class="product_icon" src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value->images[0]->filename,40,40);?>
'>
                                                <?php } else { ?>
                                                    <img class="product_icon" src="design/images/no_image.png" width="40">
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_name">
                                            <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div id="new_related_product" class="fn_row okay okay_list_body_item fn_sort_item" style='display:none;'>
                                <div class="okay_list_row">
                                    <div class="okay_list_boding okay_list_drag move_zone">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                    </div>
                                    <div class="okay_list_boding okay_list_related_photo">
                                        <input type="hidden" name="related_products[]" value="">
                                        <img class=product_icon src="">
                                    </div>
                                    <div class="okay_list_boding okay_list_related_name">
                                        <a class="link related_product_name" href=""></a>
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="autocomplete_arrow">
                        <input type=text name=related id="related_products" class="form-control" placeholder='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_product, ENT_QUOTES, 'UTF-8', true);?>
'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title <span id="fn_meta_title_counter"></span></div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords</div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description <span id="fn_meta_description_counter"></span></div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <a href="#tab2" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="annotation" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea id="fn_editor" name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 mt-1">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
    <script>
        $(window).on("load", function() {
            $('input[name="date"]').datepicker();

            // Удаление товара
        $(document).on( "click", ".fn_remove_item", function() {
            $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
            return false;
        });


        // Добавление связанного товара
        var new_related_product = $('#new_related_product').clone(true);
        $('#new_related_product').remove().removeAttr('id');

        $("input#related_products").autocomplete({
            serviceUrl:'ajax/search_products.php',
            minChars:0,
            noCache: false,
            onSelect:
                    function(suggestion){
                        $("input#related_products").val('').focus().blur();
                        new_item = new_related_product.clone().appendTo('.related_products');
                        new_item.removeAttr('id');
                        new_item.find('a.related_product_name').html(suggestion.data.name);
                        new_item.find('a.related_product_name').attr('href', 'index.php?module=ProductAdmin&id='+suggestion.data.id);
                        new_item.find('input[name*="related_products"]').val(suggestion.data.id);
                        if(suggestion.data.image)
                            new_item.find('img.product_icon').attr("src", suggestion.data.image);
                        else
                            new_item.find('img.product_icon').remove();
                        new_item.show();
                    },
            formatResult:
                    function(suggestions, currentValue){
                        var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                        var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                        return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                    }

        });
        });
    </script>

<?php }} ?>
