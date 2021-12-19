<div class="sidebar min-vh-100  " >
    <ul>
        <li class="my-3">
            <a href="{{route('home')}}" >
                <img src="{{asset('images/logos/logo.PNG')}}" class="brand-logo" height="50" alt="">
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <x-sidebar-link routeName="home" name="Home" icon="fas fa-home"></x-sidebar-link>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <x-sidebar-link routeName="category.create" name="Create Category" icon="fas fa-plus-circle"></x-sidebar-link>
        </li>
        <li>
            <x-sidebar-link routeName="category.index" name="Category Lists" icon="fas fa-list"></x-sidebar-link>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>

    </ul>
</div>
