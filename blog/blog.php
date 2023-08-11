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
            
    <section class="posts">
        <div class="container posts__container">
             <article class="post">
                <div class="post__thumbail">
                    <img src="./images/blog1.jpg">
                </div>
                <div class="post__info">
                <a href="category-posts.php" class="category__button">Healthy food</a>
                <h2 class="post__title"><a href="post.php">Які фрукти та овочі понижують сахар в крові?</a></h2>
                <p class="post__body">
                У помірних дозах цукор корисний і навіть потрібний. Шкідливий саме надлишок цукру: він викликає ожиріння, карієс, діабет другого типу. Необхідну для нормальної діяльності організму норму цукру потрібно одержувати із природних джерел цукру: овочів, фруктів, круп, молока, горіхів.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Aleksandr Levin</h5>
                        <small>May 17, 2023 - 13:35</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/blog4.png">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Sport</a>
                    <h3 class="post_title"><a href="post.php">Правильний набір мишечної маси</a></h3>
                    <p class="post__body">Отримання м'язової маси є однією з найпопулярніших цілей фітнесу та тренувань у сучасному світі. Багато людей прагнуть досягти спортивної фігури, збільшити силу та покращити загальний стан здоров'я. Однак, правильний набір м'язової маси вимагає знань, постійної праці та відповідного підходу.</p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar5.jpeg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Nikita Kuzmin</h5>
                            <small>May 19, 2023 - 15:10 </small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/blog3.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Sport</a>
                    <h3 class="post_title"><a href="post.php">Не важкі фізичні вправи для підтримки себе у формі</a></h3>
                    <p class="post__body">Багато людей прагнуть підтримувати свою фізичну форму і здоров'я, але не завжди мають час або можливість для інтенсивних тренувань. Однак, важливо зрозуміти, що навіть легкі фізичні вправи можуть мати позитивний вплив на ваше здоров'я та допомогти підтримувати тіло у формі.</p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Vitaly Tsal</h5>
                            <small>May 21, 2023 - 17:15 </small>
                        </div>
                    </div>
                </div>
            </article><article class="post">
                <div class="post__thumbail">
                    <img src="./images/blog5.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Teeth and dentistry</a>
                    <h3 class="post_title"><a href="post.html">Правильний догляд за зубами</a></h3>
                    <p class="post__body">Догляд за зубами є важливою складовою загального здоров'я та доброго самопочуття. Правильний догляд за зубами допомагає попереджати карієс, захворювання ясен та інші проблеми, зберігаючи вашу посмішку здоровою і привабливою. </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar8.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Boris Britva</h5>
                            <small>May 29, 2023 - 18:10 </small>
                        </div>
                    </div>
                </div>
            </article>
            
        </div>
    </section>
     <!--=================== END OF POSTS ===================-->


     
     <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Healthy food</a>
            <a href="" class="category__button">Sport</a>
            <a href="" class="category__button">Teeth and dentistry</a>
            <a href="" class="category__button">Child health</a>
            <a href="" class="category__button">Psychological help</a>
            <a href="" class="category__button">Diseases and treatment</a>
        </div>
     </section>
     <!--=================== END OF CATEGORY BUTTONS ===================-->




<?php

include 'partials/footer.php';

?>