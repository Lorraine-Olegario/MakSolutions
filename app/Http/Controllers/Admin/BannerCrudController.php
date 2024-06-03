<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BannerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class BannerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Banner::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/banner');
        CRUD::setEntityNameStrings('banner', 'banners');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('description');
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(BannerRequest::class);

        $this->crud->addField([
            'name' => 'description',
            'type' => 'text',
            'label' => 'Descrição'
        ]);

        $this->crud->addField([
            'name' => 'image',
            'label' => 'Imagem Banner [1920 x 370]',
            'type' => 'upload',
            'upload' => true
        ]);

        $this->crud->addField([
            'name' => 'type',
            'type' => 'hidden',
            'value' => 1
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}
