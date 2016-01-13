<a class="tit" href="flow.php"><b></b>去购物车结算<span><i class="iconfont"></i></span><em class="num" id="hd_cartnum" style="visibility: visible;"><?php echo $this->_var['number']; ?></em></a>
       <div class="list">
       <div class="shop_list">
<?php if ($this->_var['cart_list']): ?>
<div class="shoppings">购物商品</div>
<div class="data">
 <?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_76333300_1450394889');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_76333300_1450394889']):
?>
  <dl class="clearfix">
    <dt><a target="_blank" href="<?php echo $this->_var['goods_0_76333300_1450394889']['url']; ?>"><img src="<?php echo $this->_var['goods_0_76333300_1450394889']['thumb']; ?>"></a></dt>
    <dd>
      <h4><a target="_blank" href="<?php echo $this->_var['goods_0_76333300_1450394889']['url']; ?>"><?php echo $this->_var['goods_0_76333300_1450394889']['short_name']; ?></a></h4>
    </dd>
    <dd class="dels">
    	<p><span><?php echo $this->_var['goods_0_76333300_1450394889']['shop_price']; ?></span>&nbsp;<i>X</i>&nbsp;<?php echo $this->_var['goods_0_76333300_1450394889']['goods_number']; ?></p>
    	<p><a class="del" title="删除" href="javascript:deleteCartGoods(<?php echo $this->_var['goods_0_76333300_1450394889']['rec_id']; ?>);deleteCartGoods2(<?php echo $this->_var['goods_0_76333300_1450394889']['rec_id']; ?>);">删除</a></p>
    </dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

<div class="count">共<span id="hd_cart_count"><?php echo $this->_var['number']; ?></span>件商品哦~
  <p>总计:<span><em id="hd_cart_total"><?php echo $this->_var['amount']; ?></em></span><a href="flow.php">去购物车结算</a></p>
</div>

<?php else: ?>
<p class="fail" style="display:none;"><i><img src="themes/yunchaoshi/images/no_shopping.gif" /></i>
	购物车中还没有商品,赶紧选购吧！
</p>
<?php endif; ?> 
</div>
</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}
</script> 