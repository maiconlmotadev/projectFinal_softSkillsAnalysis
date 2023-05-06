<!-- Content -->
<div id="content">

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid col-sm-9 col-12">
                <h1 id="title">Soft Skills Analysis</h1>
            </div>

            <div class="container text-right col-sm-3 col-12">
                <div class="dropdown">
                    @if(Auth::user()->photo)
                        <img id="profile-pic2" src="{{asset('storage/' . Auth::user()->photo)}}" alt="">
                    @else
                        <img id="profile-pic" src="../../../images/user-default-image2.png" alt="">
                    @endif


                    <button id="btn-drop" class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{url('/users/' . Auth::user()->id)}}">Detalhes</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="container-fluid col-sm-9 col-12">

            </div>
        </div>
    </div>
</div>

