<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Administrator;
use App\Models\Developer;
use App\Models\Marketer;
use App\Models\Designer;
use App\Models\Project;
use App\Models\Category;
use App\Models\Service;
use App\Models\SaleReceipt;
use App\Models\DetailSale;
use App\Models\DetailProject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Employee::factory(30)->create();

        $count_adminitrator = Employee::where('employee_profession','administrator')->count();
        Administrator::factory($count_adminitrator)->create();

        $count_developer = Employee::where('employee_profession','developer')->count();
        Developer::factory($count_developer)->create();

        $count_designer= Employee::where('employee_profession','designer')->count();
        Designer::factory($count_designer)->create();

        $count_marketer= Employee::where('employee_profession','marketer')->count();
        Marketer::factory($count_marketer)->create();

        Client::factory(20)->create();
        Project::factory(20)->create();
        Category::factory(3)->create();
        Service::factory(10)->create();
        SaleReceipt::factory(10)->create();
        DetailSale::factory(10)->create();
        DetailProject::factory(10)->create();
    }
}
