<!-- Vertical Navbar -->
<div class="vertical-nav  bg-white" id="sidebar">

    <div class="py-4 px-3  mb-4 bg-light">
        <div class="media d-flex  align-items-md-center">
            <img src="{{ url('/images/spider.jpg') }}" height="80" width="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        </div>
        <div class="media-body">
            <h4 class="m-0">Juan de la  Cruz</h4>
            <p  class="font-weight-normal text-muted mb-0">Barangay Secretary</p>
        </div>
    </div>

    <p class="text-gray font-weight-bold  text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul  class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                My Account
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Records
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Certificates
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Officials
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Report
            </a>
        </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

    <ul  class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                About
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Services
            </a>
        </li>
    </ul>

</div>


{{--Page  Content--}}
<div class="page-content p-5" id="content">

    <!-- Toggle Button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i>
        <small class="text-uppercase font-weight-bold">Toggle</small>
    </button>

    <div class="container">
        <h1>Hello World</h1>
    </div>

</div>

@section('script')
    <script type="text/javascript">
        // $(function () {
        //     $('#sidebarCollapse').on('click', function (){
        //         alert('Yeaj')
        //         $('#sidebar, #content').toggleClass('active')
        //     });
        // });


        // $( "#sidebarCollapse" ).click(function() {
        //     alert( "Handler for .click() called." );
        // });

        window.onload = function() {
            if (window.jQuery) {
                // jQuery is loaded
                alert("Yeah!");
            } else {
                // jQuery is not loaded
                alert("Doesn't Work");
            }
        }
    </script>
@endsection
