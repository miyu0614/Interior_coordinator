<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "style.css">
    <title>インテリアコーディネート</title>
    <style>

      #list_1.apple {
        background: #941947;
      }
      #font_1.apple {
       color: #fff;
      }

      #list_2.apple {
        background: #941947;
      }
      #font_2.apple {
       color: #fff;
      }

      #list_3.apple {
        background: #941947;
      }
      #font_3.apple {
       color: #fff;
      }

      #list_4.apple {
        background: #941947;
      }
      #font_4.apple {
       color: #fff;
      }

    </style>
    
</head>

<body background="images/p0435_l.jpeg">
   
    <header>

        <section class = header>
        <div class = img>
            <img class = img src="images/logo_b14.png" alt = "ロゴ画像">
        </div>
        <div class = menu>
            <ul class = menu_list id = menu_list>
                <div class = list id="list_1"><li><a id = font_1 href = "#profile">Profile</a></li></div>
                <div class = list id="list_2"><li><a id = font_2 href = "#works">Works</a></li></div>
                <div class = list id="list_3"><li><a id = font_3 href = "#process">Process</a></li></div>
                <div class = list id="list_4"><li><a id = font_4 href = "#contact">Contact</a></li></div>
            </ul>
        </div>      
        </section>
    </header>

    <main>
        <section class = main_img>
            <p class= img_title>Color your life</p>
            <img src = "images/main.jpg" alt = "メイン画像">
        </section>

       <section>
           <h1 id = profile>profile</h1>

           <hr style="height: 1px; width: 800px; ">

           <wrapper class = profile>
               <div class =profile_wrapper>
                   <img class = profile_img src = "images/woman.jpg" alt = "女性">
                   <div class = name>
                       <p >XXXXXXX<br>
                       AAAAAAA</p>
                   </div>
               </div>
               <div class = profile_contents>
                   <p class = contents>XXXXXXXX
                       <br>XXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
               </div>
           </wrapper>
       </section>


       <section>
        <h1 id = works>Works</h1>

        <hr style="height: 1px; width: 800px;">

        <div class = box>
            <wrapper class = works_box>
                <div>
                    <a href = "work_1.php"><img class = works_img  src = "images/room1_1.jpg" alt = "ルーム2"></a>
                    <p class =ex>神奈川県<br>H様</p>
                </div>
                <div>
                    <a href = "work_2.php"><img class = works_img src = "images/room2_1.jpg" alt = "ルーム2"></a>
                    <p class =ex>埼玉県<br>T様</p>
                </div>
                <div>
                    <a href = "work_3.php"><img class = works_img src = "images/room3_1.jpg" alt = "ルーム3"></a>
                    <p class =ex>東京都<br>M様</p>
                </div>
                <div>
                    <a href = "work_4.php"><img class = works_img src = "images/room4_1.jpg" alt = "ルーム4"></a>
                    <p class =ex>千葉県千葉県<br>Y様</p>
                </div>
            </wrapper>
        </div>
    </section>

    <section>
        <h1 id = process>Process</h1>

        <hr style="height: 1px; width: 800px;">

        <div class = box>
            <wrapper class = works_box>
                <div>
                    <a href = "#"><img class = process_img  src = "images/soudann.jpg" alt = "相談"></a>
                    <p class =ex>無料相談</p>
                </div>
                <div class = yazirushi><p>＞</p></div>
                <div>
                    <a href = "#"><img class = process_img src = "images/3D_2.jpg" alt = "3D"></a>
                    <p class =ex>3Dシュミレーション</p>
                </div>
                <div class = yazirushi><p>＞</p></div>
                <div>
                    <a href = "#"><img class = process_img src = "images/mitumori.jpg" alt = "見積り"></a>
                    <p class =ex>見積り</p>
                </div>
                <div class = yazirushi><p>＞</p></div>
                <div>
                    <a href = "#"><img class = process_img src = "images/kaguhaiti.jpg" alt = "家具"></a>
                    <p class =ex>家具納品、コーディネート</p>
                </div>
            </wrapper>
        </div>
    </section>

    <section>
        <h1 id = contact>Contact</h1>

        <hr style="height: 1px; width: 800px;">
        <div class = contact_title>
            <p class = content_title>*ご予約は下記よりお申し込みください</p>
        </div>


        <form action = "comfirm.php" method="post">
 
        <div class ="input-area">
            <p class = title>名前</p>
            <input type="text" name = "name" class = folder placeholder = "山田　太郎" requied>
        </div>

        <div class ="input-area">
            <p class = title>メール</p>
            <input type="text" name = "email" class = folder placeholder = "abc@abc.com" requied>
        </div>

        <div class ="input-area">
            <p>性別</p>
            <label><input type="radio" name = "sex" class = 'sex' value = "男性" checked>男性</label>
            <label><input type="radio" name = "sex" class = 'sex' value = "女性" checked>女性</label>
        </div>

        <div class = "input-area">
            <p>お問合せ理由</p>
            <label><input type = "checkbox" name = "reason[]" value="無料相談予約">無料相談予約</label>
            <label><input type="checkbox" name="reason[]" value="ご意見ご要望">ご意見ご要望</label>
		 	<label><input type="checkbox" name="reason[]" value="資料請求">資料請求</label>
		 	<label><input type="checkbox" name="reason[]" value="質問">質問</label>
		 	<label><input type="checkbox" name="reason[]" value="その他">その他</label>
        </div>

        <div class = "input-area">
            <p>詳細</p>
            <textarea name="contact_body" class = "contact_body" row="5" placeholder = "具体的な内容
            *ご予約の場合は・ご希望日時:●●/●●をご記入ください。" required></textarea>
        </div>

        <div class = "input-area">
            <input type="submit" name="submit" value = "Submit>" class = "btn_border">
        </div>
            </form>
            
    </section>
    </main>
    <script src="header.js" charset="utf-8"></script>

    <footer class = contena>
    <img class = img src="images/logo_b141_footer.png" alt = "ロゴ画像">
        <ul class = footer>
            <li class = footer_content>会社名　   ：XXXXXXXXXXX</li>
            <li class = footer_content>会社住所   ：〒XXX-XXXX</li>
           <li class = footer_content> 　　　　　　XXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
            <li class = footer_content>会社TELL  ：XXX-XXXX</li>
        </ul>
        <div class = copy>
            <p>© miyumorikke.net</p>
        </div>
        </footer>
</body>
</html>