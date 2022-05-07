<?php include ROOT .'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <!-- LastProduct -->
            <div class="col-sm-9">

                <h4 class="title text-left">Список людей:</h2>
                <hr>
                    <div class="userList">
                        <?php foreach ($userList as $user): ?>
                            <div class="col-sm-3">
                                    <div class="userOnce">
                                            <p>ID: <?php echo $user['id']; ?></p>
                                            <p>Имя: <?php echo $user['name']; ?></p>
                                            <p>Фамилия: <?php echo $user['lastName']; ?></p>
                                            <p>Дата Рождения: <?php echo $user['date']; ?></p>
                                            <p>Пол: <?php echo $user['gender']; ?> 
                                                (
                                                    <?php if ($user['gender'] == 0) echo 'M';
                                                        else echo 'Ж'; ?>
                                                )</p>
                                            <p>Город: <?php echo $user['city']; ?></p>
                                            <!-- <br>
                                            <a href="/view/№№№">Изменить</a> -->
                                            <br>
                                            <a href="/edit/<?php echo $user['id']; ?>">Изменить</a>

                                    </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                
            </div>
        </div>                           
    </div>                             
</section>

<?php include ROOT .'/views/layouts/footer.php'; ?>