<?php

namespace Database\Seeders;

use App\Models\Comic as ComicModel;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comic = config('comics.comics');

        // foreach ($comics as $comic) {
        $newcomic = new ComicModel();
        $newcomic->title = $comic['title'];
        $newcomic->description = $comic['description'];
        $newcomic->thumb = $comic['thumb'];
        $newcomic->price = $comic['price'];
        $newcomic->series = $comic['series'];
        $newcomic->sale_date = $comic['sale_date'];
        $newcomic->type = $comic['type'];
        $newcomic->save();
        // }
        // now config\comics returns only one element
    }
}
