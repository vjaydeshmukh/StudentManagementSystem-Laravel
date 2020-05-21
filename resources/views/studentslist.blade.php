<div class="card mb-1">
    <img src="{{asset('images/imglist.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of Student</h5>
        <p class="card-text">You can find all information about Informatics Engineering students 2018 at Hasanuddin
            University</p>

        <table class="table" id="tblist">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->religion }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->speciality }}</td>

                    <td style="text-align: center" id="operation">
                        <!-- Button trigger modal -->
                        <a data-student_id="{{$student->id}}" data-nim="{{$student->nim}}"
                            data-firstname="{{$student->firstName}}" data-lastname="{{$student->lastName}}"
                            data-gender="{{$student->gender}}" data-age="{{$student->age}}"
                            data-religion="{{$student->religion}}" data-address="{{$student->address}}"
                            data-speciality="{{$student->speciality}}"
                            data-image="{{asset('images/imageProfile/'.$student->image)}}" data-toggle="modal"
                            data-target="#exampleModal-show" type="button"
                            class="btn btn-primary btn-sm text-white">Show</a>


                        <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                        @if($layout == 'index')
                        <a href="{{ url('/delete_home/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        @else
                        <a href="{{ url('/delete_create/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- Modal -->
<div class="modal fade bottom" id="exampleModal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-warning" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-secondary">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class='table borderless'>
                    <tbody>
                        <tr>
                            <img id="imageProfile" class="rounded mx-auto d-block">
                        </tr>
                        <tr>
                            <th scope="row">Nim</th>
                            <td><input type="text" class="form-control" id="nim" name="nim" placeholder="Enter Nim"
                                    readonly></td>
                        </tr>
                        <tr>
                            <th scope="row">First Name</th>
                            <td><input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="Enter First Name" readonly></td>
                        </tr>
                        <tr>
                            <th scope="row">Last Name</th>
                            <td><input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Enter Last Name" readonly></td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td><input type="text" class="form-control" id="gender" name="gender"
                                    placeholder="Enter Genre" readonly></td>
                        </tr>
                        <tr>
                            <th scope="row">Age</th>
                            <td><input type="text" class="form-control" id="age" name="age" placeholder="Enter Age"
                                    readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Religion</th>
                            <td><input type="text" class="form-control" id="religion" name="religion"
                                    placeholder="Enter Religion" readonly></td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td><textarea type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter Address" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Speciality</th>
                            <td> <input type="text" class="form-control" id="speciality" name="gender"
                                    placeholder="Enter Speciality" readonly></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer text-white bg-secondary">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-warning">Show Student</button> -->
            </div>
        </div>
    </div>
</div>
