<?php

namespace app\modules\oneui\controllers;

use yii\web\Controller;

class PortletController extends Controller {
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
