<!doctype html>
<html lang="en">

<head>
    <!-- Require meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Student Management System</title>
</head>

<body>
    @include ("navbar")

    @if($layout == 'index')
    @include ("pager")


    <div class="row header-container justify-content-center">
        <div class="header" id="studentList">
            <h1>Student Management System</h1>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-9">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include("studentslist")
            </section>
            <section class="col-md-4">

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Create Data</h5>
                        @if($success == 'ok')
                        <div class="alert alert-success" role="alert">
                            Success!
                        </div>
                        @endif

                        <form action="{{ url('/store') }}" method="post" name="createForm"
                            onsubmit="return(validate());" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nim</label>
                                <input type="text" name="nim" class="form-control" placeholder="Enter Nim" />
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstName" class="form-control"
                                    placeholder="Enter the First Name" Require />
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" class="form-control"
                                    placeholder="Enter the Last Name" Require />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender</label>
                                <select name="gender" class="form-control" id="exampleFormControlSelect1" Require>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter the Age"
                                    Require />
                            </div>

                            <div class="form-group">
                                <label>Religion</label>
                                <input type="text" name="religion" class="form-control" placeholder="Enter Religion"
                                    Require />
                            </div>

                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality"
                                    Require />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Enter Address" Require></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>


            </section>
        </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include("studentslist")
            </section>
            <section class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data</h5>
                        @if($success == 'ok')
                        <div class="alert alert-success" role="alert">
                            Success!
                        </div>
                        @endif
                        <form action="{{ url('/update/'.$student->id) }}" method="post" name="createForm"
                            onsubmit="return(validate());" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nim</label>
                                <input value="{{ $student->nim }}" type="text" name="nim" class="form-control"
                                    placeholder="Enter nim">
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $student->firstName }}" type="text" name="firstName"
                                    class="form-control" placeholder="Enter the First Name">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input value="{{ $student->lastName }}" type="text" name="lastName" class="form-control"
                                    placeholder="Enter the Last Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                    <option value="Male" @if($student->gender == "Male") selected @endif>Male
                                    </option>
                                    <option value="Female" @if($student->gender == "Female") selected
                                        @endif>Female</option>
                                    <option value="Other" @if($student->gender == "Other") selected @endif>Other
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" type="text" name="age" class="form-control"
                                    placeholder="Enter the Age">
                            </div>

                            <div class="form-group">
                                <label>Religion</label>
                                <input value="{{ $student->religion }}" type="text" name="religion" class="form-control"
                                    placeholder="Enter Religion">
                            </div>

                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{ $student->speciality }}" type="text" name="speciality"
                                    class="form-control" placeholder="Enter Speciality">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                    rows="3">{{ $student->address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input value="{{asset('images/imageProfile/'.$student->image)}}" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @endif

    @include ('footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


    <script>
        
        $('#exampleModal-show').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var nim = button.data('nim')
            var firstname = button.data('firstname')
            var lastname = button.data('lastname')
            var gender = button.data('gender')
            var age = button.data('age')
            var religion = button.data('religion')
            var address = button.data('address')
            var speciality = button.data('speciality')
            var image = button.data('image')
            var student_id = button.data('student_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW STUDENT INFORMATION');
            modal.find('.modal-body #nim').val(nim);
            modal.find('.modal-body #firstname').val(firstname);
            modal.find('.modal-body #lastname').val(lastname);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #age').val(age);
            modal.find('.modal-body #religion').val(religion);
            modal.find('.modal-body #address').val(address);
            modal.find('.modal-body #speciality').val(speciality);
            modal.find('.modal-body #imageProfile').attr('src', image)
            modal.find('.modal-body #student_id').val(student_id);
        });

    </script>

    <script type="text/javascript">
        // Form validation code will come here.
        function validate() {
            var nim = document.forms["createForm"]["nim"];
            var firstname = document.forms["createForm"]["firstName"];
            var lastname = document.forms["createForm"]["lastName"];
            var gender = document.forms["createForm"]["gender"];
            var age = document.forms["createForm"]["age"];
            var religion = document.forms["createForm"]["religion"];
            var speciality = document.forms["createForm"]["speciality"];
            var address = document.forms["createForm"]["address"];

            if (nim.value == "") {
                alert("Please enter your Nim!");
                nim.focus();
                return false;
            }
            if (firstname.value == "") {
                alert("Please enter your FirstName!");
                firstname.focus();
                return false;
            }
            if (lastname.value == "") {
                alert("Please enter your LastName!");
                lastname.focus();
                return false;
            }
            if (gender.value == "-1") {
                alert("Please enter your Gender!");
                return false;
            }
            if (age.value == "") {
                alert("Please enter your Age!");
                age.focus();
                return false;
            }

            var numbers = /^[0-9]+$/;
            if (!age.value.match(numbers)) {
                alert('Please input numeric characters only on your Age');
                age.focus();
                return false;
            }

            if (religion.value == "") {
                alert("Please enter your Religion!");
                religion.focus();
                return false;
            }
            if (speciality.value == "") {
                alert("Please enter your Speciality!");
                speciality.focus();
                return false;
            }

            return (true);
        }
        //-->

    </script>

</body>

</html>
