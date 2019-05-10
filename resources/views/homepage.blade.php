@extends('layouts.app')
@section('content')
<br>
<div class="container">

<div class="row">
<div class="col-xs-3">
<div class="row">
<div class="col-xs-12" style="color:#000;">
<div class="well"><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:50px; height:50px;  border-radius: 50px; "><h1><span class="glyphicon glyphicon-scale"></span>dashboard</h1></div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="well sidebar-nav" align="center">
{!!Form::open(['url'=>'homepage/submit'])!!}

   <div>
  <a href="/lesson" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-plus"></span> add Lessons
                              </a>
 <hr>
   </div> 


   <div>
 <a href="/addedlessons" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-hand-right"></span> view Lessons
                              </a>
                            


   </div>
   <hr>
   <div> 
   <a href="/addedlessons" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-file"></span> view reports
                              </a>
  
  </div>
    </div>
</div>
</div>
</div>
<div class="col-xs-9">
<div class="mainContent"><p>Nimnaya is an educational platform which facilitates students and teachers connected through web and mobile technologies and can provide free class education in a virtual world. Students nowadays tend to use internet to search for educational videos to learn their relevant subjects.</p>
</div>
</div>
</div>
</div>

  
  

 


             
 @endsection

@section('sidebar')
@parent

@endsection