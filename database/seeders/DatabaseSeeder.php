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

        User::create([
            'name' => 'fauzan',
            'email' => 'fauzantakibang@gmail.com',
            'password' => bcrypt('fauzan')
        ]);

        User::create([
            'name' => 'Jidan',
            'email' => 'jidan@gmail.com',
            'password' => bcrypt('jidan')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Readme',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'readme',
            'excerpt' => 'Readme please',
            'img' => 'blog-post.jpg',
            'body' => '<p>Haii perkenalkan saya fauzan selaku dev dari web ini, disini saya akan sedikit menjelaskan mengenai web ini</p><p>web ini dibuat dengan tujuan untuk meningkatkan skill saya dan juga untuk menyimpan kenangan pada masa masa sekolah semoga dengan adanya web ini kita bisa melihat kenang kenagan kita pas masih sekolah :)</p><p>untuk teknologi yg dipakai untuk membuat web ini adalah : <br> FrontEnd : Bootstrap dengan sedikit css tambahan <br> BackEnd : Laravel</p><p>FYI saat saya menulis ini web nya masih dalam pengembangan alias belum jadi, entah kedepannya bakal gimana pokoknya jalanin aja dulu yekan wkwk</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke dua',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ke-dua',
            'img' => 'rpl3.png',
            'excerpt' => 'Lorem Ke Empat',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, laboriosam enim? Itaque, eaque dolores neque modi illo dolor soluta debitis quasi beatae error ea asperiores, unde nostrum. Dolor, omnis pariatur</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, provident</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione voluptates, est tenetur nam dignissimos fuga nisiab mollitia natus qui, dolor nesciunt alias placeat nulla ut earum culpa eligendi, porro facere sed vitae eaque voluptatem dolore? At, obcaecati nisi molestias mollitia doloribus dignissimos sequi et corporis voluptatibusvoluptatem blanditiis alias ad impedit illum magnam, quasi neque aliquid totam. Maiores, dolorem</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit culpa, necessitatibus quam nobis explicabo beatae pariatur, blanditiis dolorum atque hic doloremque eum perspiciatis provident dolorem quae, natus similique facere animi aspernatur cupiditate vel sunt! Incidunt</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'judul-ke-tiga',
            'img' => 'rpl3.png',
            'excerpt' => 'Lorem Ke Empat',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, laboriosam enim? Itaque, eaque dolores neque modi illo dolor soluta debitis quasi beatae error ea asperiores, unde nostrum. Dolor, omnis pariatur</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, provident</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione voluptates, est tenetur nam dignissimos fuga nisiab mollitia natus qui, dolor nesciunt alias placeat nulla ut earum culpa eligendi, porro facere sed vitae eaque voluptatem dolore? At, obcaecati nisi molestias mollitia doloribus dignissimos sequi et corporis voluptatibusvoluptatem blanditiis alias ad impedit illum magnam, quasi neque aliquid totam. Maiores, dolorem</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit culpa, necessitatibus quam nobis explicabo beatae pariatur, blanditiis dolorum atque hic doloremque eum perspiciatis provident dolorem quae, natus similique facere animi aspernatur cupiditate vel sunt! Incidunt</p>'
        ]);
    }
}
