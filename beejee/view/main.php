<!DOCTYPE html>
<html>
<head>
    <title>Bee jee</title>
<?php include_once(DIRNAME."view/template/external.php"); ?>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="cntr">Hello BeeJee</h1><br>
            <h2 class="cntr">задачник</h2><br>
            
            

            <div class="header">
                <ul>
                    <li><a href="<?php uri();echo $sort_url;?>name"><i class="fas fa-sort-alpha-down"></i> по имени</a></li>

                    <li><a href="<?php uri();echo $sort_url;?>email"><i class="fas fa-sort-amount-down"></i> по имэйл</a></li>

                    <li><a href="<?php uri();echo $sort_url;?>status"><i class="fas fa-sort-amount-down"></i> по статусу</a></li>
                </ul>
                <a href="<?php uri();?>addtask" class="btnToAddTask fright">Добавить Задачу</a>
            </div>

            
            <div class="clear"></div><br>
                
                <?php foreach($toDoLists as $toDoList): ?>
                    <div class="toDoList">                
                        
                            <?php if($toDoList["done"]==1): ?>
                                <a class="deactiveItem fright done"><i class="fas fa-check"></i></a>
                            <?php else: ?>
                                <a class="activeItem fright done"><i class="fas fa-check"></i></a>
                            <?php endif; ?>
                        
                        <p><b>Имя:</b> <?php echo $toDoList["username"]; ?></p>
                        <p><b>Имэйл:</b> <?php echo $toDoList["email"]; ?></p>
                        <h3 class="cntr">Описание: </h3>
                        <p><?php echo $toDoList["description"]; ?></p>
                        <div class="clear"></div> <br><br>  
                        

                    </div><br><br>
                <?php endforeach; ?> 


           <div class="cntr pd20">
                    <?php echo $paginationHTML;?>                   
            </div>  

        </div>
    </div>





<script type="text/javascript" src="<?php uri(); ?>design/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php uri(); ?>/design/js/customjq.js"></script>

</body>
</html>
