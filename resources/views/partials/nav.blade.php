<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand">{{$content_name}}</span> 
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="#" data-toggle="popover" data-placement="bottom" title="Account Details" data-content="
                           Username: {{Auth::user()->username}}
                           Email:{{Auth::user()->email}} 
                           ">
                               {{Auth::user()->username}}
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout
                            </a>
                        </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                                </form>
                        
                    </ul>
                </div>
            </div>
        </nav>