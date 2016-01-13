<div id="personalizedRecomments" class="wy_con11Left">
  <h2>销量排行榜</h2>
  <div class="wy_top10">
    <ul class="wytoplist">
      <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
      <li>
      	<dl>
        	<dt><a class="track" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img style="width:190px; height: 190px; display: inline;" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"></a></dt>
            <dd class="name"><a title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank" class="track" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></dd>
            <dd class="price">
            	<span><?php echo $this->_var['goods']['price']; ?></span><a onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,this)" class="btns">加入购物车</a>
            </dd>
        </dl>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
</div>
<div align="center"><?php 
$k = array (
  'name' => 'ads',
  'num' => '1',
  'id' => '6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>