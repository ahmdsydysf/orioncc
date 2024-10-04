<?php

namespace Database\Seeders;

use App\Models\Client;
use Carbon\Carbon;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Healthcare Center-RAK",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "Ministry Of Infrastructure",
                "start" => "23-10-2017",
                "end" => "14-02-2019",
                "cost" => 14200000,
                "video" => null,
                "client_id" => Client::where('name' , 'Ministry of Health')->first()->id,
                "sector_id" => 3,
            ],
            [
                "name" => "Civil Defense Centre",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "Ministry Of Infrastructure",
                "start" => null,
                "end" => "26-03-2020",
                "cost" => 12900000,
                "video" => null,
                "client_id" => Client::where('name' , 'Ministry of Interior')->first()->id,
                "sector_id" => 6,
            ],
            [
                "name" => "National Housing",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "Ministry of Public Works",
                "start" => "16-07-2013",
                "end" => "03-09-2014",
                "cost" => null,
                "video" => null,
                "client_id" => Client::where('name' , 'Ministry of Public Works')->first()->id,
                "sector_id" => 3,
            ],
            [
                "name" => "46 Villas",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "MINISTTRY OF INFRASTRUCURE",
                "video" => null,
                "cost" => null,
                "start" => null,
                "end" => null,
                "client_id" => Client::where('name' , 'MINISTTRY OF INFRASTRUCURE')->first()->id,
                "sector_id" => 3,
            ],
            [
                "name" => "EQUESTRIAN STABLES & CAMEL CLUB",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "AL BONIAN",
                "end" => "01-1-2013",
                "video" => null,
                "cost" => null,
                "start" => null,
                "client_id" => Client::where('name' , 'BANYAN TREE')->first()->id,
                "sector_id" => 4,
            ],
            [
                "name" => "Hotel",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "AL BONIAN",
                "end" => "01-08-2013",
                "video" => null,
                "cost" => null,
                "start" => null,
                "client_id" => Client::where('name' , 'Bab Al Bahar')->first()->id,
                "sector_id" => 3,
            ],
            [
                "name" => "Wedding Hall – Adhan - RAK",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, humour and the like.",
                "consultant" => "Al Ain Counsulting Engineers",
                "end" => "30-10-2013",
                "video" => null,
                "cost" => null,
                "start" => null,
                "client_id" => Client::where('name' , 'Crown Prince Court')->first()->id,
                "sector_id" => 6,
            ],
            [
                "name" => "Streit FACTORY",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "A number of new facilities were inaugurated, including one of the largest showrooms in the Middle East, the STREIT marine division, Steel Service Solutions, Nano Fire Protection Technology (NFPT), Shooting Lab, Advance Integrated Technologies, and SSV.",
                "consultant" => "Home of Architecture",
                "start" => "15-12-2020",
                "end" => "28-12-2022",
                "video" => null,
                "cost" => 120000000,
                "client_id" => Client::where('name' , 'Streit Group')->first()->id,
                "sector_id" => 1,
            ],
            [
                "name" => "Rakez Warehouses",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "A number of new facilities were inaugurated, including one of the largest showrooms in the Middle East, the STREIT marine division, Steel Service Solutions, Nano Fire Protection Technology (NFPT), Shooting Lab, Advance Integrated Technologies, and SSV.",
                "consultant" => "Al Gurg Consultants",
                "start" => "20-10-2020",
                "end" => "19-12-2022",
                "video" => null,
                "cost" => 75000000,
                "client_id" => Client::where('name' , 'RAK Economic Zone')->first()->id,
                "sector_id" => 1,
            ],
            [
                "name" => "Al Ghurair Aluminum Factory",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "A number of new facilities were inaugurated, including one of the largest showrooms in the Middle East, the STREIT marine division, Steel Service Solutions, Nano Fire Protection Technology (NFPT), Shooting Lab, Advance Integrated Technologies, and SSV.",
                "consultant" => "Middle east consultant",
                "end" => "19-04-2023",
                "video" => null,
                "cost" => 15000000,
                "client_id" => Client::where('name' , 'AG Aluminum')->first()->id,
                "sector_id" => 1,
                "start" => null,
            ],
            [
                "name" => "UTICO DESLINATION PLANT",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "A number of new facilities were inaugurated, including one of the largest showrooms in the Middle East, the STREIT marine division, Steel Service Solutions, Nano Fire Protection Technology (NFPT), Shooting Lab, Advance Integrated Technologies, and SSV.",
                "consultant" => "ANT ENGINEERING CONSULTANTS & ALHAMRA ENGINEERING CONSULTANTS",
                "end" => "30-07-2021",
                "video" => null,
                "cost" => 48000000,
                "client_id" => Client::where('name' , 'UTICO')->first()->id,
                "sector_id" => 1,
                "start" => null,
            ],
            [
                "name" => "AL NAKHEEL PAPERMILL",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "Al Nakheel Hygienic Papermill Factory with Total Built-Up Area 75,000 m2 considering the highest performance requirement for tissues manufacturing – Turnkey Project and full MEP scope with Firefighting Total Project Value : 120 Million Dirhams",
                "consultant" => "COENGER CONSULTANCY",
                "end" => "19-02-2020",
                "video" => null,
                "cost" => 120000000,
                "client_id" => Client::where('name' , 'FINE')->first()->id,
                "sector_id" => 1,
                "start" => '20-10-2018',
            ],
            [
                "name" => "iPack Aseptic Packging",
                "status" => "completed",
                "main_image" => "main.webp",
                "mini_desc" => "Tincidunt elit magnis nulla facilisis sagittis sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci dolors sit amet elit amet.",
                "full_desc" => "Al Nakheel Hygienic Papermill Factory with Total Built-Up Area 75,000 m2 considering the highest performance requirement for tissues manufacturing – Turnkey Project and full MEP scope with Firefighting Total Project Value : 120 Million Dirhams",
                "consultant" => "Sacre Davet",
                "end" => "10-08-2019",
                "video" => null,
                "cost" => 50000000,
                "client_id" => Client::where('name' , 'FINE')->first()->id,
                "sector_id" => 1,
                "start" => '20-09-2017',
            ],
        ];

        foreach ($data as $key => $value) {
            Project::create([
                'name' => $value['name'],
                'status' => $value['status'],
                'main_image' => $value['main_image'],
                'mini_desc' => $value['mini_desc'],
                'full_desc' => $value['full_desc'],
                'consultant' => $value['consultant'],
                'start' => !empty($value['start']) ?  Carbon::createFromFormat('d-m-Y', $value['start'])->format('Y-m-d H:i:s') : null,
                'end' => !empty($value['end']) ?  Carbon::createFromFormat('d-m-Y', $value['end'])->format('Y-m-d H:i:s')  : null,
                'cost' => $value['cost'],
                'video' => $value['video'],
                'client_id' => $value['client_id'],
                'sector_id' => $value['sector_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}