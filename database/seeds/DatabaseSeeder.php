<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = factory(App\User::class)->times(20)->create();
        $brands = factory(App\Brand::class)->times(20)->create();
        $carModels = factory(App\CarModel::class)->times(20)->create();

        foreach ($carModels as $carModel) {
            $carModel->brand()->associate($brands->random(1)->first()->id);
            $carModel->save();
        }
    }
}
