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
<link href="themes/yunchaoshi/category.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body class="gray_bg">
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'lizi_category.js')); ?>
<div id="wrapper"> 
   
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="main cle">
    <div class="zhss">
    	<div class="zhss2">
    	 
      <div class="search-options" id="search-options">
        <div class="bd">
        	 
              <?php if ($this->_var['categories2']): ?>
            <dl>
            	<dt>分类</dt>
                  <dd>
                    <div class="items cle">
                         <?php $_from = $this->_var['categories2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                        <div class="link"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                  </dd>
            </dl>
            
             <?php endif; ?> 
              
         <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
           <?php if ($this->_var['brands']['1'] && ! $this->_var['brand_id']): ?>
          <dl>
            <dt><?php echo $this->_var['lang']['brand']; ?></dt>
            <dd>
              <div class="items cle"> 
                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?>
                <?php if ($this->_var['key'] > 0): ?>
                <div class="link"> <a href="<?php echo $this->_var['brand']['url']; ?>" class="item"><?php echo $this->_var['brand']['brand_name']; ?></a> </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </div>
              <a class="more-btn" href="javascript:;">更多</a> </dd>
          </dl>
          <?php endif; ?> 
          
          <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_82499600_1450427178');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_82499600_1450427178']):
?>

          <?php if (! $this->_var['filter_attr_0_82499600_1450427178']['selected']): ?>
          <dl>
            <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_82499600_1450427178']['filter_attr_name']); ?></dt>
            <dd>
              <div class="items cle"> 
                <?php $_from = $this->_var['filter_attr_0_82499600_1450427178']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
?>
                 <?php if ($this->_var['key'] > 0): ?> 
                <div class="link"> <a href="<?php echo $this->_var['attr']['url']; ?>" class="item"><?php echo $this->_var['attr']['attr_value']; ?></a> </div>
          		 <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </div>
              <a class="more-btn" href="javascript:;">更多</a> </dd>
          </dl>
           <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
          <?php if ($this->_var['price_grade']['1'] && ! $this->_var['price_min'] && ! $this->_var['price_max']): ?>
          <dl>
            <dt><?php echo $this->_var['lang']['price']; ?></dt>
            <dd class="dd-price">
              <div class="items cle w800"> 
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['grade']):
?>
                  <?php if ($this->_var['key'] > 0): ?>
                <div class="link"> <a href="<?php echo $this->_var['grade']['url']; ?>" class="item"><?php echo $this->_var['grade']['price_range']; ?></a> </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </div>
              <div class="priceform" id="priceform">
                <div class="form-bg">
                  <form action="<?php echo $this->_var['price_grade']['0']['url']; ?>" method="post" id="freepriceform" >
                    <span class="rmb"></span>
                    <input type="text" value="" name="price_min" id="pricemin">
                    <span class="rmb rmb2"></span>
                    <input type="text" value="" name="price_max" id="pricemax">
                    <p>
                      <input type="submit" value="确定" onclick="return makeUri();" class="submit">
                    </p>
                  </form>
                </div>
              </div>
            </dd>
          </dl>
          <?php endif; ?> 
           <?php endif; ?> 
        </div>
      </div>
     
       
      </div>
    </div>
    <div class="cle clearfixs">
    
    <div class="sidebar">
      <?php echo $this->fetch('library/top10_category.lbi'); ?>
     </div>
    <div class="maincon"> 
      
      <?php if ($this->_var['brand_id'] || ( ( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0 ) || $this->_var['price_max'] || $this->_var['filter_attr_sum'] > 0): ?>
      <div class="search-selected"> <span>您已选择：</span> 
		<?php if ($this->_var['filter_attr_sum'] > 0): ?> 
            <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_82559300_1450427178');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_82559300_1450427178']):
?> 
                <?php $_from = $this->_var['filter_attr_0_82559300_1450427178']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
?>
                <?php if ($this->_var['attr']['selected'] && $this->_var['key'] > 0): ?> 
                 <a href="<?php echo $this->_var['attr']['del_url']; ?>" class="item"><?php echo $this->_var['attr']['attr_value']; ?></a> 
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		<?php endif; ?> 
        
        <?php if ($this->_var['brands']['1']): ?>
        <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?> 
        <?php if ($this->_var['brand']['selected'] && $this->_var['key'] > 0): ?> 
        <a href="<?php echo $this->_var['brands']['0']['url']; ?>" class="item"><?php echo $this->_var['brand']['brand_name']; ?></a> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?> 

		<?php if (( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0): ?>
        <a href="<?php echo $this->_var['price_grade']['0']['url']; ?>" class="item"><?php echo $this->_var['price_min']; ?>&nbsp;-&nbsp;<?php echo $this->_var['price_max']; ?></a> 
		<?php endif; ?>
      </div>
      <?php endif; ?> 
      
      
      <script type="text/javascript">

    function makeUri() {
        // 开始价格 pricemin
        var v1 = document.getElementById("pricemin").value;
        // 截止价格 pricemax
        var v2 = document.getElementById("pricemax").value;
        if(v1 == '' || v2 == '' || !$.isNumeric(v1) || !$.isNumeric(v2) || parseInt(v1) > parseInt(v2)){
            alert('请输入正确的价格区间');
			return false;
        }
    }

</script> 
      <?php echo $this->fetch('library/goods_list.lbi'); ?> <?php echo $this->fetch('library/pages.lbi'); ?> </div>
      </div>
  </div>
   
  
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>