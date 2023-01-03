<div class="position-relative">
    <div class="d-flex justify-content-between p-3 align-items-center position-fixed w-100">
        <div><img src="/static_files/images/logos/htmlWhiteLogo.png?ezimgfmt=rs:169x48/rscb1/ng:webp/ngcb1"
                alt="Company Logo" ezimgfmt="rs rscb1 src ng ngcb1" class=" ezlazyloaded"
                data-ezsrc="/static_files/images/logos/htmlWhiteLogo.png?ezimgfmt=rs:169x48/rscb1/ng:webp/ngcb1"
                ezoid="0.42739403971680445" height="48"></div>
        <div>
            <div class="d-flex position-relative">


                <div class="p-4 start-0 top-0 position-fixed vh-100 align-items-center d-none d-md-flex">
                    <div class="openSans">
                        <div class="selected sideLink ms-3 my-3">Students</div>
                        <div class="sideLink ms-3 my-3">Attendances</div>
                        <div class="selected sideLink ms-3 my-3">Devices</div>
                        <div class="sideLink ms-3 my-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span>Sign Out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>