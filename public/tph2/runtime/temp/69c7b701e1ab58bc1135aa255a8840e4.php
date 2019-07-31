<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\View\add.html";i:1556261712;}*/ ?>
{extend name="layout" /}
{block name="content"}
<!-- 内容区域 -->
<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
		<div class="row">
				<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
						<div class="widget am-cf">
								<div class="widget-head am-cf">
										<div class="widget-title am-fl">新建<?php echo pressTableDict($tableName); ?></div>
										<div class="widget-function am-fr">
											<a href="javascript:;" class="am-icon-cog"></a>
										</div>
								</div>
								<div class="widget-body am-fr">
										<form class="am-form tpl-form-border-form" method="post">
	<?php if(is_array($tableInfoArray) || $tableInfoArray instanceof \think\Collection || $tableInfoArray instanceof \think\Paginator): $i = 0; $__LIST__ = $tableInfoArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tableInfo): $mod = ($i % 2 );++$i;if($tableInfo[$columnNameKey] != 'id'): ?>
	<div class="am-form-group">
			<label for="<?php echo $tableInfo[$columnNameKey]; ?>" class="am-u-sm-12 am-form-label am-text-left"><?php echo getFieldTitle($tableName, $tableInfo[$columnNameKey]); ?>
					<span class="tpl-form-line-small-title"><?php echo $tableInfo[$columnNameKey]; ?></span></label>
			<div class="am-u-sm-12">
					<?php echo $tableInfo['input']; ?>
			</div>
	</div>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	<div class="am-form-group">
			<div class="am-u-sm-12 am-u-sm-push-12">
					<button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
			</div>
	</div>
</form>
								</div>
						</div>
				</div>
		</div>
	</div>
</div>
{/block}