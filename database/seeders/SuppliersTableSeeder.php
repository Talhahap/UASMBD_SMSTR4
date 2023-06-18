<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'SupplierID' => 1,
                'NamaCompany' => 'Supplier Company 1',
                'ContactName' => 'Alfian Padma',
                'ContactTitle' => 'Manager',
                'Address' => '123 Main St',
                'City' => 'City 1',
                'Region' => 'Region 1',
                'PostalCode' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SupplierID' => 2,
                'NamaCompany' => 'Supplier Company 2',
                'ContactName' => 'Padma Corp',
                'ContactTitle' => 'CEO',
                'Address' => '456 Elm St',
                'City' => 'City 2',
                'Region' => 'Region 2',
                'PostalCode' => '67890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SupplierID' => 3,
                'NamaCompany' => 'Supplier Company 3',
                'ContactName' => 'Talhahs Al',
                'ContactTitle' => 'CEO',
                'Address' => '456 Elm St',
                'City' => 'City 3',
                'Region' => 'Region 3',
                'PostalCode' => '67890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SupplierID' => 4,
                'NamaCompany' => 'Supplier Company 4',
                'ContactName' => 'Toha Alfian',
                'ContactTitle' => 'CEO',
                'Address' => '456 Elm St',
                'City' => 'City 4',
                'Region' => 'Region 4',
                'PostalCode' => '67890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SupplierID' => 5,
                'NamaCompany' => 'Supplier Company 5',
                'ContactName' => 'Padma Alf',
                'ContactTitle' => 'CEO',
                'Address' => '456 Elm St',
                'City' => 'City 5',
                'Region' => 'Region 5',
                'PostalCode' => '67890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
