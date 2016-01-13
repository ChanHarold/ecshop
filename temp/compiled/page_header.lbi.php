
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,lizi_common.js')); ?>

<div class="cart_result"><i></i><a href="flow.php">商品已经加入购物车</a></div>
<div id="header" class="new_header">
  <div class="hd_bar">
    <div class="bd_bar_bd cle">
      <ul class="welcome">
        
		<li id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
      </ul>
      <ul id="userinfo-bar">
      	
      	<li><a id="favorite_wb" href="javascript:;" rel="nofollow"><i></i>收藏本站</a></li>
        <li class="more-menu" id="header_guanzhu"><a class="menu-link" href="javascript:;">关注我们：</a><i class="iconfont arrow">&#8193;</i>
          <div class="more-bd">
            <div class="list">
              <p><a href="http://weibo.com/" target="_blank" class="weibo"><img src="themes/yunchaoshi/images/weibo.png" /></a></p>
            </div>
          </div>
        </li>
        <li><a href="article.php?id=4">帮助中心</a></li>
         <?php if ($this->_var['navigator_list']['top']): ?>
         	 <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
           <li id="topNav" class="clearfix">
           
                    <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                    
            
           </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  		 <?php endif; ?>
      </ul>
    </div>
  </div>
  <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
  <div class="hd_main cle">
    <div class="logo">
      <p> <a href="./index.php" class="lizi_logo">云超市</a> </p>
    </div>
    <div class="search_box">
      <form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()" class="clearfix">
        <input class="sea_input" type="text" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" autocomplete="off">
        <input type="hidden" value="k1" name="dataBi">
        <button type="submit" class="sea_submit"></button>
      </form>
       <?php if ($this->_var['searchkeywords']): ?>
    <div class="head_search_hot"><?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
    <?php endif; ?>
    </div>
    
    <div class="hd_cart" id="ECS_CARTINFO"> 
         <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
   
  </div>
  <div class="hd_nav">
    <div class="hd_nav_bd cle">
      <div class="main_nav" id="main_nav">
        <div class="main_nav_link"> <a href="javascript:;">全部商品分类</a> <i><img src="themes/yunchaoshi/images/arrow.png" /></i> </div>
        <div class="main_cata" id="J_mainCata" style="opacity: 0; display: none;">
          <ul>
            <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
            <li <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="first"<?php endif; ?>>
              <h3><a target="_blank" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
              
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
          </ul>
        </div>
       
     
        <div class="J_subCata" id="J_subCata" style="opacity: 0; left: 100px; top: 35px;">
          <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>

          <div class="J_subView" style="display: none;">
          <i><img src="themes/yunchaoshi/images/arrow_2.png" /></i>
          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?> 
          	
            <dl>
              <dt><a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
              
            </dl>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
      
        
                

      </div>
      <ul class="sub_nav cle" id="sub_nav">
        <li<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>><a href="index.php" rel="nofollow"><?php echo $this->_var['lang']['home']; ?></a>
        </li>
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
        <li<?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> rel="nofollow"><?php echo $this->_var['nav']['name']; ?></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      
    </div>
  </div>
  <div class="search_result"></div>
</div>
