<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'chocobetter',
            'email' => 'test@mail.com',
            'password' => bcrypt(12345)
        ]);
        User::create([
            'name' => 'hallotest',
            'email' => 'hallo@mail.com',
            'password' => bcrypt(12345)
        ]);

        Blog::create([
            'tittle' => 'artikel pertama',
            'slug' => 'artikel-pertama',
            'category_id' => 2,
            'user_id' => 1,
            'excerpt' => 'mencoba untuk menambah slug',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam vel perspiciatis ipsa odio minima dolore! Quae deserunt nulla numquam eligendi perspiciatis labore sequi? Ipsum aperiam vero earum beatae eos reprehenderit corporis temporibus impedit illo soluta modi omnis ut quaerat ex voluptatum eius, quo rerum pariatur enim animi recusandae neque aliquam. </p> <p> quod, numquam ad debitis dolorem aspernatur obcaecati neque, eveniet omnis beatae doloremque error laborum rem voluptatem magni ipsa. </p> <p> Ad dolor maxime laborum earum, accusantium provident modi iusto, sit iste ex impedit cumque accusamus necessitatibus molestiae molestias quo alias, fuga est aperiam rem. </p> <p> soluta vel eaque, error iste minus? Voluptatibus modi dolorem ea accusamus eius ullam laborum, iusto unde molestias natus non optio dolorum et temporibus voluptates repellendus ex commodi perferendis vel rerum eos sapiente? Possimus a corrupti harum iure magnam et suscipit excepturi, earum libero, quos ullam quaerat at deserunt asperiores ut totam, voluptates doloremque tempora eum!</p>'
        ]);
        Blog::create([
            'tittle' => 'artikel kedua',
            'slug' => 'artikel-kedua',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'mencoba untuk menambah slug',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam vel perspiciatis ipsa odio minima dolore! Quae deserunt nulla numquam eligendi perspiciatis labore sequi? Ipsum aperiam vero earum beatae eos reprehenderit corporis temporibus impedit illo soluta modi omnis ut quaerat ex voluptatum eius, quo rerum pariatur enim animi recusandae neque aliquam. </p> <p> quod, numquam ad debitis dolorem aspernatur obcaecati neque, eveniet omnis beatae doloremque error laborum rem voluptatem magni ipsa. </p> <p> Ad dolor maxime laborum earum, accusantium provident modi iusto, sit iste ex impedit cumque accusamus necessitatibus molestiae molestias quo alias, fuga est aperiam rem. </p> <p> soluta vel eaque, error iste minus? Voluptatibus modi dolorem ea accusamus eius ullam laborum, iusto unde molestias natus non optio dolorum et temporibus voluptates repellendus ex commodi perferendis vel rerum eos sapiente? Possimus a corrupti harum iure magnam et suscipit excepturi, earum libero, quos ullam quaerat at deserunt asperiores ut totam, voluptates doloremque tempora eum!</p>'
        ]);
        Blog::create([
            'tittle' => 'artikel ketiga',
            'slug' => 'artikel-ketiga',
            'category_id' => 3,
            'user_id' => 2,
            'excerpt' => 'mencoba untuk menambah slug',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam vel perspiciatis ipsa odio minima dolore! Quae deserunt nulla numquam eligendi perspiciatis labore sequi? Ipsum aperiam vero earum beatae eos reprehenderit corporis temporibus impedit illo soluta modi omnis ut quaerat ex voluptatum eius, quo rerum pariatur enim animi recusandae neque aliquam. </p> <p> quod, numquam ad debitis dolorem aspernatur obcaecati neque, eveniet omnis beatae doloremque error laborum rem voluptatem magni ipsa. </p> <p> Ad dolor maxime laborum earum, accusantium provident modi iusto, sit iste ex impedit cumque accusamus necessitatibus molestiae molestias quo alias, fuga est aperiam rem. </p> <p> soluta vel eaque, error iste minus? Voluptatibus modi dolorem ea accusamus eius ullam laborum, iusto unde molestias natus non optio dolorum et temporibus voluptates repellendus ex commodi perferendis vel rerum eos sapiente? Possimus a corrupti harum iure magnam et suscipit excepturi, earum libero, quos ullam quaerat at deserunt asperiores ut totam, voluptates doloremque tempora eum!</p>'
        ]);
        Blog::create([
            'tittle' => 'artikel keempat',
            'slug' => 'artikel-keempat',
            'category_id' => 4,
            'user_id' => 2,
            'excerpt' => 'mencoba untuk menambah slug',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam vel perspiciatis ipsa odio minima dolore! Quae deserunt nulla numquam eligendi perspiciatis labore sequi? Ipsum aperiam vero earum beatae eos reprehenderit corporis temporibus impedit illo soluta modi omnis ut quaerat ex voluptatum eius, quo rerum pariatur enim animi recusandae neque aliquam. </p> <p> quod, numquam ad debitis dolorem aspernatur obcaecati neque, eveniet omnis beatae doloremque error laborum rem voluptatem magni ipsa. </p> <p> Ad dolor maxime laborum earum, accusantium provident modi iusto, sit iste ex impedit cumque accusamus necessitatibus molestiae molestias quo alias, fuga est aperiam rem. </p> <p> soluta vel eaque, error iste minus? Voluptatibus modi dolorem ea accusamus eius ullam laborum, iusto unde molestias natus non optio dolorum et temporibus voluptates repellendus ex commodi perferendis vel rerum eos sapiente? Possimus a corrupti harum iure magnam et suscipit excepturi, earum libero, quos ullam quaerat at deserunt asperiores ut totam, voluptates doloremque tempora eum!</p>'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'name' => 'Php Native',
            'slug' => 'php-native'
        ]);
        Category::create([
            'name' => 'Mysql',
            'slug' => 'mysql'
        ]);
    }
}