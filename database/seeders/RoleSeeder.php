<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'user-list']);
        Permission::create(['name' => 'user-create']);
        Permission::create(['name' => 'user-edit']);
        Permission::create(['name' => 'user-delete']);

        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-delete']);

        Permission::create(['name' => 'blog-list']);
        Permission::create(['name' => 'blog-create']);
        Permission::create(['name' => 'blog-edit']);
        Permission::create(['name' => 'blog-delete']);

        Permission::create(['name' => 'content-list']);
        Permission::create(['name' => 'content-create']);
        Permission::create(['name' => 'content-edit']);
        Permission::create(['name' => 'content-delete']);


        Permission::create(['name' => 'product-list']);
        Permission::create(['name' => 'product-create']);
        Permission::create(['name' => 'product-edit']);
        Permission::create(['name' => 'product-delete']);

        Permission::create(['name' => 'category-list']);
        Permission::create(['name' => 'category-create']);
        Permission::create(['name' => 'category-edit']);
        Permission::create(['name' => 'category-delete']);

        Permission::create(['name' => 'group-list']);
        Permission::create(['name' => 'group-create']);
        Permission::create(['name' => 'group-edit']);
        Permission::create(['name' => 'group-delete']);

        Permission::create(['name' => 'leadSource-list']);
        Permission::create(['name' => 'leadSource-create']);
        Permission::create(['name' => 'leadSource-edit']);
        Permission::create(['name' => 'leadSource-delete']);

        Permission::create(['name' => 'lead-list']);
        Permission::create(['name' => 'lead-create']);
        Permission::create(['name' => 'lead-edit']);
        Permission::create(['name' => 'lead-delete']);


    }
}
