@extends('layouts.adminpanel_layout')
@section('content')
<div class="card">
    <div class="list-group-item list-group-item-action bg-dark text-white">
        MESSAGES
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sender eMail</th>
                    <th scope="col">Message</th>
                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            @foreach ($Messages as $message)
                <tbody>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>
                    <form action="{{route('DeleteMessage')}}" id="delete_{{$message->id}}" method="post">
                      @csrf
                        <input type="hidden" name="message_id" value="{{$message->id}}">
                    </form>
                    <button type="submit" form="delete_{{$message->id}}" class="btn btn-danger btn-sm">
                        DELETE
                    </button>
                </td>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
