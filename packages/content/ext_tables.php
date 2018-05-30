<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'provider extension');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Nl.Content', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Nl.Content', 'Content');


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file_reference'] = "TYPO3\\CMS\\Recordlist\\Browser\\FileBrowser";