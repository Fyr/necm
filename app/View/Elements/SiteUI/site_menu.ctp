			<ul class="hn_ul">
<?
	foreach($aNavBar as $id => $item) {
		$class = ($id == $currMenu) ? ' class="active"' : '';
		if (!isset($item['submenu'])) {
?>
				<li<?=$class?>><div class="fix"><?=$this->Html->link($item['label'], $item['href'])?></div>
<?
		} else {
			echo '<ul>';
			if (isset($item['submenu'])) {
				foreach($item['submenu'] as $_item) {
					echo '<li>'.$this->Html->link($_item['label'], $_item['href']).'</li>';
				}
			}
			echo '</ul>';
		}
?>
				</li>
<?
	}
?>
			</ul>