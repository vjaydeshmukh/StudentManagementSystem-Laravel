<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/background/01.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">List of <span> Student</span></h5>
                <p class="animated fadeInDown" style="animation-delay: 2s">Data of Informatics Engineering students at Hasanuddin University</p>
                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#studentList">Go to the list</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/background/02.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">Create<span> Student Data</span></h5>
                <p class="animated fadeInDown" style="animation-delay: 2s">Add your data to the list of informatics engineering students at Hasanuddin University</p>
                <p class="animated fadeIn" style="animation-delay: 3s"><a href="{{url('/create')}}">Create</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/background/03.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">Additional<span> information</span></h5>
                <p class="animated fadeInDown" style="animation-delay: 2s">Additional information about the Hasanuddin University engineering faculties and developers for the
                    website</p>
                <p class="animated fadeIn" style="animation-delay: 3s"><a href="{{url('/about')}}" >About</a></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
