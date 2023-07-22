@extends('layout.main')
@section('main_content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Update User</h2>
        </div>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-8">

                    <form action="" method="post" id="updateUser" enctype="multipart/form-data">
                        @method('PUT')
                        <div id="errors-list"></div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Name <span class="text-danger">*</span> </label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Add name" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Email <span class="text-danger">*</span> </label>
                            <div class="">
                                <input type="email" class="form-control" placeholder="Add email" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Mobile Number <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <input type="number" class="form-control" placeholder="Add Mobile Number" id="m_no"  name="mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Gender <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">State <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <select name="state" class="form-control" id="state">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">City <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <select name="city" class="form-control" id="city">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Hobbies <span class="text-danger">*</span>
                            </label>
                            <div class="">
                                <select name="hobbies[]" class="form-control" id="hobbies" multiple>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class=" col-form-label">Profile Pic  </label>
                            <div class="">
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                        </div>


                        <div class="mt-4 text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#addUser").validate({
                rules: {
                    name: 'required',
                    email: 'required',
                    mobile_number: 'required',
                    "hobbies[]": 'required',
                    image: {
                        required: true,
                        // extension: "jpg,jpeg, png",
                    },

                },

            });
        });
        $.ajax({
            url: '/api/user/{{$id}}',
            type: "get",
            dataType: 'json',
            success: function(data) {
                var stateOption = '';
                $('#name').val(data.users.name);
                $('#email').val(data.users.email);
                $('#m_no').val(data.users.mobile_number);
                $('#gender').val(data.users.gender_id).change();
                $.each(data.state, function(k, v) {
                    if(data.users.state_id == v.id){
                        stateOption = stateOption + '<option value="' + v.id + '" selected="selected">' + v.name + '</option>';
                    } else {
                        stateOption = stateOption + '<option value="' + v.id + '">' + v.name + '</option>';
                    }
                });
                $('#state').html(stateOption);
                var cityOption = '';
                $.each(data.city, function(k, v) {
                    if(data.users.city_id == v.id){
                        cityOption = cityOption + '<option value="' + v.id + '" selected="selected">' + v.name + '</option>';
                    } else {
                        cityOption = cityOption + '<option value="' + v.id + '">' + v.name + '</option>';
                    }
                });
                $('#city').html(cityOption);
                var hobbiesOption = '';
                $.each(data.hobbies, function(k, v) {
                    if(jQuery.inArray(v.id, data.users.hobbies_id) !== -1){
                        hobbiesOption = hobbiesOption + '<option value="' + v.id + '"  selected="selected">' + v.name + '</option>';
                    } else {
                        hobbiesOption = hobbiesOption + '<option value="' + v.id + '">' + v.name + '</option>';

                    }
                    
                });
                $('#hobbies').html(hobbiesOption);
            }
        });
        $(document).on("change", "#state", function(e) {
            // alert($(this).val());
            $.ajax({
                url: '/api/getCity/' + $(this).val(),
                type: "get",
                dataType: 'json',
                success: function(data) {
                    var cityOption = '';
                    $.each(data.city, function(k, v) {
                        cityOption = cityOption + '<option value="' + v.id + '">' + v.name +
                            '</option>';
                    });
                    $('#city').html(cityOption);

                }
            });
        });
        $(document).on("submit", "#updateUser", function(e) {
            e.preventDefault();
            $("#errors-list").html('');
            var formData = new FormData($('#updateUser')[0]);
            // con
            $.ajax({
                url: '/api/user/{{$id}}',
                data: formData,
                type: "post",
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {


                    if (data.status) {
                        window.location = '/users';
                    } else {
                        // $(".alert").remove();
                        $.each(data.errors, function(key, val) {
                            $("#errors-list").append("<div class='alert alert-danger'>" + val +
                                "</div>");
                        });
                    }

                }
            });

            return false;
        });
    </script>
@endsection
