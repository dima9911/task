@extends('layout')

@section('title', 'Pizza task')

@section('content')
	<section id="home" data-speed="4" data-type="background">
		<div class="container">
			<div class="row animated fadeInUp">
				  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 text-center mycol ">
				  	
				  	


				  	<div id="four" class="row animated fadeInUp hidden">
				  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 text-center mycol ">
				  	<h2 class="text-center">Ваша пицца:</h2>
				  	Стоиомсть: <div id="price"></div> рублей <br>
				  	Ингредиенты:<div id="nam"></div>
				  	<button type="button" class="btn btn-lg btn-warning">Заказать!</button>
				  	</div>
				  	</div>


				  	<div id="one" class="row">
				  	<hr>
				  	<h3 class="text-center">Шаг №1.1</h3>

				  	<h4>Выберите толщину:</h4>


  <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
      <img src="/images/fat.jpg" class="img-circle">
      <div class="caption">
        <h4>Толстое тесто</h4>
        <p>Пышное тесто, хорошо подойдет для мясных пицц.</p>

     <div class="radio">
  		<label><input id="a1" type="radio" name="optradio" value="1"></label>
	</div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/ma.jpg" class="img-circle">
      <div class="caption">
        <h4>Среднее тесто</h4>
        <p>Тесто идеально для приготовления литтл спайси пицц.</p>
        
        <div class="radio">
  			<label><input id="a2" type="radio" name="optradio" value="2"></label>
		</div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/lg.jpg" class="img-circle">
      <div class="caption">
        <h4>Тонкое тесто</h4>
        <p>Подходит для овощных, небольших пицц. </p>

        <div class="radio">
  			<label><input id="a3" type="radio" name="optradio" value="3"></label>
		</div>


      </div>
    </div>
  </div>
<hr>
<h3 class="text-center">Шаг №1.2 </h3>
<h4>Выберите диаметр: </h4>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/p1.jpg" class="img-circle">
      <div class="caption">
        <h4>28 сантиметров</h4>
        <p>Идеально для одного человека.</p>
     

        <div class="radio">
<label><input id="b1" type="radio" name="optradio1" value="6"></label>
</div>


      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/p2.jpg" class="img-circle">
      <div class="caption">
        <h4>32 сантиметра</h4>
        <p>Подойдет вам и вашим друзьям.</p>
       
        <div class="radio">
  <label><input id="b2" type="radio" name="optradio1" value="5"></label>
</div>


      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/p3.jpg" class="img-circle">
      <div class="caption">
        <h4>36 сантиметров</h4>
        <p>Хватит всем. </p>
      <div class="radio">
<label><input id="b3" type="radio" name="optradio1" value="4"></label>
</div>
      </div>
    </div>
  </div>
  <button id="next" class="btn btn-lg btn-warning" type="button">Продолжить</button>
</div>
<div id="two" class="row animated fadeInUp hidden">
				  	<hr>
				  	<h3 class="text-center">Шаг №2</h3>
				  	<h4>Выберите начинку:</h4>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b1.jpg" class="img-circle">
      <div class="caption">
        <h4>Курица</h4>
     <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="7">
        </label>
      </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b2.jpg" class="img-circle">
      <div class="caption">
        <h4>Ветчина</h4>
        <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="8">
        </label>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b3.jpg" class="img-circle">
      <div class="caption">
        <h4>Помидоры</h4>
      

       <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="9">
        </label>
      </div>


      </div>
    </div>
  </div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b4.jpg" class="img-circle">
      <div class="caption">
        <h4>Огурцы</h4>
      
     
 <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="10">
        </label>
      </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b5.jpg" class="img-circle">
      <div class="caption">
        <h4>Сыр</h4>
   
       
 <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="11">
        </label>
      </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/b6.jpg" class="img-circle">
      <div class="caption">
        <h4>Анчоусы</h4>
 <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio2" value="12">
        </label>
      </div>
      </div>
    </div>
  </div>
  <button id="next1" class="btn btn-lg btn-warning" type="button">Продолжить</button>
</div>

<div id="three" class="row animated fadeInUp hidden">
				  	<hr>
				  	<h3 class="text-center">Шаг №3</h3>
				  	<h4>Выберите дополнение к пицце:</h4>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/c1.jpg" class="img-circle">
      <div class="caption">
        <h4>Сок</h4>
     <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio3" value="13">
        </label>
      </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/c2.jpg" class="img-circle">
      <div class="caption">
        <h4>Соус</h4>
        <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio3" value="14">
        </label>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/c3.jpg" class="img-circle">
      <div class="caption">
        <h4>Перец</h4>
      

       <div class="checkbox">
        <label>
          <input type="checkbox" name="optradio3" value="15">
        </label>
      </div>


   </div>
   </div>
  <button id="next2" class="btn btn-lg btn-warning" type="button">Продолжить</button>
</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
	// $("input[name='name1']").click(function () {
	// 	if (this.checked) {
	// 		$("input[name='name1']").attr('checked',false);
	// 		this.checked=true;
	// 	};
	// });

	// $("input[name='name2']").click(function () {
	// 	if (this.checked) {
	// 		$("input[name='name2']").attr('checked',false);
	// 		this.checked=true;
	// 	};
	// });
	  $('#next').click(function() {

	  var arr=[0, 0];

        

     
			 arr[0] = $("input[name=optradio]:checked").val();
			 arr[1] = $("input[name=optradio1]:checked").val();
			
		if (arr[0]==null || arr[1]==null)
		{
			alert("Кажется вы кое что пропустили :)");

			throw new Error("stop");
		}




        $.ajax({
            url: "/check",
            type: "post",
            data: {fields: arr},
            success: function(data) {
                console.log(data);

                $("#one").toggleClass("hidden");
                $("#two").removeClass("hidden");

                	var pr=$('#price').html();
                	pr=pr+data[0];

                $('#price').html(pr);
                $('#nam').append(data[1]);

            },
            error: function(data) {
                 console.log(0);
            }
        });
        // return false;
   
    });


	   $('#next1').click(function() {

	  
        


			     var arr=$("input[name='optradio2']:checked").map(function() {return this.value;}).get();
    console.log(arr); 
				
			

			if (arr.length==0)
		{
			alert("Выберите хоть что-нибудь :)");

			throw new Error("stop");
		}



        $.ajax({
            url: "/check",
            type: "post",
            data: {fields1: arr},
            success: function(data) {
                console.log(data);

                $("#two").toggleClass("hidden");
                $("#three").removeClass("hidden");

                var pr=$('#price').html();
                	pr=parseInt(pr)+parseInt(data[0]);

                $('#price').html(pr);
                $('#nam').append(data[1]);
            },
            error: function(data) {
                 console.log(0);
            }
        });
        // return false;
   
    });

	    $('#next2').click(function() {

	  
        


			     var arr=$("input[name='optradio3']:checked").map(function() {return this.value;}).get();
    console.log(arr); 
				
			
			if (arr.length==0)
		{
			alert("Выберите хоть что-нибудь :)");

			throw new Error("stop");
		}


        $.ajax({
            url: "/check",
            type: "post",
            data: {fields2: arr},
            success: function(data) {
                console.log(data);

                $("#three").toggleClass("hidden");
                $("#four").removeClass("hidden");

                var pr=$('#price').html();
                	pr=parseInt(pr)+parseInt(data[0]);

                $('#price').html(pr);
                $('#nam').append(data[1]);
            },
            error: function(data) {
                 console.log(0);
            }
        });
        // return false;
   
    });

});



</script>

	
				  </div>
				 
			</div>
	    </div>
	</section>
@stop