@extends('admin.layout')

@section('content')
          <div class="row">

              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">
              <h5>Тікети створені Вами</h5>
              <br>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-wrench"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#">Config option 1</a>
                      </li>
                      <li><a href="#">Config option 2</a>
                      </li>
                  </ul>
                  <a class="close-link">
                      <i class="fa fa-times"></i>
                  </a>
              </div>
          </div>
          <div class="ibox-content">
              <div class="row">
                  <div class="col-sm-9 m-b-xs">
                      <div data-toggle="buttons1" class="btn-group">

                      </div><a href="" class="btn btn-sm btn-info"> Додати тікет...</a>
                  </div>
                  <div class="col-sm-3">
                      <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                          <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                  </div>
              </div>
              <div class="table-responsive">
                  <table id="mainTableTiket" class="table table-striped">
                      <thead>
                      <tr>

                          <th class="text-center">#</th>
  						<th class="text-center">Приорітет</th>
                          <th class="text-center">Статус</th>
                          <th>Назва</th>
  						<th>Відповідальні</th>
                          <th>Дата створення</th>
                          <th>Дата виконання</th>
                          <th class="text-center">Дії</th>
                      </tr>
                      </thead>
                      <tbody>
  					{{-- foreach --}}
                      <tr >
                          <td><div class="text-center"><span class="label label-accent">{{-- id --}}</span></div></td>
                          <td class="text-center">{{-- priority --}}</td>
                          <td><div class="text-center {{-- status class--}}" >{{--status--}}</div></td>
                          <td class="logo-elemen"><div class="row"><a href="{{--title link--}}" >{{--title--}}</a></div></td>
                          <td class="tooltip-demo text-center" {{-- --}} >
                          {{--foreach userExtractors--}}
                                              <div class="btn-group ">
                                                  <div>
                                                      <img class="img-sm img-circle" src="{{--userExtractors logo--}}" data-toggle="tooltip" data-trigger="click" data-html="true" data-placement="left" title="<div><img class='img-lg img-rounded' src='{{--avatar for tooltip--}}'><div><em>{{--shortName for tooltip--}}</em></div> <div><u>{{--email for tooltip--}}</u></div> <div><b>{{--phone for tooltip--}}</b></div> </div>"/>
                                                  </div>
  			                                </div>
                                              {{--endforeach--}}</td>
                          <td>{{--create date--}} <span style="font-size: 0.5em;color: darkred"> {{--create time--}}</span></td>
                          <td></span>


              <div><span style="font-size: 0.5em;color: darkred">{{--etimate time for tiket--}}</span></div><div>{{--etimate time for tiket--}}</div></td>
                          <td><!--<span class="pie">75/100</span><a href="#"><i class="fa fa-check text-navy"></i></a>-->
  										<a href="{{--action delete link--}}" class="" title="Delete"><i class="fa fa-trash-o text-danger"></i>  </a>&nbsp
                                          <a href="{{--action edit link--}}" class="" title="Edit"><i class="fa fa-pencil text-warning"></i>  </a>&nbsp
                                          <a href="{{--action view link--}}" class="" title="View"><i class="fa fa-eye text-navy"></i>  </a>
  						</td>
                      </tr>
   {{-- endforeach --}}
                      </tbody>
                  </table>
              </div>

          </div>
          </div>

          </div>
  </div>


      <div class="col-md-12 ">
  		<div class="ibox addRow">
  		<div class="ibox-title">
              <h5>Додавання тікету.</h5>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>


              </div>
          </div>


              <div class="ibox-content">
                       <table id="mainTableAdd" class="table table-striped table-bordered table-hover dataTables-example" >
                              <thead >
                              <tr >

                                  <th width="5%">
                                      Статус
                                  </th>
                                  <th width="10%">
                                      Пріорітет
                                  </th>
                                  <th width="400px">
                                      Назва завдання
                                  </th>
                                  <th width="120px">
                                      Створив
                                  </th>
                                  <th width="120px" class="center">
                                      Дата виконання
                                  </th>
                                  <th width="140px" class="text-center">
                                      Дії
                                  </th>
                              </tr>
                              </thead>

                              <tbody>
                          <tr class="add" style="">
                              <form id="fastForm" method="post">



                                  <td style="background: #c0dfff">
                                      <div class="text-center p-h-xl "><span class="label label-accent bg-warning">new</span></div>
                                  </td>

                                  <td class="" style="background: #c0dfff">
                                      <div class="p-h-xl ">
                                          <select name="priority" class="select2_demo_2 form-control">
                                              <option class="small text-warning" value="1" >low</option>
                                              <option class="small text-success" value="2" >middle-low</option>
                                              <option class="small text-warning" value="3" >middle</option>
                                              <option class="small text-warning" value="4" >hi</option>
                                              <option class="small text-warning" value="5" >critical</option>
                                          </select>
                                      </div>
                                  </td>

                                  <td style="background: #c0dfff">

  												<div class="ibox collapsed addText p-h-xs w-200 m-t-none">

  													<div>
  														<label for="title">Назва: </label>
  															<input type="text" id="title" name="title" maxlength="100" value="" class="form-control"/>
  													</div>
  																										<div class="ibox-tools">
  															<a class="collapse-link">
  																<i class="fa fa-chevron-up"></i>
  															</a>
  													</div>


  													<div class="ibox-content">
  														<textarea name="content" id="content" class="summernote form-control" style="width: 300px;" ></textarea>

  													</div>
  												</div>





                                      </div>


                                  </td>

                                  <td style="background: #c0dfff">
                                      <div class="ibox collapsed ibox-tiket p-h-sm">


                                          <small>Відповідальні:</small>
                                          <div class="">

                                              <select name="users[]" class="select2_demo_3 form-control" multiple="multiple" style="width: 100%">

                                              {{--foreach users for extractors--}}

                                                  <option name="users[]" value="{{--user id--}}" > {{--user shortName--}}

                                              {{--endforeach--}}

                                              </select>
                                          </div>

                                      </div>
                                  </td>

                                  <td class="center" style="background: #c0dfff">
  							<div class="form-group" id="date_1">
                                  <div class="input-group date p-h-lg">
                                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" id="est_time" name="est_time" class="small form-control" value="">
                                  </div>
                              </div>
                                      <!--<div class="small btn-group"> <input type="date" id="est_time" name="est_time" value="" class="small form-control"/></div>
  -->

                                  </td>

                                  <td class=" text-center" style="background: #c0dfff">
                                      <div class="btn-group p-h-xl">

                                          <a href="#" onclick="document.getElementById('fastForm').submit(); return false;" class="btn btn-default btn-xs "><i class="fa fa-plus-circle c-accent"></i> Швидке додавання </a>
                                       </div>
                                   </td>

                               </form>
                           </tr>
                               </tbody>
                               </table>
               </div>
           </div>
       </div>

           <!-- Project list -->

          <!-- Project list -->



  <!-- Project list assigned to my -->


          <div class="col-lg-12">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Тікети в яких Ви відповідальні</h5>
                      <div class="ibox-tools">
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#">Config option 1</a>
                              </li>
                              <li><a href="#">Config option 2</a>
                              </li>
                          </ul>
                          <a class="close-link">
                              <i class="fa fa-times"></i>
                          </a>
                      </div>
                  </div>
                  <div class="ibox-content">
                      <div class="row">
                          <div class="col-sm-9 m-b-xs">
                              <div data-toggle="buttons1" class="btn-group">
                                  <!--<label class="btn btn-sm btn-white active"> <input type="radio" id="option1" name="options"> Все </label>
                                  <label class="btn btn-sm btn-white"> <input type="radio" id="option2" name="options"> Тиждень </label>
                                  <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Місяць </label>-->

                              </div><a href="{{--add tiket link--}}" class="btn btn-sm btn-info"> Додати тікет...</a>
                          </div>
                          <div class="col-sm-3">
                              <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                          <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                          </div>
                      </div>
                      <div class="table-responsive">
                          <table id="toMyTableTiket" class="table table-striped">
                              <thead>
                              <tr>

                                  <th class="text-center">#</th>
                                  <th class="text-center">Приорітет</th>
                                  <th class="text-center">Статус</th>
                                  <th>Назва</th>
                                  <th>Створив</th>
                                  <th>Відповідальні</th>
                                  <th>Дата створення</th>
                                  <th>Дата виконання</th>
                                  <th class="pull-right" style="width: 75px ">Дії</th>
                              </tr>
                              </thead>
                              <tbody>
                              {{--foreach tikets_as assignet to me as tiket_as--}}
                              <tr >
                                  <td><div class="text-center"><span class="label label-accent">{{--tiket_as id--}}</span></div></td>
                                  <td class="text-center">{{--tiket_as priority--}}</td>
                                  <td><div class="text-center {{--tiket_as status class--}}" >{{--tiket_as status--}}</div></td>
                                  <td class="logo-elemen"><div class="row"><a href="{{--tiket_as title link--}}" >{{--tiket_as title--}}</a></div></td>
                                  <td class="tooltip-demo text-center" style="padding: 3px">
                                      <div class="btn-group ">
                                          <div>
                                              <img class="img-sm img-circle" src="{{--creator avatar link--}}" data-toggle="tooltip" data-delay='{"show":"700", "hide":"3000"}' data-html="true" data-placement="auto left" title="<div><img class='img-lg img-rounded' src='{{--creator avatar link middle size--}}'><div><em>{{--creator shortName--}}</em></div> <div><u>{{--creator email--}}</u></div> <div><b>{{--creator phone--}}</b></div> </div>"/>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="tooltip-demo text-center" style="padding: 3px" >
                                    {{--foreach assigned users--}}
                                      <div class="btn-group ">
                                          <div>
                                              <img class="img-sm img-circle" src="{{--user avatar link --}}" data-toggle="tooltip" data-delay='{"show":"700", "hide":"3000"}' data-html="true" data-placement="auto left" title="<div><img class='img-lg img-rounded' src='{{--user avatar link middle size--}}'><div><em>{{--user shortName--}}</em></div> <div><u>{{--user email--}}</u></div> <div><b>{{--user phone--}}</b></div> </div>"/>
                                          </div>
                                      </div>
                                    {{--endforeach--}}
                                  </td>
                                  <td>{{--tiket_as created date--}} <span style="font-size: 0.5em;color: darkred">{{--tiket_as created time--}}</span></td>
                                  <td></span></div><div><span style="font-size: 0.5em;color: darkred"></span></div><div>{{--tiket_as etimate date--}}</div></td>
                      <td><!--<span class="pie">75/100</span><a href="#"><i class="fa fa-check text-navy"></i></a>-->
                          <div class="btn-group pull-right">
                              <?php // if ( Session::get('id') == $tiket_data['creator_id']){ ?>
                              <?php // if ( $tiket_data['status'] == 'closed'){ ?>
                              <a href="/<? //=Session::get('role')?>/tikets/delete/<? //=$tiket_data['id']?>" class="" title="Delete"><i class="fa fa-trash-o text-danger"></i>  </a>&nbsp
                              <?php // }?>
                              <a href="/<? //=Session::get('role')?>/tikets/edit/<? //=$tiket_data['id']?>" class="" title="Edit"><i class="fa fa-pencil text-warning"></i>  </a>&nbsp
                              <?php // }?>
                              <a href="/<? //=Session::get('role')?>/tikets/view/<? //=$tiket_data['id']?>" class="" title="View"><i class="fa fa-eye text-navy"></i>  </a>
                          </div>
                      </td>
                      </tr>
                      {{--endforeach tikets_as assignet to me as tiket_as--}}
                      </tbody>
                      </table>
                  </div>

              </div>
          </div>




@endsection
