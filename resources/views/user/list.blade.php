@extends('layout.main')
@section('main_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">User List</h2>
        <h4><a href="/users/create">Add User</a></h4>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Hubbies</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="userList">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $.ajax({
            url: '/api/user',
            type: "get",
            dataType: 'json',
            success: function(data) {
                var list = '';
                $.each(data.users, function(k, v) {
                    list = list + '<tr>';
                    list = list + '<td>'+v.name+'</td>';
                    list = list + '<td>'+v.email+'</td>';
                    list = list + '<td>'+v.mobile_number+'</td>';
                    list = list + '<td>'+v.gender+'</td>';
                    list = list + '<td>'+v.state.name+'</td>';
                    list = list + '<td>'+v.city.name+'</td>';
                    list = list + '<td>'+v.user_hobbies[0].names+'</td>';
                    list = list + '<td><img src="'+v.profile_pic+'" height=100px width=100px></td>';
                    list = list + '<td><a href="/users/'+v.id+'/edit">Edit</a> <button class="deleteUser btn btn-danger" data-id="'+v.id+'">Delete</button>';
                    list = list + '</tr>';
                    
                });
                $('#userList').html(list);
                
            }
        });
        $(document).on('click','.deleteUser',function(){
            var that = $(this);
            // alert($(this).attr('data-id'));
            $.ajax({
                url: '/api/user/'+$(this).attr('data-id'),
                type: "DELETE",
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {


                    if (data.status) {
                        that.parents('tr').remove();
                    } 

                }
            });
        })
    </script>
@endsection