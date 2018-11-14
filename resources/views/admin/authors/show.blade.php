@extends('layouts.app')

@section('content')

    <div class="container text-center">
       <h1>{{ $author->firstName}} {{ $author->secondName }} {{ $author->lastName }}</h1>
       {{--var_dump($book) --}}


    <table class="table table-striped table-bordered table-hover">
      <thead class="thead-dark">
        <tr class="">

        </tr>
      </thead>
      <tbody>

            <tr class="" >
              <td  class="table-success text-center">{{$author->was_born}}</td>
            </tr>
            <tr>
              <td>{{$author->description}}</td>
            </tr>
            <tr>
                <td class="text-center"></td>
            </tr>



@if(!$author->id)
          <tr>
            <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
          </tr>
@endif
      </tbody>

    </table>
    <a class="btn btn-block btn-outline btn-primary" href="{{route('admin.author.index') }}">Назад</a>
    @if($author->created_by == Auth::user()->id )
      <a href=" {{route('admin.author.edit', $author)}} " class="btn btn-primary btn-block btn-success"> Редактировать + <i class="fa fa-edit"></i></a>
    @else
      dfgsdfg
    @endif
</div>


@endsection
