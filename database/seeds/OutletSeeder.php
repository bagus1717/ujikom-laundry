<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "Outlet Indie";
        $outlet->alamat = "Jl. Gunung Gede";
        $outlet->no_telp = "085362638";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
