<?php

namespace Ecompassaro\Admin\Pagamento;

use Ecompassaro\Acesso\Controller as AcessoController;

class Controller extends AcessoController
{
    protected $resource = 'admin-pagamento';

    /**
     * Mostra a página de administração de pagamentos
     * @return AdminCompraViewModel
     */
    public function indexAction()
    {
        return $this->getViewModel()->setTemplate('admin/pagamento/index');
    }
}
