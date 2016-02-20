<?php namespace Anomaly\PrspModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class PrspModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [
        'Anomaly\PrspModule\PrspModulePlugin'
    ];

    protected $routes = [
        'admin/prsp' => 'Anomaly\PrspModule\Http\Controller\Admin\AuthorsController@index',
        'admin/prsp/create' => 'Anomaly\PrspModule\Http\Controller\Admin\AuthorsController@create',
        'admin/prsp/edit/{id}' => 'Anomaly\PrspModule\Http\Controller\Admin\AuthorsController@edit',
        'admin/prsp/push/{id}' => 'Anomaly\PrspModule\Http\Controller\Admin\AuthorsController@push'
    ];


    protected $singletons = [
        'Anomaly\Streams\Platform\Model\Prsp\PrspAuthorsEntryModel' => 'Anomaly\PrspModule\Author\AuthorModel',
        'Anomaly\PrspModule\Author\Contract\AuthorRepositoryInterface' => 'Anomaly\PrspModule\Author\Contract\AuthorInterface'
    ];

    /*protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }*/

}
