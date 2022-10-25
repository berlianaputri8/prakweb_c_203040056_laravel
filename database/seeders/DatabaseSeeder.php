<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Berliana Putri',
        //     'email' => 'berlianaap@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Qisti Izatussyabani',
        //     'email' => 'qisitiiz@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos. Vitae earum blanditiis debitis quisquam voluptas sint distinctio sapiente laborum temporibus, quasi veniam nulla ad, aperiam officiis ratione dolorum praesentium minima vero eligendi quidem tempore et. Voluptate praesentium quidem veritatis animi possimus culpa dolores beatae, doloribus, rem neque cum nobis ipsum? Officiis numquam suscipit voluptatem fugiat dolores fuga dicta alias excepturi voluptatum nihil dolorem quaerat quos impedit voluptates eveniet blanditiis expedita, aspernatur quo animi. Fugit, eveniet!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos. Vitae earum blanditiis debitis quisquam voluptas sint distinctio sapiente laborum temporibus, quasi veniam nulla ad, aperiam officiis ratione dolorum praesentium minima vero eligendi quidem tempore et. Voluptate praesentium quidem veritatis animi possimus culpa dolores beatae, doloribus, rem neque cum nobis ipsum? Officiis numquam suscipit voluptatem fugiat dolores fuga dicta alias excepturi voluptatum nihil dolorem quaerat quos impedit voluptates eveniet blanditiis expedita, aspernatur quo animi. Fugit, eveniet!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Tiga',
        //     'slug' => 'judul-ke-tida',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos. Vitae earum blanditiis debitis quisquam voluptas sint distinctio sapiente laborum temporibus, quasi veniam nulla ad, aperiam officiis ratione dolorum praesentium minima vero eligendi quidem tempore et. Voluptate praesentium quidem veritatis animi possimus culpa dolores beatae, doloribus, rem neque cum nobis ipsum? Officiis numquam suscipit voluptatem fugiat dolores fuga dicta alias excepturi voluptatum nihil dolorem quaerat quos impedit voluptates eveniet blanditiis expedita, aspernatur quo animi. Fugit, eveniet!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim, nisi blanditiis culpa similique praesentium voluptatum error sit hic ratione cupiditate eveniet et vel accusamus eum nam suscipit quos impedit assumenda iure quaerat eos. Vitae earum blanditiis debitis quisquam voluptas sint distinctio sapiente laborum temporibus, quasi veniam nulla ad, aperiam officiis ratione dolorum praesentium minima vero eligendi quidem tempore et. Voluptate praesentium quidem veritatis animi possimus culpa dolores beatae, doloribus, rem neque cum nobis ipsum? Officiis numquam suscipit voluptatem fugiat dolores fuga dicta alias excepturi voluptatum nihil dolorem quaerat quos impedit voluptates eveniet blanditiis expedita, aspernatur quo animi. Fugit, eveniet!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
