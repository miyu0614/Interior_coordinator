  //要素の取得 → クリックされたとき
  document.getElementById('list_1').addEventListener('click',function(){
    // 要素の取得 → 背景色を変える
     var red = document.getElementById('list_1');
     var green = document.getElementById('font_1');
     red.classList.toggle("apple");
     green.classList.toggle("apple");

     document.getElementById("list_2").classList.remove("apple");
     document.getElementById("list_3").classList.remove("apple");
     document.getElementById("list_4").classList.remove("apple");
    
     });

       //要素の取得 → クリックされたとき
  document.getElementById('list_2').addEventListener('click',function(){
    // 要素の取得 → 背景色を変える
     var red = document.getElementById('list_2');
     var green = document.getElementById('font_2');
     red.classList.toggle("apple");
     green.classList.toggle("apple");

     document.getElementById("list_1").classList.remove("apple");
     document.getElementById("list_3").classList.remove("apple");
     document.getElementById("list_4").classList.remove("apple");
     });


       //要素の取得 → クリックされたとき
       document.getElementById('list_3').addEventListener('click',function(){
        // 要素の取得 → 背景色を変える
         var red = document.getElementById('list_3');
         var green = document.getElementById('font_3');
         red.classList.toggle("apple");
         green.classList.toggle("apple");
    
         document.getElementById("list_1").classList.remove("apple");
         document.getElementById("list_2").classList.remove("apple");
         document.getElementById("list_4").classList.remove("apple");
         });
        

       //要素の取得 → クリックされたとき
       document.getElementById('list_4').addEventListener('click',function(){
        // 要素の取得 → 背景色を変える
         var red = document.getElementById('list_4');
         var green = document.getElementById('font_4');
         red.classList.toggle("apple");
         green.classList.toggle("apple");
    
         document.getElementById("list_1").classList.remove("apple");
         document.getElementById("list_2").classList.remove("apple");
         document.getElementById("list_3").classList.remove("apple");
         });