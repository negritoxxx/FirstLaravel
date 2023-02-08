<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Andrés Julián Quintana Abril',
            'email' => 'quintana909@yahoo.es',
            'password' => bcrypt('12345678')
        ]);
        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => User::class
        ]);

        $users = User::factory(15)->create();

        foreach ($users as $user) {
            
            Image::factory(1)->create([
                'imageable_id' => $user->id,
                'imageable_type' => User::class
            ]);
        }
    }
}
