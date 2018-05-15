<?php

defined('TYPO3_MODE') or die();

$_LLL_general = 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf';
$_LLL = 'LLL:EXT:cart_products/Resources/Private/Language/locallang_db.xlf';

return [
    'ctrl' => [
        'title' => $_LLL . ':tx_cartproducts_domain_model_product_fevariant',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,

        'hideTable' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title',
        'iconfile' => 'EXT:cart_products/Resources/Public/Icons/Product/FeVariant.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, is_required, sku, title',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden;;1, is_required, sku, title, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => $_LLL_general . ':LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],

        'is_required' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cartproducts_domain_model_product_fevariant.is_required',
            'config' => [
                'type' => 'check',
            ],
        ],
        'sku' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cartproducts_domain_model_product_fevariant.sku',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required,trim'
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cartproducts_domain_model_product_fevariant.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required,trim'
            ],
        ],
        'product' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

    ],
];
