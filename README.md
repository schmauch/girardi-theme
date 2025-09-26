# girardi-theme
This is a frontend theme for [girardi's website](https://www.girardi.ch)

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/):

Either run

```
composer require --prefer-dist schmauch/girardi-theme
```

or add

```json
"schmauch/girardi-theme": "*"
```

to the require section of your composer.json.

### Configure theme
Add the theme to the view component:
```
'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@vendor/schmauch/girardi-theme/',
                'baseUrl' => '@web/themes/girardi-theme',
                'pathMap' => [
                    '@app/views/layouts' => '@vendor/schmauch/girardi-theme/layouts',
                ],
            ],
        ],
    ],
```


