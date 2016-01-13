<div id="footer">
	<?php if ($this->_var['helps']): ?>
<div class="w">
  <div id="service-2013" class="clearfix cle"> 
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?> 
    <?php if ($this->_foreach['foo']['iteration'] < 7): ?>
    <dl class="fore<?php echo $this->_foreach['foo']['iteration']; ?>">
      <dt><b></b><strong><?php echo $this->_var['help_cat']['cat_name']; ?></strong></dt>
      <dd> 
        <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <div><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </dd>
    </dl>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    <span class="clr"></span> </div>
</div>
<?php endif; ?> 

  <div class="ft-bg">
    <div class="ft_main">
      <div class="ft_txt">
        <p><?php echo $this->_var['copyright']; ?><?php echo $this->_var['lang']['icp_number']; ?>：<a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><?php echo $this->_var['icp_number']; ?></a></p>
        <p class="ft_contact"> <span>服务时间：09:00-23:00</span> <?php if ($this->_var['service_phone']): ?> 
          <span class="ft_phone">客服热线: <em><?php echo $this->_var['service_phone']; ?></em></span> 
          <?php endif; ?></p>
          
          <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
        <p class="link"> 友情链接： 

        
		    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
        
         </p>
        
        <?php endif; ?>
        
   <!--     <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/yunchaoshi/images/ecmoban.gif" alt="ECShop模板"></a></div>
        <p class="beian-logos"> <a href="javascript:void(0);" target="_blank"><img alt="<?php echo $this->_var['shop_name']; ?>获得电商金典奖" src="themes/yunchaoshi/images/flogo-jindian.png"></a> <a href="javascript:void(0);l" target="_blank"><img alt="中国人保为<?php echo $this->_var['shop_name']; ?>承保" src="themes/yunchaoshi/images/flogo-picc.png"></a> <a href="javascript:void(0);" target="_blank"><img alt="互联网协会A级信用认证" src="themes/yunchaoshi/images/flogo-xinyong.png"></a> <a href="javascript:void(0);" target="_blank"><img alt="<?php echo $this->_var['shop_name']; ?>可信网站权威认证" src="http://cdn.lizi.com/images/flogo-kexin.png" class="no-border"></a> </p>
      </div>-->
    </div>
  </div>
</div>
<div class="tb_box" id="J_toolbar">
  <ul class="tb_bd">
    <li class="shopping" id="ECS_CARTINFO2">
    <?php 
$k = array (
  'name' => 'cart_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </li>
    <li class="weixin"><a href="javascript:void(0);" class="a"></a>
    	<div class="weixin_wrap"><img src="themes/yunchaoshi/images/weixin02.jpg" width="105"/></div>
    </li>
   <!-- <li class="kefu"><a href="javascript:void(0);" class="a"></a>
    	<div class="kefu_wrap">
        	<dl>
            <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                <?php if ($this->_var['im']): ?>
            	<dd><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a></dd>
                 <?php endif; ?>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dl>
        </div>
    </li>-->
    <li class="call"><a href="javascript:void(0);" class="a"></a>
    	<div class="call_wrap">
        	<p>客服邮箱<br>stadium.sports@hotmail.com</p>
        </div>
    </li>
    <li class="backtop"><a href="#" class="a"></a></li>
  </ul>
</div>

<script type="text/javascript">
function deleteCartGoods2(rec_id)
{
	Ajax.call('delete_cart_goods2.php', 'id='+rec_id, deleteCartGoodsResponse2, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse2(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO2").html(res.content);
  }
}
</script> 