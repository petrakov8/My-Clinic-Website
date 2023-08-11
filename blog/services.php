<?php

include 'partials/header.php';

?>

<section class="search__bar">
        <from class="container search__bar-container" action="">
            <div>
                <i class="uil uil-search"></i>  
                <input type="search" name="" placeholder="Search">
            </div>
            <button type="submit" class="btn">Go</button>
        </from>
    </section>
    <!--=================== END OF SERACH ===================-->



    <section class="service">
        <div class="container services__container">
            <article class="service">
                <div class="service__thumbail">
                    <img src="./images/s1.jpg">
                </div>
                <div class="service__info">
                    <h3 class="service_title"><a href="service.php">Огляд стоматолога</a></h3>
                    <p class="service__body">Регулярний огляд стоматолога є ключовим елементом профілактики та догляду за зубами та яснами. Навіть якщо ви дотримуєтесь доброї гігієни ротової порожнини вдома, професійний огляд стоматолога має свої переваги.</p>
                    <h3 class="service_title">150 грн.</h3>
                </div>
            </article>
            <article class="service">
                <div class="service__thumbail">
                    <img src="./images/s2.jpg">
                </div>
                <div class="service__info">
                    <h3 class="service_title"><a href="service.php">ЕКГ (електрокардіограма)</a></h3>
                    <p class="service__body">Кардіограма серця, також відома як ЕКГ (електрокардіограма), є невід'ємною частиною діагностики та оцінки здоров'я серця. Це безболісний та неінвазивний тест, який допомагає лікарям оцінити ритм і функцію серця.</p>
                    <h3 class="service_title">400 грн.</h3>
                </div>
            </article>
        </div>
    </section>
     <!--=================== END OF Services ===================-->


     
     <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Healthy</a>
            <a href="" class="category__button">Healthy</a>
            <a href="" class="category__button">Healthy</a>
            <a href="" class="category__button">Healthy</a>
            <a href="" class="category__button">Healthy</a>
            <a href="" class="category__button">Healthy</a>
        </div>
     </section>
     <!--=================== END OF CATEGORY BUTTONS ===================-->



<?php

include 'partials/footer.php';

?>