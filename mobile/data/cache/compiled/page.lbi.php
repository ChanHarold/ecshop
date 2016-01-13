<ul class="pager ect-margin-lr ect-page">
	  <li class="pull-left"><a href="<?php echo empty($this->_var['pager']['page_prev']) ? '#' : $this->_var['pager']['page_prev']; ?>">上一页</a></li>
	  <?php if ($this->_var['pager']['page_number']): ?>
	  <li class="form-select">
		<i class="fa fa-sort-desc"></i>
	    <select name="sel_question" onChange="window.location.href=this.value;">
			<?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'num');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['num']):
?>
			<option value="<?php echo $this->_var['num']; ?>" <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>selected<?php endif; ?> ><?php echo $this->_var['key']; ?>/<?php echo $this->_var['pager']['page_count']; ?></option>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</select>
	  </li>
	  <?php endif; ?>
	  <li class="pull-right"><a href="<?php echo empty($this->_var['pager']['page_next']) ? '#' : $this->_var['pager']['page_next']; ?>">下一页</a></li>
</ul> 