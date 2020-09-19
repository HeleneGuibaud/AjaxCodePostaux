<div>
    <label for="ville_code_postal">Code postal : </label>
    <input type="text" name="ville_code_postal" id="ville_code_postal">
</div>

<div>
    <label for="ville_nom">Ville : </label>
    <select name="ville_nom" id="ville_nom">
        <option value=""></option>
    </select>
</div>

<script>
    cpField = document.getElementById("ville_code_postal");
    cpField.addEventListener("keyup", getVilles);

    function getVilles(){
        let search = this.value;

        let monForm = new FormData();
        monForm.append("ville_code_postal",search);

        if(search.length>=5){
            //Appel Ajax pour récupérer un tableau de villes correspondant au cp (search)
            let options = {
                method: 'POST',
                body: monForm
            }
            fetch('GetVilleCtrl.php', options)
            .then(function(response) {
                return response.json();
            })
            .then(function(villes) {
                let options = '';
                villes.forEach(function(ville){
                    options += '<option value="'+ville.ville_nom+'">'+ville.ville_nom+'</option>';
                })
                document.getElementById("ville_nom").innerHTML = options;
            })
        }
    }

</script>