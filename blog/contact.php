<?php

include 'partials/header.php';

?>


<section class="featured">
    <section class="container">
        <h1>Зворотній зв'язок</h1>
        <form action="https://formsubmit.co/yevh.petrakov8@gmail.com" method="POST" >
            <input type="text" name="Name" placeholder="Ваше Ім'я" required>
            <input type="email" name="Email" placeholder="Ваш email" required>
            <input type="telephone" name="Telephone" placeholder="Ваш номер телефону" required>
            <textarea name="Message" placeholder="Ваші побажання/скарги" required></textarea>
            <button type="submit" name="submit" class="btn">Відправити</button>
        </form>
    </section>
</section>
<section class="featured"></section>


<?php

include 'partials/footer.php';

?>