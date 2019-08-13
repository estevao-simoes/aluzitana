<?php

namespace App\Providers;

use App\Contato;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Contatos',
                'url' => '/dashboard/contatos',
                'icon' => 'envelope',
                'label' => Contato::count(),
                'label_color' => 'warning',
            ]); 
            $event->menu->add('CONFIGURAÇÕES');
            $event->menu->add([
                'text' => 'Configurações',
                'icon' => 'cog',
                'url' => '/dashboard/configuracoes',
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
