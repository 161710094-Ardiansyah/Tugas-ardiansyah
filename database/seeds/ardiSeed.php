<?php

use Illuminate\Database\Seeder;

class ardiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a =[
        	['Nama'=>'Adzikri','Kelas'=>'IX','Alamat'=>'rancaanyar'],
        	['Nama'=>'ariz','Kelas'=>'IX','Alamat'=>'lewidulang'],
        	['Nama'=>'fredi','Kelas'=>'IX','Alamat'=>'bojongkoneng'],
        	['Nama'=>'ferdi','Kelas'=>'IX','Alamat'=>'bojongmalaka'],
        	['Nama'=>'agung','Kelas'=>'IX','Alamat'=>'bojongpete'],
        ];
        DB::table('ardian')->insert($a);
    }
}
