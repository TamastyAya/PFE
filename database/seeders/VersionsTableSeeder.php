<?php

namespace Database\Seeders;

use App\Models\Requete;
use App\Models\Version;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Module;


class VersionsTableSeeder extends Seeder
{
 
        public function run()
        {
            // Create 30 versions with random module associations
            Version::factory(30)->create();
               
        }
        
}

