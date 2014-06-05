<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * output default index
     * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
     * @return \Zend\View\Helper\ViewModel
     */
    public function indexAction()
    {
         return new ViewModel();
    }
}