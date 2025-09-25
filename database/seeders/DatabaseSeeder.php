<?php

namespace Database\Seeders;

use Hamcrest\Core\Set;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            PermissionsSeeder::class,
            RolesSeeder::class,
            AdminSeeder::class,
            BasementWorkerSeeder::class,
            CurrencySeeder::class,
            ProductStatusSeeder::class,
            TransactionCategorySeeder::class,
            OrderStatusSeeder::class,
            ProjectStatusSeeder::class,
            CashRegisterSeeder::class,
            UnitsSeeder::class,
            WarehouseSeeder::class,
            CompanySeeder::class,
        ]);
    }
}
