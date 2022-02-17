<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
    <header>
        <div class="Group_597 flex">      
            <div class="vector_logo">
                <img src="img/Lord_logo2.png" alt="">
            </div>
            <div class="tel">
                <p>Позвоните сейчас</p>
                <a href="tel:8 495 230 21 55">8 495 230 21 55</a>
            </div>
            <div class="consultation">
                <div class="Arrow_right_light center"><img src="img/arrow.png" alt=""></div>
                <div class="consultation_text"><p> Записаться на консультацию <br> юриста</p></div>
            </div>
        </div>
    </header>
    <section class="QuizSection flex">
        <div class="quizz--img"><img src="img/justyce.png" alt=""></div>
    <div id="quiz">

        <form action="index.php" method="POST" id="quiz_form">
                
            <input type="hidden" name="uri" value="https://site.ru"/> 
                
            <div id="step0">
                <small>Списание долгов на основании ФЗ№ 127 «О нестостоятельности (банкротстве)»</small>
                <h1>Спишем ваши долги</h1>
                <div class="step0--ui">
                    <h3>Пройдите тест и получите:</h3>
                    <p> <img src="img/Arrow_right_light.png" alt=""> Варианты списания вашего долга</p>
                    <p><img src="img/Arrow_right_light.png" alt=""> Консультацию юриста по списанию долгов</p>
                    <p><img src="img/Arrow_right_light.png" alt=""> Сроки и стоимость списания</p>
                    <p><img src="img/Arrow_right_light.png" alt="">Список необходимых документов для начала процедуры</p>
                </div>
                <p><a id="to_step1" class="btn"><img src="img/button.png" alt=""></a></p>
            </div>
            
            <div id="other_steps">
                        
                <div id="step1" class="step">
                    <img src="img/Group 102.png" alt="">
                                                       
                    <div id="type-home" class="step-quest flex row">
                        <h2>Укажите общую сумму ваших долгов</h2>
                        
                        <div class="flex">	
                            <div id="check1" class="check"> ✓ </div>
                            <label for="type-home_1_input">
                                <input id="type-home_1_input" type="radio" name="type-home" value="менее 500 000  рублей">
                                <p id="type-home_1_input"></p> менее 500 000  рублей
                            </label>
                        </div>
                        
                        <div class="flex">				
                            <div id="check2" class="check"> ✓ </div>
                            <label for="type-home_2_input">
                                <input id="type-home_2_input" type="radio" name="type-home" value="от 500 000 до 1 000 000 рублей">
                                от 500 000 до 1 000 000 рублей
                            </label>
                        </div>				
    
                        <div class="flex">
                            <div id="check3" class="check"> ✓ </div>
                            <label for="type-home_3_input">
                                <input id="type-home_3_input" type="radio" name="type-home" value="от 1 000 000 до 5 000 000 рублей">
                                от 1 000 000 до 5 000 000 рублей
                            </label>
                        </div>					
    
                        <div class="flex">
                            <div id="check4" class="check"> ✓ </div>
                            <label for="type-home_4_input">
                                <input id="type-home_4_input" type="radio" name="type-home" value="более 5 000 000">
                                более 5 000 000
                            </label>
                        </div>				
                                            
                    </div>
                            
                    <div class="quiz_buttons">				
                        <p><a id="to_step2" class="btn"><img src="img/buttonnxt.png" alt=""></a></p>
                    </div>
                                    
                </div>
                
                <div id="step2" class="step">
                    <img src="img/group2.png" alt="">
                                    
                    <h2>Есть ли у вас в собственности имущество?</h2>
                                        
                    <div id="type-sobs" class="step-quest flex row">
                        <div class="flex">	
                            <div id="check5" class="check"> ✓ </div>
                            <label for="type-sobs_1_input">
                                <input id="type-sobs_1_input" type="radio" name="type-sobs" value="Да, есть квартира (две и более)">
                                Да, есть квартира (две и более)
                            </label>
                        </div>
                        
                        <div class="flex">				
                            <div id="check6" class="check"> ✓ </div>
                            <label for="type-sobs_2_input">
                                <input id="type-sobs_2_input" type="radio" name="type-sobs" value="Да, есть автомобиль">
                                Да, есть автомобиль
                            </label>
                        </div>				
    
                        <div class="flex">
                            <div id="check7" class="check"> ✓ </div>
                            <label for="type-sobs_3_input">
                                <input id="type-sobs_3_input" type="radio" name="type-sobs" value="Да, есть коммерческая собственность">
                                Да, есть коммерческая собственность
                            </label>
                        </div>					
    
                        <div class="flex">
                            <div id="check8" class="check"> ✓ </div>
                            <label for="type-sobs_4_input">
                                <input id="type-sobs_4_input" type="radio" name="type-sobs" value="Да, есть другая собственность">
                                Да, есть другая собственность
                            </label>
                        </div>

                        <div class="flex">
                            <div id="check9" class="check"> ✓ </div>
                            <label for="type-sobs_5_input">
                                <input id="type-sobs_5_input" type="radio" name="type-sobs" value="Нет, ничего нет">
                                Нет, ничего нет
                            </label>
                        </div>				
                                            
                    </div>
                            
                    <div class="quiz_buttons">		
                        <p><a class="btn back_btn" href="javascript:history.back()"><img src="img/buttonEnd.png" alt=""></a></p>			
                        <p><a id="to_step3" class="btn"><img src="img/buttonnxt.png" alt=""></a></p>
                    </div>
                                    
                </div>
                
                <div id="step3" class="step">
                    <img src="img/Group3.png" alt="">

                    <h2>Совершали ли вы крупные сделки за последние 3 года??</h2>
                    
                                        
                    <div id="type-repair" class="step-quest flex row">
                                            
                        <div class="flex">		
                            <div id="check10" class="check"> ✓ </div>			
                        <label for="type-repair_1_input">
                            <input id="type-repair_1_input" type="checkbox" name="type-repair" value="Да. была продажа квартиры / авто / участка">
                            Да. была продажа квартиры / авто / участка
                        </label>
                        </div>
                            
                        <div class="flex">	
                            <div id="check11" class="check"> ✓ </div>
                        <label for="type-repair_2_input">
                            <input id="type-repair_2_input" type="checkbox" name="type-repair" value="Да. была продажа коммерческой собственности">
                            Да. была продажа коммерческой собственности
                        </label>
                        </div>
                        
                        <div class="flex">
                            <div id="check12" class="check"> ✓ </div>
                        <label for="type-repair_3_input">
                            <input id="type-repair_3_input" type="checkbox" name="type-repair" value="Да, была продажа ИП / ООО">
                            Да, была продажа ИП / ООО
                        </label>
                        </div>
                        
                        <div class="flex">
                            <div id="check13" class="check"> ✓ </div>
                        <label for="type-repair_4_input">
                            <input id="type-repair_4_input" type="checkbox" name="type-repair" value="Да, была продажа (другое)">
                            Да, была продажа (другое)
                        </label>
                        </div>	

                        <div class="flex">
                            <div id="check14" class="check"> ✓ </div>
                            <label for="type-repair_5_input">
                                <input id="type-repair_5_input" type="checkbox" name="type-repair" value="Нет, ничего не было">
                                Нет, ничего не было
                            </label>
                            </div>	
                        
                    </div>
                                        
                    <div class="quiz_buttons">		
                        <p><a class="btn back_btn" href="javascript:history.back()"><img src="img/buttonEnd.png" alt=""></a></p>			
                        <p><a id="to_step4" class="btn"><img src="img/buttonnxt.png" alt=""></a></p>
                    </div>
                                    
                </div>
                
                <div id="step4" class="step">
                    <img src="img/Group4.png" alt="">
                                    
                    <h2>Как вы бы хотели получить варианты <br> списанию долгов и консультацию <br> юриста?</h2>
                                        
                    <div id="design-project" class="step-quest flex row">
                                            
                        <div class="flex" style="margin-top: 20px">						
                            <div id="check15" class="check"> ✓ </div>				
                        <label for="design-project_1_input" >
                            <input id="design-project_1_input" type="checkbox" name="design-project" value="Да">					
                            В офисе «ЮрКонсалт+»
                        </label>
                        </div>
                        
                        <div class="flex">
                            <div id="check16" class="check"> ✓ </div>
                        <label for="design-project_2_input">
                            <input id="design-project_2_input" type="checkbox" name="design-project" value="Нет">
                            По телефону
                        </label>
                        </div>
                        				
                                            
                    </div>
                                        
                    <div class="quiz_buttons" style="display: block;">					
                        <p><a id="btn_last_step" class="btn"><img src="img/variant.png" alt=""></a></p>
                    </div>
                                    
                </div>
                

    
            <div id="last_step" class="step">
                <img src="img/Group5.png" alt="">
                <h2>Укажите ваши контактные данные</h2>
                
                <div id="contact_fields" class="step-quest">
                    <div><input id="name_input" type="text" name="name_input" placeholder="Алексей"></div>
                    <div><input id="phone_input" type="text" name="phone" placeholder="_ ( _ _ _ ) _ _ _ - _ _ - _ _"></div>
                </div>
                                
                <p><a id="to_submit" class="btn"><img src="img/btnendquiz.png" alt=""></a></p>
                <p>*отправляя формы на данном сайте, вы даете согласие <br> на обработку персональных данных в соответствии <br> с 152-ФЗ</p>
                
                                
            </div>
                    
        </form>
       
    </div>
</section>

    <main class="flex center">
        <div>
            <img src="img/book 1.png" alt="">
            <p><b>Опытные юристы</b></p>
            <p>более 10 лет юридического стажа, более 5 лет в сфере банкротства</p>
        </div>

        <div>
            <img src="img/court 1.png" alt="">
            <p><b>Офис в центре Москвы</b></p>
            <p>5 минут от станции метро «Баррикадная», 7 минут от станций Пушкинская и Арбатская</p>
            
        </div>

        <div>
            <img src="img/agreement 1.png" alt="">
            <p><b>Гарантии в договоре</b></p>
            <p>работаем только по договору, в котором прописываем все варианты и гарантируем результат</p>
        </div>

        <div>
            <img src="img/shield.png" alt="">
            <p><b>На более 570 миллиардов</b></p>
            <p>сохранили имущество клиентов и избавили от выплат по кредитам и займам</p>
        </div>
    </main>


    <footer>
        <section class="flex">
            <div class="footer--section1">
                <a class="footer--tel" href="tel:8 495 230 21 55">+7 495 230 21 55</a> <br>
                <a class="footer--mail" href="mailto:info@lordpartners.ru">info@lordpartners.ru</a>
                <p class="footer--p--sub1">*отправляя формы на данном сайте, вы даете согласие на обработку персональных данных в соответствии с 152-ФЗ</p>
                <p class="footer--p1">При информационном содействии</p>
                <div class="flex s1img">
                    <img src="img/Эмблема_ФНС_России_(2014) 1.png" alt="">
                    <img src="img/Эмблема_ФНС_России_(2014) 1 (1).png" alt="">
                    <img src="img/image 1.png" alt="">
                    <img src="img/Эмблема_ФНС_России_(2014) 1 (2).png" alt="">
                </div>
            </div>

            <div class="footer--section2">
                <p class="footer--p2">Специализируемся на случаях:</p>
                <div class="flex">
                    <div class="footer--ul--u">
                        <p>Полное списание долгов</p>
                        <p>Частичное списание долгов</p>
                        <p>Реструктуризация долгов</p>

                        <h4><b>Больше о нас здесь</b></h4>
                        <div>
                            <a href=""><img src="img/telegram.png" alt=""></a>
                            <a href=""><img src="img/vk.png" alt=""></a>
                            <a href=""><img src="img/OK.png" alt=""></a>
                            <a href=""><img src="img/instagram.png" alt=""></a>
                        </div>
                    </div>
                    <div class="footer--ul--b">
                        <p>Банкротство ИП</p>
                        <p>Списание долгов по распискам</p>
                        <p>Списание долгов перед государством</p>
                        <h5 class="visit">г. Москва <br> Гранатный переулок 4, строение 2</h5>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer flex">
        <p>ИНН 9702007211</p>
        <p>ОГРН 1197746584760</p>
        <p>ООО «ЮрКонсалт+»</p>
        <p>Политика персональных данных</p>
    </div>
    </footer>
    <div class="exitblock">
        <div class="fon"></div>    
        <div class="modaltext">    
            <h2>Скидка 33%</h2>
            <p>на лиды в вашем городе</p>
            <span></span>
            <input class="onetxt" type="text" placeholder="Ваш регион">
            <img class="onebtn" src="img/buttonExit.png" alt="">
            <div class="twobtn">
            <input  type="text" placeholder="Ваше имя">
            <input  type="text" placeholder="Номер телефона">
            <img class="twobtnbtn"  src="img/buttonExit.png" alt="">
            </div>
            <div class="threebtn">
                <h3>Благодарим за заявку!</h3>
                <h4>Ожидайте звонка нашего юриста с номера</h4>
                <a href="tel:8 495 230 21 55">8 495 230 21 55</a>
                <div>
                    <a href=""><img src="img/telegram.png" alt=""></a>
                    <a href=""><img src="img/vk.png" alt=""></a>
                    <a href=""><img src="img/OK.png" alt=""></a>
                    <a href=""><img src="img/instagram.png" alt=""></a>
                </div>
            </div>
            
        </div>
        <div class="closeblock">+</div>
        
    </div>
    <div class="exitblockCons">
        <div class="fonCons"></div>    
        <div class="modaltextCons">  
            <h2 class="wen">Укажите ваши контактные данные</h2>
            <input  class="wen" type="text" placeholder="Ваше имя">
            <input class="wen" type="text" placeholder="Номер телефона">
            <img class="onebtnCons" src="img/buttonExit.png" alt="">
            <p class="wen" class="pCons">*отправляя формы на данном сайте, вы даете согласие на обработку персональных данных в соответствии с 152-ФЗ</p>
            <div class="twobtnCons">
                <h3>Благодарим за заявку!</h3>
                <h4>Ожидайте звонка нашего юриста с номера</h4>
                <a href="tel:8 495 230 21 55">8 495 230 21 55</a>
                <div>
                    <a href=""><img src="img/telegram.png" alt=""></a>
                    <a href=""><img src="img/vk.png" alt=""></a>
                    <a href=""><img src="img/OK.png" alt=""></a>
                    <a href=""><img src="img/instagram.png" alt=""></a>
                </div>
            </div>
            
        </div>
        <div class="closeblockCons">+</div>
        
    </div>

    <script>$.ajax({
        url: 'index.php',
        method: 'post',
        dataType: 'html',
        data: {text: 'Текст'},
        success: function(data){
            alert(data);
        }
    });</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php
$typeHome = $_POST['type-home'];
$typeSobs = $_POST['type-sobs'];
$typeRepair = $_POST['type-repair'];
$designProject = $_POST['design-project'];
$name = $_POST['name_input'];
$phone = $_POST['phone'];

$file = fopen("form.txt","at");
fwrite($file,"\n 'Имя:'$name \n 'Телефон:'$phone \n 'Общая сумма долга:'$typeHome \n 'Есть ли имущество:'$typeSobs \n 'Крупные сделки за 3 года:'$typeRepair \n 'Встреча:'$designProject \n");
fclose($file);

echo '' . $_POST['text'];

?>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="script/js.js"></script>
</body>
</html>