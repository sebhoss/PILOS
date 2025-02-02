<?php

namespace Database\Seeders;

use App\Enums\ServerStatus;
use App\Models\Server;
use App\Models\ServerPool;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $servers = config('bigbluebutton.testserver');

        foreach ($servers as $server) {
            $server = Server::create([
                'base_url' => $server->url,
                'secret' => $server->secret,
                'name' => $faker->unique()->word,
                'status' => ServerStatus::ENABLED,
                'error_count' => 0,
                'recover_count' => config('bigbluebutton.server_online_threshold'),
                'load' => 0,
            ]);
            foreach (ServerPool::all() as $serverPool) {
                $serverPool->servers()->attach($server);
            }
        }

    }
}
