<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con"> 
  <header class="ect-header ect-margin-tb ect-margin-lr"> <a href="<?php echo url('category/top_all');?>" class="pull-left ect-icon ect-icon1 ect-icon-cate1"></a>
    <div class="ect-header-div">
      <button class="btn btn-default ect-text-left ect-btn-search" onClick="javascript:openSearch();"><i class="fa fa-search"></i>&nbsp;<?php echo $this->_var['lang']['no_keywords']; ?></button>
    </div>
  </header>
  
  <div id="focus" class="focus ect-margin-tb">
    <div class="hd">
      <ul>
      </ul>
    </div>
    <div class="bd">
      <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
  </div>
  <div style="text-align: center;padding: 5px 0 18px;"><img src="__TPL__/images/logo.png" style="width:68%" /></div>
  
  <nav class="container-fluid">
    <ul class="row ect-row-nav">
      <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>">
      <li class="col-sm-3 col-xs-3"><i><img src="<?php echo $this->_var['nav']['pic']; ?>" ></i>
        <p class="text-center"><?php echo $this->_var['nav']['name']; ?></p>
      </li>
      </a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </nav>
  <?php echo $this->fetch('library/recommend_hot.lbi'); ?>
  <footer>
    <nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
  </footer>
  <div style="padding-bottom:4.2em;"></div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
</script>
</body></html>