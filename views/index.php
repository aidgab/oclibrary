<?php
$headers=array(
    'bytitle'=>'Книги с таким названием',
    'byauthor'=>'Книги с таким автором',
    'bygenre'=>'Книги с таким жанром'
);
?>
<script src="js/index.js"></script>
<div class="jumbotron">
    <div class="container">
        <h1>Поиск книг</h1>
        <form role="form" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="find" id="mainSearchField" placeholder="Например: Мастер и маргарита" value="<?=ViewEngine::encodeChars($findStr); ?>">
            </div>
            <button type="submit" class="btn btn-default">Искать</button>
        </form>
    </div>
</div>

<div class="container">
    <?php
    foreach($books as $k=>$bookType){
        if ($bookType===null){
            continue;
        }
        ?>
        <h2><?=$headers[$k];?>:</h2>
        <?php
        if (count($bookType)<=0){
            ?>
            <div class="alert alert-warning" role="alert">Ничего не найдено</div>
        <?
        }
        else{
            echo '<ul>';
            foreach($bookType as $book){
                ?>
                <li>
                    <? echo ViewEngine::link(ViewEngine::encodeChars($book['title']), 'viewbook', array('id'=>$book['id']));?> — <?=ViewEngine::encodeChars($book['firstname'].' '.$book['lastname']);
                    if ($k=='bygenre'){
                        echo ' (<b><i>'.ViewEngine::encodeChars($book['genretitle']).'</i></b>)';
                    }
                    ?>
                </li>
            <?php
            }
            echo '</ul>';
            echo '<hr />';
        }
    }
    ?>
</div>