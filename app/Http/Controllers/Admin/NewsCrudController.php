<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
    }

    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::column('publication_data');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsRequest::class);

        $this->crud->addField([
            'name'  => 'title',
            'label' => 'Título',
            'type'  => 'text'

        ]);

        $this->crud->addField([
            'name'  => 'sub_title',
            'label' => 'Sub-título',
            'type'  => 'text'

        ]);

        $this->crud->addField([
            'name'  => 'publication_data',
            'label' => 'Data publicação',
            'type'  => 'date'
        ]);

        $this->crud->addField([
            'name'  => 'description',
            'label' => 'Descrição',
            'type'  => 'summernote'
        ]);

        $this->crud->addField([
            'name'   => 'cover_image',
            'label'  => 'Imagem Capa [ 1200 x 800 ]',
            'type'   => 'upload',
            'upload' => true
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function show(int $id)
    {
        $news = News::find($id);
        $otherNews = News::get()->sortByDesc('created_at')->skip(0)->take(3);

        return view('/news', [
            'news' => $news,
            'otherNews' => $otherNews
        ]);
    }
}
