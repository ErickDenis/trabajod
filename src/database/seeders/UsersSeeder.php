<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    public function run()
    {
        /*Inicio Empresa*/
        User::create([
            'email' => "info@ypfb.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59122176300',
            'address' => 'Santa Cruz de la Sierra, Av. 16 de Julio esq. Calle Reyes Ortiz y C. Bravo',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@entel.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59122141010',
            'address' => 'La Paz, Calle Federico Zuazo N° 1771',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@bmsc.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59133633000',
            'address' => 'Santa Cruz de la Sierra, Av. Grigotá N° 566',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@bnb.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59167694238',
            'address' => 'Santa Cruz de la Sierra, MJ Santiestevan 179',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@tigo.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '591800175000',
            'address' => 'Santa Cruz de la Sierra, Calle Rene Moreno esq, Warnes',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@fancesa.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '5913454000',
            'address' => 'Santa Cruz de la Sierra, 5QQJ+GJJ, Unnamed Road',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@quipus.gob.bo",
            'password' => bcrypt('123123'),
            'phone' => '59163128868',
            'address' => 'Santa Cruz de la Sierra, a lado del Comercial Chiriguano, Tercer Anillo Interno. Comercial Neval. Segunda Planta, Pasillo 6 Local 18',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@viva.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59170988226',
            'address' => 'Santa Cruz de la Sierra, Av. San Martin esquina',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@pilandina.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59133451271',
            'address' => 'Santa Cruz de la Sierra, Av. Beni 5to anillo',
            'type' => 'Empresa'
        ]);

        User::create([
            'email' => "info@bisa.com.bo",
            'password' => bcrypt('123123'),
            'phone' => '59133358421',
            'address' => 'Santa Cruz de la Sierra, Av. Beni 47',
            'type' => 'Empresa'
        ]);
        /*Fin Empresa*/
        /*
            Fancesa (Fábrica Nacional de Cemento Sucre): info@fancesasucre.com.bo
            EMBOL (Embotelladoras Bolivianas Unidas): info@embol.com.bo
            Laboratorios Vinos y Licores (LABVILSA): info@labvilsa.com.bo
            FAMAE (Fábrica de Material de Guerra del Ejército): info@famae.gob.bo
            BNB (Banco Nacional de Bolivia): info@bnb.com.bo
            Unagro (Unión Agroindustrial de Cañeros): info@unagro.com.bo
            Sofía (Galletas Sofía): info@sofia.com.bo
            Toyota Bolivia: info@toyotabolivia.com.bo
            ENDE (Empresa Nacional de Electricidad): info@ende.com.bo
            CBN (Cervecería Boliviana Nacional): info@cbn.com.bo
        */ 

        /*Inicio Postulante*/

        User::create([
            'email' => "john.doe@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5911234567',
            'address' => 'Santa Cruz de la Sierra, Calle Los Alamos #255',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "jane.smith@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917345678',
            'address' => 'Santa Cruz de la Sierra, Avenida San Martín #5678',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "michael.jackson@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917456789',
            'address' => 'Santa Cruz de la Sierra, Calle Sucre #9012',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "emma.watson@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5916567890',
            'address' => 'Santa Cruz de la Sierra, Avenida Paraguá #3456',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "david.bowie@hotmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917678901',
            'address' => 'Santa Cruz de la Sierra, Calle Libertad #7890',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "lisa.johnson@hotmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5916789012',
            'address' => 'Santa Cruz de la Sierra, Avenida Irala #2345',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "peter.parker@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917890123',
            'address' => 'Santa Cruz de la Sierra, Calle Warnes #6789',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "sarah.connor@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917901234',
            'address' => 'Santa Cruz de la Sierra, Avenida Cañoto #123',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "george.harrison@hotmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5917012345',
            'address' => 'Santa Cruz de la Sierra, Calle Florida #4567',
            'type' => 'Postulante'
        ]);
        User::create([
            'email' => "olivia.smith@gmail.com",
            'password' => bcrypt('123123'),
            'phone' => '5916123456',
            'address' => 'Santa Cruz de la Sierra, Avenida Busch #8901',
            'type' => 'Postulante'
        ]);
        /*Fin Postulante*/
        
        /*Inicio Mediador*/
        User::create([
            'email' => "mediator1@contratESE.com",
            'password' => bcrypt('123123'),
            'phone' => '5916123456',
            'address' => 'Santa Cruz de la Sierra, Las Petas #2240',
            'type' => 'Mediador'
        ]);
        User::create([
            'email' => "mediator2@contratESE.com",
            'password' => bcrypt('123123'),
            'phone' => '5916123456',
            'address' => 'Santa Cruz de la Sierra, Las Petas #2240',
            'type' => 'Mediador'
        ]);
        User::create([
            'email' => "mediator3@contratESE.com",
            'password' => bcrypt('123123'),
            'phone' => '5916123456',
            'address' => 'Santa Cruz de la Sierra, Av.Roca y Coronado #249',
            'type' => 'Mediador'
        ]);
        /*Fin Mediador*/
    }
}
