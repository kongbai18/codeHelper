<?php if (!defined('THINK_PATH')) exit(); /*a:0:{}*/ ?>
<input type="text" 
	value="{if condition="isset($<?php echo $tableName; ?>.<?php echo $tableInfo[$columnNameKey]; ?>)"}{$<?php echo $tableName; ?>.<?php echo $tableInfo[$columnNameKey]; ?>}{/if}"
	class="tpl-form-input am-margin-top-xs" id="<?php echo $tableInfo[$columnNameKey]; ?>" name="<?php echo $tableInfo[$columnNameKey]; ?>" 
	placeholder="请输入<?php echo getFieldTitle($tableName, $tableInfo[$columnNameKey]); ?>">