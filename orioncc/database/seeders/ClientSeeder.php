<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'AHMED TEA','logo'=>'AHMED_TEA.jpg'],
            ['name' => 'ALHAMRA','logo'=>'ALHAMRA.jpg'],
            ['name' => 'FALCON PACK','logo'=>'FALCON_PACK.jpg'],
            ['name' => 'MARJAN','logo'=>'MARJAN.jpg'],
            ['name' => 'MINISTTRY OF PRESIDENTIAL AFFAIRS','logo'=>'MINISTTRY_OF_PRESIDENTIAL_AFFAIRS.jpg'],
            ['name' => 'RAKEZ','logo'=>'RAKEZ.jpg'],
            ['name' => 'SOBHA','logo'=>'SOBHA.jpg'],
            ['name' => 'STREIT','logo'=>'STREIT.jpg'],
            ['name' => 'SUNREEF YACHTS','logo'=>'SUNREEF_YACHTS.jpg'],
            ['name' => 'U PAK','logo'=>'U-PAK.jpg'],
            ['name' => 'UTICO','logo'=>'UTICO.jpg'],
            ['name' => 'YAMUNA DENSONS','logo'=>'YAMUNA_DENSONS.jpg'],
            ['name' => 'Ministry of Interior', 'logo' => null],
            ['name' => 'Ministry of Health' , 'logo' => null],
            ['name' => 'Ministry of Public Works' , 'logo' => null],
            ['name' => 'MINISTTRY OF INFRASTRUCURE' , 'logo' => 'MINISTTRY OF INFRASTRUCURE.jpg'],
            ['name' => 'BANYAN TREE' , 'logo' => NULL ],
            ['name' => 'Bab Al Bahar' , 'logo' => NULL ],
            ['name' => 'Crown Prince Court' , 'logo' => NULL ],
            ['name' => 'Streit Group' , 'logo' => 'Streit Group.jpg' ],
            ['name' => 'RAK Economic Zone' , 'logo' => 'RAK Economic Zone.jpg' ],
            ['name' => 'AG Aluminum' , 'logo' => 'AG Aluminum.jpg' ],
            ['name' => 'FINE' , 'logo' => 'FINE.jpg' ],
            ['name' => 'iPack' , 'logo' => 'iPack.jpg' ],
            ['name' => 'Fence International' , 'logo' => 'Fence_International.jpg' ],
            ['name' => 'INEGRA' , 'logo' => null ],
            ['name' => 'Etihad Railway' , 'logo' => 'Etihad_Railway.jpg' ],
        ];
        foreach ($data as $key => $value) {
            Client::create([
                'name' => $value['name'],
                'logo' => $value['logo']
            ]);
        }
    }
}
