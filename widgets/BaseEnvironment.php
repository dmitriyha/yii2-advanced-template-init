<?php
namespace libs8000\consoleutils\widgets;

use Yii;
use yii\base\Widget;

abstract class BaseEnvironment extends Widget {
    public $dbName;
    public $dbUser = 'root';
    public $dbPassword = '';
    public $dbHost = 'localhost';
    
    public $namespaces = [
        '@common',
        '@frontend',
        '@backend',
        '@console',
    ];
    
    protected $environment;
    
    public function run(){
        foreach($this->namespaces as $namespace){
            $path = yii::getAlias($namespace);
            $configFolder = $path.'/config';
            $folder = str_replace('@','',$namespace);
            file_put_contents($configFolder.'/main-local.php',
                $this->render(
                    $this->environment.'/'.$folder.'/config/main-local.php',
                    [
                        'dbName'=>$this->dbName,
                        'dbUser'=>$this->dbUser,
                        'dbPassword'=>$this->dbPassword,
                        'dbHost'=>$this->dbHost,
                    ]
                )
            );
            file_put_contents($configFolder.'/params-local.php',$this->render($this->environment.'/'.$folder.'/config/params-local.php'));
            if(file_exists($path.'/web/index.php')){
                if(!file_exists($path.'/web/assets')){
                    mkdir($path.'/web/assets',755);
                    mkdir($path.'/runtime',755);
                }
                file_put_contents($path.'/web/index.php',$this->render($this->environment.'/'.$folder.'/web/index.php'));
            }
            
        }
        
        return parent::run();
    }
}