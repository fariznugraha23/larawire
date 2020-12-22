<div style="margin-top:80px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <a href="{{route('post.create')}}" class="btn btn-success btn-md">Tambah</a>
            <br>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">TITLE</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">OPTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td> 
                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary btn-md">Edit</a>
                        <button wireclick="destroy({{$post->id}}" class="btn btn-primary btn-md">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada data</td>
                    </tr>
                @endforelse    
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
