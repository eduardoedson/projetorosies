let ASSETS_PATH = '/wp-content/themes/Rosies/assets'

async function fetchJSON(url) {
  return fetch(url).then(function(response) { return response.json() })
}

$(document).ready(async function () {
  let mapa = L.map('mapa').setView([15, 40], 3);
  mapa.scrollWheelZoom.disable();

  let countriesPath = ASSETS_PATH + '/json/countries.geo.json'
  let countriesJson = await fetchJSON(countriesPath)
  let siglas = ['RUS', 'IND', 'DEU', 'DZA', 'NGA', 'ZAF', 'ARG', 'MEX', 'SWE', 'NZL', 'JPN', 'UGA', 'PAK', 'BRA', 'ITA', 'POL', 'AUS', 'CHL', 'USA', 'KOR', 'JAM', 'IRQ', 'GBR', 'CAN', 'IRN', 'FRA', 'UKR', 'KEN', 'CHN']
  let mulheres = {
    'RUS' : 'Alexandra Feodorovna',
    'IND' : 'Anasuya Sarabhai',
    'DEU' : 'Ângela Merkel',
    'DZA' : 'Assia Djebar',
    'NGA' : 'Chimamanda',
    'ZAF' : 'Ellen Kuzwayo',
    'ARG' : 'Eva Peron',
    'MEX' : 'Frida Kahlo',
    'SWE' : 'Greta',
    'NZL' : 'Jacinda',
    'JPN' : 'Kanno Sugako',
    'UGA' : 'Kasha Jacqueline Nabagesera',
    'PAK' : 'Malala',
    'BRA' : 'Maria José de Castro Rebello',
    'ITA' : 'Maria Montessori',
    'POL' : 'Marie Curie',
    'AUS' : 'Mary Gardiner',
    'CHL' : 'Michelle Bachelet',
    'USA' : 'Michelle Obama',
    'KOR' : 'Min Jin Lee',
    'JAM' : 'Nanny dos Maroons',
    'IRQ' : 'Nazik Al-Malaika',
    'GBR' : 'Princesa Diana',
    'CAN' : 'Roberta Bondar',
    'IRN' : 'Shirin Ebadi',
    'FRA' : 'Simone de Beauvoir',
    'UKR' : 'Svetlana Aleksiévitch',
    'KEN' : 'Wangari Maathai',
    'CHN' : 'Xinran'
  }
  let countriesLayers = []
  for(let i = 0; i < countriesJson['features'].length; i++) {
    if(siglas.includes(countriesJson['features'][i]['id'])) {
      L.geoJson(countriesJson['features'][i]['geometry'], {
        onEachFeature: function (feature, layer) {
          layer.options.fillColor = '#FBE4DC'
          layer.options.fillOpacity = 0.4
          layer.options.color = '#FBE4DC'
          layer.options.opacity = 0.8

          layer.bindTooltip(`
            <img src="${ASSETS_PATH}/images/Mapa/${countriesJson['features'][i]['id']}.png" class="popup-img" />
            <div class="popup-nome">${mulheres[countriesJson['features'][i]['id']]}</div>
          `,
          {
            direction: 'top',
            permanent: false,
            sticky: true,
            offset: [10, 0],
            opacity: 1,
            className: 'div-popup'
          })
          countriesLayers.push(layer)
        }
      });
    }
  }
  L.layerGroup(countriesLayers).addTo(mapa)


  L.tileLayer('https://api.mapbox.com/styles/v1/edumander/cklmqtutn17i318p824wtsgu7/tiles/256/{z}/{x}/{y}@2x?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      accessToken: 'pk.eyJ1IjoiZWR1bWFuZGVyIiwiYSI6ImNrbG1xZXl5YTAzMW0ydm8wcHd6eG5yazMifQ.GbXp4g0lYp9GI9s6rr0dJQ'
  }).addTo(mapa);
});