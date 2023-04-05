@extends('layouts.app')
@section('content')
<div class="row">

<table dir = "rtl" class = "table table-cards  text-dark ">
<tr>
    <td>  
        <h2>{{$class->title}}</h2>
        <hr >
        <h5 class = "text-wrap">{{$class->description}}</h5>
    </td>
</tr>
<tr class = "table-divider"></tr>
<tr>
    <td> <h3> {{$class->start_date}} - {{__('Class.startDate')}}</h3></td>
</tr>
<tr class = "table-divider"></tr>
<tr>
    <td><h3>  {{__('Class.subjectCount')}} -  {{$class->subject_count}} مضمون</h3></td>
</tr>
<tr class = "table-divider"></tr>
<tr>
    <td> 
        <a href="/Subject/show/{{$class->id}}"  class = "btn btn-outline-success rounded-0 btn-lg"> 
        <i class="fa fa-eye"></i> دیدن مضامین </a>
        <a class="btn btn-outline-primary rounded-0 btn-lg" href="/Subject/create/{{$class->id}}">
        <i class="fa fa-plus"></i> علاوه نمودن مضمون </a>
        <a class = "btn btn-outline-dark rounded-0 btn-lg" href="/ClassModule">برگشت 
        <i class="fa fa-back"></i>
        </a>

    </td>
</tr>
</table>
</div> 

@endsection