<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>canvasで図形を描く</title>
<script type="text/javascript">
{literal}
<!--

var point = new Array();
var red_relation = new Array();
var green_relation = new Array();
var _green_relation = new Array();
var blue_relation = new Array();
//マスの位置
point[0] = {x:10,y:40};
point[1] = {x:150,y:80};
point[2] = {x:300,y:120};
point[3] = {x:500,y:120};
point[4] = {x:300,y:250};
point[5] = {x:600,y:320};
point[6] = {x:600,y:520};
point[7] = {x:600,y:1000};

red_relation[0] = {0:0,1:1};
red_relation[1] = {0:1,1:2};
red_relation[2] = {0:2,1:3};
red_relation[3] = {0:2,1:4};
red_relation[4] = {0:4,1:5};

blue_relation[0] = {0:2,1:3};
blue_relation[1] = {0:3,1:6};

green_relation[0] = {0:1,1:2,2:3};
green_relation[1] = {0:2};
green_relation[2] = {0:3,0:4};
green_relation[3] = {0:4};
green_relation[4] = {0:5};
green_relation[5] = {0:4,1:6};



function circle(x,y) {
  //描画コンテキストの取得
  var canvas = document.getElementById('sample');
  if (canvas.getContext) {
    var context = canvas.getContext('2d');
    //ここに具体的な描画内容を指定する
    //左から20上から40の位置に、幅50高さ100の四角形を描く
    //context.fillRect(20,40,50,100);
    //色を指定するには
    context.beginPath();
    context.strokeStyle = 'rgb(00,00,255)'; //枠線の色は青
    context.fillStyle = 'rgb(0,0,0)'; //塗りつぶしの色は赤
    //左から200上から80の位置に、幅100高さ50の四角の枠線を描く
    //context.strokeRect(200,80,100,50);
    //左から150上から75の位置に、半径60の半円を反時計回り（左回り）で描く
    context.arc(x,y,60,0,Math.PI*2,true);
    //context.fill();
    context.stroke();
  }
}

function line(x,y,x2,y2) {
  //描画コンテキストの取得
  var canvas = document.getElementById('sample');
      var cs=canvas.getContext('2d');
    /* 直線を描く */
    cs.beginPath();             // パスのリセット
    cs.lineWidth = 2;           // 線の太さ
    cs.strokeStyle='red';   // 線の色
    cs.moveTo(x,y);           // 開始位置
    cs.lineTo(x2,y2);         // 次の位置
    cs.stroke();                // 描画
}
function green_line(x,y,x2,y2) {
  //描画コンテキストの取得
  var canvas = document.getElementById('sample');
      var cs=canvas.getContext('2d');
    /* 直線を描く */
    cs.beginPath();             // パスのリセット
    cs.lineWidth = 2;           // 線の太さ
    cs.strokeStyle='green';   // 線の色
    cs.moveTo(x,y);           // 開始位置
    cs.lineTo(x2,y2);         // 次の位置
    cs.stroke();                // 描画
}
function blue_line(x,y,x2,y2) {
  //描画コンテキストの取得
  var canvas = document.getElementById('sample');
      var cs=canvas.getContext('2d');
    /* 直線を描く */
    cs.beginPath();             // パスのリセット
    cs.lineWidth = 2;           // 線の太さ
    cs.strokeStyle="blue";   // 線の色
    cs.moveTo(x,y);           // 開始位置
    cs.lineTo(x2,y2);         // 次の位置
    cs.stroke();                // 描画
}
function draw() {
    point.forEach(function(circle_p,i) {
        circle(circle_p['x'],circle_p['y']);
    });

    red_relation.forEach(function(line_r,i) {
        line(point[line_r[0]]['x'],point[line_r[0]]['y'],point[line_r[1]]['x'],point[line_r[1]]['y']);
    });
    blue_relation.forEach(function(line_r,i) {
        blue_line(point[line_r[0]]['x'],point[line_r[0]]['y'],point[line_r[1]]['x'],point[line_r[1]]['y']);
    });

    //alert(green_relation.length);
    //alert(green_relation[0].length);
    var count = 0;
    count = Get_Hash_Length(green_relation[0]);
    //alert(count);

    for (var loop=0; loop<green_relation.length;loop++) {
        count = Get_Hash_Length(green_relation[loop]);
        for (var loop2=0; loop2<count;loop2++) {
     //       green_line(point[loop]['x'],point[loop]['y'],point[green_relation[loop][loop2]]['x'],point[green_relation[loop][loop2]]['y']);
        }
    }
}

function Get_Hash_Length(arr){
var cnt=0;
 for(var key in arr){
  cnt++;
 }
return cnt;
}
//-->
{/literal}
</script>
</head>
<body onLoad="draw()">
<h2>Canvasで図形を描く</h2>
<canvas width="1500" height="1500" id="sample" >
図形を表示するには、canvasタグをサポートしたブラウザが必要です。
</canvas>
</body>
</html>
