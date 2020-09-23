<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add(){
    //    DB::table('posts')->insert(
    //        ['title' => 'Post 2', 'description' => 'Mo ta 2', 'content' => 'Content 2', 'user_id' => 5]
    //    );

    //them ban ghi bang ORM su dung pt save()
    //   $post = new Post();
    //   $post->title= 'Giai bong da ngoai hang anh';
    //   $post->description = 'Giai bong da hap dan nhat hanh tinh';
    //   $post->content= 'Mùa giải năm nay là một mùa giải thành công đối với Liverpool ở ngoại hang anh, khi họ đã vô địch sớm 7 vòng đấu. 1 chức vô địch rất xứng đáng cho thành phố cảng mơsisize';  
    //   $post->user_id= 8;
    //   $post->save();

    //Them ban ghi băng ORM su dung pt thuc create()
        // Post::create([
        //     'title' => 'Giai bong da Laliga',
        //     'description' => 'Giai dau danh cho Barca,Real',
        //     'content' => 'Mua giai nam nay Real la doi gianh chuc vo dich',
        //     'user_id' => 3
        // ]);
        return view('post.add');
       
    }
    function show(){
        // redirect ngoai website
    //   return  redirect()->away('https://youtube.com');
    // Lay danh sach ban ghi
    //    $posts = DB::table('posts')->get();
    //    $posts = DB::table('posts')->select('title', 'content')->get();
    //    foreach($posts as $post){
    //        echo $post->title;
    //        echo $post->content;
    //        echo '<br>';
    //    }
    //end danh sach ban ghi

    //lay 1 ban ghi 
        //  $posts = DB::table('posts')->where('id', 3)->first();
        //  echo $posts->title;
        //  echo $posts->content;
        //  echo '<br>';
    // end lay 1 ban ghi

    // //lay 1 ban ghi theo id
    //     $posts= DB::table('posts')->find(3);
    //     echo $posts->title;
    //     echo $posts->content;
    // // end
    
    // dem so luong ban ghi
    //  $number_posts= DB::table('posts')->get()->count();
    //  var_dump($number_posts);
    //end

    // join du lieu nhieu bang

    // $posts = DB::table('posts')
    // ->join('users', 'users.id', '=', 'posts.user_id')
    // ->select('users.name', 'posts.title')
    // ->get();

    //Group by query builder

        // $posts = DB::table('posts')->selectRaw("COUNT('id') as number_post, user_id")
        // ->groupBy('user_id')->get();
        // echo '<pre>';
        // print_r($posts);
        //echo '</pre>';
        //end group by

    //limit, offset
        // $posts= DB::table('posts')
        // ->offset(1)
        // ->limit(2)->get();
        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

    //    $posts = Post::all();

    //   Phan trang
    // Query builder
    // Tao 2 nut phan trang chi co next, prew
        // $posts = DB::table('posts')->simplePaginate(4);
        //phan trang dang so 1,2,3
        $posts = DB::table('posts')->paginate(4);
        
        //Tuy chinh duong dan co ban phan trang
        // $posts->withPath('demo/show');

    // ORM
        // $posts= Post::paginate(4);
       return view('post.index', compact('posts'));
    }

    function update($id){
        //QUERY BUILDER
        // DB::table('posts')->where('id', $id)->update(['title' => 'Iphone xs Max', 'description' => 'Xứng đáng siêu phẩm', 'content' => 'Điện thoại này rất đáng đồng tiền bát gạo']);


        //ORM bang pt save()
        // $post = Post::find($id);
        // $post->title= 'Samsung note 20';
        // $post->description = 'Siêu phẩm đến từ hãng sản xuất samsung';
        // $post->content= 'Điện thoại này đẹp đến từng milimet';  
        // $post->user_id= 8;
        // $post->save();

        // ORM bang pt update()

        $post = Post::where('id', $id)->update([
            'title' => 'Update giai bong da laliga'
        ]);
    }

    function delete($id){
        // return DB::table('posts')->where('id', $id)->delete();

        //ORM 
        // Post::find($id)->delete();

        //ORM xoa ban theo dieu kien bat ky
        // Post::where('user_id',$id)->delete();

        //ORM xoa 1 ban, hoac nhieu ban ghi voi destroy()
      return  Post::destroy($id);
    }
    function read(){
        // return Post::all();

        // lay danh sach ban ghi theo dieu kien 
        // return Post::where('title', 'like', '%iphone%')->get();

        //lay 1 ban ghi theo dieu kien
        // return Post::where('user_id', 8)->first();

        //LAY 1 ban ghi theo id
        // return Post::find(3);

        //Lay danh sach bai viet theo id

        // return Post::find([3,5]);

        //Order by ORM

        // return Post::orderBy('id', 'desc')->get();

        //Group by ORM
        // return Post::selectRaw("COUNT('id') as number_posts, user_id")->groupBy('user_id')->orderBy('user_id','desc')->get();

        //Limit offset ORM
        // return Post::limit(2)->offset(1)->get();

        //Xuat du lieu xoa tam thoi
        // Xuat tat ca cac ban ghi bao gom xoa tam thoi
        // $posts = Post::withTrashed()->get();
        // return $posts;

        //Chi lay ban ghi da xoa tam thoi
        // $posts = Post::onlyTrashed()->get();
        // return $posts;

         // Relationship one to one

        //  $img = Post::find(3)->FeatureImage;
        //  return $img;

         //Relationship one to many

       return  Post::find(15)->user;
    //    return User::find(5)->posts;
    }

    function store(Request $request){
      $request->validate([
          'title' => 'required',
          'content' => 'required'
        ],
        [
            'required' => ':attribute không được bỏ trống',
        ],
        [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung'
        ]);
        $input = $request->all();
        if($request->hasFile('file')){
            $file = $request->file;
            //lay ten file
            echo  $file->getClientOriginalName();

            // Lay duoi file
            echo $file->getClientOriginalExtension();

            // Lay file size
            echo $file->getSize();

            $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $file->getClientOriginalName();
            $input['thumbnail'] = $thumbnail;
        }
        $input['user_id'] = 2;
        Post::create($input);
        // redirect url noi bo
        // return redirect('post/show');
        //redirect route
        // return redirect()->route('post.show');

        //redirect flashing session

        return redirect('post/show')->with('status', 'Them bai viet thanh cong');
    }

    function restore($id){
        Post::onlyTrashed()->where('id', $id)->restore();
    }
    function permanentlyDelete($id){
        Post::onlyTrashed()->where('id',$id)->forceDelete();
    }
}
