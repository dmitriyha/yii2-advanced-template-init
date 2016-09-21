<?php

namespace libs8000\consoleutils\controllers;

use Yii;

use yii\console\Controller;
use libs8000\consoleutils\widgets\DevelopmentEnvironment;
use libs8000\consoleutils\widgets\ProductionEnvironment;

/**
 * Environemt controller
 *
 *
 **/

class EnvironmentController extends Controller
{
    
    public function actionDev()
    {
        DevelopmentEnvironment::widget();
    }
    
    public function actionProd()
    {
        ProductionEnvironment::widget();
    }
}
