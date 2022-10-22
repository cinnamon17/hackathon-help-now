<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\User::factory()->create();
         //\App\Models\Event::factory()->create([
             
             'title' => 'Recogida de basura en el parque',
             'descripcion' => 'Para este voluntariado se requieren 5 personas',
             'img' => 'https://images.pexels.com/photos/3480494/pexels-photo-3480494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
             
         ]);

         //\App\Models\Event::factory()->create([
             
             'title' => 'Recoleccion de alimentos para los mas necesitados',
             'descripcion' => 'Todo lo que se pueda donar sera bienvenido',
             'img' => "https://images.pexels.com/photos/2949140/pexels-photo-2949140.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             
         ]);
         \App\Models\Participant::factory()->create();
         \App\Models\Message::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
