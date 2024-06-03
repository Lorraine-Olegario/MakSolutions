<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CompanyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class CompanyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Company::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/company');
        CRUD::setEntityNameStrings('company', 'companies');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('fantasy_name');
        CRUD::column('cnpj');
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(CompanyRequest::class);

        $this->crud->addField([
            'name'  => 'cnpj',
            'type'  => 'text',
            'label' => 'CNPJ'
        ]);

        $this->crud->addField([
            'name'  => 'social_reason',
            'type'  => 'text',
            'label' => "Razão Social"
        ]);

        $this->crud->addField([
            'name'  => 'fantasy_name',
            'type'  => 'text',
            'label' => "Nome Fantasia"
        ]);

        $this->crud->addField([
            'name'  => 'cep',
            'type'  => 'text',
            'label' => 'CEP'
        ]);

        $this->crud->addField([
            'name'  => 'street',
            'type'  => 'text',
            'label' => 'Logradouro'
        ]);

        $this->crud->addField([
            'name'  => 'number',
            'type'  => 'text',
            'label' => 'Número'
        ]);

        $this->crud->addField([
            'name'  => 'complement',
            'type'  => 'text',
            'label' => 'Complemento'
        ]);

        $this->crud->addField([
            'name'  => 'neighborhood',
            'type'  => 'text',
            'label' => 'Bairro'
        ]);

        $this->crud->addField([
            'name'  => 'municipality',
            'type'  => 'text',
            'label' => 'Município'
        ]);

        $this->crud->addField([   // select_from_array
            'name'        => 'uf',
            'label'       => "UF",
            'type'        => 'select_from_array',
            'options'     => [
                ''  =>'Selecione Estado',
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'],
            'allows_null' => false,
            'default'     => 'one',
        ]);

        $this->crud->addField([
            'name'  => 'email_1',
            'type'  => 'text',
            'label' => 'E-mail 1'
        ]);

        $this->crud->addField([
            'name'  => 'email_2',
            'type'  => 'text',
            'label' => 'E-mail 2'
        ]);

        $this->crud->addField([
            'name'  => 'telephone_1',
            'type'  => 'text',
            'label' => 'Telefone 1'
        ]);

        $this->crud->addField([
            'name'  => 'telephone_2',
            'type'  => 'text',
            'label' => 'Telefone 2'
        ]);

        $this->crud->addField([
            'name'  => 'instagram',
            'type'  => 'text',
            'label' => 'Link instagram'
        ]);

        $this->crud->addField([
            'name'  => 'facebook',
            'type'  => 'text',
            'label' => 'Link facebook'
        ]);

        $this->crud->addField([
            'name'  => 'twitter',
            'type'  => 'text',
            'label' => 'Link twitter'
        ]);

        $this->crud->addField([
            'name' => 'logo',
            'label' => 'Imagem Logo [00 x 00]',
            'type' => 'upload',
            'upload' => true
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}
