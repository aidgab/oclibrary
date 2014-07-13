<div class="container">
    <div class="page-header">
        <h1><?=ViewEngine::encodeChars($book['title']); ?></h1>
        <p><?=ViewEngine::encodeChars($book['firstname'].' '.$book['lastname']); ?></p>
    </div>
    <p class="lead"><?=ViewEngine::encodeChars($book['annotation']); ?></p>
    <table>
        <tr>
            <td><b>Жанр:</b></td>
            <td><?=ViewEngine::encodeChars($book['genretitle']); ?></td>
        </tr>
        <tr>
            <td><b>Год написания:</b></td>
            <td><?=ViewEngine::encodeChars($book['date']); ?></td>
        </tr>
    </table>
</div>