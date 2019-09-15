<?php


namespace Hdrm147\NovaRTL;


use Illuminate\Support\ServiceProvider;

class NovaRTLServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $path = resource_path();

        $this->publishes([
            __DIR__ . '/../resources/lang/ar.json' => resource_path('lang/vendor/nova/ar.json'),
            __DIR__ . '/../resources/views/meta.blade.php' => resource_path('views/vendor/nova/partials/meta.blade.php'),
            __DIR__ . '/../resources/public/rtl.css' => public_path('vendor/nova-rtl/rtl.css'),
        ], 'hdrm-nova-rtl');
    }
}
