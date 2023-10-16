<?php
/**
 * @author Alexandre Correia
 */
namespace App\View\Components;

use Illuminate\View\Component;

class AlertDefault extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     * Alerta padrao do sistema, deve ser informado na session os campos:
     * status  - com a classe do alerta
     * message - com a mensagem
     * 
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-default');
    }
}
