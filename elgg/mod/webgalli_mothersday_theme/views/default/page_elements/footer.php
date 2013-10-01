<?php

	/**
	 * Mothers day theme for Elgg
	 * @package: Mothers day theme for Elgg
	 * @license: GPLV2
	 * @author Dr Sanu P Moideen for Team Webgalli
	 * @copyright Team Webgalli
	 * @link www.Webgalli.com
	 */

?>

<div class="clearfloat"></div>

<div id="layout_footer">
<table width="100%" height="79" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="210" height="50">

		</td>
		
		<td width="748" height="50" align="right">
		<p class="footer_toolbar_links">
		<?php
			echo elgg_view('footer/links');
		?>
		</p>
		</td>
	</tr>
	
	<tr>
		<td width="210" height="28">&nbsp;</td>
		
		<td width="748" height="28" align="right">
		<p class="footer_legal_links"><a href="http://www.elgg.org" >Powered by Elgg</a> &amp; <a href="http://www.webgalli.com" title="Team Webgalli">Design by Team Webgalli</a></p>
		</td>
	</tr>
</table>
</div><!-- /#layout_footer -->

<div class="clearfloat"></div>

</div><!-- /#page_wrapper -->
</div><!-- /#page_container -->
<!-- insert an analytics view to be extended -->
<?php
	echo elgg_view('footer/analytics');
?>
<!-- Design By Dr. Sanu P Moideen @ Team Webgalli, Please dont remove the Credits! Thank You -->
</body>
</html>