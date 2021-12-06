<?php

return [

    'title' => '',
    'title_prefix' => 'Admin |',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>DMIN</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'https://www.facebook/stuard.oficial',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-info',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' =>true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => '',
    'classes_auth_header' => 'bg-dark text-white',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-warning',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-white',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'welcome',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */
    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => false,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'buscar',
        ],
        [
            'text'=>'Empleados',
            'icon'=>'fas fa-users',
            'submenu'=>[
                [
                    'text'=>'Listado',
                    'route'=>'employees.index',
                    'icon'=>'fas fa-list',
                ],
                [
                    'text'=>'Administradores',
                    'route'=>'administrators.index',
                    'icon'=>'fas fa-list',
                ],
                [
                    'text'=>'Desarrolladores',
                    'route'=>'developers.index',
                    'icon'=>'fas fa-list',
                ],
                [
                    'text'=>'Diseñadores',
                    'route'=>'designers.index',
                    'icon'=>'fas fa-list',
                ],
                [
                    'text'=>'Comercializadores',
                    'route'=>'marketers.index',
                    'icon'=>'fas fa-list',
                ],
                [
                    'text'=>'Nuevo',
                    'route'=>'employees.create',
                    'icon'=>'fas fa-plus',
                    'submenu'=>[
                        [
                            'text'=>'Nuevo Administrador',
                            'route'=>'administrators.create',
                            'icon'=>'fas fa-user',
                        ],
                        [
                            'text'=>'Nuevo Desarrollador',
                            'route'=>'developers.create',
                            'icon'=>'fas fa-user',
                        ],
                        [
                            'text'=>'Nuevo Diseñador',
                            'route'=>'designers.create',
                            'icon'=>'fas fa-user',
                        ],
                        [
                            'text'=>'Nuevo Comercializador',
                            'route'=>'marketers.create',
                            'icon'=>'fas fa-user',
                        ],
                        ],
                ],
            ]
        ],
        [
            'text' => 'Clients',
            'route'  => 'clients.index',
            'icon'    => 'fas fa-fw fa-users',
            'icon_color' => 'light',

        ],
        [
            'text' => 'Servicios',
            'icon'    => 'fas fa-fw fa-calendar-check',
            'icon_color' => 'light',
            'route'  => 'services.index',
            'submenu' =>
            [
                 [
                    'text' => 'Nuevo Servicio',
                    'route'  => 'services.create',
                    'icon'    => 'fas fa-fw fa-plus',
                    'icon_color' => 'light',
                ],
                [
                    'text' => 'Lista de Servicios',
                    'route'  => 'services.index',
                    'icon'    => 'fas fa-fw fa-list',
                    'icon_color' => 'light',
                ],

             ],
    ],
        //PROYECTOS
        [
            'text' => 'Projectos',
            'icon' => 'fas fa-fw fa-laptop-code',
            'icon_color' => 'light',
            'submenu' =>
            [
                [
                    'text' => 'Nuevo Proyecto',
                    'route'  => 'projects.create',
                    'icon'    => 'fas fa-fw fa-plus',
                    'icon_color' => 'light',
                ],
                [
                    'text' => 'Lista de Proyectos',
                    'route'  => 'projects.index',
                    'icon'    => 'fas fa-fw fa-list',
                    'icon_color' => 'light',
                ],
            ],
        ],
        //BOLETAS
        [
            'text' => 'Boletas',
            'icon' => 'fas fa-fw fa-ticket-alt',
            'icon_color' => 'light',
            'submenu' =>
            [
                [
                    'text' => 'Lista de Boletos',
                    'route'  => 'sale-receipts.index',
                    'icon'    => 'fas fa-fw fa-list',
                    'icon_color' => 'light',
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

];
