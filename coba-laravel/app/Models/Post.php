<?php 

namespace App\Models;


class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-post-pertama"
        "author" => "Derral Pramudya"
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est possimus porro ducimus labore provident facilis iste quia, voluptatum tenetur placeat ipsa, quaerat nihil modi unde consectetur! Dicta molestiae aliquam rerum, eius eligendi perferendis. Itaque optio aperiam similique quasi beatae deserunt, sit veniam iure laborum adipisci quis dolores, corrupti cum cupiditate aliquid eaque minus labore consequatur nobis incidunt tempora ex. Explicabo quis totam doloribus eligendi vero id ad nulla perspiciatis ipsam saepe voluptate impedit, nihil, labore mollitia optio nam itaque. Magni!"
    ],
    [
        "title" => "Judul Posts Kedua",
        "slug" => "judul-post-kedua"
        "author" => "Theral"
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est possimus porro ducimus labore provident facilis iste quia, voluptatum tenetur placeat ipsa, quaerat nihil modi unde consectetur! Dicta molestiae aliquam rerum, eius eligendi perferendis. Itaque optio aperiam similique quasi beatae deserunt, sit veniam iure laborum adipisci quis dolores, corrupti cum cupiditate aliquid eaque minus labore consequatur nobis incidunt tempora ex. Explicabo quis totam doloribus eligendi vero id ad nulla perspiciatis ipsam saepe voluptate impedit, nihil, labore mollitia optio nam itaque. Magni!"
    ],
];


}
public static function all()
{
    return self $blog_posts;
}

public static function find($slug)
{
    $posts = self::$blog_posts;
}
?>