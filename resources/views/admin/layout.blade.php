<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <title>CR+ system</title>

       <link href="/css/bootstrap.min.css" rel="stylesheet">
       <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
       <link href="/js2/plugins/pace/pace-theme-center-simple.css" rel="stylesheet">

       <!-- Toastr style
       <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    -->
     <!--Gritter


        <link rel="stylesheet" href="/css/crop-select-js.min.css">

    <link href="/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="/css/plugins/switchery/switchery.css" rel="stylesheet">
    <style>
        #upload{
            margin:30px 200px; padding:15px;
            font-weight:bold; font-size:1.3em;
            font-family:Arial, Helvetica, sans-serif;
            text-align:center;
            background:#f2f2f2;
            color:#3366cc;
            border:1px solid #ccc;
            width:150px;
            cursor:pointer !important;
            -moz-border-radius:5px; -webkit-border-radius:5px;
        }
        #drop_zone {
            background-color: #EEE;
            border: #999 5px dashed;
            width: 290px;
            height: 200px;
            padding: 8px;
            font-size: 18px;
        }
    </style>
-->



  <!--
    <style>
        #upload{
            margin:30px 200px; padding:15px;
            font-weight:bold; font-size:1.3em;
            font-family:Arial, Helvetica, sans-serif;
            text-align:center;
            background:#f2f2f2;
            color:#3366cc;
            border:1px solid #ccc;
            width:150px;
            cursor:pointer !important;
            -moz-border-radius:5px; -webkit-border-radius:5px;
        }
        #drop_zone {
            background-color: #EEE;
            border: #999 5px dashed;
            width: 290px;
            height: 200px;
            padding: 8px;
            font-size: 18px;
        }
    </style>

  -->




        <link href="/css/plugins/select2/select2.min.css" rel="stylesheet">

        <link href="/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

        <link href="/css/plugins/summernote/summernote.css" rel="stylesheet">

        <link href="/js2/plugins/gritter/jquery.gritter.css" rel="stylesheet">

        <link href="/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">

        <link href="/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

        <link href="/css/animate.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                            <a href="//profile/edit"><img alt="image" class="img-circle img-md" src="" /></a>

                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs"> <strong class="font-bold"> </strong></span>
                                    <span class="text-muted text-xs block">Опції<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="//profile/edit">Профіль</a></li>

                                <li class="divider"></li>
                                <li><a href="//profile/logout/">Віхід</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            CR+
                        </div>
                    </li>
                        <li >
                                <a href="//tikets/"><i class="fa fa-th-large text-danger"></i> <span class="nav-label">Завдання</span>
                                    <span class="fa arrow"></span>
                                    <span class="label label-success pull-right" title="Загальна кылькість завдань які створили ви."> </span>
                                    <span class="label label-info pull-right" title="Загальна кылькість завдань в яких ви відповідальні."></span>
                                </a>

                                <ul class="nav nav-second-level collapse " style="">
                                    <li  >
                                        <a href="{{ route('admin.index') }}"><i class="fa fa-list-alt"></i> <span class="nav-label">Мої тікети</span>
                                            <span class="label label-warning pull-right" title="Кількість завдань які створені вами і були невиконані виконавцями в сроки." style="display: none"></span>
                                            <span class="label label-danger pull-right" title="Кількість завдань в яких ви призначені відповідальним і вони не виконані в сроки." < style="display: none"></span>
                                        </a>
                                    </li>

                                    <li  ><a href="//tikets/all"><i class="fa fa-th-list"></i> <span class="nav-label">Всі тікети</span> </a></li>

                                </ul>
                        </li>

                        <li class="">
                            <a href=""><i class="fa fa-sitemap text-warning"></i>
                                <span class="fa arrow"></span>
                                <span class="nav-label">Данні ВебІнтерфейсу</span>

                            </a>

                            <ul class="nav nav-second-level collapse " style="">
                                <li class="">
                                <a href="//report/"><i class="fa fa-files-o text-warning"></i> <span class="nav-label">Звіт</span> </a>
                                </li>
                            </ul>

                            <ul class="nav nav-second-level collapse " style="">
                                <li class="">
                                <a href="//report/users"><i class="fa fa-user-circle text-info"></i> <span class="nav-label">Користувачі</span> </a>
                                </li>
                            </ul>

                            <li class="">
                                <a href="//users/"><i class="fa fa-address-book-o text-navy"></i> <span class="nav-label">Контакти</span> </a>
                            </li>



                        </li>

                </ul>
                    <br>
                    <br>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Вітаємо в системі CR+</span>
                </li>
                <li>
                    <a href="//profile/logout/">
                        <i class="fa fa-sign-out"></i> Вихід з системи.
                    </a>
                </li>

            </ul>

        </nav>

    <section class="content">
          <!-- Content PHP-->
            @if(Session::has('flash_message'))
               <div class="container">
                   <div class="alert alert-success">
                     <em>
                       {!! session('flash_message') !!}
                     </em>
                   </div>
               </div>
           @endif
                @yield('content')
            <!-- Content PHP-->
    </section>
      <!-- End main content-->




        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    02.19.2015
                </small>
                Small chat
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Monica Jackson <small class="chat-date">
                        10:02 am
                    </small>
                    </div>
                    <div class="chat-message active">
                        Lorem Ipsum is simply dummy text input.
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        Mick Smith
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        Lorem Ipsum is simpl.
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Alice Novak
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        Check this stock char.
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        Anna Lamson
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        The standard chunk of Lorem Ipsum
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Mick Lane
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        I belive that. Lorem Ipsum is simply dummy text.
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">Send
                </button> </span></div>
            </div>

        </div>
        <div id="small-chat">

            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>

            </a>
        </div>



        </div>
    </div>

    </div>

        <!-- Mainly scripts -->

        <script src="/js2/jquery-3.1.1.min.js"></script>
        <!--<script type="text/javascript" src="/js2/jquery.min.js"></script>-->
        <script src="/js2/bootstrap.min.js"></script>
        <script src="/js2/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="/js2/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="/js2/inspinia.js"></script>
        <script src="/js2/plugins/pace/pace.min.js"></script>





        <!-- Mainly scripts
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          #
    -->
          <!-- Flot графики
        <script src="/js2/plugins/flot/jquery.flot.js"></script>
        <script src="/js2/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="/js2/plugins/flot/jquery.flot.spline.js"></script>
        <script src="/js2/plugins/flot/jquery.flot.resize.js"></script>
        <script src="/js2/plugins/flot/jquery.flot.pie.js"></script>
        <script src="/js2/plugins/flot/jquery.flot.symbol.js"></script>
        <script src="/js2/plugins/flot/curvedLines.js"></script>
            -->


        <!-- Peity мини графики
        <script src="/js2/plugins/peity/jquery.peity.min.js"></script>
        <script src="/js2/demo/peity-demo.js"></script>
            -->
        <!-- Custom and plugin javascript



            <script src="/js2/inspinia.js"></script>
    #
    -->

        <!-- jQuery UI
        <script src="/js2/plugins/jquery-ui/jquery-ui.min.js"></script>
        #-->
        <!-- GITTER как тоастр
        <script src="/js2/plugins/gritter/jquery.gritter.min.js"></script>
            -->
        <!-- Sparkline
        <script src="/js2/plugins/sparkline/jquery.sparkline.min.js"></script>
            -->
        <!-- Sparkline demo data
        <script src="/js2/demo/sparkline-demo.js"></script>
            -->
        <!-- ChartJS
        <script src="/js2/plugins/chartJs/Chart.min.js"></script>
            -->
        <!-- Toastr
        <script src="/js2/plugins/toastr/toastr.min.js"></script>
            -->
        <!-- Select2#-->
        <script src="/js2/plugins/select2/select2.full.min.js"></script>


        <!-- Data picker #-->
       <script src="/js2/plugins/datapicker/bootstrap-datepicker.js"></script>



       <!-- SUMMERNOTE#-->
        <script src="/js2/plugins/summernote/summernote.min.js"></script>


        <!-- DATA TABLE#-->
        <script src="/js2/plugins/dataTables/datatables.min.js"></script>
        <script src="/js2/plugins/dataTables/buttons.colVis.min.js"></script>

  <!--
        <script>
            $(document).ready(function(){
                 //Setup - add a text input to each footer cell
                 $('#mainTableTiket tfoot th').each( function () {
                     var title = $(this).text();
                     $(this).html( '<input id="search" type="text" placeholder="'+title+'" />' );
                 } );

                var table = $('#mainTableTiket').DataTable({
                    lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        {
                            extend: 'colvis',
                            title: 'Звіт '+document.getElementById("reportInfoShort").innerText,
                            text:'Вибір колонок',
                        },
                        {extend: 'excelHtml5',
                                title: 'Звіт '+document.getElementById("reportInfoShort").innerText,
                                exportOptions: {
                                columns: ':visible(.export-col)'
                                },
                                customize: function( xlsx ) {
                                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                     //$('row c[r^="E"]', sheet).attr('t', 'inlineStr');
                                    //$('row c[r^="E"]', sheet).removeAttr('t','s');
                                    //$('row c[r^="E"] v', sheet).wrap('<is></is>');
                                     // $('row c[r^="E"]', sheet).attr('s', '51');
                                    $('row[r="1"] c', sheet).attr('s', '47');
                                    $('row c[r^="E"] ', sheet).each( function () {
                                        if ( $(this).attr('t') !== 'inlineStr' ) {
                                            $(this).attr('t', 'inlineStr');
                                            $(this).children('v').replaceWith('<t>'+$(this).children('v').text()+'</t>');
                                            $(this).children('t').wrap('<is></is>');
                                            $(this).attr('s', '50');
                                        }
                                    });
                                }
                            },
                            {extend: 'print',
                                autoprint:true,
                                text:'Друк',
                                exportOptions: {
                                    columns: ':visible(.export-col)'
                                },
                                customize: function (win){
                                    $(win.document.body).addClass('white-bg');
                                    $(win.document.body).css('font-size', '10px');

                                    $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                                    $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                        .addClass('column1')
                                        .css('width', '3%');
                                    $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                        .addClass('column1')
                                        .css('width', '15%');

                                }
                            }
                        ]

                });
                $("#mainTableTiket tfoot th").each( function ( i ) {
                    if ( i === 3 || i === 5 || i === 12 ) {
                    var select = $('<select><option value=\'\'></option></select>')
                        .appendTo( $(this).empty() )
                        .on( 'change', function () {
                            table.column( i )
                                .search($(this).val() )
                                .draw();
                        } );

                    table.column( i ).data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value=\''+d+'\'>'+d+'</option>' )
                    } );
                }
                } );
                //Apply the search
                table.columns().every( function () {
                    var that = this;

                    $( 'input', this.footer() ).on( 'keyup change', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
                $('#mainTableTiket tbody').on( 'click', 'tr', function () {
                    $(this).toggleClass('selected');
                } );


            });
        </script>
    -->
  <!--
    <script>
        $(document).ready(function(){
            $.get("/user/report/users/request/thead", function(data, status){
                        //data = parseJSON(data);
                        var set,bet,cam,lam;
                        lam = data;
                        set = JSON.parse(data);
                        bet = [];
                        var my_columns = [];
                        $.each( set, function( key, value ) {var my_item = {}; my_item.data = key; my_item.title = key; my_columns.push(my_item);});

                // $('#mainTableTiket tfoot th').each( function () {
                //     if (this.classList.value !== "ActionLast") {
                //         var title = $(this).text();
                //         $(this).html('<input id="search" type="text" placeholder="' + title + '" />');
                //     }
                // });

                var table = $('#mainTableTiket').DataTable({
                    "columnDefs": [ {
                        "targets": -1,
                         title:"Статус",
                        //"defaultContent": "<button>Click!</button>",
                        render: function(data, type) {
                            if (type === "display" || type === "filter") {
                                if (data.IsLocked === "1"){
                                    //console.log(data);
                                    return "<button class='btn btn-xs btn-primary'>Розблокувати</button>";
                                }if(data.IsLocked === "0"){
                                    return "<button class='btn btn-xs btn-danger'>Заблокувати</button>";
                                }
                                return data;
                            }
                            return null;
                        }
                    } ],
                    lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                    dom: '<"html5buttons"B>lTfgitp',
                    ajax: "/user/report/users/request",
                    columns: [
                        {mData:"id",title:"id"},
                        {data:"UserName",title:"UserName"},
                        {data:"Email",title:"Email"},
                        {data:"Deleted",title:"Deleted"},
                        {data:"IsLocked",title:"IsLocked"},
                        {data:"FailCounter",title:"FailCounter"}
                        ,{data:null}
                        ],

                    order: [ 0, 'asc' ],
                    //scrollY: "600px",
                    //paging: false,
                    buttons: [
                        {
                            extend: 'colvis',
                            title: 'Users raport',
                            text:'Вибір колонок'
                        },
                        {extend: 'excelHtml5',
                            title: 'Users raport',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function( xlsx ) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                $('row[r="1"] c', sheet).attr('s', '47');
                                $('row c[r^="E"] ', sheet).each( function () {
                                    if ( $(this).attr('t') !== 'inlineStr' ) {
                                        $(this).attr('t', 'inlineStr');
                                        $(this).children('v').replaceWith('<t>'+$(this).children('v').text()+'</t>');
                                        $(this).children('t').wrap('<is></is>');
                                        $(this).attr('s', '50');
                                    }
                                });
                            }
                        },
                        {extend: 'print',
                            autoprint:true,
                            text:'Друк',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                    .addClass('column1')
                                    .css('width', '3%');
                                $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                    .addClass('column1')
                                    .css('width', '15%');

                            }
                        }
                    ],
                   initComplete: function () {
                        this.api().columns().every( function (i) {
                            var column = this;
                            if ( i === 3 || i === 4 || i === 5  ) {
                            //var title = this.text();

                            var select = $('<select class="select2-selection__rendered" ><option value=""></option></select>')
                                .appendTo( $(column.footer()).empty() )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );

                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );

                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' )
                            } );

                            }else{
                                var title = this.footer().innerHTML;

                                if(title !== ''){
                                    var select = $('<div class="col-md-12"><input class="form-control input-sm pull-left" id="search" type="text" placeholder="' + title + '" /></div>')
                                        .appendTo( $(column.footer()).empty() )
                                        .on( 'change', function () {
                                            var val = $.fn.dataTable.util.escapeRegex(
                                                $(this).val()
                                            );
                                            column
                                                .search( val ? '^'+val+'$' : '', true, false )
                                                .draw();
                                        } );
                                }else{
                                    this.footer().innerHTML = this.header().innerHTML;
                                }




                                $( 'input', this.footer() ).on( 'keyup change', function () {
                                            if ( column.search() !== this.value ) {
                                                    column
                                                    .search( this.value , true, false)
                                                    .draw();
                                            }
                                        } );
                            }

                        } );
                   },

                    //responsive: true,
                    sPaginationType: "full_numbers",
                    //columnDefs: [{ "targets": [0], "data": null, "defaultContent": "<input id='btnDetails' class='btn btn-success' width='25px' value='Get Details' />"}]

                });
                    $('#mainTableTiket tbody').on( 'click', 'button', function () {
                        var data = table.row( $(this).parents('tr') ).data();
                        var data2 = $(this).parents('tr');
                        var thisData = this;
                        var status =0;if(data.IsLocked === "0"){status = 1;}else{status = 0;}
                        var queryString;
                        var action = "update";

                        switch (action) {
                            case "update":
                                queryString = 'action=' + action + '&id=' + data.id + '&status=' + status;
                                break;
                        }

                        $.ajax({
                            url: "/user/report/users/updateStatus/",
                            data: queryString,
                            processData: false,
                            type: "POST",
                            success:function(data){
                                switch(action) {
                                    case "update":
                                        setTimeout(function() {
                                            //$('#fileBoxId_'+id).fadeOut();
                                        }, 300 );


                                        break;
                                }
                                //var text = data.responseText;

                            },
                            error:function (){}
                        }).done(function(response) {
                            if(response == "OK")
                            {
                                console.log(data.IsLocked);
                                if(data.IsLocked === "0" ){
                                    thisData.innerHTML = "Розблокувати";
                                    thisData.classList.remove('btn-danger');
                                    thisData.classList.add('btn-primary');
                                    data.IsLocked = "1";

                                }else{
                                    thisData.innerHTML = "Заблокувати";
                                    thisData.classList.add('btn-danger');
                                    thisData.classList.remove('btn-primary');
                                    data.IsLocked = "0";
                                }
                                data2[0].cells[4].innerHTML = data.IsLocked;

                            }else {
                                alert("Status: " + data + " Статус не було зміненно.");
                            }
                        });
                    } );


            } );

        });
    </script>
  -->

  <!--
    <script>
        $(document).ready(function(){
            $.get("/user/lj/index/list/thead", function(data, status){
                //data = parseJSON(data);
                var set,bet,cam,lam;
                lam = data;
                set = JSON.parse(data);
                bet = [];
                var my_columns = [];
                $.each( set, function( key, value ) {var my_item = {}; my_item.data = key; my_item.title = key; my_columns.push(my_item);});

                // $('#mainTableTiket tfoot th').each( function () {
                //     if (this.classList.value !== "ActionLast") {
                //         var title = $(this).text();
                //         $(this).html('<input id="search" type="text" placeholder="' + title + '" />');
                //     }
                // });
                var my_item = {}; my_item.data = "Action"; my_item.title = "Action"; my_columns.push(my_item);
                var table = $('#lj-table').DataTable({
                    "columnDefs": [ {
                        "targets": -1,
                        title:"Статус",
                        "defaultContent": "<button class='btn btn-xs btn-primary'>Click!</button>",
                        // render: function(data, type) {
                        //     if (type === "display" || type === "filter") {
                        //         if (type === "display"){
                        //             //console.log(data);
                        //             return "<button class='btn btn-xs btn-primary'>Розблокувати</button>";
                        //         }if(type === "display"){
                        //             return "<button class='btn btn-xs btn-danger'>Заблокувати</button>";
                        //         }
                        //         return data;
                        //     }
                        //     return null;
                        // }
                    } ],
                    lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                    dom: '<"html5buttons"B>lTfgitp',
                    ajax:"/user/lj/index/list",
                    columns: my_columns,
                    //     [
                    //     {mData:"id",title:"id"},
                    //     {data:"UserName",title:"UserName"},
                    //     {data:"Email",title:"Email"},
                    //     {data:"Deleted",title:"Deleted"},
                    //     {data:"IsLocked",title:"IsLocked"},
                    //     {data:"FailCounter",title:"FailCounter"}
                    //     ,{data:null}
                    // ],

                    order: [ 0, 'asc' ],
                    //scrollY: "600px",
                    //paging: false,
                    buttons: [
                        {
                            extend: 'colvis',
                            title: 'Users raport',
                            text:'Вибір колонок'
                        },
                        {extend: 'excelHtml5',
                            title: 'Users raport',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function( xlsx ) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                $('row[r="1"] c', sheet).attr('s', '47');
                                $('row c[r^="E"] ', sheet).each( function () {
                                    if ( $(this).attr('t') !== 'inlineStr' ) {
                                        $(this).attr('t', 'inlineStr');
                                        $(this).children('v').replaceWith('<t>'+$(this).children('v').text()+'</t>');
                                        $(this).children('t').wrap('<is></is>');
                                        $(this).attr('s', '50');
                                    }
                                });
                            }
                        },
                        {extend: 'print',
                            autoprint:true,
                            text:'Друк',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                    .addClass('column1')
                                    .css('width', '3%');
                                $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                    .addClass('column1')
                                    .css('width', '15%');

                            }
                        }
                    ],
                    initComplete: function () {
                        this.api().columns().every( function (i) {
                            var column = this;
                            if ( i === 13 || i === 14 || i === 5 || i === 15 ) {
                                //var title = this.text();

                                var select = $('<select class="select2-selection__rendered" ><option value=""></option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );

                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );

                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                } );

                            }else{
                                var title = this.footer().innerHTML;

                                if(title !== ''){
                                    var select = $('<div class="col-md-12"><input class="form-control input-sm pull-left" id="search" type="text" placeholder="' + title + '" /></div>')
                                        .appendTo( $(column.footer()).empty() )
                                        .on( 'change', function () {
                                            var val = $.fn.dataTable.util.escapeRegex(
                                                $(this).val()
                                            );
                                            column
                                                .search( val ? '^'+val+'$' : '', true, false )
                                                .draw();
                                        } );
                                }else{
                                    this.footer().innerHTML = this.header().innerHTML;
                                }




                                $( 'input', this.footer() ).on( 'keyup change', function () {
                                    if ( column.search() !== this.value ) {
                                        column
                                            .search( this.value , true, false)
                                            .draw();
                                    }
                                } );
                            }

                        } );
                    },

                    //responsive: true,
                    sPaginationType: "full_numbers",
                    //columnDefs: [{ "targets": [0], "data": null, "defaultContent": "<input id='btnDetails' class='btn btn-success' width='25px' value='Get Details' />"}]

                });
                $('#lj-table tbody').on( 'click', 'td', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    var data2 = $(this).parents('tr');

                     if(this.innerHTML != this){
                         var select = $('<div class="col-md-12"><input class="form-control input-sm pull-left" id="search" type="text" placeholder="" value="'+this.innerHTML+'" /></div>').appendTo( this ).on( 'change', function () {console.log(this);} );
                         console.log(this.);
                     }

                    var thisData = this;
                    var status =0;if(data.IsLocked === "0"){status = 1;}else{status = 0;}
                    var queryString;
                    var action = "update";

                    // switch (action) {
                    //     case "update":
                    //         queryString = 'action=' + action + '&id=' + data.id + '&status=' + status;
                    //         break;
                    // }
                    //
                    // $.ajax({
                    //     url: "/user/report/users/",
                    //     data: queryString,
                    //     processData: false,
                    //     type: "POST",
                    //     success:function(data){
                    //         switch(action) {
                    //             case "update":
                    //                 setTimeout(function() {
                    //                     //$('#fileBoxId_'+id).fadeOut();
                    //                 }, 300 );
                    //
                    //
                    //                 break;
                    //         }
                    //         //var text = data.responseText;
                    //
                    //     },
                    //     error:function (){}
                    // }).done(function(response) {
                    //     if(response == "OK")
                    //     {
                    //         console.log(data.IsLocked);
                    //         if(data.IsLocked === "0" ){
                    //             thisData.innerHTML = "Розблокувати";
                    //             thisData.classList.remove('btn-danger');
                    //             thisData.classList.add('btn-primary');
                    //             data.IsLocked = "1";
                    //
                    //         }else{
                    //             thisData.innerHTML = "Заблокувати";
                    //             thisData.classList.add('btn-danger');
                    //             thisData.classList.remove('btn-primary');
                    //             data.IsLocked = "0";
                    //         }
                    //         data2[0].cells[4].innerHTML = data.IsLocked;
                    //
                    //     }else {
                    //         alert("Status: " + data + " Статус не було зміненно.");
                    //     }
                    // });
                } );


            } );

        });
    </script>
    -->

  <!--
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
    <script>

        $(document).ready(function(){



            $.get("/user/report/reportp/request/thead", function(data, status){
                //data = parseJSON(data);
                var set,bet,cam,lam;
                lam = data;
                set = JSON.parse(data);
                bet = [];
                var my_columns = [];
                $.each( set, function( key, value ) {var my_item = {}; my_item.data = key; my_item.title = key; my_columns.push(my_item);});
                var my_item = {}; my_item.data = "Action"; my_item.title = "Action"; my_columns.push(my_item);
                $.each( my_columns, function( key, value ) {
                    $('#NewReportTable tfoot tr').append( '<th>'+value['title']+'</th>' );
                });
                    //console.log(my_columns);
                // $('#mainTableTiket tfoot th').each( function () {
                //     if (this.classList.value !== "ActionLast") {
                //         var title = $(this).text();
                //         $(this).html('<input id="search" type="text" placeholder="' + title + '" />');
                //     }
                // });

                var table = $('#NewReportTable').DataTable({
                    "columnDefs": [ {
                        "targets": -1,
                        title:"Статус",
                        "defaultContent": "<button class='btn btn-xs btn-primary'>Click!</button>",
                        // render: function(data, type) {
                        //     if (type === "display" || type === "filter") {
                        //         if (type === "display"){
                        //             //console.log(data);
                        //             return "<button class='btn btn-xs btn-primary'>Розблокувати</button>";
                        //         }if(type === "display"){
                        //             return "<button class='btn btn-xs btn-danger'>Заблокувати</button>";
                        //         }
                        //         return data;
                        //     }
                        //     return null;
                        // }
                    } ],
                    lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                    dom: '<"html5buttons"B>lTfgitp',
                    ajax:"/user/report/reportp/request",
                    columns: my_columns,
                    order: [ 0, 'asc' ],
                    //scrollY: "600px",
                    //paging: false,
                    buttons: [
                        {
                            extend: 'colvis',
                            title: 'Users raport',
                            text:'Вибір колонок'
                        },
                        {extend: 'excelHtml5',
                            title: 'Users raport',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function( xlsx ) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                $('row[r="1"] c', sheet).attr('s', '47');
                                $('row c[r^="E"] ', sheet).each( function () {
                                    if ( $(this).attr('t') !== 'inlineStr' ) {
                                        $(this).attr('t', 'inlineStr');
                                        $(this).children('v').replaceWith('<t>'+$(this).children('v').text()+'</t>');
                                        $(this).children('t').wrap('<is></is>');
                                        $(this).attr('s', '50');
                                    }
                                });
                            }
                        },
                        {extend: 'print',
                            autoprint:true,
                            text:'Друк',
                            exportOptions: {
                                columns: ':visible(.export-col)'
                            },
                            customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                    .addClass('column1')
                                    .css('width', '3%');
                                $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                    .addClass('column1')
                                    .css('width', '15%');

                            }
                        }
                    ],

                    initComplete: function () {

                        this.api().columns().every( function (i) {
                            var column = this;


                            //console.log($(column(i).footer() ) );
                            if ( i === 13 || i === 14 || i === 12 || i === 5  || i === 3) {
                                //var title = this.text();

                                var select = $('<select class="select2-selection__rendered" ><option value=""></option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );

                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );

                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value=\''+d+'\'>'+d+'</option>' )
                                } );

                            }else{
                                var title = this.header().innerHTML;

                                if(title !== 'Action'){
                                    var select = $('<th class="text-center"><div class="col-md-12"><input class="form-control input-sm pull-left" id="search" type="text" placeholder="' + title + '" /></div></th>')
                                        .appendTo( $(column.footer()).empty() )
                                        .on( 'change', function () {
                                            var val = $.fn.dataTable.util.escapeRegex(
                                                $(this).val()
                                            );
                                            column
                                                .search( val ? '^'+val+'$' : '', true, false )
                                                .draw();
                                        } );
                                }else{
                                    //this.footer().innerHTML = this.header().innerHTML;
                                }




                                $( 'input', this.footer() ).on( 'keyup change', function () {
                                    if ( column.search() !== this.value ) {
                                        column
                                            .search( this.value , true, false)
                                            .draw();
                                    }
                                } );
                            }

                        } );
                    },

                    //responsive: true,
                    sPaginationType: "full_numbers",
                    //columnDefs: [{ "targets": [0], "data": null, "defaultContent": "<input id='btnDetails' class='btn btn-success' width='25px' value='Get Details' />"}]

                });

                $( table.table().header() ).addClass( 'text-success' );
                $( table.table().footer() ).addClass( 'text-success' );




                var DELAY = 500, clicks = 0, timer = null;

              //  $(function(){
                    $('#NewReportTable tbody').on('click', 'td',  function(e){
                       // table.cell( this ).edit();
                        var idx = table.cell( this ).index().column;
                        var title = table.column( idx ).header();

                        if(title.innerHTML === 'Код продукту'){
                            console.log(title.innerHTML);
                        }


                        clicks++;  //count clicks
                        if (!$(this)[0].classList.contains("edit") ) {
                            var $this = $(this);
                            if (clicks === 1) {

                                timer = setTimeout(function () {
                                    var result = copyToClipboard($this[0].innerHTML);
                                                $this.animate({backgroundColor: '#18a689'});
                                                $this.animate({backgroundColor: 'transparent'});
                                    clicks = 0;             //after action performed, reset counter

                                }, DELAY);

                            } else {

                                clearTimeout(timer);    //prevent single-click action
                                var $this = $(this);
                                //  console.log($this[0].classList.contains(""));
                                if(title.innerHTML === 'Код продукту'){
                                if (!$this[0].classList.contains("edit")) {
                                    var $input = $('<input>', {
                                        value: $this.text(),
                                        type: 'text',
                                        blur: function (e) {
                                            $this.text(this.value);
                                            $this.removeClass('edit');
                                            $this.removeClass('input-sm');
                                        },
                                        keyup: function (e) {
                                            if (e.which === 13) $input.blur();
                                            $this.removeClass('edit');
                                            $this.removeClass('input-sm');
                                        }
                                    }).appendTo($this.empty()).focus();
                                    $this.addClass('edit');
                                    $this.addClass('input-sm');

                                        $this[0].insertAdjacentHTML("beforeEnd",'<div class="btn-group"><button class="btn btn-xs btn-primary"><i class="fa fa-save"></i></button><button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button></div>');


                                }
                                }
                                clicks = 0;             //after action performed, reset counter
                            }
                        }
                    })
                        .on("dblclick", function(e){
                            e.preventDefault();  //cancel system double-click event
                        });


              //  });

                //
                //     var thisData = this;
                //     var status =0;if(data.IsLocked === "0"){status = 1;}else{status = 0;}
                //     var queryString;
                //     var action = "update";
                //
                //     // switch (action) {
                //     //     case "update":
                //     //         queryString = 'action=' + action + '&id=' + data.id + '&status=' + status;
                //     //         break;
                //     // }
                //     //
                //     // $.ajax({
                //     //     url: "/user/report/users/",
                //     //     data: queryString,
                //     //     processData: false,
                //     //     type: "POST",
                //     //     success:function(data){
                //     //         switch(action) {
                //     //             case "update":
                //     //                 setTimeout(function() {
                //     //                     //$('#fileBoxId_'+id).fadeOut();
                //     //                 }, 300 );
                //     //
                //     //
                //     //                 break;
                //     //         }
                //     //         //var text = data.responseText;
                //     //
                //     //     },
                //     //     error:function (){}
                //     // }).done(function(response) {
                //     //     if(response == "OK")
                //     //     {
                //     //         console.log(data.IsLocked);
                //     //         if(data.IsLocked === "0" ){
                //     //             thisData.innerHTML = "Розблокувати";
                //     //             thisData.classList.remove('btn-danger');
                //     //             thisData.classList.add('btn-primary');
                //     //             data.IsLocked = "1";
                //     //
                //     //         }else{
                //     //             thisData.innerHTML = "Заблокувати";
                //     //             thisData.classList.add('btn-danger');
                //     //             thisData.classList.remove('btn-primary');
                //     //             data.IsLocked = "0";
                //     //         }
                //     //         data2[0].cells[4].innerHTML = data.IsLocked;
                //     //
                //     //     }else {
                //     //         alert("Status: " + data + " Статус не було зміненно.");
                //     //     }
                //     // });
                // } );


            } );

        });
        function copyToClipboard(text) {
            if (window.clipboardData && window.clipboardData.setData) {
                // IE specific code path to prevent textarea being shown while dialog is visible.
                return clipboardData.setData("Text", text);

            } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
                var textarea = document.createElement("textarea");
                textarea.textContent = text;
                textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
                document.body.appendChild(textarea);
                textarea.select();
                try {
                    return document.execCommand("copy");  // Security exception may be thrown by some browsers.
                } catch (ex) {
                    console.warn("Copy to clipboard failed.", ex);
                    return false;
                } finally {
                    document.body.removeChild(textarea);
                }
            }
        }
    </script>
  -->


  <!--
        <script>
            $(document).ready(function(){



                $.get("/user/report/users2/theads", function(data, status){
                    //data = parseJSON(data);
                    var set;
                    set = JSON.parse(data);
                    set.forEach(function(element,item) {
                        set[item] = {data:element};
                    });


                    //Setup - add a text input to each footer cell
                    $('#example tfoot th').each( function () {
                        var title = $(this).text();
                        $(this).html( '<input id="search" type="text" placeholder="'+title+'" />' );
                    } );
                    set = [
                        {data: 'id'},
                        {data: 'UserName'},
                        {data: 'Password'},
                        {data: 'PasswordFormat'},
                        {data: 'LastName'},
                        {data: 'FirstName'},
                        {data: 'SecondName'},
                        {data: 'Email'},
                        {data: 'Deleted'},
                        {data: 'StartDate'},
                        {data: 'IsLocked'},
                        {data: 'ProgramGID'},
                        {data: 'Name1'},
                        {data: 'Name2'},
                        {data: 'Name3'},
                        {data: 'FailCounter'}
                    ];
                    console.log(set);
                    var table = $('#example').DataTable({
                        lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                        dom: '<"html5buttons"B>lTfgitp',
                        ajax: "/user/report/users2/request",
                        columns: set,
                        order: [ 0, 'asc' ],
                        buttons: [
                            {
                                extend: 'colvis',
                                title: 'Users raport '+Date.now(),
                                text:'Вибір колонок',
                            },
                            {extend: 'excelHtml5',
                                title: 'Users raport '+Date.now(),
                                exportOptions: {
                                    columns: ':visible(.export-col)'
                                },
                                customize: function( xlsx ) {
                                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                    $('row[r="1"] c', sheet).attr('s', '47');
                                    $('row c[r^="E"] ', sheet).each( function () {
                                        if ( $(this).attr('t') !== 'inlineStr' ) {
                                            $(this).attr('t', 'inlineStr');
                                            $(this).children('v').replaceWith('<t>'+$(this).children('v').text()+'</t>');
                                            $(this).children('t').wrap('<is></is>');
                                            $(this).attr('s', '50');
                                        }
                                    });
                                }
                            },
                            {extend: 'print',
                                autoprint:true,
                                text:'Друк',
                                exportOptions: {
                                    columns: ':visible(.export-col)'
                                },
                                customize: function (win){
                                    $(win.document.body).addClass('white-bg');
                                    $(win.document.body).css('font-size', '10px');

                                    $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                                    $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                        .addClass('column1')
                                        .css('width', '3%');
                                    $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                        .addClass('column1')
                                        .css('width', '15%');

                                }
                            }
                        ]

                    });

                    // $("#mainTableTiket tfoot th").each( function ( i ) {
                    //     if ( i === 3 || i === 5 || i === 12 ) {
                    //         var select = $('<select><option value=\'\'></option></select>')
                    //             .appendTo( $(this).empty() )
                    //             .on( 'change', function () {
                    //                 table.column( i )
                    //                     .search($(this).val() )
                    //                     .draw();
                    //             } );
                    //         //console.log(i);
                    //         table.column( i ).data().unique().sort().each( function ( d, j ) {
                    //
                    //             select.append( '<option value=\''+d+'\'>'+d+'</option>' );
                    //
                    //         } );
                    //     }
                    // } );

                    //Apply the search
                    table.columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                    $('#example tbody').on( 'click', 'tr', function () {
                        $(this).toggleClass('selected');
                    } );

                });

            });
        </script>
    -->

    <!--
            <script>
            $(document).ready(function(){

                $('#mainTableTiket').DataTable({
                    "order": [[ 0, "desc" ]],
                    "columnDefs": [

                        {
                            "targets": [ 7 ],
                            "visible": true,
                            "searchable": false,
                            "orderable":false,
                            "columns":'noVis'
                        }

                    ],
                    columns: [
                        { data: 0 },
                        { data: 1 },
                        { data: 2 },
                        { data: 3,
                            render: function(data, type) {
                                //console.log(type);
                                if (type === "print" || type === "filter") {

                                     var html = $.parseHTML( data );
                                     //console.log(html[0].innerText);
                                    // return html.getElementsByTagName("a");
                                    return html[0].innerText;
                                    }
                                return data;
                            }
                        },
                        { data: 4,
                            render: function(data, type) {
                                    if (type === "display" || type === "filter") {

                                        return data;
                                    }

                                    if (type === "print") {
                                        var p = "";
                                        if(data){
                                            var a = data;
                                            a = a.toString();
                                            var html = $.parseHTML( a );
                                        }

                                        if(data){
                                            $.each(html,function( index, value ) {
                                                //alert( index + ": " + value );
                                                if(value.nodeName !== "#text"){
                                                    var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                    var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                    p += result[1]+" <br> ";
                                                }
                                            });
                                        }
                                        //console.log(p);
                                        return p;
                                    }

                                    if (type === "excel") {
                                        var p = "";
                                        if(data){
                                            var a = data;
                                            a = a.toString();
                                            var html = $.parseHTML( a );
                                        }

                                        if(data){
                                            $.each(html,function( index, value ) {
                                                //alert( index + ": " + value );
                                                if(value.nodeName !== "#text"){
                                                    var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                    var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                    p +=  result[1]+" ; ";
                                                }
                                            });
                                        }
                                        //console.log(p);
                                        return p;

                                    } if (type === "pdf") {
                                        var p = "";
                                        if(data){
                                            var a = data;
                                            a = a.toString();
                                            var html = $.parseHTML( a );
                                        }

                                        if(data){
                                            $.each(html,function( index, value ) {
                                                //alert( index + ": " + value );
                                                if(value.nodeName !== "#text"){
                                                    var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                    var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                    p +=  result[1]+" ; ";
                                                }
                                            });
                                        }
                                        //console.log(p);
                                        return p;
                                    }

                                    return data;
                                }
                        },
                        { data: 5 },
                        { data: 6 }
                    ],
                    pageLength: 15,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [

                        {extend: 'excel',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6 ],
                                orthogonal: "excel",
                            },
                        },
                        {extend: 'pdf',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6 ],
                                orthogonal: "pdf",
                            }
                        },
                        {extend: 'print',
                                autoPrint: true,
                                text:'Друк',
                                exportOptions: {
                                    orthogonal: "print",
                                    stripHtml: false,
                                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                                },
                                customize: function (win){
                                    $(win.document.body).addClass('white-bg');
                                    $(win.document.body).css('font-size', '10px');

                                    $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                                    $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                        .addClass('column1')
                                        .css('width', '3%');
                                    $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                        .addClass('column1')
                                        .css('width', '15%');

                                }
                        }
                    ]

                });

                $('#toMyTableTiket').DataTable({
                    "order": [[ 0, "desc" ]],
                    "columnDefs": [

                        {
                            "targets": [ 7 ],
                            "visible": true,
                            "searchable": false,
                            "orderable":false,
                            "columns":'noVis'
                        }

                    ],
                    columns: [
                        { data: 0 },
                        { data: 1 },
                        { data: 2 },
                        { data: 3,
                            render: function(data, type) {
                                //console.log(type);
                                if (type === "print" || type === "filter") {

                                    var html = $.parseHTML( data );
                                    //console.log(html[0].innerText);
                                    // return html.getElementsByTagName("a");
                                    return html[0].innerText;
                                }
                                return data;
                            }
                        },
                        { data: 4,
                            render: function(data, type) {
                                if (type === "display" || type === "filter") {

                                    return data;
                                }

                                if (type === "print") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" <br> ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                if (type === "excel") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;

                                } if (type === "pdf") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                return data;
                            }
                        },
                        { data: 5,
                            render: function(data, type) {
                                if (type === "display" || type === "filter") {

                                    return data;
                                }

                                if (type === "print") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" <br> ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                if (type === "excel") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" ; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;

                                } if (type === "pdf") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" ; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                return data;
                            }
                        },
                        { data: 6 },
                        { data: 7 },
                        { data: 8 }
                    ],
                    pageLength: 15,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [

                        {extend: 'excel',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ],
                                orthogonal: "excel",
                            },
                        },
                        {extend: 'pdf',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ],
                                orthogonal: "pdf",
                            }
                        },
                        {extend: 'print',
                            autoPrint: true,
                            text:'Друк',
                            exportOptions: {
                                orthogonal: "print",
                                stripHtml: false,
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            },
                            customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                    .addClass('column1')
                                    .css('width', '3%');
                                $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                    .addClass('column1')
                                    .css('width', '15%');

                            }
                        }
                    ]

                });
            });
        </script>
    -->

    <!--
        <script>
            $(document).ready(function(){

                $('#allTableTiket').DataTable({
                    "order": [[ 0, "desc" ]],
                    "columnDefs": [

                        {
                            "targets": [ 7 ],
                            "visible": true,
                            "searchable": false,
                            "orderable":false,
                            "columns":'noVis'
                        }

                    ],
                    columns: [
                        { data: 0 },
                        { data: 1 },
                        { data: 2 },
                        { data: 3,
                            render: function(data, type) {
                                //console.log(type);
                                if (type === "print" || type === "filter") {

                                    var html = $.parseHTML( data );
                                    //console.log(html[0].innerText);
                                    // return html.getElementsByTagName("a");
                                    return html[0].innerText;
                                }
                                return data;
                            }
                        },
                        { data: 4,
                            render: function(data, type) {
                                if (type === "display" || type === "filter") {

                                    return data;
                                }

                                if (type === "print") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" <br> ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                if (type === "excel") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;

                                } if (type === "pdf") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                return data;
                            }
                        },
                        { data: 5,
                            render: function(data, type) {
                                if (type === "display" || type === "filter") {

                                    return data;
                                }

                                if (type === "print") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+" <br> ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                if (type === "excel") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;

                                } if (type === "pdf") {
                                    var p = "";
                                    if(data){
                                        var a = data;
                                        a = a.toString();
                                        var html = $.parseHTML( a );
                                    }

                                    if(data){
                                        $.each(html,function( index, value ) {
                                            //alert( index + ": " + value );
                                            if(value.nodeName !== "#text"){
                                                var t = value.getElementsByTagName("img").item(0).getAttribute("title");
                                                var result = t.match(/<em.*?>(.*?)<\/em>/);
                                                p +=  result[1]+"; ";
                                            }
                                        });
                                    }
                                    //console.log(p);
                                    return p;
                                }

                                return data;
                            }
                        },
                        { data: 6 },
                        { data: 7 },
                        { data: 8 }
                    ],
                    pageLength: 15,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [

                        {extend: 'excel',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ],
                                orthogonal: "excel",
                            },
                        },
                        {extend: 'pdf',
                            title: 'Список задач',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ],
                                orthogonal: "pdf",
                            }
                        },
                        {extend: 'print',
                            autoPrint: true,
                            text:'Друк',
                            exportOptions: {
                                orthogonal: "print",
                                stripHtml: false,
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                            },
                            customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                $(win.document.body).find("table").find("thead").find("tr th:lt(3)")
                                    .addClass('column1')
                                    .css('width', '3%');
                                $(win.document.body).find("table").find("thead").find("tr th:gt(3)")
                                    .addClass('column1')
                                    .css('width', '15%');

                            }
                        }
                    ]

                });

            });
        </script>
      -->

  <!--
        <script src="/js2/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
        <script src="/js2/plugins/clockpicker/clockpicker.js"></script>
        <!-- Switchery -->
      <!--  <script src="/js2/plugins/switchery/switchery.js"></script>

        <script>

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            $('.clockpicker').clockpicker();


            function up() {
                $("#file1").trigger('click');
            }
            function drag_drop(event) {
                event.preventDefault();
                var file = event.dataTransfer.files[0];

                var formdata = new FormData();
                formdata.append("attach", file);
                formdata.append("action", "addFile");

                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "/user/tikets//upload");
                ajax.send(formdata);
            }
            function _(el){
                return document.getElementById(el);
            }
            $('#upload_form input[type=file]').change(function() {
                var file = _("file1").files[0];
                var formdata = new FormData();
                formdata.append("attach", file);
                formdata.append("action", "addFile");

                var ajax = new XMLHttpRequest();
                //console.log(ajax);
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "/user/tikets//upload");
                ajax.send(formdata);
            });
            function formatBytes(a, b) {
                if (0 == a) return "0 Bytes";
                var c = 1024, d = b || 2, e = ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"],
                    f = Math.floor(Math.log(a) / Math.log(c));
                return parseFloat((a / Math.pow(c, f)).toFixed(d)) + " " + e[f]
            }
            function progressHandler(event){
                _("loaded_n_total").innerHTML = "Uploaded: <b style='color: #08670a'>"+(formatBytes(event.loaded, 3))+"</b> bytes of <b style='color: darkred'>"+formatBytes(event.total, 3)+"</b>";
                var percent = (event.loaded / event.total) * 100;
                $( "#progress-bar-wrapper" ).addClass('active');
                $( "#progress-bar" ).removeClass('progress-bar-danger');
                $( "#progress-bar" ).addClass('progress-bar-info');

                _("progress-bar").style.width = Math.round(percent)+"%";

                _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
            }
            function completeHandler(event){
                if(~event.target.responseText.indexOf("ERROR")){
                    $( "#progress-bar" ).addClass('progress-bar-danger');
                    $( "#progress-bar-wrapper" ).removeClass('active');

                    _("status").innerHTML = "<b><h2>Помилка!</h2></b><br><b>Файл не відповідає вимогам сервера.<br>Завантажте інший файл.</br><br>Максимальний розмір не більше: "+formatBytes(104857600, 3);
                }else
                {
                    _("status").innerHTML = event.target.responseText;
                    $( "#progress-bar" ).removeClass('progress-bar-danger');
                    $( "#progress-bar-wrapper" ).removeClass('active');
                    $( "#progress-bar" ).removeClass('progress-bar-info');
                    loadDoc();
                }
            }
            function errorHandler(event){
                _("status").innerHTML = "Upload Failed";
                document.getElementById("progress-bar").style.width = "1%";
                $( "#progress-bar" ).addClass('progress-bar-danger');
                $( "#progress-bar-wrapper" ).removeClass('active');
            }
            function abortHandler(event){
                _("status").innerHTML = "Upload Aborted";
                $( "#progress-bar" ).addClass('progress-bar-danger');
                $( "#progress-bar-wrapper" ).removeClass('active');
            }
            loadDoc();
            // setInterval( function loadDoc() {
            //     var xhttp = new XMLHttpRequest();
            //     xhttp.onreadystatechange = function() {
            //         if (this.readyState == 4 && this.status == 200) {
            //             document.getElementById("demo").innerHTML = this.responseText;
            //
            //             // var myObj = JSON.parse(this.responseText);
            //             // console.log(myObj[0].name);
            //             // document.getElementById("demo").innerHTML = myObj[0].name;
            //         }
            //     };
            //     xhttp.open("GET", "/user/tikets//showFiles", true);
            //     xhttp.send();
            // }, 5000);

            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "/user/tikets//showFiles", true);
                xhttp.send();
            }

            function fileAction(action,id) {
                var queryString;

                switch (action) {
                    case "delete":
                        queryString = 'action=' + action + '&fid=' + id;
                        break;
                }
                $.ajax({
                    url: "/user/tikets//fileAction",
                    data: queryString,
                    processData: false,
                    type: "POST",
                    success:function(data){
                        switch(action) {
                            case "delete":
                                setTimeout(function() {
                                    //$('#fileBoxId_'+id).fadeOut();
                                    }, 300 );

                                console.log(this.responseText);
                                break;
                        }
                        //var text = data.responseText;

                    },
                    error:function (){}
                }).done(function(data) {
                    if(data == "OK")
                    {
                        $('#fileBoxId_'+id).fadeOut();
                        alert( data+ " File was deleted!" );
                        loadDoc();

                    }else {
                        alert("Status: " + data + " File not delited");
                    }
                });

            }


        </script>

        <script type="text/javascript">
            // function showEditBox(editobj,id) {
            //     $('#frmAdd').hide();
            //     $(editobj).prop('disabled','true');
            //     var currentMessage = $("#message_" + id + " .message-content").html();
            //     var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_'+id+'">'+currentMessage+'</textarea><button name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
            //     console.log(currentMessage);
            //     $("#message_" + id + " .message-content").html(editMarkUp);
            // }
            // function cancelEdit(message,id) {
            //     $("#message_" + id + " .message-content").html(message);
            //     $("#message_"+id+" .btnEditAction").prop('disabled','');
            //     $('#frmAdd').show();
            // }
            function callCrudAction(action,id) {
                $("#loaderIcon").show();
                var queryString;
                switch(action) {
                    case "add":
                        queryString = 'action='+action+'&txtmessage='+ $("#txtmessage").val();
                        break;
                    case "edit":
                        queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
                        break;
                    case "delete":
                        queryString = 'action='+action+'&message_id='+ id;
                        break;
                    case "deleteFile":
                        queryString = 'action='+action+'&message_id='+ id;
                        break;
                }
                jQuery.ajax({
                    url: "/user/tikets//comments",
                    data:queryString,
                    type: "POST",
                    success:function(data){
                        switch(action) {
                            case "add":
                                //console.log(queryString);
                                setTimeout(function() {$(".last-comment").removeClass("last-comment");$("#comment-list-box").prepend(data);}, 100);
                                break;
                            case "edit":
                                setTimeout(function() {$("#message_" + id + " .message-content").html(data);$('#frmAdd').show();$('#loaderIcon').hide();}, 100);
                                $("#message_"+id+" .btnEditAction").prop('disabled','');
                                break;
                            case "delete":
                                setTimeout(function() {$('#message_'+id).fadeOut();$('#loaderIcon').hide();}, 100);
                                break;
                        }
                        $("#txtmessage").val('');
                        $("#loaderIcon").hide();
                    },
                    error:function (){}
                });
            }
        </script>
      -->

  <!--
        <!-- Touch Punch - Touch Event Support for jQuery UI -->
  <!--      <script src="/js2/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
        <!-- jquery UI -->
<!--        <script src="/js2/plugins/jquery-ui/jquery-ui.min.js"></script>-->
<!--
        <script>

                $("li .success-element").click(function() {
                    //действия
                    console.log("hi");
                    var name = $(this).attr('name');
                    var cls = $(this).attr('class');
                    console.log(cls);
                        if (cls.match('ui-sortable-helper'))
                            return event.stopImmediatePropagation() || false;


                });



            // function showHi(id) {
            //
            //         var name = $(this).attr('name');
            //         var cls = $('ul .success-element').attr('class');
            //         if (cls.match('ui-sortable-helper')){cls = 'ui-sortable-helper';console.log(cls);};
            //     console.log('no '+id+' _'+cls);
                    // if (cls.match('ui-sortable-helper'))
                    //
                    //     return event.stopImmediatePropagation() || false;
                    // //console.log("hi");
            //}

            // $(function(){
            //     $("li").on("click", function(){
            //         //действия
            //         alert("2");
            //     });
            // });
            // $("#112").click(clickCancelonDrop);
            // function clickCancelonDrop(event) {
            //     console.log(event);
            //     alert("!");
            //     var cls = $(this).attr('class');
            //     if (cls.match('ui-sortable-helper'))
            //         return event.stopImmediatePropagation() || false;
            //
            // }

            $("#todo, #inprogress, #completed, #deleted").sortable({
                connectWith: ".connectList",
                //distance: 5,
                update: function( event, ui ) {
                    //$("#inprogress").sortable('cancel');
                    if (this === ui.item.parent()[0]) {
                        var todo = $("#todo").sortable("toArray");
                        //todo = $(".success-element")
                        var inprogress = $("#inprogress").sortable("toArray");
                        var completed = $("#completed").sortable("toArray");
                        var deleted = $("#deleted").sortable("toArray");
                        console.log(todo,inprogress,completed,deleted);
                        sendTodo(todo,inprogress,completed,deleted);
                    }
                    //$('.output').html("ToDo: " + window.JSON.stringify(todo) + "<br/>" + "In Progress: " + window.JSON.stringify(inprogress) + "<br/>" + "Completed: " + window.JSON.stringify(completed));
                },stop: function( event, ui ){
                },
                start: function( event, ui ){
                  //alert("start");
                }
            }).disableSelection();

            function sendTodo(todo,inprogress,completed) {
                var formData = new FormData(document.forms.person);

                formData.append("todo", todo);
                formData.append("inprogress", inprogress);
                formData.append("completed", completed);

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "/user/tikets/ttt1/update");
                xhr.send(formData);

                //console.log(todo);
                //console.log(inprogress);
                //console.log(completed);
                showTodo();

            }

            function showTodo() {
                $( "#todo" ).load( "/user/tikets/ttt1/todo" );
                $( "#inprogress" ).load( "/user/tikets/ttt1/inprogress" );
                $( "#completed" ).load( "/user/tikets/ttt1/completed" );
                $( "#deleted" ).load( "/user/tikets/ttt1/trash" );

            }


            function callCrudActionTodo(action,id) {
                var queryString;

                switch(action) {
                    case "add":
                        queryString = 'action='+action+'&input='+ $("#inputTask").val();
                        //showTodo();
                        break;
                    case "edit":
                        queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
                        break;
                    case "trash":
                        // showTodo();
                        $("#"+id+"").fadeOut();
                        setTimeout(function() {$("#"+id+"").remove();}, 400);
                        //
                        setTimeout(function() {
                        var todo = $("#todo").sortable("toArray");
                        var inprogress = $("#inprogress").sortable("toArray");
                        var completed = $("#completed").sortable("toArray");
                        // console.log(todo);
                        // console.log(inprogress);
                        // console.log(completed);
                            sendTodo(todo,inprogress,completed);
                        }, 500);
                        //
                        break;
                    case "delete":
                        queryString = 'action='+action+'&id='+ id;


                        break;
                }
                $.ajax({
                    url: "/user/tikets/ttt1/"+action,
                    data:queryString,
                    type: "POST",
                    success:function(data){
                        switch(action) {
                            case "add":
                                $( "#todo" ).load( "/user/tikets/ttt1/todo" );
                                $( "#inputTask" ).val('');
                            break;
                            case "delete":
                                $("#" + id + "").fadeOut();
                                setTimeout(function () {
                                    $("#" + id + "").remove();
                                }, 400);
                                break;
                        }
                    }
                });
            }
                showTodo();
        </script>

    -->

<script>

 $(".select2_demo_1").select2();

 $(".select2_parent").select2(
     {
         placeholder: "Оберіть тікет який буде головним...",
         allowClear: true
     }
 );
 $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


 jQuery('input[type="date"]').on('click', function(e) {e.preventDefault();}).datepicker(
        {

                        dateFormat: 'dd/mm/yy',
                        todayBtn: "linked",
                        keyboardNavigation: false,
                        daysOfWeekDisabled: [0,6],
                        forceParse: false,
                        calendarWeeks: true,
                        autoclose: true,
                        todayHighlight: true,
                        //todayBtn: true,


        }
         );




			$(document).ready(function(){

				$('.summernote').summernote({
				height:300,
				//placeholder:'������ ������� �������� �'
				});

			});

</script>
      <!-- Input MASK -->

    <!--
        <script>
            $(document).ready(function () {


                var data = [
                    {
                        data: [ [1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9],[7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3] ]
                    }
                ];

                var chartUsersOptions2 = {
                    series: {
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 2,
                            fill: false
                        },
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        borderWidth: 0
                    }
                };

                $.plot($("#flotProfile"), data, chartUsersOptions2);

            });
        </script>

      -->
<!--
        <script src="/js/crop-select-js.min.js"></script>

        <!-- Input MASK -->
    <!--    <script src="/js/dist/inputmask/inputmask.js"></script>
        <script src="/js/dist/inputmask/inputmask.date.extensions.js"></script>
        <script src="/js/dist/inputmask/jquery.inputmask.js"></script>

        <script>
            $(document).ready(function(){
                $(":input").inputmask();
                //or;
                Inputmask().mask(document.querySelectorAll("input"));
            });
        </script>

        <script>
                $(function () {

                    // Initialise CropSelect

                    // Handle file select change
                    $('#file-input').on('change', function() {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#crop-select').CropSelectJs({
                                    imageSrc: e.target.result,
                                    selectionMove: function (data) {
                                        $('#skyle-x').attr({value:data.xScaledToImage});
                                        $('#skyle-y').attr({value:data.yScaledToImage});
                                    },
                                    selectionResize: function(data) {
                                        $('#data-w').attr({value:data.widthScaledToImage});
                                        $('#data-h').attr({value:data.heightScaledToImage});
                                    }
                                });
                                $('#crop-select').CropSelectJs('setSelectionAspectRatio', 1 / 1);
                                // $('#crop-select').CropSelectJs({selectionMove: function (data) {
                                //         $('#scaled-x').html(data.xScaledToImage);
                                //         $('#123').attr({value: data.yScaledToImage});
                                //     }});


                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                    });


                });
            </script>
    -->



</body>
</html>
