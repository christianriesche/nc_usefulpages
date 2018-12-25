<?php
defined('TYPO3_MODE') || die;

return array(
    'ctrl' => array(
        'title'             => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment',
        'label'				=> 'content',
        'tstamp'            => 'tstamp',
        'crdate'            => 'crdate',
        'delete'            => 'deleted',
        'enablecolumns'     => array(
            // no 'hidden' field necessary for these comments, as they are a BE-only feature.
        ),
        'iconfile'          => 'EXT:nc_usefulpages/Resources/Public/Icons/tx_ncusefulpages_domain_model_comment.gif'
    ),
    'interface' => array(
        'showRecordFieldList' => 'rating, content, author_name, author_email'
    ),
    'types' => array(
        '1' => array('showitem' => 'rating, content, author_name, author_email')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
    'columns' => array(
        'content' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment.content',
            'config'  => array(
                'type' => 'text',
                'rows' => 15,
                'cols' => 80
            )
        ),
        'page' => array(
            'config' => array(
                'type' => 'passthrough',
            )
        ),
        'rating' => array(
            'exclude'		=> 0,
            'label'			=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment.rating',
            'config'		=> array(
                'type' 		=> 'select',
                'items'		=> array(
                    array('-',
                        0), // Empty option despite 'eval'=>'required' to allow smooth transition without necessity of updating old records.

                    array('LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_page.useful',
                        \Netcreators\NcUsefulpages\Controller\CommentController::RATING_USEFUL),

                    array('LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_page.notUseful',
                        \Netcreators\NcUsefulpages\Controller\CommentController::RATING_NOT_USEFUL),

                    array('LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_page.undecided',
                        \Netcreators\NcUsefulpages\Controller\CommentController::RATING_UNDECIDED)
                ),
                'size' 		=> 1,
                'maxitems'	=> 1,
                'eval' 		=> 'required'
            ),
        ),
        'author_name' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment.author_name',
            'config'	=> array(
                'type' 	=> 'input',
                'size' 	=> 30,
                'eval' 	=> 'trim',
                'max'	=> '255'
            ),
        ),
        'author_email' => array(
            'exclude'	=> 0,
            'label'		=> 'LLL:EXT:nc_usefulpages/Resources/Private/Language/locallang_db.xml:tx_ncusefulpages_domain_model_comment.author_email',
            'config'	=> array(
                'type' 	=> 'input',
                'size' 	=> 30,
                'eval' 	=> 'trim',
                'max'	=> '255'
            ),
        ),
    )
);
