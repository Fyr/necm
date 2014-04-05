<?
	$subcat = $aSubcategories[0];
?>
<form action="" class="search_form">
	<div class="search_form_row">
<?
	echo $this->Form->input('Product.cat_id', array(
		'options' => $aCategories, 
		'value' => $this->request->data('Product.cat_id'),
		'label' => __('Category'),
		'onchange' => 'category_onChange(this)'
	))
?>
	</div>
	<div class="search_form_row">
			<select id="ProductSubCatId" name="data[Product][subcat_id]" autocomplete="off">
				<optgroup id="cat-<?=$subcat['Category']['id']?>" label="<?=$subcat['Category']['title']?>">
<?
	$cat = $subcat['Category']['id'];
	foreach($aSubcategories as $subcat) {
		if ($cat != $subcat['Category']['id']) {
			$cat = $subcat['Category']['id'];
?>
				</optgroup>
				<optgroup id="cat-<?=$subcat['Category']['id']?>" label="<?=$subcat['Category']['title']?>">
<?			
		}
?>
					<option value="<?=$subcat['Subcategory']['id']?>"><?=$subcat['Subcategory']['title']?></option>
<?
	}
?>
				</optgroup>
			</select>
	</div>

	<div class="search_form_row"><label for="">Название</label><input type="text" class="input_text"></div>

	<div class="search_form_row">
		<input type="submit" value="Найти" class="button orange_button">
	</div>
</form>
<script type="text/javascript">
function category_onChange(e, subcat_id) {
	$('#ProductSubCatId optgroup').hide();
	var $optgroup = $('#ProductSubCatId optgroup#cat-' + $(e).val());
	$optgroup.show();
	$('#ProductSubCatId').val((subcat_id) ? subcat_id : $('option:first', $optgroup).attr('value'));
}
$(document).ready(function(){
	category_onChange($('#ProductCatId').get(0));
	$('#ProductSubCatId').val(<?=$this->request->data('Product.subcat_id')?>);
});
</script>