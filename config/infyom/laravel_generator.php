<?php
$path = "formularios/";
$route = "web_formOdon.php";
$namespace = "\formularios";
return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    "path" => [

        "migration"         => database_path("migrations/"),

        "model"             => app_path("Models/$path"),

        "datatables"        => app_path("DataTables/$path"),

        "repository"        => app_path("Repositories/$path"),

        "routes"            => base_path("routes/$path/$route"),

        "api_routes"        => base_path("routes/api.php"),

        "request"           => app_path("Http/Requests/$path"),

        "api_request"       => app_path("Http/Requests/API/"),

        "controller"        => app_path("Http/Controllers/$path"),

        "api_controller"    => app_path("Http/Controllers/API/"),

        "repository_test"   => base_path("tests/Repositories/"),

        "api_test"          => base_path("tests/APIs/"),

        "tests"             => base_path("tests/"),

        "views"             => resource_path("views/"),

        "schema_files"      => resource_path("model_schemas/"),

        "templates_dir"     => resource_path("infyom/infyom-generator-templates/"),

        "seeder"            => database_path("seeds/"),

        "database_seeder"   => database_path("seeds/DatabaseSeeder.php"),

        "modelJs"           => resource_path("assets/js/models/"),

        "factory"           => database_path("factories/$path"),

        "view_provider"     => app_path("Providers/ViewServiceProvider.php"),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    "namespace" => [

        "model"             => "App\Models$namespace",

        "datatables"        => "App\DataTables$namespace",

        "repository"        => "App\Repositories$namespace",

        "controller"        => "App\Http\Controllers$namespace",

        "api_controller"    => "App\Http\Controllers\API",

        "request"           => "App\Http\Requests$namespace",

        "api_request"       => "App\Http\Requests\API",

        "repository_test"   => "Tests\Repositories",

        "api_test"          => "Tests\APIs",

        "tests"             => "Tests",
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    "templates"         => "adminlte-templates",

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    "model_extend_class" => "Eloquent",

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    "api_prefix"  => "api",

    "api_version" => "v1",

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    "options" => [

        "softDelete" => true,

        "save_schema_file" => true,

        "localized" => false,

        "tables_searchable_default" => false,

        "repository_pattern" => true,

        "excluded_fields" => ["id"], // Array of columns that doesn"t required while creating module
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    "prefixes" => [

        "route" => "",  // using admin will create route("admin.?.index") type routes

        "path" => "$path",

        "view" => "",  // using backend will create return view("backend.?.index") type the backend views directory

        "public" => "",
    ],

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    "add_on" => [

        "swagger"       => false,

        "tests"         => true,

        "datatables"    => false,

        "menu"          => [

            "enabled"       => false,

            "menu_file"     => "layouts/menu.blade.php",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    "timestamps" => [

        "enabled"       => true,

        "created_at"    => "created_at",

        "updated_at"    => "updated_at",

        "deleted_at"    => "deleted_at",
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    "ignore_model_prefix" => false,

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */
    "from_table" => [

        "doctrine_mappings" => [],
    ],

];
