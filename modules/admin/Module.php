<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();
        \Yii::$app->viewPath='@app/modules/admin/views';
    }
}
