<?php
namespace app\controllers;
use \yii\web\Controller;

class SiteController extends Controller
{
	function actionIndex()
	{
            return $this->render('index.php');
	}
}
