const consultarPokemon = (id,number) => 
{
  fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
    .then((response) => {
      return response.json();
    })

    .then((data) => {
      //console.log(data);
      pintarPokemon(data,number)
    })

    .catch((error) => {
      console.log(error);
    });
};



const btnSeleccionar = () => 
{
  let primerPokemon = Math.round(Math.random() * 150);
  let segundoPokemon = Math.round(Math.random() * 150);
  consultarPokemon(primerPokemon,1);
  consultarPokemon(segundoPokemon,2);
};

btnSeleccionar()

const lista = document.getElementById("listarpokemon")

const pintarPokemon = (data, id) =>
{
  let item = lista.querySelector(`#pok-${id}`);

  item.getElementsByTagName("img")[0].setAttribute("src", data.sprites.versions["generation-v"]["black-white"].animated.front_default);

  item.getElementsByTagName("p")[0].innerHTML = data.name;


  let pokeUno = ''

  for(let i=0; i<data.abilities.length;i++)
  {
    pokeUno += `<li>${data.abilities[i].ability.name}</li>`
  }
  console.log(pokeUno);
  item.getElementsByTagName('ul')[0].innerHTML = pokeUno

  let pokeDos = ''

  for(let i=0; i<data.stats.length;i++)
  {
    pokeDos += `<li>${data.stats[i].stat.name}: ${data.stats[i].base_stat}</li>`
  }
  console.log(pokeDos);
  item.getElementsByTagName('ul')[1].innerHTML = pokeDos

}