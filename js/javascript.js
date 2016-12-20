function searchPokemonquery() {
  $(document).ready(function(){
    var BASE_URL = "http://pokeapi.co/api/v2/pokemon/";
    var id1 = document.getElementById("tbxID").value;
    var idPkmn = id1.toLowerCase();
    var pokemonURL = BASE_URL + idPkmn + "/";
    $("#loadingSpinner").show();
    $.getJSON(pokemonURL,{
      format: "json"
    } ).done(function (pokemon){
        window.location.replace("?page=pokemon&id=" + pokemon.id);

    });
  });

}

function getPokemonData() {
  $(document).ready(function(){
    var pkmnid = location.search.split('id=')[1];
    var BASE_URL = "http://pokeapi.co/api/v2/pokemon/";
    var pokemonURL = BASE_URL + pkmnid + "/";
    $("#loadingSpinner").show();
    $.getJSON(pokemonURL,{
      format: "json"
    } ).done(function (pokemon){
        document.getElementById("pokemonNaam").innerHTML =
        pokemon.name;
        document.getElementById("pokemonImg").innerHTML =
        "<img width='300px'height='280px' src='http://assets.pokemon.com/assets/cms2/img/pokedex/full/" + ("000" + pokemon.id).slice(-3) + ".png'/>";
        $("#loadingSpinner").hide();

    });

  });
}

  function buttonEnter(){
    if(event.keyCode==13) $('#btnID').click();
  }
