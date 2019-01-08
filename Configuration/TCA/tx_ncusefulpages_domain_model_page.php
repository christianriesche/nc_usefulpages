<?php
defined('TYPO3_MODE') || die;

return array(
    'ctrl' => array(
        'title'             => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page',
        'label' 			=> 'page_i_d',
        'label_alt'			=> 'page_title',
        'label_alt_force'	=> true,
        'tstamp' 			=> 'tstamp',
        'crdate' 			=> 'crdate',
        'versioningWS' 		=> true,
        'origUid' 			=> 't3_origuid',
        'languageField' 	=> 'sys_language_uid',
        'transOrigPointerField' 	=> 'l18n_parent',
        'transOrigDiffSourceField' 	=> 'l18n_diffsource',
        'delete' 			=> 'deleted',
        'enablecolumns' 	=> array(
            'disabled' => 'hidden'
        ),
        'iconfile' 			=> 'EXT:nc_usefulpages/Resources/Public/Icons/tx_ncusefulpages_domain_model_page.gif',
    ),
    'interface' => array(
        'showRecordFieldList'	=> 'page_i_d,page_title,page_u_r_l,page_parameters,useful,notuseful,undecided',
    ),
    'types' => array(
        '1' => array('showitem'	=> 'page_i_d,page_title,page_u_r_l,page_parameters,useful,notuseful,undecided,comments'),
    ),
    'palettes' => array(
        '1' => array('showitem'	=> ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude'			=> 1,
            'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
            'config'			=> array(
                'type'					=> 'select',
                'foreign_table'			=> 'sys_language',
                'foreign_table_where'	=> 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
                ),
            )
        ),
        'l18n_parent' => array(
            'displayCond'	=> 'FIELD:sys_language_uid:>:0',
            'exclude'		=> 1,
            'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config'		=> array(
                'type'			=> 'select',
                'items'			=> array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_ncusefulpages_domain_model_page',
                'foreign_table_where' => 'AND tx_ncusefulpages_domain_model_page.uid=###REC_FIELD_l18n_parent### AND tx_ncusefulpages_domain_model_page.sys_language_uid IN (-1,0)',
            )
        ),
        'l18n_diffsource' => array(
            'config'		=>array(
                'type'		=>'passthrough',
            )
        ),
        't3ver_label' => array(
            'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
            'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
            'config'		=> array(
                'type'		=>'none',
                'cols'		=> 27,
            )
        ),
        'hidden' => array(
            'exclude'	=> 1,
            'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'	=> array(
                'type'	=> 'check',
            )
        ),
        'page_i_d' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.page_i_d',
            'config'	=> array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ),
        ),
        'page_title' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.page_title',
            'config'	=> array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'page_u_r_l' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.page_u_r_l',
            'config'	=> array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'page_parameters' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.page_parameters',
            'config'  => array(
                'type' => 'text',
                'rows' => 5,
                'cols' => 18
            )
        ),
        'useful' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.useful',
            'config'	=> array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ),
        ),
        'notuseful' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.notUseful',
            'config'	=> array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ),
        ),
        'undecided' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.undecided',
            'config'	=> array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ),
        ),
        'comments' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xlf:tx_ncusefulpages_domain_model_page.comments',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_ncusefulpages_domain_model_comment',
                'foreign_field' => 'page',
                'size' => 10,
                'maxitems' => 9999,
                'autoSizeMax' => 30,
                'multiple' => 0,
                'appearance' => array(
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                )
            )
        ),
    ),
);
