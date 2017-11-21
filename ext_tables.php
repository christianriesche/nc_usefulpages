<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY, // Note: Vendor name ('Netcreators.') is only added for @see \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin()!
	'Ncusefulpages',
	'Useful Pages'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Rating: Useful Pages');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ncusefulpages_domain_model_page');
$TCA['tx_ncusefulpages_domain_model_page'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_page',
		'label' 			=> 'page_i_d',
		'label_alt'			=> 'page_title',
		'label_alt_force'	=> TRUE,
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Page.php',
		'iconfile' 			=> \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ncusefulpages_domain_model_page.gif'
	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ncusefulpages_domain_model_comment');
$TCA['tx_ncusefulpages_domain_model_comment'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment',
		'label'				=> 'content',
		'tstamp'            => 'tstamp',
		'crdate'            => 'crdate',
		'delete'            => 'deleted',
		'enablecolumns'     => array (
			// no 'hidden' field necessary for these comments, as they are a BE-only feature.
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Comment.php',
		'iconfile'          => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ncusefulpages_domain_model_comment.gif'
	)
);

?>