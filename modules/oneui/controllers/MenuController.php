<?php

namespace app\modules\oneui\controllers;

use yii\web\Controller;

/**
 * Default controller for the `oneui` module
 */
class MenuController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
