<?php if ( !isset($results) ) : ?>
<div style="width:100%; height:100px; overflow-y:auto;">
	<form id="toolForm" action="<?php echo $this->Html->url("/{$this->plugin}/tools/{$this->params['action']}"); ?>" method="post" onsubmit="tool_exe(600); return false;">
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td align="left" valign="top"><b><?phpecho __t('Enter Your URL'); ?>:</b></td>
				</tr>
			<tr>
			  <td align="left" valign="top"><input type="text" name="data[Tool][url]" value="<?php echo Configure::read('ModSeo.Config.seo_site_url'); ?>" class="text" style="width:100%;" /></td>
		  </tr>
			<tr>
				<td align="left" valign="top">
					<input type="submit" value="<?phpecho __t('Continue'); ?>" class="primary_lg" />
				</td>
			</tr>
		</table>
	</form>
</div>
<?php else: ?>

<div style="width:100%; height:auto; overflow-y:auto; overflow-x:hidden;">

	<h1><?php printf(__t('%s analysed words'), count($results)); ?></h1>
	<div style="width:100%; height:360px; overflow:auto; white-space: nowrap;">
		<?php foreach($results as $word => $percent): ?>
			<?php echo $word; ?>: <?php echo $percent; ?>% <br/>
		<?php endforeach; ?>
	</div>
</div>

<?php endif; ?>