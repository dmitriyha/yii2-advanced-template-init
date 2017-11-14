<?php
namespace dmitriyha\Yii2AdvancedTemplateInit\controllers;

use Yii;

use yii\console\Controller;
use dmitriyha\Yii2AdvancedTemplateInit\widgets\DevelopmentEnvironment;
use dmitriyha\Yii2AdvancedTemplateInit\widgets\ProductionEnvironment;

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
