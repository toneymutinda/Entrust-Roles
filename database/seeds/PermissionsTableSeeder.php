<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
               [
                   'name' => 'role-read',
                   'display_name' => 'Display Role Listing',
                   'description' => 'See Only Listing Of Role'
               ],
               [
                   'name' => 'role-create',
                   'display_name' => 'Create Role',
                   'description' => 'Create New Role'
               ],
               [
                   'name' => 'role-edit',
                   'display_name' => 'Edit Role',
                   'description' => 'Edit Role'
               ],
               [
                   'name' => 'role-delete',
                   'display_name' => 'Delete Role',
                   'description' => 'Delete Role'
               ],
               [
                   'name' => 'user-view',
                   'display_name' => 'View All Users',
                   'description' => 'View All Users'
               ],
               [
                   'name' => 'user-create',
                   'display_name' => 'Create User',
                   'description' => 'Create New User'
               ],
               [
                   'name' => 'user-edit',
                   'display_name' => 'Edit User',
                   'description' => 'Edit User'
               ],
               [
                   'name' => 'user-delete',
                   'display_name' => 'Delete User',
                   'description' => 'Delete User'
               ],
               [
                   'name' => 'complain-list',
                   'display_name' => 'Display Complain Listing',
                   'description' => 'See Only Listing Of Complain'
               ],
               [
                   'name' => 'complain-create',
                   'display_name' => 'Create Complain',
                   'description' => 'Create New Complain'
               ],
               [
                   'name' => 'complain-edit',
                   'display_name' => 'Edit Complain',
                   'description' => 'Edit Complain'
               ],
               [
                   'name' => 'complain-delete',
                   'display_name' => 'Delete Complain',
                   'description' => 'Delete Complain'
               ]

       ];

       foreach ($permissions as $key=>$value){
        Permission::create($value);
       }
    }
}
