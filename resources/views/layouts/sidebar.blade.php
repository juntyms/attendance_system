<div class="position-relative">
    <div class="d-flex d-none d-sm-block p-1  text-end">
        <p class="custom-link">welecom:{{Auth::user()->name}}</p>


        <a class="custom-link" href=" {{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <span>Sign Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div class="d-flex justify-content-between p-3 align-items-center position-fixed ">

        <div>
            <div class="d-flex position-relative">


                <div class="p-4 start-0 top-0 position-fixed h-75 align-items-center d-none d-md-flex">
                    <div class="openSans">
                        <div class="selected sideLink ms-3 my-3">
                            <a href="{{route('student.list')}}">Student</a>
                        </div>
                        <div class="sideLink ms-3 my-3">
                            <a href="{{route('attendance.all')}}">Attendances</a>
                        </div>
                        <div class="selected sideLink ms-3 my-3">Devices</div>
                        <div class="sideLink ms-3 my-3">
                            <a href="{{route('home')}}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>