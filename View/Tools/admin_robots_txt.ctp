<?php if ( !isset($results) ) : ?>
<div style="width:100%;">
	<form id="toolForm" action="" method="post" onsubmit="tool_exe(600); return false;">
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td align="left" valign="top"><b><?php echo __t('Enter Your URL'); ?>:</b></td>
				</tr>
			<tr>
			  <td align="left" valign="top"><input type="text" name="data[Tool][url]" value="<?php echo Configure::read('ModSeo.Config.seo_site_url'); ?>" class="text" style="width:100%;" /></td>
		  </tr>
			<tr>
				<td align="left" valign="top">
					<input type="submit" value="<?php echo __t('Continue'); ?>" class="primary_lg" />
				</td>
			</tr>
		</table>
	</form>
</div>
<?php else: ?>
<div style="width:100%;">
	<h1><?php printf(__t('robots.txt file for %s'), $this->data['Tool']['url']); ?></h1>
	<textarea style="width:100%; height:360px;"><?php echo $results; ?></textarea>
</div>
<?php endif; ?>