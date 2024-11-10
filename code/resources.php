<section>
<?php
//#Category	Name	By	Description	Link
$sheet = get_sheet($sheetFile, false);
$lastCat = '';
foreach ($sheet->rows as $item) {
	$name = trim($item[$sheet->columns['Name']]);
	if (!$name) continue;

	$cat = trim($item[$sheet->columns['Category']]);
	if ($cat != '' && $lastCat != $cat) {
		if ($lastCat != '') echo '</ol>';
		echo am_var('2nl') . '<h2>' . $cat . '</h2><ol>' . am_var('nl');
		$lastCat = $cat;
	}

	echo '<li>' . makeLink(replaceSpecialChars($name), $item[$sheet->columns['Link']], false);
	if ($by = $item[$sheet->columns['By']]) echo am_var('brnl') . 'By: ' . $by;
	$text = replaceSpecialChars($item[$sheet->columns['Description']]);
	echo am_var('brnl') . renderMarkdown($text, ['echo' => false]) . '</li>' . am_var('2nl');
}
echo '</ol>';
?>
</section>

