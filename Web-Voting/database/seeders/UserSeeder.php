<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'npm' => '2208107010033',
        //     'nomor_wa' => '087801482963',
        //     'password' => bcrypt('12345'),
        //     'role' => 0
        // ]);
        
        // for($i = 0; $i < 5; $i++ ){
        //     User::create([
        //         'npm' => '220810701004'.$i,
        //         'nomor_wa' => '08780148297'.$i,
        //         'password' => bcrypt('12345'.$i),
        //         'role' => 0
        //     ]);
        // }

        //MUBES
        // $file = fopen('public/assets/data.csv', 'r');
        // $count = 0;

        // while (($data = fgetcsv($file, 1000, ','))) {

            $passRandom = Str::random(8);
            
        //     if($count == 0){
        //         $count += 1;
        //         continue;
        //     }

        //     if (isset($data[0]) && isset($data[1])) {
        //         $user = [       
        //             'nama' => $data[1],
        //             'npm' => $data[2],
        //             'password_real' => $passRandom,
        //             'password' => bcrypt($passRandom),
        //             'nomor_wa' => $data[3]
        //         ];

        //         User::create($user);
        //     } else {
        //         Log::error("Invalid data row: " . json_encode($data));
        //     }
        // }

        // fclose($file);

        User::create([
            
                'nama' => 'Ade',
                'npm' => '2208107010019',
                'password' => bcrypt($passRandom),
                'password_real' => $passRandom,
                'nomor_wa' => '6285260813657'
            
        ]);

    }
}
