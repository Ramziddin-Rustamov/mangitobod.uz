@extends('admin.admin_layout.app')
@section('title' , 'Posts')
@section('content')

<h1 class="text-center">Yangiliklar !</h1>
  <div class="text-center">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  </div>
  <div class="container py-5">
      <div class="table-responsive-sm table-responsive-md table-responsive-lg">
        <div class="card-body pb-0">
            <div class="text-end py-2">
                <a href="{{ route('posts.create.index') }}" class="btn btn-primary">Yangi qo'shish  </a>
            </div>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">T/r</th>
                  <th scope="col">Rasm</th>
                  <th scope="col">Sarlovha</th>
                  <th scope="col">Tana qismi </th>
                  <th scope="col">Yaratildi</th>
                  <th scope="col">Amallar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                  <tr>
                    <th scope="col">{{ ($posts->currentpage()-1)*$posts->perpage() + ($loop->index+1 )}}</th>
                    <th scope="row"><a href="#"><img style="width: 81px;height: 70px; object-fit: cover;" src="{{asset($post->image)}}" alt="Post image"></a></th>
                    <td><a href="#" class="text-primary fw-bold">{{$post->title}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$post->body}}</a></td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td class="fw-bold">
                      <div class="d-md-flex">
                        {{-- <a  href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary my-md-2 mx-sm-2 my-xs-2 "> <i class="bi bi-pencil-square"></i></a> --}}
                         <form action="{{ route('post.delete',['id'=>$post->id]) }}" method="POST">
                          @method('DELETE')
                          @csrf
                            <button type="submit" class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i class="bi bi-trash"></i></button>
                         </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <nav aria-label="Page navigation example">
              {{ $posts->links() }}
            </nav>
          </div>
      </div>

  </div>
@endsection
