<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{
	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod.wizards.newContentElement.wizardItems.common {
    	elements {
    		mf_teaser {
    			icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/teaser.svg
    			title = LLL:EXT:mf_teaser/Resources/Private/Language/locallang_db.xlf:wizard.title
    			description = LLL:EXT:mf_teaser/Resources/Private/Language/locallang_db.xlf:wizard.description
    			tt_content_defValues {
    				CType = mf_teaser
    			}
    		}
    	}
    	show := addToList(mf_teaser)
    }'
	);
    },
    $_EXTKEY
);
