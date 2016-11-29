# TYPO3 Extension `defaultlll`

This extensions makes the field `default` of the TCA translateable.

**Example:**

    'author' => [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
        'config' => [
            'type' => 'input',
            'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
            'size' => 30,
        ]
    ],

## Requirements

- TYPO3 7.6 or 8.x
- GPL2

## Usage

1) Install the extension by using e.g.

```
    cd typp3conf/ext/
    git clone https://github.com/georgringer/defaultlll.git
```

If using composer, add it to the root composer.json file and don't forget to add the PSR-4 entry.

2) Install it after that in the Extension Manager.

3) *You are done!*