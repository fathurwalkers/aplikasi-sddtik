<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal-lihat-peserta-pelayanan extends Component
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
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-lihat-peserta-pelayanan');
    }
}
