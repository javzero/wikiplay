<?php

use Illuminate\Database\Seeder;
use App\Prov;

class ProvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('provs')->truncate();

		$provs = [[1,'Buenos Aires'],[2,'Buenos Aires-GBA'],[3,'CABA'],[4,'Catamarca'],[5,'Chaco'],[6,'Chubut'],[7,'Córdoba'],[8,'Corrientes'],[9,'Entre Ríos'],[10,'Formosa'],[11,'Jujuy'],[12,'La Pampa'],[13,'La Rioja'],[14,'Mendoza'],[15,'Misiones'],[16,'Neuquén'],[17,'Río Negro'],[18,'Salta'],[19,'San Juan'],[20,'San Luis'],[21,'Santa Cruz'],[22,'Santa Fe'],[23,'Santiago del Estero'],[24,'Tierra del Fuego'],[25,'Tucumán']];

		foreach($provs as $prov)
		{
			try {
				$item = new Prov();
				$item->id = $prov[0];
				$item->name = $prov[1];
				$item->save();

				$this->command->info('Provincia '.$item->name. ' agregada.');
			} catch (Exception $e) {
				dd($e->getMessage());
			}
		}
	
    }
}





