<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Category Page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Category</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
{{--                                    <td>{{$category->user->name}}</td>--}}
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->category_name}}</td>
{{--                                    <td>{{$category->created_at->diffForHumans()}}</td>--}}
                                    <td>{{\Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</td>
                                </tr>
                            @empty
                                <h4>No Data Found</h4>
                            @endforelse
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="container">
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                                    @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

