<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AdminExtensionHistoriesTableSeeder::class);
        $this->call(AdminExtensionsTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminPermissionMenuTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminSettingsTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(CardHomesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(GridHomesTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProgramPagesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(TestProjectResultsTableSeeder::class);
        $this->call(TestProjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryHasProductsTableSeeder::class);
    }
}
