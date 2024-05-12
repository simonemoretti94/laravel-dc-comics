@extends('layouts.adminLayouts.app')

@section('title' , 'admin index')

@section('body-class', 'bg-light bg-gradient')

@section('content')


<h1 class="p-3 bg-dark text-white">Comics</h1>
<div class="container min-vh-100 py-5">
    <a class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3" href="{{route('comics.create')}}" role="button">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span>Add</span>
    </a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">thumb image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic )

                <tr id=content_row>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title ?? 'N/A'}}</td>
                    <td><img id="thumb_img" src="{{$comic->thumb}}" alt=""></td>
                    <td>
                        <div class="w-50 h-100 d-flex flex-column justify-content-evenly ">
                        <button class="btn btn-primary my-1">
                            <a class="text-decoration-none text-white" href="{{route('comics.show', $comic)}}">View</a>
                        </button>
                        <button class="btn btn-secondary my-1">
                            <a class="text-decoration-none text-white" href="{{route('comics.edit', $comic)}}">Edit</a>
                        </button>

                        <!-- Modal trigger button -->
                        <button
                            type="button"
                            class="btn btn-danger btn-sm my-1"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId-{{$comic->id}}"
                        >
                            Delete
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div
                            class="modal fade"
                            id="modalId-{{$comic->id}}"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            
                            role="dialog"
                            aria-labelledby="modalTitle-{{$comic->id}}"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{$comic->id}}">
                                            Delete: {{$comic->title}}
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                    Are you commited to delete this comic? The operation cannot be reverted
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                        <form action="{{route('comics.destroy', $comic)}}"  method="post">
                            @csrf
                            @method('DELETE')
                            {{-- because it responds to static function delete into route --}}

                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </td>
                </tr>

                @empty

                <tr class="">
                    <td scope="row">nothing found here</td>
                </tr>

                @endforelse

            </tbody>
        </table>
    </div>

    {{$comics->links('pagination::bootstrap-5')}}

<style>
tr#content_row {
    height: 150px;

    & td:nth-child(3){
        height: 100%;
        > img#thumb_img {
            width: 130px;
            height: 150px;
            filter: saturate(1.2);
            border: solid .5px white;
            border-radius: 2px;
            padding: .2rem;
        }

        > img#thumb_img:hover {
            transform: scale(1.05);
        }
    }
}
</style>


</div>



@endsection