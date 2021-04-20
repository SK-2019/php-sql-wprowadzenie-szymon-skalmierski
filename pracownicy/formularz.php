<?php include "/app/assets/body.html" ?>
    <div class='phpp'>
        <!-- Formularz0 -->
        <form class="formularz0" action="strona.php" method="POST">
            <h2 class="naglowek">Formularz:</h2>
            <ul>
                <li>
                    <input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię"
                        required />
                    <select name="dzial" class="field-style field-split align-right" required>
                        <option value="1">Dział 1 - Serwis</option>
                        <option value="2">Dział 2 - Handel</option>
                        <option value="3">Dział 3 - Marketing</option>
                        <option value="4">Dział 4 - IT</option>
                    </select>
                </li>
                <li>
                    <input type="text" name="zarobki" class="field-style field-split align-left" placeholder="Zarobki"
                        required />
                    <input type="date" name="data_ur" class="field-style field-split align-right" min="1940-01-01"
                        max="2020-12-31" required />
                </li>
                <li>
                    <input type="submit" value="Wyświetl" />
                </li>
            </ul>
        </form>

    </div>
</div>
</body>
</html>