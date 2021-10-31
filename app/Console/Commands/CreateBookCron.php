<?php

namespace App\Console\Commands;

use App\Models\Book;
use Illuminate\Console\Command;
use Faker\Factory as Faker;
// use Faker\Generator as Faker;

class CreateBookCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createBook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Book Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $faker = Faker::create();
        $newestBook = Book::latest()->first();
        $newBook =  Book::create([
            'title' => 'bai viet '. intval($newestBook->id + 1),
            'content' => $faker->text()
        ]);
        info($newBook);
    }
}
