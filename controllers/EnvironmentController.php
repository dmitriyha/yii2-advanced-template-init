<?php

namespace libs8000\consoleutils\controllers;

use Yii;

use yii\console\Controller;
use libs8000\consoleutils\widgets\DevelopmentEnvironment;

/**
 * Environemt controller
 *
 *
 **/

class EnvironmentController extends Controller
{
    /**
     * Creates environment files
     * 
     * @return mixed
     */
    
    public function actionIndex()
    {
        DevelopmentEnvironment::widget();
    }
}
