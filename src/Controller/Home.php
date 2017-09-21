<?php 
namespace App\Controller;

Class Home
{
    public function indexAction()
    {
        $view=new \Smarty();
        $view->assign('username', 'Anton') ;
        $view->display(__DIR__ . '/../../Templates/home.html');
    }
}
