<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Blog //extends Model
{
    private static $blog_post = [
        ["judul" =>  "Judul Artikel Pertama Jessi",
        "slug" => "judul-artikel-pertama",
        "penulis" => "Chocobetter",
        "tulisan" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga doloribus nisi voluptatibus commodi dignissimos eius necessitatibus rerum deleniti libero doloremque? Facere consectetur obcaecati soluta impedit corporis iure minus labore. Deserunt, sapiente. Omnis id qui eveniet dolores odit autem modi illum nostrum temporibus. Molestias ipsa ducimus vitae culpa soluta a iste."],
        [
            "judul" =>  "Judul Artikel Kedua",
            "slug" => "judul-artikel-kedua",
        "penulis" => "Jejes",
        "tulisan" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus delectus nostrum repellat tempore. Recusandae quae, laudantium totam quaerat natus sit, sapiente distinctio minima, labore reiciendis fugiat quod suscipit quos esse. Architecto, quisquam veniam? Hic provident, consequatur placeat minima tenetur vel illo eveniet ipsum expedita, eaque nisi modi maiores, itaque assumenda culpa nihil. Quae quibusdam ex beatae laboriosam consequatur pariatur maiores, doloremque et fuga nisi eveniet reiciendis. Consequuntur architecto at vitae eligendi? Numquam consequuntur delectus molestiae officia alias! Et ipsam deleniti nesciunt porro est culpa illum, eligendi inventore, maiores obcaecati tempore reiciendis. Distinctio a ut natus vitae, nam eveniet hic consequatur aperiam quaerat nemo ullam ipsam, odio nobis sapiente facere? Modi voluptate placeat illo, reiciendis velit pariatur laboriosam fugiat, nemo voluptatibus tempore odit quas cumque rerum. Maxime a sed, omnis odit autem dolorum quaerat cum consectetur voluptatem nulla laudantium, beatae quidem. Magni, veniam. Dolorum, sunt beatae fuga dicta dolorem quas. Impedit quae eum veritatis libero nesciunt tempora deleniti provident quo harum ex. Corporis reprehenderit ea cumque illo rem iusto minus aut quos dolor consectetur totam numquam explicabo nisi vel modi, omnis earum aperiam consequatur architecto dignissimos. Laboriosam deleniti perspiciatis iste, nemo minima rem numquam libero vitae dolorum molestias ex earum ut, similique, quo dicta consequatur. "
        ]
    ];

    public static function all(){
        // membungkus array kedalam collection
        return collect(self::$blog_post);
    }

    public static function find($slug){
        // menampung collection
        $blog = static::all();

        // $artikel = [];
        // foreach($blog as $postingan){
        //     if($postingan['slug'] === $slug){
        //         $artikel = $postingan;
        //     }
        //     return $artikel;
        // }
        // mencari slug menggunakan function first where
        return $blog->firstWhere('slug', $slug);
    }
    // use HasFactory;
}