<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $message)
    {
        //
        $this->type = $type;
//
//        if($type == "error"){
//            $this->type = 'bg-red-500 text-white';
//        }
//        if($type == "alert"){
//            $this->type = 'bg-amber-500 text-white';
//        }
//        if($type == "info"){
//            $this->type = 'bg-sky-500 text-white';
//        }
//        if($type == "success"){
//            $this->type = 'bg-green-500 text-white';
//        }


        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
