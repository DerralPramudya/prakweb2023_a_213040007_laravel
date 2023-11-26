<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Tony Stark',
            'email' => 'Tonistark@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'asepdoni',
            'email' => 'asepd@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Person',
            'slug' => 'Person'
        ]);

        Post::create([
            'title' => 'Judul satu',
            'slug' => 'judul-satu',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => ' Recusandae qluasi iste odio et neque relpudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul dua',
            'slug' => 'judul-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => ' Recusjandae quasi isjjte odio et neque repudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul tiga',
            'slug' => 'judul-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet conjsectetur adipisicing elit.',
            'body' => ' Recusandae quasijj iste odio et neque repudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}