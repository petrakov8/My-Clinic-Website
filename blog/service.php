<?php

include 'partials/header.php';

?>

    <section class="singlepost">
        <div class="container singlepost__container">
            <h2> Огляд стоматолога. </h2>
            <div class="singlepost__thumbnail">
                <img src="./images/s1.jpg">
            </div>
            <p>
            Ось кілька причин, чому регулярні візити до стоматолога настільки важливі:
            </p>   
            <p>1. Виявлення та попередження проблем</p>  
            <p>Стоматологи мають професійні навички та інструменти для раннього виявлення потенційних проблем з зубами та яснами. Вони можуть виявити початкові ознаки карієсу, пародонтиту, пульпіту та інших стоматологічних захворювань. Раннє виявлення і лікування таких проблем може запобігти подальшому поширенню і запобігти серйознішим ускладненням.</p> 
            <p>2. Професійна чистка зубів</p> 
            <p>Одним з основних аспектів огляду стоматолога є професійна чистка зубів. Ця процедура включає видалення зубного нальоту, зубного каменю та інших відкладень, які можуть накопичуватися на поверхні зубів після щоденного чищення. Професійна чистка допомагає зберегти зуби чистими, здоровими та запобігає розвитку карієсу та пародонтиту.</p> 
            <p>3. Поради щодо гігієни ротової порожнини</p> 
            <p>Стоматологи є найкращими консультантами щодо правильної гігієни ротової порожнини. Вони можуть надати вам індивідуальні поради та рекомендації щодо правильного чищення зубів, використання зубної нитки, використання міжзубних щіток та розповісти про дієту, яка сприяє здоров'ю зубів.</p> 
            <p>Процедура огляду стоматолога</p> 
            <p>Під час візиту до стоматолога на огляд, ви можете очікувати такі процедури:</p> 
            <p>1. Перевірка медичної історії: Стоматолог попросить вас заповнити анкету з медичною історією та буде задавати питання щодо вашого здоров'я і раніше виниклих стоматологічних проблем.</p> 
            <p>2. Візуальний огляд: Стоматолог огляне ваші зуби, ясна, язик та ротову порожнину в цілому. Він аналізуватиме стан вашого зубного нальоту, наявність карієсу, стан ясен, а також може провести огляд на наявність ран або пухлин.</p> 
            <p>3. Рентгенівський знімок: Залежно від потреби, стоматолог може замовити рентгенівські знімки для отримання більш детальної інформації про стан зубів та підщелепної області.</p> 
            <p>4. Професійна чистка: Після огляду стоматолог може запропонувати професійну чистку зубів. Вона включає видалення зубного нальоту, зубного каменю та полірування зубів.</p> 
        </div>
    </section>
    <!--=================== END OF SINGLE POST ===================-->

    <section class="doctor">
        <div class="container doctors__container">
            <article class="doctor">
                <div class="doctor__thumbail">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="doctor__info">
                    <h3 class="doctor_title"><a href="doctor.php">Олександр Левін</a></h3>
                    <p class="doctor__body">Стаж 3 роки.</p>
                </div>
                <div class="doctor_shedule">
                        <h4 class="doctor_ір">Вільні години лікаря на сьогодні</a></h3>
                    <div class="doctor_time" >
                        <form action="add-app-logic.php" method="post">
                            <button style="width:33.3%">17:30</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">18:30</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">19:00</button>
                        </form>
                    </div>
                </div>
            </article>
            <article class="doctor">
                <div class="doctor__thumbail">
                    <img src="./images/avatar3.jpg">
                </div>
                <div class="doctor__info">
                    <h3 class="doctor_title"><a href="doctor.php">Богдан Василенко</a></h3>
                    <p class="doctor__body">Стаж 5 років.</p>
                </div>
                <div class="doctor_shedule">
                        <h4 class="doctor_ір">Вільні години лікаря на сьогодні</a></h3>
                    <div class="doctor_time" >
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">12:00</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">12:30</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">14:00</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">15:30</button>
                        </form>
                        <form action="add-app-logic.php" method="get">
                            <button style="width:33.3%">17:30</button>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </section>
     <!--=================== END OF DOCTORSS ===================-->

<?php

include 'partials/footer.php';

?>