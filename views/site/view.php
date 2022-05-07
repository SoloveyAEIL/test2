<?php include ROOT .'/views/layouts/header.php'; ?>

<section>

    <div class="container">
        <hr>
    <a href="/" style="margin-left: 75%;">Главная страница</a>
        <div class="row">

            <!-- LastProduct -->

            <div class="col-sm-9">

                <h4 class="title text-left">Редактирование: </h2>
                <hr>
                    <div class="userList">
                            <div class="col-sm-3">
                                    <div class="userOnce">
                                            <p>ID: <?php echo $userId['id']; ?></p>
                                            <p>Имя: <?php echo $userId['name']; ?></p>
                                            <p>Фамилия: <?php echo $userId['lastName']; ?></p>
                                            <p>Дата Рождения: <?php echo $userId['date']; ?>
                                                (
                                                    <?php echo date("Y"); ?>
                                                )</p>
                                            <p>Пол: <?php echo $userId['gender']; ?> 
                                                (
                                                    <?php if ($userId['gender'] == 0) echo 'M';
                                                        else echo 'Ж'; ?>
                                                )</p>
                                            <p>Город: <?php echo $userId['city']; ?></p>
                                            <br>

                            </div>
                    </div>
                
            </div>
        </div>                           
    </div>                             
</section>

<?php include ROOT .'/views/layouts/footer.php'; ?>