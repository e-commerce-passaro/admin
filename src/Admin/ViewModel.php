<?php
namespace Ecompassaro\Admin;

use Ecompassaro\Acesso\ViewModel as AcessoViewModel;
use Ecompassaro\Acesso\Acesso;

/**
 * Gerador da estrutura da página de admin do site
 */
class ViewModel extends AcessoViewModel
{

    /**
     * Injeta dependências
     * @param mixed $entidadesConfig
     */
    public function __construct(Acesso $acesso, $entidadesConfig = array())
    {
        parent::__construct($acesso);
        $this->variables['entidades'] = $entidadesConfig;
        $this->variables['pagina'] = array('descricao' => 'Selecione o que você quer gerenciar no menu abaixo.');
    }
}
