<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      '/*/input_bitcoin',
      '/*/conform_bitcoin',
      '/*/zaif_post',
      '/*/zaif_result',
      '/*/input_credit',
      '/*/conform_credit',
      '/*/t_input_credit',
      '/*/t_conform_credit',
      '/*/input_reservation',
      '/*/inputted_start',
      '/*/inputted_select',
    ];
}
