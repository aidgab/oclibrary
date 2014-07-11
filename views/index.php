<div class="jumbotron">
    <div class="container">
        <h1>Поиск книг</h1>
        <form role="form" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="find" id="mainSearchField" placeholder="Например: Ромео и Джульетта">
            </div>
            <button type="submit" class="btn btn-default">Искать</button>
        </form>
        <?php
            print_r($genres);
        ?>
    </div>
</div>
