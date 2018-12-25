<?php
defined('TYPO3_MODE') || die;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY, // Note: Vendor name ('Netcreators.') is only added for @see \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin()!
    'Ncusefulpages',
    'Useful Pages'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Rating: Useful Pages');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ncusefulpages_domain_model_page');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ncusefulpages_domain_model_comment');
