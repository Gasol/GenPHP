<?php 
namespace GenPHP;
use CLIFramework\Application as CLIApp;

class Application extends CLIApp
{
    const NAME = 'GenPHP';
    const VERSION = "1.3.2";

    function brief()
    {
        return 'GenPHP - PHP Code Generator.';
    }

    function init()
    {
        $this->addCommand('new');
        $this->addCommand('list');
        $this->addCommand('init');
        $this->addCommand('install');
        parent::init();
    }

    function options($opts)
    {
        parent::options( $opts );
    }

}
