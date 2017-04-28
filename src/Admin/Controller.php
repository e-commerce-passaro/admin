<?php
namespace Ecompassaro\Admin;

use Ecompassaro\Acesso\Controller as AcessoController;

class Controller extends AcessoController
{
    protected $resource = 'admin';

    /**
     * Mostra a página de admin do site
     *
     * @return AdminViewModel
     */
    public function indexAction()
    {
        return $this->getViewModel();
    }
}
