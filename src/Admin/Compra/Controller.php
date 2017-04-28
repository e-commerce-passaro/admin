<?php

namespace Ecompassaro\Admin\Compra;

use Ecompassaro\Acesso\Controller as AcessoController;

class Controller extends AcessoController
{
    protected $resource = 'admin-compra';

    /**
     * Mostra a página de administração de compras
     * @return AdminCompraViewModel
     */
    public function indexAction()
    {
        return $this->getViewModel()->setTemplate('admin/compra/index');
    }
}
