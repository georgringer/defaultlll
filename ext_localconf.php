<?php
defined('TYPO3_MODE') or die();

$boot = function () {

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\Defaullll\Backend\FormDataProvider\TranslateableDefault::class] = [
        'depends' => [
           \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowDefaultValues::class
        ]
    ];
};
$boot();
unset($boot);