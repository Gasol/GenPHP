<?php 
namespace GenPHP;
use CLIFramework\Application as CLIApp;
class Application extends CLIApp
{
    const name = 'GenPHP';
    const VERSION = "1.2.4";

    function brief()
    {
        return 'GenPHP - PHP Code Generator.';
    }

    function init()
    {
        $this->registerCommand('new');
        $this->registerCommand('list');
        $this->registerCommand('init');
        $this->registerCommand('install');
        parent::init();
    }

    function options($opts)
    {
        parent::options( $opts );
    }

}
