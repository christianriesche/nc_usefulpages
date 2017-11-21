<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Netcreators.' . $_EXTKEY,
	'Ncusefulpages',
	array(
		'Page' => 'index, rate, rated',
		'Comment' => 'create'
	),
	array(
		'Page' => 'index, rate, rated',
		'Comment' => 'create'
	)
);

?>