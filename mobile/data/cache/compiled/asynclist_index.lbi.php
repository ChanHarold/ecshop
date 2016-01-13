
<?php if ($this->_var['hot_goods']): ?>
<a href="<?php echo $this->_var['hot_goods']['url']; ?>"><img src="<?php echo $this->_var['hot_goods']['goods_img']; ?>" alt="<?php echo $this->_var['hot_goods']['name']; ?>"></a>
  <dl>
    <dt>
      <h4 class="title"><a href="<?php echo $this->_var['hot_goods']['url']; ?>"><?php echo $this->_var['hot_goods']['name']; ?></a></h4>
    </dt>
    <dd class="dd-price"><span class="pull-left"><strong><?php echo $this->_var['lang']['sort_price']; ?>：<b class="ect-colory"><?php if ($this->_var['hot_goods']['promote_price']): ?><?php echo $this->_var['hot_goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['hot_goods']['shop_price']; ?><?php endif; ?></b></strong> <small class="ect-margin-lr"><del><?php echo $this->_var['hot_goods']['market_price']; ?></del></small></span> <span class="ect-pro-price"> 
      
      <?php if ($this->_var['hot_goods']['promotion']): ?> 
      <?php $_from = $this->_var['hot_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
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
    <dd class="dd-num"><span class="pull-left<?php if ($this->_var['hot_goods']['mysc'] != 0): ?> ect-colory<?php endif; ?>"><i class="fa<?php if ($this->_var['hot_goods']['mysc'] != 0): ?> fa-heart<?php else: ?> fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['hot_goods']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?><?php echo $this->_var['hot_goods']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </dd>
  </dl>
<?php endif; ?> 
 
