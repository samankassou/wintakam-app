<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class Navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(private Request $request)
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
        return view('components.navigation', [
            'routes' => $this->registerRoutes()
        ]);
    }

    private function registerRoutes()
    {
        return [
            [
                'name' => 'Accueil',
                'url' => route('home'),
                'active' => $this->isActive('home')
            ],
            [
                'name' => 'Accueil',
                'url' => route('home'),
                'active' => $this->isActive('home')
            ],
            [
                'name' => 'Accueil',
                'url' => route('home'),
                'active' => $this->isActive('home')
            ],
            [
                'name' => 'Accueil',
                'url' => route('home'),
                'active' => $this->isActive('home')
            ]
        ];
    }

    private function isActive(string $string): bool
    {
        return $this->request->routeIs($string);
    }
}
