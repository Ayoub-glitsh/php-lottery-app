<form method="post">
    <div class="grid">
        <?php for ($i = 1; $i <= 49; $i++): ?>
            <input type="checkbox" id="n<?= $i ?>" name="nombres[]" value="<?= $i ?>"
                <?= (isset($choix) && in_array($i, $choix)) ? 'checked' : '' ?>>
            <label for="n<?= $i ?>"><?= $i ?></label>
        <?php endfor; ?>
    </div>
    <button type="submit" class="btn btn-dark">Play!</button>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="mt-4">
        <h5>✅ Vos numéros : <?= implode(', ', $choix) ?></h5>
        <h5>🎲 Numéros tirés : <?= implode(', ', $tirage) ?></h5>
        <h4 class="mt-3"><?= $message ?></h4>
    </div>
<?php endif; ?>
