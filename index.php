<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1">
	<title>irina</title>
	 <link rel="stylesheet" type="text/css" href="Irina.css">
       <script src="animate.js"></script>
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body onload="funonload();"> 

 <script type="text/javascript">
/* $(document).ready(function(){
    $("#show").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 100;
        $('body,html').animate({scrollTop: top}, 200);
    });
});

  $(document).ready(function(){
    $("#show1").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 850;
        $('body,html').animate({scrollTop: top}, 200);
    });
});

    $(document).ready(function(){
    $("#show2").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 1650;
        $('body,html').animate({scrollTop: top}, 200);
    });
});
    */
</script>
	<section id="1"></section>
 <div class="first" ><div class="fake">
<div class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="container1">
    <div class="navbar-header">
      <div class="navbar-brand"><img id="bruh" src="bruh.svg"> Painting Workshop <p id="bruh1">Мастерская живописи</p><div>
      
    </div>
    <div class="navbar-right">
      <nav class="stroke">
      <ul class="navbar-right" align="center">
      	
        <li class="active"><a class="special" href="#1">Главная</a></li>
        <li><a class="special" href="#2">О нас</a></li>
        <li><a class="special" href="#3">Портфолио</a></li>
        <li><a class="special" href="#6">Контакты</a></li>
      </ul>
      
    </nav>
    </div>

    <a class="phone">Тел.: +7 (929) 632-26-41</a>
</div>
</div>
<div class="left1">
	<div class="insideleft">
	<h1>Воплотим в вашем интерьере настоящее произведение искусства</h1>
<p id="description">Воплотим в реальность любую Вашу идею от росписи одежды, до фактурного панно на стенах.</p>
<p id="learnmore"><a id="learnmore" href="#2"> <section id="2"></section>Узнать больше <img class="strelka" src="strelka.png"></a></p>
</div>
<div class="insideright">
	<img id="albert" src="alber.png">
	<img class="ramka" src="ramka.png">
</div>
 </div>

<div class="second">
<div class="insideleft2">
	<img id="second" src="second.png">
	<img class="ramka1" src="ramka1.png">
	<img class="ramka2" src="ramka2.png">
	<img class="ramka3" src="ramka3.png">
	<img class="ramka4" src="ramka4.png">
</div>
<div class="insideright2">
	<h1>О нас</h1>
<p>Мы опытные художники с профильным образованием. Наша команда работает в любых направлениях изобразительного искусства. Предлагаем исполенение портретов разных художественных стилей.</p>
Представляем свои услуги в Москве и Подмосковье.
<p id="social">Социальные сети<img class="palka" src="palka.png"> 
	<a target="_blank" href="https://telegram.org"><img class="socialimg" src="tel.svg"></a>
	<a target="_blank" href="https://wa.me/79296322641"><img class="socialimg" src="wut.svg"></a>
	<a target="_blank" href="https://www.instagram.com/irenniko.art"><img class="socialimg" src="insta.svg"></a>
	<a target="_blank" href="https://www.facebook.com/profile.php?id=100018340840815"><img class="socialimg" src="facebook.svg"></a>
</p>
</div>

  </div>
<section id="3"></section>

<?php

$dir = opendir('new_pic');
$count = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count++;
}

$dir = opendir('new_pic1');
$count1 = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count1++;
}

$dir = opendir('new_pic2');
$count2 = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count2++;
}

$dir = opendir('new_pic3');
$count3 = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count3++;
}
?>

<script type="text/javascript">



function funonload() {
  if (document.documentElement.clientWidth <=768){
document.getElementsByClassName("insideleft")[0].innerHTML = "<h1> Воплотим в вашем интерьере настоящее произведение искусства</h1>";
var e2 = document.getElementsByClassName("insideleft2")[0];
document.getElementsByClassName("stroke")[1].remove();
document.getElementsByClassName("insideleft2")[0].remove();
}
}

var N = '<?php echo $count;?>';
/*document.write(N2);*/
var j=0;
var k=1;
var m3=false;
var h1 = -15;


            function makeEaseOut(timing) {
      return function(timeFraction) {
        return 1 - timing(1 - timeFraction);
      }
    }

        function quad(timeFraction) {
  return Math.pow(timeFraction, 10);
}

let quadEaseOut = makeEaseOut(quad);
    function AddItem() {
      var exist = $('#showmore').length;

        var z=k;
        if (k<=N){

if (j==0){

if (document.documentElement.clientWidth > 768){
if (costcount > 0 && costbool == true)
  document.getElementById('costbutton').style.marginTop = 100 + 'px';
  document.getElementById('cost').style.marginTop = 100 + 'px';
} else {
if (costcount > 0 && costbool == true)
  document.getElementById('costbutton').style.marginTop = 12 + 'vw';
  document.getElementById('cost').style.marginTop = 12 + 'vw';
}
if (document.documentElement.clientWidth >= 1300){
            var x=document.createElement("a");
        x.setAttribute("href","#3");
        x.setAttribute("id","hide");
        x.setAttribute("onClick","DelItems()");
         var t = document.createElement("img");
         t.setAttribute("id","medium");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main31")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.opacity = progress;
        }
      });}
                  } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh= 200;

                    var hideheigh= 0;
if (document.documentElement.clientWidth >= 1300)
hideheigh= 1121;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh= 200;
if (document.documentElement.clientWidth >= 1300)
                    setTimeout(kek2 ,200);
     function kek2(){

      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * hideheigh + 'px';
        }
      });}
} 
if (document.documentElement.clientWidth >= 1300){
hideheigh1= 560;
h1+= 565;
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
hideheigh1= 0;
h1+= 366;
} else if (document.documentElement.clientWidth <= 768){
hideheigh1= 0;
h1+= 131.8;
}
          var lastheighsmall;
          var countheigh;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall = '272.5px';
            countheigh = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall = '183px';
            countheigh = 4;
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall = '65.9vw';
            countheigh = 1;
          }
if ((j>0) && ((N-k) > countheigh)) {
          if (document.documentElement.clientWidth >= 1300)             
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * hideheigh1 + h1 + 'px';
        }
      });

    if (document.documentElement.clientWidth <= 768) {
     if ((N-k) < 4){
     if(costbool == true && costcount > 0)
     document.getElementById("costbutton").style.marginTop = 3 + "vw";
     document.getElementById("cost").style.marginTop = 3 + "vw";
   }
 } else {
  if ((N-k) < 9){
     if(costbool == true && costcount > 0)
     document.getElementById("costbutton").style.marginTop = 40 + "px";
     document.getElementById("cost").style.marginTop = 40 + "px";
   }
 }
} else if ((j>0) && ((N-k) <= 5)) {
                     if (document.documentElement.clientWidth >= 1300){ 
     animate({
        duration: 750,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * 295 + h1 + 'px';
        }
      });
   } 
     if(costbool == true && costcount > 0)
     document.getElementById("costbutton").style.marginTop = 40 + "px";
     document.getElementById("cost").style.marginTop = 40 + "px";

   
}




        	if (m3==true){
          var lastheighsmall;
          var countheigh;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall = '272.5px';
            countheigh = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall = '183px';
            countheigh = 4;
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall = '65.9vw';
            countheigh = 1;
          }
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);
        if ((N-k) <= countheigh){
          alert(N-z);
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall;
        }
      });
          } else {
          if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth >= 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        
        }
        else if (document.documentElement.clientWidth <= 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 131.8 + 'vw';
        }
      });
        
        }
        }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth > 1300){
        for (var i = z; i <= 9+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");

        if ((z-1)+9<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
    else {
    	newimg.setAttribute("id","d"+(i-z+1));
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
    }
  } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
              for (var i = z; i <= 10+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+10<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "265px";
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
  }
  else if (document.documentElement.clientWidth <= 768){
              for (var i = z; i <= 4+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+4<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z+1));
      if (N-z <= 1) {
        newimg.setAttribute("id","d"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "65.9vw";
    }
  }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
  }
}
        

        if (m3==false){
          var lastheighsmall;
          var countheigh;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall = '272.5px';
            countheigh = 6;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall = '183px';
            countheigh = 4;
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall = '65.9vw';
            countheigh = 1;
          }
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);

         if ((N-z) <= countheigh){
          alert(N-z);
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall;
        }
      });
          } else {
            if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        
        }
        else if (document.documentElement.clientWidth <= 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 131.8 + 'vw';
        }
      });
        
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth > 1300){
        for (var i = z; i <= 6+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+6<=N){
        newimg.setAttribute("id","f1"+(i-z+1));
    }
        else {
    	newimg.setAttribute("id","d1"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "265px";
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          for (var i = z; i <= 10+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+10<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "265px";
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
} else if (document.documentElement.clientWidth <= 768){
          for (var i = z; i <= 4+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+4<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z+1));
      if (N-z <= 1){
        newimg.setAttribute("id","d"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "65.9vw";
     }
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
}

        }
        m3=!(m3);
        j+=1;

    if (j == 1){

        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem()");
        document.getElementById("knopka").appendChild(newbut);

        if (document.documentElement.clientWidth > 0 && document.documentElement.clientWidth < 1300){
          var newbut=document.createElement("a");
        newbut.setAttribute("id","hidesmall");
        newbut.setAttribute("href","#3");
        newbut.setAttribute("onClick","DelItems()");
        document.getElementById("knopka").appendChild(newbut);
        var newbut1=document.createElement("img");
        newbut1.setAttribute("id","hidesmallpic");
        newbut1.setAttribute("src","arrow_up.png");
document.getElementById('hidesmall').appendChild(newbut1);
        }
}else if (k>N){
        var e2 = document.getElementById('showmore');
        

if (document.documentElement.clientWidth > 1300){
e2.parentNode.removeChild(e2);
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 0){
        e2.setAttribute("value","");
        e2.setAttribute("onClick","DelItems()");
        document.getElementById("hidesmall").style.marginLeft = -77 + "px";
        e2.setAttribute("href","#3");
        if (document.documentElement.clientWidth > 768){
        if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 100 + "px"; 
          document.getElementById("cost").style.marginTop = 100 + "px";
        } else if (document.documentElement.clientWidth <= 768){
        if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 12 + "vw"; 
          document.getElementById("cost").style.marginTop = 12 + "vw";
        }
}

                
}
if (j==1){
    var el = document.getElementById('show');
el.parentNode.removeChild(el);
}
}
}

function DelItems() {
          if (document.documentElement.clientWidth > 768){
            var h1heigh = "px";
          if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 40 + "px"; 
          document.getElementById("cost").style.marginTop = 40 + "px";
        } else
          if (document.documentElement.clientWidth <= 768){
            var h1heigh = "vw";
          if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 3 + "vw"; 
          document.getElementById("cost").style.marginTop = 3 + "vw";
        }
        animate({
        duration: 2500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.height = -progress * (h1) + h1 + h1heigh;
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.opacity = -progress + 1;
        }
      });
        if (document.documentElement.clientWidth > 1300){

                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = -progress * (h1) + h1 + "px";
        }
      });
                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.opacity = -progress + 1;
        }
      });
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 0){
                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hidesmall").style.opacity = -progress + 1;
        }
      });
}


      let blocks = document.getElementsByClassName( "main3" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main3")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete,1200);


        function Delete() {
          
        var e2;
        for (var i=0; i<j; i++){
            e2 = document.getElementsByClassName('main3')[0];
            e2.parentNode.removeChild(e2);

        }
        if (k < N){
          if (document.documentElement.clientWidth > 1300){
        e3 = document.getElementById('showmore');
            e3.parentNode.removeChild(e3);
        e2 = document.getElementById('hide');
            e2.parentNode.removeChild(e2);
} 

        }

if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 0){
          e3 = document.getElementById('showmore');
            e3.parentNode.removeChild(e3);
        e3 = document.getElementById('hidesmall');
            e3.parentNode.removeChild(e3);
}

        var x=document.createElement("nav");
        x.setAttribute("id","show");
        document.getElementsByClassName("right3")[0].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem()");
        document.getElementById("show").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show").style.opacity = progress;
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.height = "auto";
        }
      });
                     j=0;
 k=1;
 m3=false;
 h1 = -15;

}

}


var N1 = '<?php echo $count1;?>';
/*document.write(N1);*/
var j1=0;
var k1=1;
var m31=false;
var h2 = -15;

    function AddItem1() {

        var z1=k1;
        if (k1<=N1){

if (j1==0){
if (document.documentElement.clientWidth > 768){
if (costcount1 > 0 && costbool1 == true)
  document.getElementById('costbutton1').style.marginTop = 100 + 'px';
  document.getElementById('cost1').style.marginTop = 100 + 'px';
} else {
if (costcount1 > 0 && costbool1 == true)
  document.getElementById('costbutton1').style.marginTop = 12 + 'vw';
  document.getElementById('cost1').style.marginTop = 12 + 'vw';
}
if (document.documentElement.clientWidth >= 1300){
            var x=document.createElement("a");
        x.setAttribute("href","#4");
        x.setAttribute("id","hide1");
        x.setAttribute("onClick","DelItems1()");
         var t = document.createElement("img");
         t.setAttribute("id","medium");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main21")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.opacity = progress;
        }
      });}
                  } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
var hideheigh1= 0;
if (document.documentElement.clientWidth >= 1300)
hideheigh1= 1121;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh1= 757;
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * hideheigh1 + 'px';
        }
      });}
} 
if (document.documentElement.clientWidth >= 1300){
hideheigh2= 560;
h2+= 565;
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
hideheigh2= 0;
h2+= 366;
} else if (document.documentElement.clientWidth <= 768){
hideheigh2= 0;
h2+= 131.8;
}
          var lastheighsmall1;
          var countheigh1;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall1 = '272.5px';
            countheigh1 = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall1 = '183px';
            countheigh1 = 4;
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall1 = '65.9vw';
            countheigh1 = 1;
          }
if ((j1>0) && ((N1-k1) > countheigh1)) {
          if (document.documentElement.clientWidth >= 1300)               
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * hideheigh2 + h2 + 'px';
        }
      });
  else if (document.documentElement.clientWidth <= 768) {
     if ((N-k) < 4){
     if(costbool1 == true && costcount1 > 0)
     document.getElementById("costbutton1").style.marginTop = 3 + "vw";
     document.getElementById("cost1").style.marginTop = 3 + "vw";
   }
 } else {
     if ((N1-k1) < 9){
     if(costbool1 == true && costcount1 > 0)
     document.getElementById("costbutton1").style.marginTop = 40 + "px";
     document.getElementById("cost1").style.marginTop = 40 + "px";
   }
 }
} else if ((j1>0) && ((N1-k1) <= 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * 295 + h2 + 'px';
        }
      });
     if(costbool1 == true && costcount1 > 0)
     document.getElementById("costbutton1").style.marginTop = 40 + "px";
     document.getElementById("cost1").style.marginTop = 40 + "px";
   
}




            if (m31==true){
          var lastheighsmall1;
          var countheigh1;
          if (document.documentElement.clientWidth >= 1300){
            lastheighsmall1 = '272.5px';
            countheigh1 = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall1 = '183px';
            countheigh1 = 4;
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall1 = '65.9vw';
            countheigh1 = 1;
          }
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main2");
        document.getElementById("items1").appendChild(newdiv);
        if ((N1-k1) <= countheigh1){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall1;
        }
      });
          } else {
            if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth <= 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 131.8 + 'vw';
        }
      });
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth > 1300){
        for (var i = z1; i <= 9+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");

        if ((z1-1)+9<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
    else {
        newimg.setAttribute("id","d"+(i-z1+1));
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
    }
      } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
              for (var i = z1; i <= 10+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+10<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "265px";
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
  } else if (document.documentElement.clientWidth <= 768){
              for (var i = z1; i <= 4+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+4<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z1+1));
      if (N1-z1 <= 1) {
        newimg.setAttribute("id","d"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "65.9vw";
    }
  }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
  }
}
        

        if (m31==false){
          var lastheighsmall1;
          var countheigh1;
          if (document.documentElement.clientWidth >= 1300){
            lastheighsmall1 = '272.5px';
            countheigh1 = 6;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall1 = '183px';
            countheigh1 = 4
          } else if (document.documentElement.clientWidth <= 768){
            lastheighsmall = '65.9vw';
            countheigh = 1;
          }
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main2");
        document.getElementById("items1").appendChild(newdiv);

         if ((N1-z1) <= countheigh1){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall1 + 'px';
        }
      });
          } else {
            if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
         } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth <= 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 131.8 + 'vw';
        }
      });
        
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth >= 1300){
        for (var i = z1; i <= 6+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+6<=N1){
        newimg.setAttribute("id","f1"+(i-z1+1));
    }
        else {
        newimg.setAttribute("id","d1"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "265px";
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          for (var i = z1; i <= 10+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+10<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "265px";
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
} else if (document.documentElement.clientWidth <= 768){
          for (var i = z1; i <= 4+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+4<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z1+1));
      if (N1-z1 <= 1){
        newimg.setAttribute("id","d"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "65.9vw";
     }
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
}
        }
        m31=!(m31);
        j1+=1;

    if (j1 == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore1");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem1()");
        document.getElementById("knopka1").appendChild(newbut);

        if (document.documentElement.clientWidth > 0 && document.documentElement.clientWidth < 1300){
          var newbut=document.createElement("a");
        newbut.setAttribute("id","hidesmall1");
        newbut.setAttribute("href","#4");
        newbut.setAttribute("onClick","DelItems1()");
        document.getElementById("knopka1").appendChild(newbut);
        var newbut1=document.createElement("img");
        newbut1.setAttribute("id","hidesmallpic1");
        newbut1.setAttribute("src","arrow_up.png");
document.getElementById('hidesmall1').appendChild(newbut1);
        }

}else if (k1>N1){
        var e2 = document.getElementById('showmore1');
        

if (document.documentElement.clientWidth > 1300){
e2.parentNode.removeChild(e2);
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 0){
        e2.setAttribute("value","");
        e2.setAttribute("onClick","DelItems1()");
        document.getElementById("hidesmall1").style.marginLeft = -77 + "px";
        e2.setAttribute("href","#4");
        if (document.documentElement.clientWidth > 768){
        if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 100 + "px"; 
          document.getElementById("cost1").style.marginTop = 100 + "px";
        } else if (document.documentElement.clientWidth <= 768){
        if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 12 + "vw"; 
          document.getElementById("cost1").style.marginTop = 12 + "vw";
        }
}
}
if (j1==1){
    var el = document.getElementById('show1');
el.parentNode.removeChild(el);
}
}
}

function DelItems1() {
            if (document.documentElement.clientWidth > 768){
            var h1heigh1 = "px";
          if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 40 + "px"; 
          document.getElementById("cost1").style.marginTop = 40 + "px";
        } else
          if (document.documentElement.clientWidth <= 768){
            var h1heigh1 = "vw";
          if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 3 + "vw"; 
          document.getElementById("cost1").style.marginTop = 3 + "vw";
        }
        
        animate({
        duration: 2500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.height = -progress * (h2) + h2 + h1heigh1;
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.opacity = -progress + 1;
        }
      });

                         if (document.documentElement.clientWidth > 1300){

                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = -progress * (h1) + h1 + "px";
        }
      });
                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.opacity = -progress + 1;
        }
      });
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hidesmall1").style.opacity = -progress + 1;
        }
      });
}

      let blocks = document.getElementsByClassName( "main2" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main2")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete1,1200);


        function Delete1() {

        var e2;
        for (var i=0; i<j1; i++){
            e2 = document.getElementsByClassName('main2')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k1 < N1){
          if (document.documentElement.clientWidth >= 1300){
        e3 = document.getElementById('showmore1');
            e3.parentNode.removeChild(e3);
        e2 = document.getElementById('hide1');
            e2.parentNode.removeChild(e2);
} 

        }

if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 0){
          e3 = document.getElementById('showmore1');
            e3.parentNode.removeChild(e3);
        e3 = document.getElementById('hidesmall1');
            e3.parentNode.removeChild(e3);
}

        var x=document.createElement("nav");
        x.setAttribute("id","show1");
        document.getElementsByClassName("right3")[1].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem1()");
        document.getElementById("show1").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show1").style.opacity = progress;
        }
      });
        if (document.documentElement.clientWidth >= 1300){
        var e4 = document.getElementById("hide1");
            e4.parentNode.removeChild(e4);
          }
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.height = "auto";
        }
      });
                     j1=0;
 k1=1;
 m31=false;
 h2 = -15;

}

}


var N2 = '<?php echo $count2;?>';
/*document.write(N2);*/
var j2=0;
var k2=1;
var m32=false;
var h3 = -15;

    function AddItem2() {

        var z2=k2;
        if (k2<=N2){
                        if ((costbool2 == true) && (costcount2 > 0))
           document.getElementById("costbutton2").style.marginTop = 106 + "px";
if (j2==0){
  document.getElementById("cost2").style.marginTop = 106 + "px";

  if (document.documentElement.clientWidth >= 1300){
            var x=document.createElement("a");
        x.setAttribute("href","#5");
        x.setAttribute("id","hide2");
        x.setAttribute("onClick","DelItems2()");
         var t = document.createElement("img");
         t.setAttribute("id","medium");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main11")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.opacity = progress;
        }
      });}
                  
                  } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
var hideheigh2= 0;
if (document.documentElement.clientWidth >= 1300)
hideheigh2= 1121;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh2= 757;
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * hideheigh2 + 'px';
        }
      });}
} 
if (document.documentElement.clientWidth >= 1300)
h3+= 565;
hideheigh2= 560;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
  hideheigh2= 376;
h3+= 386;
if ((j2>0) && ((N2-k2) > 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * hideheigh2 + h3 + 'px';
        }
      });
     if ((N2-k2) < 9){
     if(costbool2 == true && costcount2 > 0)
     document.getElementById("costbutton2").style.marginTop = 40 + "px";
     document.getElementById("cost2").style.marginTop = 40 + "px";
   }
} else if ((j2>0) && ((N2-k2) <= 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * 295 + h3 + 'px';
        }
      });
     if(costbool2 == true && costcount2 > 0)
     document.getElementById("costbutton2").style.marginTop = 40 + "px";
     document.getElementById("cost2").style.marginTop = 40 + "px";

}




            if (m32==true){
              var lastheighsmall2;
          var countheigh2;
          if (document.documentElement.clientWidth >= 1300){
            lastheighsmall2 = 272.5;
            countheigh2 = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall2 = 183;
            countheigh2 = 4
          }
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main1");
        document.getElementById("items2").appendChild(newdiv);
        if ((N2-k2) <= countheigh2){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall2 + 'px';
        }
      });
          } else {
            if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth > 1300){
        for (var i = z2; i <= 9+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");

        if ((z2-1)+9<=N2){
        newimg.setAttribute("id","f"+(i-z2+1));
    }
    else {
        newimg.setAttribute("id","d"+(i-z2+1));
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
    }
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
              for (var i = z2; i <= 10+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");
                if ((z2-1)+10<=N2){
        newimg.setAttribute("id","f"+(i-z2+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z2+1));
       document.getElementsByClassName("main1")[j2].style.height = "265px";
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
}
  }
}
        

        if (m32==false){
          var lastheighsmall2;
          var countheigh2;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall2 = 272.5;
            countheigh2 = 6;
          }
          else {
            lastheighsmall2 = 183;
            countheigh2 = 4
          }
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main1");
        document.getElementById("items2").appendChild(newdiv);
         if ((N2-z2) <= countheigh2){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall2 + 'px';
        }
      });
          } else {
            if (document.documentElement.clientWidth > 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}
if (document.documentElement.clientWidth > 1300){
        for (var i = z2; i <= 6+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");
                if ((z2-1)+6<=N2){
        newimg.setAttribute("id","f1"+(i-z2+1));
    }
        else {
        newimg.setAttribute("id","d1"+(i-z2+1));
       document.getElementsByClassName("main1")[j2].style.height = "265px";
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
}
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          for (var i = z2; i <= 10+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");
                if ((z2-1)+10<=N2){
        newimg.setAttribute("id","f"+(i-z2+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z2+1));
       document.getElementsByClassName("main1")[j2].style.height = "265px";
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
}
}
      }
        m32=!(m32);
        j2+=1;

    if (j2 == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore2");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem2()");
        document.getElementById("knopka2").appendChild(newbut);

        if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300){
          var newbut=document.createElement("a");
        newbut.setAttribute("id","hidesmall2");
        newbut.setAttribute("href","#5");
        newbut.setAttribute("onClick","DelItems2()");
        document.getElementById("knopka2").appendChild(newbut);
        var newbut1=document.createElement("img");
        newbut1.setAttribute("id","hidesmallpic2");
        newbut1.setAttribute("src","arrow_up.png");
document.getElementById('hidesmall2').appendChild(newbut1);
        }

}else if (k2>N2){
        var e2 = document.getElementById('showmore2');
        if (document.documentElement.clientWidth > 1300){
e2.parentNode.removeChild(e2);
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
        e2.setAttribute("value","");
        e2.setAttribute("onClick","DelItems2()");
        document.getElementById("hidesmall2").style.marginLeft = -77 + "px";
        e2.setAttribute("href","#5");
        if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton2").style.marginTop = 100 + "px"; 
          document.getElementById("cost2").style.marginTop = 100 + "px";
}
}
if (j2==1){
    var el = document.getElementById('show2');
el.parentNode.removeChild(el);
}
}
  if ($('#showmore2').length == 1)
    document.getElementById("costbutton2").style.marginTop = 100 + 'px';
  else 
        document.getElementById("costbutton2").style.marginTop = 40 + 'px';
}

function DelItems2() {
            if ((costbool2 == true) && (costcount2 > 0))
           document.getElementById("costbutton2").style.marginTop = 40 + "px"; 
          document.getElementById("cost2").style.marginTop = 40 + "px";
        animate({
        duration: 2500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.height = -progress * (h3) + h3 + "px";
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.opacity = -progress + 1;
        }
      });
if (document.documentElement.clientWidth > 1300){
                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = -progress * (h3) + h3 + "px";
        }
      });

                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.opacity = -progress + 1;
        }
      });
                      } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hidesmall2").style.opacity = -progress + 1;
        }
      });
}

      let blocks = document.getElementsByClassName( "main1" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main1")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete2,1200);


        function Delete2() {

        var e2;
        for (var i=0; i<j2; i++){
            e2 = document.getElementsByClassName('main1')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k2 < N2){
          if (document.documentElement.clientWidth > 1300){
        e3 = document.getElementById('showmore2');
            e3.parentNode.removeChild(e3);
        e2 = document.getElementById('hide2');
            e2.parentNode.removeChild(e2);
}         
}
        if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
                  e3 = document.getElementById('showmore2');
            e3.parentNode.removeChild(e3);
        e3 = document.getElementById('hidesmall2');
            e3.parentNode.removeChild(e3);
}
        var x=document.createElement("nav");
        x.setAttribute("id","show2");
        document.getElementsByClassName("right3")[2].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem2()");
        document.getElementById("show2").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show2").style.opacity = progress;
        }
      });
        if (document.documentElement.clientWidth >= 1300){
        var e4 = document.getElementById("hide2");
            e4.parentNode.removeChild(e4);
          }
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.height = "auto";
        }
      });     

                     j2=0;
 k2=1;
 m32=false;
 h3 = -15;

}

}

//////////////////////////////////////////////////////////////////////////
var N3 = '<?php echo $count3;?>';

var j3=0;
var k3=1;
var m33=false;
var h4 = -15;
var kek44444 = 40;


    function AddItem3() {

        var z3=k3;
        if (k3<=N3){
            if ((costbool3 == true) && (costcount3 > 0))
           document.getElementById("costbutton3").style.marginTop = 106 + "px";
if (j3==0){
  document.getElementById("cost3").style.marginTop = 106 + "px";

  if (document.documentElement.clientWidth >= 1300){
            var x=document.createElement("a");
        x.setAttribute("href","#61");
        x.setAttribute("id","hide3");
        x.setAttribute("onClick","DelItems3()");
         var t = document.createElement("img");
         t.setAttribute("id","medium3");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main01")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.opacity = progress;
        }
      });}
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
var hideheigh3= 0;
if (document.documentElement.clientWidth >= 1300)
hideheigh3= 1121;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh3= 757;
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.height = progress * hideheigh3 + 'px';
        }
      });}
} 
if (document.documentElement.clientWidth >= 1300)
h4+= 565;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
h4+= 386;
if (document.documentElement.clientWidth >= 1300)
hideheigh3= 560;
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
hideheigh3= 376;
if ((j3>0) && ((N3-k3) > 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.height = progress * hideheigh3 + h4 + 'px';
        }
      });
     if ((N3-k3) < 9){
     if(costbool3 == true && costcount3 > 0)
     document.getElementById("costbutton3").style.marginTop = 40 + "px";
     document.getElementById("cost3").style.marginTop = 40 + "px";
   }
} else if ((j3>0) && ((N3-k3) <= 5)) {
                       
     animate({
        duration: 750,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.height = progress * 295 + h4 + 'px';
        }
      });
     if(costbool3 == true && costcount3 > 0)
     document.getElementById("costbutton3").style.marginTop = 40 + "px";
     document.getElementById("cost3").style.marginTop = 40 + "px";
   
}




          if (m33==true){
          var lastheighsmall3;
          var countheigh3;
          if (document.documentElement.clientWidth >= 1300){
            lastheighsmall3 = 272.5;
            countheigh3 = 5;
          }
          else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            lastheighsmall3 = 183;
            countheigh3 = 4
          }
                  var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main0");
        document.getElementById("items3").appendChild(newdiv);
        if ((N3-k3) <= countheigh3){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall3 + 'px';
        }
      });
          } else {
            if (document.documentElement.clientWidth >= 1300){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 366 + 'px';
        }
      });
        }
      }
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

if (document.documentElement.clientWidth > 1300){
        for (var i = z3; i <= 9+(z3-1); i++) {
        if (k3<=N3) {k3++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic3/"+i+".png");

        if ((z3-1)+9<=N3){
        newimg.setAttribute("id","f"+(i-z3+1));
    }
    else {
        newimg.setAttribute("id","d"+(i-z3+1));
    }
        document.getElementsByClassName("main0")[j3].appendChild(newimg);
    }
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
              for (var i = z3; i <= 10+(z3-1); i++) {
        if (k3<=N3) {k3++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic3/"+i+".png");
                if ((z3-1)+10<=N3){
        newimg.setAttribute("id","f"+(i-z3+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z3+1));
       document.getElementsByClassName("main0")[j3].style.height = "265px";
    }
        document.getElementsByClassName("main0")[j3].appendChild(newimg);
}
  }
}
        

        if (m33==false){
                    var lastheighsmall3;
          var countheigh3;
          if (document.documentElement.clientWidth > 1300){
            lastheighsmall3 = 272.5;
            lastheighlarge3 = 545;
            countheigh3 = 6;
          }
          else {
            lastheighsmall3 = 183;
            lastheighlarge3 = 366;
            countheigh3 = 4
          }
                  var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main0");
        document.getElementById("items3").appendChild(newdiv);
         if ((N3-z3) <= countheigh3){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighsmall3 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * lastheighlarge3 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

 if (document.documentElement.clientWidth > 1300){
        for (var i = z3; i <= 6+(z3-1); i++) {
        if (k3<=N3) {k3++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic3/"+i+".png");
                if ((z3-1)+6<=N3){
        newimg.setAttribute("id","f1"+(i-z3+1));
    }
        else {
        newimg.setAttribute("id","d1"+(i-z3+1));
       document.getElementsByClassName("main0")[j3].style.height = "265px";
    }
        document.getElementsByClassName("main0")[j3].appendChild(newimg);
}
        } else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          for (var i = z3; i <= 10+(z3-1); i++) {
        if (k3<=N3) {k3++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic3/"+i+".png");
                if ((z3-1)+10<=N3){
        newimg.setAttribute("id","f"+(i-z3+1));
    }
        else {
      newimg.setAttribute("id","f"+(i-z3+1));
       document.getElementsByClassName("main0")[j3].style.height = "265px";
    }
        document.getElementsByClassName("main0")[j3].appendChild(newimg);
}
}
      }
        m33=!(m33);
        j3+=1;

    if (j3 == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore3");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem3()");
        document.getElementById("knopka3").appendChild(newbut);

        if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300){
          var newbut=document.createElement("a");
        newbut.setAttribute("id","hidesmall3");
        newbut.setAttribute("href","#6");
        newbut.setAttribute("onClick","DelItems3()");
        document.getElementById("knopka3").appendChild(newbut);
        var newbut1=document.createElement("img");
        newbut1.setAttribute("id","hidesmallpic3");
        newbut1.setAttribute("src","arrow_up.png");
document.getElementById('hidesmall3').appendChild(newbut1);
        }

}else if (k3>N3){
        var e2 = document.getElementById('showmore3');
        if (document.documentElement.clientWidth > 1300){
e2.parentNode.removeChild(e2);
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
        e2.setAttribute("value","");
        e2.setAttribute("onClick","DelItems3()");
        e2.setAttribute("href","#6");
        document.getElementById("hidesmall3").style.marginLeft = -77 + "px";
        if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton3").style.marginTop = 100 + "px"; 
          document.getElementById("cost3").style.marginTop = 100 + "px";
}
}
if (j3==1){
    var el = document.getElementById('show3');
el.parentNode.removeChild(el);
}
}
}

function DelItems3() {
  kek44444 = 40;
          if ((costbool3 == true) && (costcount3 > 0))
           document.getElementById("costbutton3").style.marginTop = 40 + "px"; 
          document.getElementById("cost3").style.marginTop = 40 + "px";
        animate({
        duration: 2500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items3").style.height = -progress * (h4) + h4 + "px";
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items3").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore3").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore3").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore3").style.opacity = -progress + 1;
        }
      });

if (document.documentElement.clientWidth > 1300){
                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.height = -progress * (h4) + h4 + "px";
        }
      });

                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide3").style.opacity = -progress + 1;
        }
      });
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){

  animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hidesmall3").style.opacity = -progress + 1;
        }
      });
}

      let blocks = document.getElementsByClassName( "main0" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main0")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete3,1200);


        function Delete3() {
          
        var e2;
        for (var i=0; i<j3; i++){
            e2 = document.getElementsByClassName('main0')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k3 < N3){
          if (document.documentElement.clientWidth > 1300){
        e3 = document.getElementById('showmore3');
            e3.parentNode.removeChild(e3);
        e2 = document.getElementById('hide3');
            e2.parentNode.removeChild(e2);
} 
        }

if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
          e3 = document.getElementById('showmore3');
            e3.parentNode.removeChild(e3);
        e3 = document.getElementById('hidesmall3');
            e3.parentNode.removeChild(e3);
}

        var x=document.createElement("nav");
        x.setAttribute("id","show3");
        document.getElementsByClassName("right3")[3].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem3()");
        document.getElementById("show3").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show3").style.opacity = progress;
        }
      });
        if (document.documentElement.clientWidth >= 1300){
        e2 = document.getElementById('hide3');
            e2.parentNode.removeChild(e2);
          }
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items3").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items3").style.height = "auto";
        }
      });
                     j3=0;
 k3=1;
 m33=false;
 h4 = -15;

}

} 


var costbool = true;
var costcount = 0;

function AddCost(){
if (costcount == 0){
  if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 530 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 389 + "px";
        }
      });
  }


    document.getElementById("insidecost").style.paddingTop = 35 + "px";



  document.getElementById("cost").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("id","leftcost");
  x1 = document.createTextNode("Масло");
  document.getElementById("insidecost").appendChild(x);
   document.getElementById("leftcost").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("30х40 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[0].appendChild(x1);




   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("6 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[0].appendChild(x1);
     if (document.documentElement.clientWidth >= 1300) {
   document.getElementsByClassName("leftcost1")[0].style.marginTop = 55 + "px";
   document.getElementsByClassName("leftcost2")[0].style.marginTop = 55 + "px";

  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300){
     document.getElementsByClassName("leftcost1")[0].style.marginTop = 41 + "px";
    document.getElementsByClassName("leftcost2")[0].style.marginTop = 41 + "px";

  }

      x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("40х50 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[1].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("9 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[1].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("50х70 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[2].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("11 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[2].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("60х80 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[3].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("14 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[3].appendChild(x1);




  var x=document.createElement("div");
  x.setAttribute("id","rightcost");
  x1 = document.createTextNode("Карандаш");
  document.getElementById("insidecost").appendChild(x);
     document.getElementById("rightcost").appendChild(x1);

x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("30х40 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[4].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("3 500 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[4].appendChild(x1);
      document.getElementsByClassName("leftcost2")[4].style.marginTop = 55 + "px";

     if (document.documentElement.clientWidth >= 1300) {
      document.getElementsByClassName("leftcost2")[4].style.marginTop = 55 + "px";
      document.getElementsByClassName("leftcost1")[4].style.marginTop = 55 + "px";

  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300){
     document.getElementsByClassName("leftcost1")[4].style.marginTop = 41 + "px";
    document.getElementsByClassName("leftcost2")[4].style.marginTop = 41 + "px";

  }

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("40х50 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[5].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("4 500 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[5].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("50х70 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[6].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("6 200 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[6].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("60х80 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[7].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("7 200 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[7].appendChild(x1);



document.getElementById("costhyper").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv").appendChild(x);
  document.getElementById("order").appendChild(x1);
  costcount++;
} else {
if (costbool == false){

  if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = 530 + -progress * 530 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = 389 + -progress * 389 + "px";
        }
      });
  }
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = 530 + -progress * 530 + "px";
        }
      });
  x=document.createElement("button");
  x.setAttribute("id","costbutton");

  x.setAttribute("onClick","AddCost()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("third")[0].appendChild(x);
  document.getElementById("costbutton").appendChild(x1);
  
    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton").appendChild(x);
  if ($('#showmore').length == 1)
    document.getElementById("costbutton").style.marginTop = 100 + 'px';
  else 
        document.getElementById("costbutton").style.marginTop = 40 + 'px';

  setTimeout(appear,1200);


  function appear(){
animate({
        duration: 700,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton").style.opacity = progress;
        }
      });}

} else {
  e3 = document.getElementById('costbutton');
            e3.parentNode.removeChild(e3);

            if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 530 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 389 + "px";
        }
      });
  }

}

}

 costbool = !costbool;



}


var costbool1 = true;
var costcount1 = 0;
var costbool2 = true;
var costcount2 = 0;
var costbool3 = true;
var costcount3 = 0;

function AddCost1(){
if (costcount1 == 0){
  if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 590 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 465 + "px";
        }
      });
  }

            if (document.documentElement.clientWidth >= 1300) {
document.getElementById("leftcostdown").style.paddingTop = 55 + "px";
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
document.getElementById("leftcostdown").style.paddingTop = 35 + "px";
  }


  document.getElementById("cost1").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("class","secondcost1");
  x1 = document.createTextNode("Простая");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost1")[0].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("трафаретная роспись");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[0].appendChild(x1);
   if (document.documentElement.clientWidth >= 1300)
   document.getElementsByClassName("secondcost11")[0].style.marginTop = 65 + "px";
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
     document.getElementsByClassName("secondcost11")[0].style.marginTop = 51 + "px";


      x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("нанесение логотипа");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[1].appendChild(x1);
   document.getElementsByClassName("secondcost11")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("детская тематика");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[2].appendChild(x1);
   document.getElementsByClassName("secondcost11")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("простой пейзаж");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[3].appendChild(x1);
   document.getElementsByClassName("secondcost11")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("небо");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[4].appendChild(x1);
   document.getElementsByClassName("secondcost11")[4].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost1");
  x1 = document.createTextNode("от 1 500 руб.");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost1")[1].appendChild(x1);
   document.getElementsByClassName("secondcost1")[1].style.marginTop = 35 + "px";
   if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
   document.getElementsByClassName("secondcost1")[1].style.marginLeft = -23 + "px";





var x=document.createElement("div");
  x.setAttribute("id","secondcost2");
  x1 = document.createTextNode("Средняя");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementById("secondcost2").appendChild(x1);
   if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
   document.getElementById("secondcost2").style.textAlign = "center";

   x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детальная трафаретная роспись");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[0].appendChild(x1);
   document.getElementsByClassName("secondcost12")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("нанесение логотипа с прорисовкой");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[1].appendChild(x1);
   document.getElementsByClassName("secondcost12")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детская тематика с деталзиацией");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[2].appendChild(x1);
   document.getElementsByClassName("secondcost12")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("пейзаж с архитектурой");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[3].appendChild(x1);
   document.getElementsByClassName("secondcost12")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детальная прорисовка неба");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[4].appendChild(x1);
   document.getElementsByClassName("secondcost12")[4].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("id","secondcost21");
  x1 = document.createTextNode("от 3 500 руб.");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementById("secondcost21").appendChild(x1);
   document.getElementById("secondcost21").style.marginTop = 35 + "px";




   var x=document.createElement("div");
  x.setAttribute("id","secondcost3");
  x1 = document.createTextNode("Сложная");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementById("secondcost3").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("художественная роспись");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[0].appendChild(x1);
   document.getElementsByClassName("secondcost13")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("сложная архитектру");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[1].appendChild(x1);
   document.getElementsByClassName("secondcost13")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("фотореализм");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[2].appendChild(x1);
   document.getElementsByClassName("secondcost13")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("3D рисунок");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[3].appendChild(x1);
   document.getElementsByClassName("secondcost13")[3].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("id","secondcost31");
  x1 = document.createTextNode("от 5 000 руб.");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementById("secondcost31").appendChild(x1);
      if (document.documentElement.clientWidth >= 1300)
   document.getElementById("secondcost31").style.marginTop = 94 + "px";
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
        document.getElementById("secondcost31").style.marginTop = 80 + "px";



      if (document.documentElement.clientWidth >= 1300)
   document.getElementById("costhyperdiv1").style.marginTop = 515 + "px";
if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768)
   document.getElementById("costhyperdiv1").style.marginTop = 400 + "px";

document.getElementById("costhyper1").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper1").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order1");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv1").appendChild(x);
  document.getElementById("order1").appendChild(x1);
  costcount1++;
} else {                                      // открывается скобка на 1624 строке
if (costbool1 == false){
  if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = 590 + -progress * 590 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = 465 + -progress * 465 + "px";
        }
      });
  }
  x=document.createElement("button");
  x.setAttribute("id","costbutton1");

  x.setAttribute("onClick","AddCost1()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("four")[0].appendChild(x);
  document.getElementById("costbutton1").appendChild(x1);

    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton1").appendChild(x);
 if ($('#showmore1').length == 1)
    document.getElementById("costbutton1").style.marginTop = 100 + 'px';
  else 
        document.getElementById("costbutton1").style.marginTop = 40 + 'px';

  setTimeout(appear,1200);


  function appear(){
animate({
        duration: 700,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton1").style.opacity = progress;
        }
      });}

} else {
  e3 = document.getElementById('costbutton1');
            e3.parentNode.removeChild(e3);
            document.getElementById("cost1").style.height = 106 + "px";
  if (document.documentElement.clientWidth >= 1300) {
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 590 + "px";
        }
      });
  } else if (document.documentElement.clientWidth > 768 && document.documentElement.clientWidth < 1300) {
      animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 465 + "px";
        }
      });
  }
}

}

 costbool1 = !costbool1;



}

// скобка, закрывающая if (>1300px)


function AddCost2(){
if (costcount2 == 0){
if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = progress * 726 + "px";
        }
      });

    document.getElementById("leftcostdown1").style.paddingTop = 55 + "px";
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
    animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = progress * 526 + "px";
        }
      });

    document.getElementById("leftcostdown1").style.paddingTop = 35 + "px";
}


  document.getElementById("cost2").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("class","thirdcost1");
  x1 = document.createTextNode("");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost1")[0].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("свитшот, худи и т.д.");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[0].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[0].style.marginTop = 65 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("джинсовые шорты");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[1].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("кожаные куртки");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[2].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("куртки (ткань)");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[3].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("джинсовки");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[4].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[4].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("футболки");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[5].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[5].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("джинсы");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[6].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[6].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost11");
  x1 = document.createTextNode("пальто");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementsByClassName("thirdcost11")[7].appendChild(x1);
   document.getElementsByClassName("thirdcost11")[7].style.marginTop = 25 + "px";





var x=document.createElement("div");
  x.setAttribute("id","thirdcost2");
  x1 = document.createTextNode("Мужская");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementById("thirdcost2").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 2 100 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[0].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 1 500 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[1].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 2 500 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[2].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 2 100 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[3].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 2 100 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[4].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[4].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 1 100 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[5].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[5].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 1 300 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[6].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[6].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","thirdcost12");
  x1 = document.createTextNode("от 3 000 руб.");
  document.getElementById("thirdcost2").appendChild(x);
   document.getElementsByClassName("thirdcost12")[7].appendChild(x1);
   document.getElementsByClassName("thirdcost12")[7].style.marginTop = 25 + "px";



   var x=document.createElement("div");
  x.setAttribute("id","thirdcost3");
  x1 = document.createTextNode("Женская");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementById("thirdcost3").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 1 500 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[0].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 1 000 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[1].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 2 500 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[2].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 1 800 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[3].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[3].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 1 800 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[4].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[4].style.marginTop = 25 + "px";

       x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 800 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[5].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[5].style.marginTop = 25 + "px";

       x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 1 000 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[6].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[6].style.marginTop = 25 + "px";

       x=document.createElement("div");
  x.setAttribute("class","thirdcost13");
  x1 = document.createTextNode("от 3 000 руб.");
  document.getElementById("thirdcost3").appendChild(x);
   document.getElementsByClassName("thirdcost13")[7].appendChild(x1);
   document.getElementsByClassName("thirdcost13")[7].style.marginTop = 25 + "px";

  var x=document.createElement("div");
  x.setAttribute("id","thirdcost4");
  x1 = document.createTextNode("Разное");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementById("thirdcost4").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","thirdcost14");
  x1 = document.createTextNode("cумки, кошельки от 1 000 руб.");
  document.getElementById("thirdcost4").appendChild(x);
   document.getElementsByClassName("thirdcost14")[0].appendChild(x1);
   document.getElementsByClassName("thirdcost14")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","thirdcost14");
  x1 = document.createTextNode("обувь от 1 200 руб.");
  document.getElementById("thirdcost4").appendChild(x);
   document.getElementsByClassName("thirdcost14")[1].appendChild(x1);
   document.getElementsByClassName("thirdcost14")[1].style.marginTop = 25 + "px";

  var x=document.createElement("div");
  x.setAttribute("id","thirdcost5");
  x1 = document.createTextNode("Детское");
  document.getElementById("leftcostdown1").appendChild(x);
   document.getElementById("thirdcost5").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","thirdcost14");
  x1 = document.createTextNode("всё от 500 руб.");
  document.getElementById("thirdcost5").appendChild(x);
   document.getElementsByClassName("thirdcost14")[2].appendChild(x1);
   document.getElementsByClassName("thirdcost14")[2].style.marginTop = 31 + "px";


if (document.documentElement.clientWidth >= 1300){
   document.getElementById("costhyperdiv2").style.marginTop = 650 + "px";

} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
   document.getElementById("costhyperdiv2").style.marginTop = 476 + "px";

}


document.getElementById("costhyper2").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper2").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order2");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv2").appendChild(x);
  document.getElementById("order2").appendChild(x1);
  costcount2++;
} else {                                    // открывается скобка на 1624 строке
if (costbool2 == false){
  if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = 726 + -progress * 726 + "px";
        }
      });

} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = 476 + -progress * 476 + "px";
        }
      });

}

  x=document.createElement("button");
  x.setAttribute("id","costbutton2");

  x.setAttribute("onClick","AddCost2()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("five")[0].appendChild(x);
  document.getElementById("costbutton2").appendChild(x1);
    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton2").appendChild(x);
    if ($('#showmore2').length == 1)
    document.getElementById("costbutton2").style.marginTop = 100 + 'px';
  else 
        document.getElementById("costbutton2").style.marginTop = 40 + 'px';

  setTimeout(appear,1200);


  function appear(){
animate({
        duration: 700,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton2").style.opacity = progress;
        }
      });
}

} else {
  e3 = document.getElementById('costbutton2');
            e3.parentNode.removeChild(e3);
  if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = progress * 726 + "px";
        }
      });

} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost2").style.height = progress * 526 + "px";
        }
      });

}

}

}

 costbool2 = !costbool2;



}

function AddCost3(){
if (costcount3 == 0){
if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = progress * 213 + "px";
        }
      });

    document.getElementById("leftcostdown2").style.paddingTop = 55 + "px";
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
            document.getElementsByClassName("six")[0].style.marginTop = 50 + "px";
    animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = progress * 140 + "px";
        }
      });

    document.getElementById("leftcostdown2").style.paddingTop = 35 + "px";
}



  document.getElementById("cost3").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("class","fourcost1");
  x1 = document.createTextNode("От 5 000 руб. до 15 000 руб.");
  document.getElementById("leftcostdown2").appendChild(x);
   document.getElementsByClassName("fourcost1")[0].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","fourcost11");
  x1 = document.createTextNode("в зависимости от сложности и формата");
  document.getElementById("leftcostdown2").appendChild(x);
   document.getElementsByClassName("fourcost11")[0].appendChild(x1);



if (document.documentElement.clientWidth >= 1300){
document.getElementById("costhyperdiv3").style.marginTop = 55 + "px";
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
document.getElementById("costhyperdiv3").style.marginTop = 35 + "px";
}
   


document.getElementById("costhyper3").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper3").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order3");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv3").appendChild(x);
  document.getElementById("order3").appendChild(x1);
  costcount3++;
} else {                                    // открывается скобка на 1624 строке
if (costbool3 == false){
  if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = 213 + -progress * 213 + "px";
        }
      });} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = 140 + -progress * 140 + "px";
        }
      });}

  x=document.createElement("button");
  x.setAttribute("id","costbutton3");

  x.setAttribute("onClick","AddCost3()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("six1")[0].appendChild(x);
  document.getElementById("costbutton3").appendChild(x1);
  document.getElementById("costbutton3").style.marginTop = kek44444 + "px";
    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton3").appendChild(x);

   if ($('#showmore3').length == 1)
    document.getElementById("costbutton3").style.marginTop = 100 + 'px';
  else 
        document.getElementById("costbutton3").style.marginTop = 40 + 'px';

  setTimeout(appear,1200);


  function appear(){
animate({
        duration: 700,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton3").style.opacity = progress;
        }
      });
}

} else {
  e3 = document.getElementById('costbutton3');
            e3.parentNode.removeChild(e3);



if (document.documentElement.clientWidth >= 1300){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = progress * 213 + "px";
        }
      });
} else if (document.documentElement.clientWidth < 1300 && document.documentElement.clientWidth > 768){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost3").style.height = progress * 140 + "px";
        }
      });
}

}

}

 costbool3 = !costbool3;



}

</script>


<div class="third">

<div class="left3">
Портреты
</div>
<div class="right3">  
	<nav id="show"><a onClick="AddItem()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main31">
	<img id="f1" src="pics/1.png">
	<img id="f2" src="pics/2.png">
	<img id="f3" src="pics/3.png">
	<img id="f4" src="pics/4.png">
	<img id="f5" src="pics/5.png">
	<img id="f6" src="pics/6.png">
	<img id="f7" src="pics/7.png">
	<img id="f8" src="pics/8.png">
	<img id="f9" src="pics/9.png">
  <img id="f10" src="pics/10.png">


</div>
    <section id="31"></section>
</div>
<div id="items"></div>
	<nav id="knopka"></nav>

</div>
<div id="cost">
  <div id="insidecost">
  

</div>

<div id="costhyperdiv"><a id="costhyper" onClick="AddCost()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="4"></section>
<div class="four">

<div class="left3">
Роспись интерьера
</div>
<div class="right3">  
    <nav id="show1"><a onClick="AddItem1()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main21">
    <img id="f1" src="pics/11.png">
    <img id="f2" src="pics/12.png">
    <img id="f3" src="pics/13.png">
    <img id="f4" src="pics/14.png">
    <img id="f5" src="pics/15.png">
    <img id="f6" src="pics/16.png">
    <img id="f7" src="pics/17.png">
    <img id="f8" src="pics/18.png">
    <img id="f9" src="pics/19.png">
    <img id="f10" src="pics/20.png">
    

</div>
</div>
<section id="32"></section>
<div id="items1"></div>
    <div id="knopka1"></div>
</div>
<div id="cost1">
  <div id="leftcostdown">
  

</div>

<div id="costhyperdiv1"><a id="costhyper1" onClick="AddCost1()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="5"></section>
<div class="five">

<div class="left3">
Роспись одежды
</div>
<div class="right3">  
    <nav id="show2"><a onClick="AddItem2()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main11">
    <img id="f1" src="pics/21.png">
    <img id="f2" src="pics/22.png">
    <img id="f3" src="pics/23.png">
    <img id="f4" src="pics/24.png">
    <img id="f5" src="pics/25.png">
    <img id="f6" src="pics/26.png">
    <img id="f7" src="pics/27.png">
    <img id="f8" src="pics/28.png">
    <img id="f9" src="pics/29.png">
    <img id="f10" src="pics/30.png">
    

</div>
</div>
<section id="33"></section>
<div id="items2"></div>
    <div id="knopka2"></div>
</div>
<div id="cost2">
  <div id="leftcostdown1">
  

</div>

<div id="costhyperdiv2"><a id="costhyper2" onClick="AddCost2()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="61"></section>
<div class="six1">

<div class="left3">
Рельефное панно
</div>
<div class="right3">  
    <nav id="show3"><a onClick="AddItem3()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main01">
    <img id="f1" src="pics/31.png">
    <img id="f2" src="pics/32.png">
    <img id="f3" src="pics/33.png">
    <img id="f4" src="pics/34.png">
    <img id="f5" src="pics/35.png">
    <img id="f6" src="pics/36.png">
    <img id="f7" src="pics/37.png">
    <img id="f8" src="pics/38.png">
    <img id="f9" src="pics/39.png">
    <img id="f10" src="pics/40.png">
    
    

</div>
</div>
<section id="34"></section>
<div id="items3"></div>
    <div id="knopka3"></div>
</div>
<div id="cost3">
  <div id="leftcostdown2">
  

</div>

<div id="costhyperdiv3"><a id="costhyper3" onClick="AddCost3()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>

<section id="6"></section>
 <div class="six">
 	<div class="insideleft6">
  <h1 class="sixh">Контакты</h1>
Предоставляем свои услуги в Москве и Подмосковье. По всем вопросам Вы можете связаться с нами по телефону 8 (929) 632-26-4 или 8 (925) 310-51-15 или написать нам в социальных сетях
<p id="learnmore6">  <a id="end" href="https://telegram.org"><img class="socialimg1" src="tel.svg"></a>
  <a id="end" href="https://www.whatsapp.com"><img class="socialimg1" src="wut.svg"></a>
  <a id="end" href="https://www.instagram.com"><img class="socialimg1" src="insta.svg"></a>
  <a id="end" href="www.facebook.com"><img class="socialimg1" src="facebook.svg"></a>
  <a id="end" href="https://vk.com"><img class="socialimg1" src="vk.svg"></a></p>
</div>
<div class="insideright6">	
    <form action="mail.php" method="POST">
	<input required class="input" name="username" type="text" placeholder="Ваше имя"> </input>
	<input required class="input" name="userphone" type="tel" placeholder="Телефон"> </input>
	<input required class="input" name="email" type="email" placeholder="Email"> </input>
	<button type="submit" class="order">Заказать</button>

	<img class="file" src="file.png">
</form>
</div>
<div class="kek">
    <div class="navbar-header1">
      <div class="navbar-brand"><img id="bruh" src="bruh.svg"> Painting Workshop <p id="bruh1">Мастерская живописи</p><div>
      
    </div>
    <div class="navbar-right">
      <nav class="stroke">
      <ul class="navbar-right" align="center">
                <li class="active"><a class="special" href="#1">Главная</a></li>
        <li><a class="special" href="#2">О нас</a></li>
        <li><a class="special" href="#3">Портфолио</a></li>
      </ul>
      
    </nav>
    </div>

    <a class="phone">Тел.: +7 (929) 632-26-41</a>
</div>
</div>
</div>
  </div>

  </div>
</div>
</div>
</div>
</body>
</html>