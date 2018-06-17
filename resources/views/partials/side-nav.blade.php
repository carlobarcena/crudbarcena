<div class="sidebar" data-color="azure" data-image="img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Employee-Department CRUD
            </a>
        </div>

        <ul class="nav">
            <li @if($content == 1)
                class="active"
                @else
                @endif
                >
                <a href="dashboard">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li @if($content == 2)
                class="active"
                @else
                @endif
                >
                <a href="employee">
                    <i class="pe-7s-user"></i>
                    <p>Employee</p>
                </a>
            </li>

            <li @if($content == 3)
                class="active"
                @else
                @endif
                >
                <a href="department">
                    <i class="pe-7s-note2"></i>
                    <p>Department</p>
                </a>
            </li>
            

        </ul>
    </div>
</div>