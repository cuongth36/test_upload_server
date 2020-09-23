@empty(!$list_posts)
    <h2>Danh sach bai viet</h2>
    @foreach ($list_posts as $post)
    <p>Tieu de bai viet: {{$post['title']}}</p>
    @endforeach
@endempty