<?php
    include("modules/header.php");
?>
<style>
    .dropdown-colorselector>.dropdown-menu{
        min-height:0px;
        min-width:0px;
    }

    .btn-colorselector{
        width:100%;
    }
</style>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="active">
                <a href="route.php"><i class="fa fa-map-marker" aria-hidden="true"></i> Route Planner</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper" style="min-height: 800px;">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Route Planner
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <?php
        /*
        $response = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');
        $response = json_decode($response);
        print_r($response);
        */
        ?>

        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-exchange" aria-hidden="true"></i> Routes Information</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive" style="min-height: 200px;">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Route</th>
                        <th>Color 1</th>
                        <th>Color 2</th>
                        <th>Color 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Base -> Room 1</td>
                        <td>
                            <select id="colorselector_1">
                                <option value="" data-color=""></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB" selected="selected">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select>
                        </td>
                        <td>
                            <select id="colorselector_2">
                                <option value="" data-color="" selected="selected"></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select></td>
                        <td>
                            <select id="colorselector_3">
                                <option value="" data-color="" selected="selected"></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->


        <div>
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Information</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive" style="min-height: 200px;">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Route</th>
                        <th>Color 1</th>
                        <th>Color 2</th>
                        <th>Color 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Base -> Room 1</td>
                        <td>
                            <select id="colorselector_1">
                                <option value="" data-color=""></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB" selected="selected">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select>
                        </td>
                        <td>
                            <select id="colorselector_2">
                                <option value="" data-color="" selected="selected"></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select></td>
                        <td>
                            <select id="colorselector_3">
                                <option value="" data-color="" selected="selected"></option>
                                <option value="106" data-color="#A0522D">sienna</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="87" data-color="#FF4500">orangered</option>
                                <option value="17" data-color="#008B8B">darkcyan</option>
                                <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                <option value="68" data-color="#32CD32">limegreen</option>
                                <option value="42" data-color="#FFD700">gold</option>
                                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                <option value="107" data-color="#87CEEB">skyblue</option>
                                <option value="46" data-color="#FF69B4">hotpink</option>
                                <option value="47" data-color="#CD5C5C">indianred</option>
                                <option value="64" data-color="#87CEFA">lightskyblue</option>
                                <option value="13" data-color="#6495ED">cornflowerblue</option>
                                <option value="15" data-color="#DC143C">crimson</option>
                                <option value="24" data-color="#FF8C00">darkorange</option>
                                <option value="78" data-color="#C71585">mediumvioletred</option>
                                <option value="123" data-color="#000000">black</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php
include("modules/footer.php");
?>