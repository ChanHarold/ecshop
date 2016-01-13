<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/yunchaoshi/index.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="wrapper">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="temai_box" style="margin-top:10px;">
  <div class="temai_main">
    <ul class="temai_list cle" id="temai_list">
      <?php if ($this->_var['gb_list']): ?> 
      <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
      <li class="show"> <a href="<?php echo $this->_var['group_buy']['url']; ?>#box" target="_blank">
        <p class="pic"> <img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" style="display: inline;"> </p>
        <h3><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></h3>
        <p class="price">
        	<span class="bd"><strong><?php echo $this->_var['group_buy']['price_ladder']['0']['formated_price']; ?></strong></span>
            <span class="btns">加入购物车</span>
        </p>
        </a> </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?>
    </ul>
  </div>
</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
