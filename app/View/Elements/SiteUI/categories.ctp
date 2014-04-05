<ul class="side_navi_ul">
<?
	$subcat = $aSubcategories[0];
?>
	<li id="cat-<?=$subcat['Category']['id']?>">
		<div class="side_lvl_1_n"><a href=""><?=$subcat['Category']['title']?></a></div>
		<ul>

<?
	$cat = Hash::get($aSubcategories[0], 'Category.id');
	foreach($aSubcategories as $subcat) {
		if ($cat != $subcat['Category']['id']) {
			$cat = $subcat['Category']['id'];
?>
		</ul>
	</li>
	<li id="cat-<?=$subcat['Category']['id']?>">
		<div class="side_lvl_1_n"><a href=""><?=$subcat['Category']['title']?></a></div>
		<ul>
<?			
		}
?>
			<li><a href="/SiteProduct/<?=$subcat['Category']['id']?>/<?=$subcat['Subcategory']['id']?>"><?=$subcat['Subcategory']['title']?></a></li>
<?
	}
?>
		</ul>
	</li>
</ul>