@extends('layouts.admin')

@section('content')
<div class="body-content">
    <div class="function-title">
        <h2>Account list</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="{{ route('admin.create.category') }}" class="btn success-color">Create new</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>List</h3>
                </div>
                <div class="card-content">
                    <table class="table" id="category_table">
                        <thead>
                            <th>Avatar</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Operation</th>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td></td>
                                    <td>{{ $account->email }}</td>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->role }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit.category',$account->id) }}" class="btn-operation warning-color">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.del.category',$account->id) }}" method="post" class="inline-block">
                                            @csrf  
                                            @method('DELETE')
                                            <button class="btn-operation danger-color"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="center">
                {{$accounts->links()}}
            </div>
        </div>
    </div>
</div>

@endsection