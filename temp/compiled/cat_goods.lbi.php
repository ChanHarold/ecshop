<div class="floors2">
	<p class="mores"><a href="<?php echo $this->_var['goods_cat']['url']; ?>">查看更多>></a></p>
    <div class="clearfix floor_wrap">
    	<div class="f_left">
        	<div class="ads_pos"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
            <div class="cat_name">
            	<div class="cat_name_floor">
                	<dl>
                    	<dt><b><font class="font"></font>F</b></dt>
                        <dd><?php echo $this->_var['goods_cat']['name']; ?></dd>
                    </dl>
                </div>
                <div class="cat_name_floor2">
                	<ul>
                    	<?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_75106700_1450394889');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_75106700_1450394889']):
        $this->_foreach['foo']['iteration']++;
?>
                    	<li><a href="javascript:void(0);"><?php echo $this->_var['cat_0_75106700_1450394889']['name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="f_right">
        	<div>
            	<?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_75114700_1450394889');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_75114700_1450394889']):
        $this->_foreach['foo']['iteration']++;
?>
                
                <div class="clearfix cat_goods">
					<?php $_from = $this->_var['cat_0_75114700_1450394889']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'children');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['children']):
        $this->_foreach['goods']['iteration']++;
?>
                    <div class="f_goods">
                        <dl>
                            <dt><a href="<?php echo $this->_var['children']['url']; ?>"><img src="<?php echo $this->_var['children']['goods_img']; ?>" /></a></dt>
                            <dd class="name"><?php echo $this->_var['children']['goods_name']; ?></dd>
                            <dd class="price">
                                <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['children']['promote_price']; ?><?php else: ?>                                <?php echo $this->_var['children']['shop_price']; ?><?php endif; ?></span><del><?php echo $this->_var['children']['market_price']; ?></del>
                            </dd>
                            <dd><a onclick="addToCart(<?php echo $this->_var['children']['goods_id']; ?>,this)" class="btns">加入购物车</a></dd>
                        </dl>
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
        </div>
    </div>
    <div class="cat_bottom"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品下方广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
</div>


















