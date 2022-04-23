<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Trenitalia';
        $train->stazione_di_partenza = 'Roma Centrale';
        $train->stazione_di_arrivo = 'Milano Centrale';
        $train->orario_di_partenza = '10:00';
        $train->orario_di_arrivo = '14:00';
        $train->codice_treno = '012345';
        $train->numero_carrozze = 20;
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
}
