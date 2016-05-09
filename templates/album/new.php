<form action="index.php" method="post" class="login" id="new_album_entry" style="display:none">
   <label for="artist">
       Künstler:
   </label>
   <input id="artist" type="text" name="artist">

   <label for="album">
       Album:
   </label>
   <input id="album" type="text" name="album">

   <label for="year">
       Erscheinungsjahr:
   </label>
   <select id="year" name="year">
        <? for ($i = 1900; $i <= date('Y'); $i++) : ?>
        <option value="<?= $i ?>" <?= ($i == date('Y')) ? 'selected="selected"': '' ?>>
            <?= $i ?>
        </option>
        <? endfor ?>
   </select>

   <button>Erstellen</button>

   <input type="hidden" name="action" value="create_album">
</form>
