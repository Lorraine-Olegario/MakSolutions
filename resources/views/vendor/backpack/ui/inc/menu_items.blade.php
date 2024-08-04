<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>

<x-backpack::menu-item title="Usuários" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Banners" icon="la la-picture-o" :link="backpack_url('banner')" />
<x-backpack::menu-item title="Empresa" icon="la la-bank" :link="backpack_url('company')" />

<x-backpack::menu-item title="News" icon="la la-question" :link="backpack_url('news')" />