<!--

use the alternative syntax for control structures in templates, to emphasize
the templating character of such a file.

http://php.net/manual/de/control-structures.alternative-syntax.php

-->
<table class="album">
    <colgroup>
        <col style="width: 20px;">
        <col style="width: 30%">
        <col style="width: 30%">
        <col style="width: 30%">
        <col>
    </colgroup>
    <thead>
        <tr>
            <td>#ID</td>
            <td>Künstler</td>
            <td>Album</td>
            <td>Erscheinungsjahr</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
        <? if (!empty($albums)) foreach ($albums as $album) : ?>
        <tr>
            <td>#<?= $album['id'] ?></td>
            <td><?= h($album['artist']) ?></td>
            <td><?= h($album['album']) ?></td>
            <td><?= h($album['year']) ?></td>
            <td><a href="?action=delete_album&id=<?= $album['id'] ?>">Löschen</a></td>
        </tr>
        <? endforeach ?>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="5">All rights reserved</td>
        </tr>
    </tfoot>
</table>

<button class="new_album">Neuen Eintrag erstellen</button>
<br>
<?= $this->render_partial('album/new') ?>
