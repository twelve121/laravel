<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            "title" => 'COMP 125 - Kiến thức cơ bản về WORD', 
            "thumbnail" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAD5GzLci-goNT5-mahGt7LzKW2nFVxXjSfQ&usqp=CAU', 
            "description" => 'Microsoft Word là chương trình soạn thảo, xử lý văn bản phổ biến với tất cả mọi người dùng máy tính trên toàn thế giới, được phát triển bởi Microsoft và thuộc bộ ứng dụng Microsoft Office. Thông qua các công cụ định dạng Microsoft Word giúp bạn tạo ra các tài liệu có chất lượng chuyên nghiệp một cách hiệu quả. Bên cạnh đó, Word còn bao gồm các công cụ chỉnh sửa và sửa đổi giúp bạn có thể cộng tác với mọi người một cách dễ dàng.', 
            "user_id" => 1,
            "exam_id" => "WORD"
        ]);
        DB::table('topics')->insert([
            "title" => 'COMP 125 - Kiến thức cơ bản về JS', 
            "thumbnail" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAD5GzLci-goNT5-mahGt7LzKW2nFVxXjSfQ&usqp=CAU', 
            "description" => 'Microsoft Word là chương trình soạn thảo, xử lý văn bản phổ biến với tất cả mọi người dùng máy tính trên toàn thế giới, được phát triển bởi Microsoft và thuộc bộ ứng dụng Microsoft Office. Thông qua các công cụ định dạng Microsoft Word giúp bạn tạo ra các tài liệu có chất lượng chuyên nghiệp một cách hiệu quả. Bên cạnh đó, Word còn bao gồm các công cụ chỉnh sửa và sửa đổi giúp bạn có thể cộng tác với mọi người một cách dễ dàng.', 
            "user_id" => 1,
            "exam_id" => "JS"
        ]);
    }
}
