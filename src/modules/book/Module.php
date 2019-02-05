<?php

namespace app\modules\book;

use nullref\core\interfaces\IAdminModule;
use rmrevin\yii\fontawesome\FA;
use Yii;

/**
 * book module definition class
 */
class Module extends \yii\base\Module implements IAdminModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\book\controllers';

    /**
     * @return array
     */
    public static function getAdminMenu()
    {
        return [
            'label' => Yii::t('app', 'Books'),
            'icon' => FA::_BOOK,
            'url' => ['/book/admin'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
