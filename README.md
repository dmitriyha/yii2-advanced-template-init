# yii2-advanced-template-init
This component is an open sourcing of a personal tool for instantiating the local variables of a Yii2 application that uses the advanced template. 
This tool is meant to be used in a cli environment only.

# Usage
Include the following in your `composer.json`

    "dmitriyha/yii2-advanced-template-init":"v0.0.*"
    
You will also be required to add this to your console config `main.php`, as this is a CLI only feature:

    ...
    'modules' => [
        ...
        'dmitriyha' => [
            'class' => 'dmitriyha\Yii2AdvancedTemplateInit\Module',
        ],
        ...
    ],
    ...
    
## From CLI
Invoke the tool by calling
    
    ./yii dmitriyha/environment/{target environment}
    
currently supported environments are `prod` and `dev`
