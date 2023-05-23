<h1>Inscire un éleve</h1>

<div class="contenu">
<form action="index.php?uc=admin&choix=inscription2" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="seance" class="form-label">La séance du professeur</label>
            <select id="seance" name="seance" class="form-select" aria-label="Default select example">
                <option selected></option>
                <?php
                foreach($lesSeance as $uneSeance)
                {
                    echo '<option value="'.$uneSeance->NUMSEANCE.'">'.$uneSeance->TRANCHE.' '.$uneSeance->JOUR.', '.$uneSeance->CAPACITE.'</option>';
                }
                ?>
            </select>
        </div>
        <?php
        echo'
        <input id="prof" name="prof" type="hidden" value="'.$hprof.'">
        <input id="eleve" name="eleve" type="hidden" value="'.$heleve.'">'
        ?>
        <button type="submit" class="btn btn-primary">Confirmer</button>
    </form>
</div>