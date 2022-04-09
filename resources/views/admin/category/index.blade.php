<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Created Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@forelse($users as $index=>$user)
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                            --}}{{--                        <td>{{date_format($user->created_at,'d-m-Y')}}</td>--}}{{--
                            <td>{{Carbon\Carbon::parse($user->created_at)->format('M d Y')}}</td>
                        </tr>
                    @empty
                        <h4>No Data Found</h4>
                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

