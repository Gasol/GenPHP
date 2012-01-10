<?php 
namespace GenPHP\Operation;
use GenPHP\Operation\Helper;

class GitCloneOperation extends Operation
{
    function run( $repoUri , $target )
    {
        if( file_exists($target) ) {
            $this->logAction('git:update',$repoUri);
            Helper::system('git','--git-dir',$target . DIRECTORY_SEPARATOR . '.git','remote','update','--prune');
            Helper::system('git','--git-dir',$target . DIRECTORY_SEPARATOR . '.git','pull');
        }
        else {
            $this->logAction('git:clone',$repoUri);
            Helper::system('git','clone',$repoUri,$target);
        }
    }
}

