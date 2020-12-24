<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <title>Title</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark py-0 px-16">
        <a class="navbar-brand ml-4">UniversityPortal</a>
        <form class="form-inline" action="{{route('login')}}" method="get">
            <button class="btn btn-outline-danger my-3" type="submit">Exit</button>
            <input type="hidden" name="req" value="1">
        </form>
    </nav>



    <div class="row mt-4 ml-3">
        <div class="col-md-3">

            <div class="list-group mb-3">
                <button type="button" class="list-group-item list-group-item-action bg-dark text-white disabled">ADMIN PANEL</button>
                <button type="button submit" form="touser" class="list-group-item list-group-item-action">Users</button>
                <button type="button submit" form="tomessages" class="list-group-item list-group-item-action">Messages</button>
                <button type="button submit" form="togroups" class="list-group-item list-group-item-action">Groups</button>
                <button type="button submit" form="tosubjects" class="list-group-item list-group-item-action">Subjects</button>
                <form id="tomessages" action="{{route('toContacts')}}" method="post">@csrf</form>
                <form id="touser" action="{{route('toUsers')}}" method="post">@csrf</form>
                <form id="togroups" action="{{route('toGroups')}}" method="post">@csrf</form>
                <form id="tosubjects" action="{{route('toSubjects')}}" method="post">@csrf</form>
            </div>

        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
    </div>

</body>
</html>
