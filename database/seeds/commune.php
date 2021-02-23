<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
use League\Csv\Statement;
 
class commune extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($file)
    {
        // Remplir la base de donnée avec les communes du fichier CSV
 
        // Lire le fichier csv
        $csv = Reader::createFromPath(storage_path($file));
        $csv->setHeaderOffset(0);
 
        // Boucler sur les données du fichier csv
        $records = (new Statement())->process($csv);
        foreach ($records->getRecords() as $record) {
            var_dump($record);
        }
    }
}