# Yii2 Framework NRSGateway extension.

[Yii2 Framework website](http://www.yiiframework.com)

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

    php composer.phar require marqu3s/yii2-nrsgateway "dev"

or add

    "marqu3s/yii2-nrsgateway": "dev"

to the require section of your composer.json

## Usage

Add to main.php components section:

```php
[
    'components' => [
        ...
        'sms' => [
            'class' => 'marqu3s\nrsgateway\YiiSMSService',
            'username' => 'theUsername',
            'password' => 'thePassword'
        ],
        ...
    ]
]
```

and use it:

```php
$nrs = Yii::$app->sms->nrs;
$nrs->to   = ['xxxxxxxxxxxxx', 'yyyyyyyyyyyyy'];
$nrs->from = 'Sender';
$nrs->msg  = 'This is a test message.';
$result = $nrs->send();
```

Check $result variable for errors.

## Original Author

[João Marques](https://github.com/marqu3s/), e-mail: [joao@jjmf.com](mailto:joao@jjmf.com)
