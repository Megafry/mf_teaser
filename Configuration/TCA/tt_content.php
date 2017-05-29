<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:mf_teaser/Resources/Private/Language/locallang_db.xlf:wizard.title',
        'mf_teaser',
        'content-image'
    ],
    'textmedia',
    'after'
);


$GLOBALS['TCA']['tt_content']['types']['mf_teaser'] = [
    'showitem'         => '
      --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
      --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
      header_link,
      bodytext,
      assets,
   --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
      --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
   --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
      --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
      --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
   --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
    '
];
