<?php include ROOT. '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="container_delete">
                <br>
                <h3>Удаление записи</h3>
                <p>Удалить товар: (ID: <?php echo $id; ?>) ?</p>

                <form method="post">
                    <input type="submit" name="submit" value=" Удалить " />
                </form>
                <br>
                <p>Полная информация: </p>
                <div class="col-sm-3">
                    <div class="userOnce">
                        <p>ID: <?php echo $userId['id']; ?></p>
                        <p>Имя: <?php echo $userId['name']; ?></p>
                        <p>Фамилия: <?php echo $userId['lastName']; ?></p>
                        <p>Дата Рождения: <?php echo $userId['date']; ?>
                            (
                                <?php echo (date("Y", time()) - date( "Y", strtotime( $userId['date'] )) ) ?> лет
                            )</p>
                        <p>Пол: <?php echo $userId['gender']; ?> 
                            (
                                <?php if ($userId['gender'] == 0) echo 'M';
                                    else echo 'Ж'; ?>
                            )</p>
                        <p>Город: <?php echo $userId['city']; ?></p>
                    </div>
                 </div>
                 </div>
            

        </div>
    </div>
</section>

<?php include ROOT. '/views/layouts/footer.php'; ?>
