<?php

$arrBox = array();

  // 아래는 각 박스에 해당되는 연관배열 선언이다.

// box1
$arrBox[0]=array( 'p1'=>'NIGHT FIREWORKS',
                 'p2'=>'다채로운 불꽃놀이',
                 'p3'=> '2일, 14일 19:00, 21:00에 예정되어 있는 불꽃놀이에 참여하세요. 다채롭고 새로운 스타일의 불꽃을 가족 모두와 함께 즐기세요!!'
                 );
// box2
$arrBox[1]=array( 'p1'=>'FOOD TRUCK',
                  'p2'=>"야경을 음식과 함께",
                  'p3' =>'푸드트럭 기업이 꿈을 키워 나가는 곳 혁신의 시작을 함께하는 곳, 각종 먹거리들이 준비되어 있습니다.',
                 );
// box3
$arrBox[2]=array('p1'=>'WITH CRUISE SHIP',
                  'p2'=>"유람선과 함께 한강투어",
                  'p3' =>'2014년 이후 서울을 대표하는 유람선으로 아름다운 한강 야경을 여러분들과 함께합니다. 불빛에 따라 반사되는 아름다운 물결이 인상적입니다',
                 );
// box4
$arrBox[3]=array(
                 'p1'=>'FESTIVAL',
                 'p2'=>"함께 할 감동의 순간들",
                 'p3' =>'봄 내음 가득한 벚꽃축제, 가을하늘을 수놓은 불꽃축제가 빛나는 추억의 순간으로 함께합니다',
                  );
// box5
$arrBox[4]=array(
                 'p1'=>'아름다운 추억',
                 'p2'=>"공연장소 제공",
                 'p3' =>'여러분들의 즐거운 하루를 위해 항상 유명한 공연, 가수들이 아닌 일반인들 또는 인디밴드들의 공연장소 역시 제공합니다. Lifeplus Soul 페스티벌은 공연이 없는 날에도 함께합니다',
                  );

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/auto.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="silde">
 <div class="gallery_wrap">
     <div class="gallery">
         <ul>
        <?php
        $arrImg = array();
             $i = 0;
        foreach($arrBox as $key){

            array_push($arrImg,"images/festival/auto$i.jpg");
          echo "<li><img src='$arrImg[$i]' alt='auto$i'><div class='s_box li_$i'>"."<p class=box_p1>".$key['p1']."</p>".
          "<p class=box_p2>".$key['p2']."</p>"."<p class=box_p3>".$key['p3']."</p>"
          ."</div></li>";
            $i++;
        }

        ?>

          </ul>
      </div>
      <div class="slide_wrap">
          <div class="left_bg"><span class="arrow arrow_left"></span></div>
          <div class="right_bg"><span class="arrow arrow_right"></span></div>
<!--
          <span class="box">
              <p class="box_p1">
                 Riding
              </p>
              <p class="box_p2">
                 한강라이딩
              </p>
              <p class="box_p3">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum tempore nesciunt consequuntur non quos odit!

              </p>
          </span>
-->
      </div>
  </div>
</div>
</body>

 <script>
    var ul = document.querySelector('.gallery>ul');
    var li = document.querySelectorAll('.gallery>ul>li');
    var left = document.querySelectorAll('.left_bg')[0];
    var right = document.querySelectorAll('.right_bg')[0];




    left.addEventListener('click',leftManual);
    function leftManual(){

        var li_first = document.querySelectorAll('.gallery>ul>li')[0];
        var li_last = document.querySelectorAll('.gallery>ul>li')[4];


        ul.insertBefore(li_last,li_first);

//        클릭하면 li의 마지막 인덱스를 li의 첫번째 앞에 삽입 insertBefore
    }


    right.addEventListener('click',rightManual);
    function rightManual(){

        var li_first = document.querySelectorAll('.gallery>ul>li')[0];


        $('.gallery>ul').append($('.gallery>ul>li:first-child'));

        //ul.appendChild(li_first);
//        setTimeout(ul.style.left="0%",100);
//        setTimeout(ul.style.left="-100%",0);

//        클릭하면 li의 첫번째 인덱스를 ul의 마지막에 appendchild
    }

  </script>
</html>
