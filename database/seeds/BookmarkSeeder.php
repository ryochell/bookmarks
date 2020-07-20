<?php

use Illuminate\Database\Seeder;
use App\models\Bookmark;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bookmark::class, 100)->create();
    }
}
