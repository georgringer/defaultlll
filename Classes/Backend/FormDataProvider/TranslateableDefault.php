<?php

namespace GeorgRinger\Defaullll\Backend\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;

class TranslateableDefault implements FormDataProviderInterface
{
    /**
     * @param array $result
     * @return array
     */
    public function addData(array $result)
    {
        foreach ($result['databaseRow'] as $field => &$value) {
            if (is_string($value) && strpos($value, 'LLL:') === 0) {
                $value = $GLOBALS['LANG']->sL($value);
            }
        }

        return $result;
    }
}