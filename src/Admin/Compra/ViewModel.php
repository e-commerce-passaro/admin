<?php
namespace Ecompassaro\Admin\Compra;

use Ecompassaro\Compra\Manager as CompraManager;
use Ecompassaro\Acesso\ViewModel as AcessoViewModel;
use Ecompassaro\Acesso\Acesso;

/**
 * Gerador da estrutura da página de administração de compras
 */
class ViewModel extends AcessoViewModel
{
    /**
     * Injeta dependências
     * @param \Acesso\Acesso
     * @param \Compra\CompraManager $compraManager
     */
    public function __construct(Acesso $acesso, CompraManager $compraManager)
    {
        parent::__construct($acesso);
        $this->variables['pagina'] = array('descricao' => 'Relatório de compras.');
        $this->variables['compras'] = $compraManager->obterTodasCompras();
    }
}
