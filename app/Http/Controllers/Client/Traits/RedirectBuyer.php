<?php

namespace App\Http\Controllers\Client\Traits;

use App\Providers\RouteServiceProvider;

trait RedirectBuyer
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : RouteServiceProvider::CLIENT;
    }
}
