<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}" onclick="alert('Don\'t forget to logout')">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SSAWO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('ssawo/admindashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Enter Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#indexHeader"
            aria-expanded="true" aria-controls="indexHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>First Page Header</span>
        </a>
        <div id="indexHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header of Main Page:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.indexHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/indexHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#what_we_do"
            aria-expanded="true" aria-controls="what_we_do">
            <i class="fas fa-fw fa-cog"></i>
            <span>Addiction</span>
        </a>
        <div id="what_we_do" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tabs:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.what-we-do.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/what-we-do') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#indexFirst"
            aria-expanded="true" aria-controls="indexFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Main First Content</span>
        </a>
        <div id="indexFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.indexFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/indexFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#indexSecond"
            aria-expanded="true" aria-controls="indexSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Main Second Content</span>
        </a>
        <div id="indexSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Second Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.indexSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/indexSecond') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab 1 who we are --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneHeader"
            aria-expanded="true" aria-controls="tabOneHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Who we are Header</span>
        </a>
        <div id="tabOneHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab One:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneFirst"
            aria-expanded="true" aria-controls="tabOneFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Who we are Content 1</span>
        </a>
        <div id="tabOneFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSecond"
            aria-expanded="true" aria-controls="tabOneSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Who we are Content 2</span>
        </a>
        <div id="tabOneSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Second Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSecond') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneThird"
            aria-expanded="true" aria-controls="tabOneThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>Who we are Content 3 </span>
        </a>
        <div id="tabOneThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Third Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneThird') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab 1 sub menu 1 who we are --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubOneHeader"
            aria-expanded="true" aria-controls="tabOneSubOneHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Focus Women Header</span>
        </a>
        <div id="tabOneSubOneHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubOneHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubOneHeader') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubOneFirst"
            aria-expanded="true" aria-controls="tabOneSubOneFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Focus Women First</span>
        </a>
        <div id="tabOneSubOneFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubOneFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubOneFirst') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubOneSecond"
            aria-expanded="true" aria-controls="tabOneSubOneSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Focus Women Second</span>
        </a>
        <div id="tabOneSubOneSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubOneSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubOneSecond') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubOneThird"
            aria-expanded="true" aria-controls="tabOneSubOneThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>Focus Women Third</span>
        </a>
        <div id="tabOneSubOneThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubOneThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubOneThird') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubOneFourth"
            aria-expanded="true" aria-controls="tabOneSubOneFourth">
            <i class="fas fa-fw fa-cog"></i>
            <span>Focus Women Stories</span>
        </a>
        <div id="tabOneSubOneFourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubOneFourth.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubOneFourth') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab 1 sub menu 2 who we are --}}

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubTwoHeader"
            aria-expanded="true" aria-controls="tabOneSubTwoHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Global Network Header</span>
        </a>
        <div id="tabOneSubTwoHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 2:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubTwoHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubTwoHeader') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubTwoFirst"
            aria-expanded="true" aria-controls="tabOneSubTwoFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Global Network First</span>
        </a>
        <div id="tabOneSubTwoFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 2:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubTwoFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubTwoFirst') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubTwoSecond"
            aria-expanded="true" aria-controls="tabOneSubTwoSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Global Network Second</span>
        </a>
        <div id="tabOneSubTwoSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 2:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubTwoSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubTwoSecond') }}">Show</a>
            </div>
        </div>
    </li>

     {{-- tab 1 sub menu 3 who we are --}}

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubThreeHeader"
            aria-expanded="true" aria-controls="tabOneSubThreeHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Technical Header</span>
        </a>
        <div id="tabOneSubThreeHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 3:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubThreeHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubThreeHeader') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubThreeFirst"
            aria-expanded="true" aria-controls="tabOneSubThreeFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Technical First</span>
        </a>
        <div id="tabOneSubThreeFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 3:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubThreeFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubThreeFirst') }}">Show</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubThreeSecond"
            aria-expanded="true" aria-controls="tabOneSubThreeSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Technical Second</span>
        </a>
        <div id="tabOneSubThreeSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 3:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubThreeSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubThreeSecond') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubThreeThird"
            aria-expanded="true" aria-controls="tabOneSubThreeThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>Technical Third</span>
        </a>
        <div id="tabOneSubThreeThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 3:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubThreeThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubThreeThird') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab 1 sub menu 4 who we are --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubFourHeader"
            aria-expanded="true" aria-controls="tabOneSubFourHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Background Header</span>
        </a>
        <div id="tabOneSubFourHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 4:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubFourHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubFourHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubFourSecond"
            aria-expanded="true" aria-controls="tabOneSubFourSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Background First</span>
        </a>
        <div id="tabOneSubFourSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 4:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubFourSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubFourSecond') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubFourFirst"
            aria-expanded="true" aria-controls="tabOneSubFourFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Background Second</span>
        </a>
        <div id="tabOneSubFourFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 4:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubFourFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubFourFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubFourFourth"
            aria-expanded="true" aria-controls="tabOneSubFourFourth">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Background Third</span>
        </a>
        <div id="tabOneSubFourFourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 4:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubFourFourth.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubFourFourth') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabOneSubFourThird"
            aria-expanded="true" aria-controls="tabOneSubFourThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Background Four</span>
        </a>
        <div id="tabOneSubFourThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 1 Sub Menu 4:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabOneSubFourThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabOneSubFourThird') }}">Show</a>
            </div>
        </div>
    </li>






    {{-- tab 2 what we do--}}



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabTwoHeader"
            aria-expanded="true" aria-controls="tabTwoHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>What we do Header</span>
        </a>
        <div id="tabTwoHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab One:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabTwoHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabTwoHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabTwoFirst"
            aria-expanded="true" aria-controls="tabTwoFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>What we do Content 1</span>
        </a>
        <div id="tabTwoFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabTwoFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabTwoFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabTwoSecond"
            aria-expanded="true" aria-controls="tabTwoSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>What we do Content 2</span>
        </a>
        <div id="tabTwoSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Second Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabTwoSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabTwoSecond') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabTwoThird"
            aria-expanded="true" aria-controls="tabTwoThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>What we do Content 3 </span>
        </a>
        <div id="tabTwoThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Third Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabTwoThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabTwoThird') }}">Show</a>
            </div>
        </div>
    </li>


    {{-- tab three where we work--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabThreeFirst"
            aria-expanded="true" aria-controls="tabThreeFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Where we work </span>
        </a>
        <div id="tabThreeFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabThreeFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabThreeFirst') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab four our impact --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabFourHeader"
            aria-expanded="true" aria-controls="tabFourHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Impact Header </span>
        </a>
        <div id="tabFourHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabFourHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabFourHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabFourFirst"
            aria-expanded="true" aria-controls="tabFourFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Our Impact Content 1 </span>
        </a>
        <div id="tabFourFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabFourFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabFourFirst') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab 4 sub menu 1 what we do--}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabFourSubOneFirst"
            aria-expanded="true" aria-controls="tabFourSubOneFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Impact Stories</span>
        </a>
        <div id="tabFourSubOneFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tab 4 Sub Menu 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabFourSubOneFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabFourSubOneFirst') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- tab five  research and reports--}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabFiveFirst"
            aria-expanded="true" aria-controls="tabFiveFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Research </span>
        </a>
        <div id="tabFiveFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">First Content:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.tabFiveFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/tabFiveFirst') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- news --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#news"
            aria-expanded="true" aria-controls="news">
            <i class="fas fa-fw fa-cog"></i>
            <span>News</span>
        </a>
        <div id="news" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">News Page:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.news.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/press') }}">Show</a>
            </div>
        </div>
    </li>


    {{-- about Us --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aboutUsHeader"
            aria-expanded="true" aria-controls="aboutUsHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>About Us Header</span>
        </a>
        <div id="aboutUsHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.aboutUsHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/aboutUsHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aboutUsFirst"
            aria-expanded="true" aria-controls="aboutUsFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>About Us Content 1</span>
        </a>
        <div id="aboutUsFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Paragraph 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.aboutUsFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/aboutUsFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aboutUs"
            aria-expanded="true" aria-controls="aboutUs">
            <i class="fas fa-fw fa-cog"></i>
            <span>Learn more About</span>
        </a>
        <div id="aboutUs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Content 2:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.aboutUs.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/aboutUs') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- mission and vision --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#missionAndVisionHeader"
            aria-expanded="true" aria-controls="missionAndVisionHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mission Header</span>
        </a>
        <div id="missionAndVisionHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.missionAndVisionHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/missionAndVisionHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#missionAndVisionFirst"
            aria-expanded="true" aria-controls="missionAndVisionFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mission & Vision 1</span>
        </a>
        <div id="missionAndVisionFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Paragraph 1:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.missionAndVisionFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/missionAndVisionFirst') }}">Show</a>
            </div>
        </div>
    </li>


    {{-- our leaders --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ourLeadersHeader"
            aria-expanded="true" aria-controls="ourLeadersHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Leader Header</span>
        </a>
        <div id="ourLeadersHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.ourLeadersHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/ourLeadersHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ourLeadersFirst"
            aria-expanded="true" aria-controls="ourLeadersFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>About Leader</span>
        </a>
        <div id="ourLeadersFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Leader details:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.ourLeadersFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/ourLeadersFirst') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ourLeadersSecond"
            aria-expanded="true" aria-controls="ourLeadersSecond">
            <i class="fas fa-fw fa-cog"></i>
            <span>Supervisory</span>
        </a>
        <div id="ourLeadersSecond" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Board:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.ourLeadersSecond.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/ourLeadersSecond') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ourLeadersThird"
            aria-expanded="true" aria-controls="ourLeadersThird">
            <i class="fas fa-fw fa-cog"></i>
            <span>Key Personnel </span>
        </a>
        <div id="ourLeadersThird" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Director:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.ourLeadersThird.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/ourLeadersThird') }}">Show</a>
            </div>
        </div>
    </li>


     {{-- contact --}}

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contactHeader"
            aria-expanded="true" aria-controls="contactHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Contact Header</span>
        </a>
        <div id="contactHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.contactHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/contactHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contactFirst"
            aria-expanded="true" aria-controls="contactFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Contact Details</span>
        </a>
        <div id="contactFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Location details:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.contactFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/contactFirst') }}">Show</a>
            </div>
        </div>
    </li>

    {{-- career --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#careerHeader"
            aria-expanded="true" aria-controls="careerHeader">
            <i class="fas fa-fw fa-cog"></i>
            <span>Career Header</span>
        </a>
        <div id="careerHeader" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.careerHeader.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/careerHeader') }}">Show</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#careerFirst"
            aria-expanded="true" aria-controls="careerFirst">
            <i class="fas fa-fw fa-cog"></i>
            <span>Career positions</span>
        </a>
        <div id="careerFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Career details:</h6>
                <a class="collapse-item" href="{{ route('ssawo.admindashboard.careerFirst.create') }}">Add</a>
                <a class="collapse-item" href="{{ route('ssawo/admindashboard/careerFirst') }}">Show</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SSAWO</strong> This is the Admin Panel only Admin can insert and edit the data!</p>
        <a class="btn btn-success btn-sm" href="{{ route('logout') }}">Logout</a>
    </div>

</ul>
