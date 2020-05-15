<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{url('/')}}"> <img id="web_icon" src="{{asset('images/logo.png')}}" width="50"
            height="40" class="d-inline-block align-top" alt=""> Data Student</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav-sm-6">
            <button id="home" type="button" class="btn btn-outline-primary">
                <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </button>
            <button id="create" type="button" class="btn btn-outline-primary">
                <a class="nav-item nav-link active" href="{{url('/create')}}">Create</a>
            </button>
            <button id="about" type="button" class="btn btn-outline-primary">
                <a class="nav-item nav-link active" href="{{url('/about')}}">About</a>
            </button>
        </div>
    </div>
</nav>

