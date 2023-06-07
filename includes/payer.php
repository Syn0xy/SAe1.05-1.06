<script>
    let form = document.getElementById("Payer");
    function fermerPayer(){
        form.display = "none";
    }
</script>
<div id="payer">
    <i class="obscur">a</i>
    <i onclick="fermerPayer()" id="croix" class="fa-solid fa-xmark"></i>
    <form action="/payer" method="POST">
    <!-- Informations de paiement -->
    <h2>Informations de paiement</h2>
    <label for="card-number">Numéro de carte :</label>
    <input type="text" id="card-number" name="card-number" required>
    <label for="expiration-date">Date d'expiration :</label>
    <input type="month" id="expiration-date" name="expiration-date" required>
    <label for="cvv">CVV :</label>
    <input type="text" id="cvv" name="cvv" required>
    <label for="billing-zip">Code postal de facturation :</label>
    <input type="text" id="billing-zip" name="billing-zip" required>

    <!-- Bouton de soumission -->
    <input type="submit" value="Payer">
    </form>
</div>