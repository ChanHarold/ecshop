<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
<header class="ect-header ect-margin-tb ect-margin-lr text-center"> <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a>
<span><?php echo $this->_var['title']; ?></span>
 <a href="javascript:openSearch();" class="pull-right ect-icon ect-icon1 ect-icon-search1"></a>
</header>
<div class="panel panel-default ect-category-all ect-border-radius0">
    <ul>
     <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
     <li>
     	<?php if ($this->_var['cat']['cat_id']): ?>
     	<div class="media panel-body">
            <img class="pull-left" src="<?php echo $this->_var['cat']['cat_image']; ?>">
            <div class="pull-left ect-category-right">
                <h3><?php echo htmlspecialchars($this->_var['cat']['name']); ?></h3>
                <h5> 
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
                <?php if (($this->_foreach['no1']['iteration'] - 1) < 3): ?>
                <?php if (($this->_foreach['no1']['iteration'] - 1) > 0): ?>/<?php endif; ?>
                <?php echo sub_str(htmlspecialchars($this->_var['child']['name']),5,false); ?> 
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></h5>
                </div>
                <i class="fa fa-angle-down ect-transition05"></i>
        </div>
        <?php else: ?>
        <a href="<?php echo url('category/index',array('id'=>$this->_var['cat']['id']));?>">
        <div class="media panel-body">
            <img class="pull-left" src="<?php echo $this->_var['cat']['cat_image']; ?>">
            <div class="pull-left ect-category-right">
                <h3><?php echo htmlspecialchars($this->_var['cat']['name']); ?></h3>
                <h5> 
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
                <?php if (($this->_foreach['no1']['iteration'] - 1) < 3): ?>
                <?php if (($this->_foreach['no1']['iteration'] - 1) > 0): ?>/<?php endif; ?>
                <?php echo sub_str(htmlspecialchars($this->_var['child']['name']),5,false); ?> 
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></h5>
                </div>
                <i class="fa fa-angle-down ect-transition05"></i>
        </div></a>
        <?php endif; ?>
        <div class="ect-category-child">
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
            <?php if ($this->_var['child']['cat_id']): ?>
            <a href="<?php echo url('category/all',array('id'=>$this->_var['child']['id']));?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
            <?php else: ?>
            <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul> 
</div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>