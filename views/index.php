<div class="jumbotron">
    <div class="container">
        <h1>Поиск книг</h1>
        <form role="form" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="find" id="mainSearchField" placeholder="Например: Ромео и Джульетта">
            </div>
            <button type="submit" class="btn btn-default">Искать</button>
        </form>
    </div>
</div>

<div class="container">
    <?php
    if ($books!==null){
        if (count($books)<=0){
            ?>
            <div class="alert alert-warning" role="alert">Ничего не найдено</div>
        <?
        }
        else{
            ?>
            <h2>Найденные книги:</h2>
            <ul>
                <?php
                foreach($books as $book){
                ?>
                    <li><? echo ViewEngine::link(ViewEngine::encodeChars($book['title']), 'viewbook', array('id'=>$book['id']));?></li>
                <?php
                }
                ?>
            </ul>
    <?
    }
    }
    ?>
</div>