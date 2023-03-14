<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name"=>"Admin",
        ]);

        Role::create([
            "name"=>"Siswa",
        ]);

        Role::create([
            "name"=>"Guru",
        ]);

        Role::create([
            "name"=>"Kesiswaan",
        ]);

        Role::create([
            "name"=>"Waka",
        ]);



    }
}
