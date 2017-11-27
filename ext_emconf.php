<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nc_usefulpages".
 *
 * Auto generated 15-03-2016 11:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Rating: Useful Pages',
	'description' => 'Allows users to rate the current visited page as useful or not useful and give feedback.',
	'category' => 'plugin',
	'shy' => true,
	'version' => '2.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => true,
	'lockType' => '',
	'author' => 'Klaus Bitto, Carmen Popoviciu',
	'author_email' => 'klaus@netcreators.nl',
	'author_company' => 'Netcreators',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '6.2.0-8.7.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:27:{s:9:"Changelog";s:4:"c545";s:12:"ext_icon.gif";s:4:"ea81";s:17:"ext_localconf.php";s:4:"4ef4";s:14:"ext_tables.php";s:4:"9433";s:14:"ext_tables.sql";s:4:"5cca";s:41:"Classes/Controller/AbstractController.php";s:4:"baad";s:40:"Classes/Controller/CommentController.php";s:4:"31ad";s:37:"Classes/Controller/PageController.php";s:4:"d134";s:32:"Classes/Domain/Model/Comment.php";s:4:"7d49";s:29:"Classes/Domain/Model/Page.php";s:4:"7fec";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"963f";s:58:"Classes/Exception/InvalidControllerActionArgumentError.php";s:4:"2d88";s:58:"Classes/Exception/MissingControllerActionArgumentError.php";s:4:"18e1";s:29:"Configuration/TCA/Comment.php";s:4:"d2ca";s:26:"Configuration/TCA/Page.php";s:4:"6b4f";s:34:"Configuration/TypoScript/setup.txt";s:4:"2625";s:40:"Resources/Private/Language/locallang.xml";s:4:"8da8";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"524b";s:38:"Resources/Private/Layouts/Default.html";s:4:"10cd";s:43:"Resources/Private/Partials/CommentForm.html";s:4:"fc9a";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"2244";s:47:"Resources/Private/Partials/NavigationLinks.html";s:4:"355e";s:47:"Resources/Private/Templates/Comment/Create.html";s:4:"fe08";s:43:"Resources/Private/Templates/Page/Index.html";s:4:"4c2a";s:43:"Resources/Private/Templates/Page/Rated.html";s:4:"5dcc";s:64:"Resources/Public/Icons/tx_ncusefulpages_domain_model_comment.gif";s:4:"53ba";s:61:"Resources/Public/Icons/tx_ncusefulpages_domain_model_page.gif";s:4:"905a";}',
);

?>