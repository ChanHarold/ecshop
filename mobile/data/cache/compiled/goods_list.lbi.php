<div class="ect-wrapper text-center">
  <form method="GET" class="sort" name="listform">
    <div> <a class="<?php if ($this->_var['sort'] == 'goods_id' && $this->_var['order'] == 'DESC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'goods_id', 'order'=> 'DESC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_default']; ?></a> 
    <a class="<?php if ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'sales_volume', 'order'=> ($this->_var['sort']=='sales_volume' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_sales']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a> 
    <a class="<?php if ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'click_count', 'order'=> ($this->_var['sort']=='click_count' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_popularity']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a> 
    <a class="<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="glyphicon glyphicon-arrow-up"></i></a> <a class="category-list"><i class="ect-icon ect-icon2 ect-icon-cate3"></i><?php echo $this->_var['lang']['goods_filter']; ?></a> </div>
    <div class="category-list-show"> 
      <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?> 
      <a href="<?php echo $this->_var['cat']['url']; ?>" class="col-md-3 col-xs-3"><span><?php if ($this->_var['cat']['cat_id']): ?><?php echo htmlspecialchars($this->_var['cat']['name']); ?><?php else: ?><?php echo htmlspecialchars($this->_var['cat']['name']); ?><?php endif; ?></span></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <a href="<?php echo url('category/top_all');?>" class="col-md-3 col-xs-3 ect-colory"><span>更多</span></a> </div>
    <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
    <input type="hidden" name="display" value="<?php echo $this->_var['display']; ?>" id="display" />
    <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
    <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
    <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
    <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
    <input type="hidden" name="page" value="<?php echo $this->_var['page']; ?>" />
    <input type="hidden" name="sort" value="<?php echo $this->_var['sort']; ?>" />
    <input type="hidden" name="order" value="<?php echo $this->_var['order']; ?>" />
    <input type="hidden" name="keywords" value="<?php echo $this->_var['keywords']; ?>" />
  </form>
</div>

<?php if ($this->_var['show_asynclist'] == 1): ?>
<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
  <ul id="J_ItemList">
    <li class="single_item"></li>
    <a href="javascript:;" class="get_more"></a>
  </ul>
</div>
<?php else: ?>
<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
  <ul id="J_ItemList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <li class="single_item"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>"></a>
      <dl>
        <dt>
          <h4 class="title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></h4>
        </dt>
        <dd><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['goods']['market_price']; ?></del></small></span><span class="ect-pro-price"> 
          <?php if ($this->_var['goods']['promotion']): ?> 
          <?php $_from = $this->_var['goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
          <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> 
          <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <i class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></i> 
          <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <i class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></i> 
          <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <i class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></i> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?> 
          </span></dd>
        <dd><span class="pull-left <?php if ($this->_var['goods']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['goods']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['goods']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['goods']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </dd>
      </dl>
    </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php echo $this->fetch('library/page.lbi'); ?>
<?php endif; ?> 
<footer class="logo"><a href="http://www.ectouch.cn" title="ECTouch官网" target="_blank"><img src="__TPL__/images/copyright.png" width="176" height="60"></a></footer>

<form class="hold-height" method="post" id="form" action="<?php echo url('category/index');?>">
  <div id="goFilter">
    <div class="touchweb_mod_Filter">
      <div class="touchweb-com_headerFilter"> <a class="pull-left left" href="javascript:;" data-data-pc="-1"><?php echo $this->_var['lang']['is_cancel']; ?></a>
        <h1 class="title"><span><?php echo $this->_var['lang']['goods_filter']; ?><span></h1>
        <a class=" right pull-right" href="javascript:document.getElementById('form').submit()"><?php echo $this->_var['lang']['button_submit']; ?></a> </div>
      <div class="scrollContent">
        <div data-tpa="H5_SEARCH_FILTER" class="touchweb-com_listType">
          <input type="hidden" name="id" class="cat" value="<?php echo $this->_var['id']; ?>"/>
          <a href="javascript:;" id="filter_brand" data-url="touchweb_mod_Brand" class="title"> <?php echo $this->_var['lang']['brand']; ?> <span class="range"> 
          <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
?> 
          <?php if ($this->_var['brand']['brand_id'] == $this->_var['brand_id']): ?> 
          <?php echo $this->_var['brand']['brand_name']; ?> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </span> <em class="icon-right_arrow"></em> </a>
          <ul>
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands']['iteration']++;
?>
            <li class="av-selected"><a href="javascript:;" id="brand_<?php echo $this->_var['brand']['brand_id']; ?>" value="<?php echo $this->_var['brand']['brand_id']; ?>"  name="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?>" class="childTitle"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
          <a href="javascript:;" id="filter_price" data-url="attr_price" class="title"> <?php echo $this->_var['lang']['sort_price']; ?> <span class="range"> 
          <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
?> 
          <?php if ($this->_var['grade']['start'] == $this->_var['price_min'] && $this->_var['grade']['end'] == $this->_var['price_max']): ?> 
          <?php echo $this->_var['grade']['price_range']; ?> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </span> <em class="icon-right_arrow"></em> </a>
          <ul>
            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
?>
            <li class="av-selected"><a href="javascript:;" id="grade_<?php echo $this->_var['grade']['sn']; ?>" value="<?php echo $this->_var['grade']['start']; ?>|<?php echo $this->_var['grade']['end']; ?>" name="<?php echo $this->_var['grade']['price_range']; ?>" class="childTitle"><?php echo $this->_var['grade']['price_range']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
          <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
          
          <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter');$this->_foreach['filter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter']['total'] > 0):
    foreach ($_from AS $this->_var['filter']):
        $this->_foreach['filter']['iteration']++;
?> 
          <a href="javascript:;" name="<?php echo $this->_var['filter']['filter_attr_name']; ?>" id="filter_attr_25544" data-tcd="ATTRIBUTE.25544" data-tcs="SEARCH.0" data-url="attr_25544" class="title"><?php echo $this->_var['filter']['filter_attr_name']; ?> <span class="range"> 
          <?php $_from = $this->_var['filter']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?> 
          <?php if ($this->_var['attr']['selected']): ?> 
          <?php echo $this->_var['attr']['attr_value']; ?> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </span> <em class="icon-right_arrow"></em> </a>
          <ul class="filter" data="<?php echo ($this->_foreach['filter']['iteration'] - 1); ?>">
            <?php $_from = $this->_var['filter']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?>
            <li class="filter_attr<?php if ($this->_var['attr']['selected']): ?> av-selected<?php endif; ?>" ><a href="javascript:;" id="brand_<?php echo $this->_var['attr']['attr_id']; ?>" value="<?php echo $this->_var['attr']['attr_id']; ?>"  name="<?php echo htmlspecialchars($this->_var['attr']['attr_value']); ?>"><?php echo htmlspecialchars($this->_var['attr']['attr_value']); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>"/>
        </div>
        <div class="btn1 row">
          <div class="col-xs-3">
            <input type="button" class="clear" onClick="javascript:clear_filter()" value="<?php echo $this->_var['lang']['clear_filter']; ?>"/>
          </div>
          <div class="col-xs-9">
            <input type="submit" class="sure" name="sub" value="<?php echo $this->_var['lang']['button_submit']; ?>"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
function clear_filter(){
 $(".touchweb-com_listType .range").text("全部");
	   $(".touchweb-com_listType input").each(function() {
		  if($(this).attr('class') != 'cat'){ 
			   $(this).val("");
		  }
	   });
}
</script> 
 

