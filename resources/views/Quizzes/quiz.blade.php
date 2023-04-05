<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
  
</head>
<body class = "" dir = "rtl">

<ul class="navbar nav justify-content-end bg-success">
  <li class="nav-item">
    <a class="nav-link  text-white" href="#">Exit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Examination Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<div class="container">
  <div class="row justify-content-center " >
    <div class="col-sm-12 col-md-9 col-lg-8 mt-5">
      <form id="form" name="myForm" method="post" action = "/Examination/calculate">
          @csrf
          <input type="hidden" name="quiz_id" value = "{{$quiz_id}}">
          <div class="card p-3">
            <h4 style = "margin:0 auto;">True False Section</h4>
          </div>

          <?php 
          $counter = 0 ; 
          $index = 0; 
          ?>

          @foreach($truefalse as $tf)

          <span id = "Question_{{$counter}}" style = "display:none; ">
            <h4 class = "">{{$tf->question}}</h4>
           
            <div class="custom-control custom-radio custom-control-inline " >
                <input 
                  type="radio" 
                  id="<?php echo $counter."_truefalse_1"; ?>" 
                  name="<?php echo "tf_question_".$counter; ?>"
                  value="false" 
                  class="custom-control-input ">
                <label 
                  class="custom-control-label " 
                  for="<?php echo $counter."_truefalse_1"; ?>">Answer is not Correct
                </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline " >
                <input 
                  type="radio" 
                  value = "true"
                  id="<?php echo $counter."_truefalse_2"; ?>" 
                  name="<?php echo  "tf_question_".$counter; ?>" 
                  class="custom-control-input ">
                <label 
                  class="custom-control-label " 
                  for="<?php echo $counter."_truefalse_2"; ?>">Answer is Correct
                </label>
            </div>
            </span>
          <?php $counter++;?>  
          @endforeach 


          @foreach($multichoice as $mc)

<span id = "Question_{{$counter}}" style = "display:none; ">
  <h4 class = "">{{$mc->question}}</h4>
 
  <div class="custom-control custom-radio custom-control-inline " >
      <input 
        type="radio" 
        id="<?php echo $counter."_multichoice_1"; ?>" 
        name="<?php echo "mc_question_".$counter; ?>"
        value="1" 
        class="custom-control-input ">
      <label 
        class="custom-control-label " 
        for="<?php echo $counter."_multichoice_1"; ?>"> {{$mc->ans1}}
      </label>
  </div>

  <div class="custom-control custom-radio custom-control-inline " >
      <input 
        type="radio" 
        value = "2"
        id="<?php echo $counter."_multichoice_2"; ?>" 
        name="<?php echo  "mc_question_".$counter; ?>" 
        class="custom-control-input ">
      <label 
        class="custom-control-label " 
        for="<?php echo $counter."_multichoice_2"; ?>">{{$mc->ans2}}
      </label>
  </div>

  <div class="custom-control custom-radio custom-control-inline " >
      <input 
        type="radio" 
        id="<?php echo $counter."_multichoice_3"; ?>" 
        name="<?php echo "mc_question_".$counter; ?>"
        value="3" 
        class="custom-control-input ">
      <label 
        class="custom-control-label " 
        for="<?php echo $counter."_multichoice_3"; ?>">{{$mc->ans3}}
      </label>
  </div>

  <div class="custom-control custom-radio custom-control-inline " >
      <input 
        type="radio" 
        value = "4"
        id="<?php echo $counter."_multichoice_4"; ?>" 
        name="<?php echo  "mc_question_".$counter; ?>" 
        class="custom-control-input ">
      <label 
        class="custom-control-label " 
        for="<?php echo $counter."_multichoice_4"; ?>">{{$mc->ans4}}
      </label>
  </div>
  </span>
<?php $counter++;?>  
@endforeach 
          <input type="submit" value="NEXT" class = "btn btn-success">
      </form>
    </div>
  </div>
</div>

<script>
    // var MultiChoiceDiv = document.getElementById('multichoice');
    var Questions = []; 
    var displaySpan = []; 
    var TrueFalse = <?php echo $truefalse ; ?>;
    var MultiChoice = <?php echo $multichoice ; ?>;
   
    // for (let index = 0; index < MultiChoice.length; index++) {
    //   Questions.push(MultiChoice[index]);
    //     // MultiChoice[index].type = 'mc';
    // }
    let McCounter = 0 ; 
    for (let index = 0; index < TrueFalse.length + MultiChoice.length ; index++) {
     
      // console.log(index >= TrueFalse.length)
      // console.log(index)
      if(index >= TrueFalse.length){
        console.log('Multichoice added');
        Questions.push(MultiChoice[McCounter]); 
        document.getElementById(index + "_multichoice_1" ).addEventListener('change' , storeAnswer);
        document.getElementById(index + "_multichoice_2" ).addEventListener('change' , storeAnswer);
        document.getElementById(index + "_multichoice_3" ).addEventListener('change' , storeAnswer);
        document.getElementById(index + "_multichoice_4" ).addEventListener('change' , storeAnswer);
        McCounter++; 
      }
      else  {
        // console.log('TrueFalse added');
        Questions.push(TrueFalse[index]);
        document.getElementById(index + "_truefalse_1" ).addEventListener('change' , storeAnswer);
        document.getElementById(index + "_truefalse_2" ).addEventListener('change' , storeAnswer);
     }
    }
    // console.log(TrueFalse.length + MultiChoice.length);

    console.log(Questions);
    for (let index = 0; index < Questions.length ; index++) {
      // this for selecting spans arround questions 
      displaySpan[index] = document.getElementById("Question_" + index);
      console.log(displaySpan[index]);
    }


    var time = 0;
    var lastTime = 0; 
      
    var interval = setInterval(() => {
      // console.log(time)
      if(time == Questions.length - 1 ){
        console.log('interval is finished / form submitted');
        // document.myForm.submit();

        clearInterval(interval);
      }

      lastTime = time; 
      if(lastTime != 0){
      lastTime-- ;
      // console.log(time);
      // console.log("Last index :" + lastTime);
      displaySpan[lastTime].style.display = 'none';
      }
      
      displaySpan[time].style.display = "block"; 
      // console.log(Questions[time].time * 1000)
      time++;
    },2000);
    Questions[time].time * 1000


   
    function storeAnswer(event) {
      console.log('Clicked')
      // how to cancel interval + and coninue next one 
      // console.log(event);
      // console.log(event.target.id);
      // console.log(event.target.value);
      // console.log(event.target.name);
    // document.body.style.background = event.target.value;
    }



</script>


<!-- 

<script src="{{asset('assets/js/purpose.core.js')}}"></script>
<script src="{{asset('assets/js/purpose.js')}}"></script> -->
</body>
</html>