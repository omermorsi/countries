function searchCon() {

  //Variables
  var cap = document.getElementById('cap').value,
      name = [],
      capital = [],
      flag = [],
      region = [],
      result = {name, capital, flag, region},
      tab = document.getElementById('tab'),
      resCap = result['capital'];

  //Make ajax request
  axios.post('http://localhost/controller/countriescontroller.php',{
    params: {
      cap: cap
    }
  }).then(resp => {

    //Insert data to js object
    for(var i in resp.data){
      name.push(resp.data[i]['name']);
      capital.push(resp.data[i]['capital']);
      flag.push(resp.data[i]['flag']);
      region.push(resp.data[i]['region']);
    }

    //Add results to DOM
    for (var i = 0; i < resCap.length; i++) {

      //Remove the unmach's result from DOM
      while (tab.hasChildNodes()) {
         tab.removeChild(tab.firstChild);
      }

      //Create new elemnts and add data to them
      for (var i = 0; i < resCap.length; i++) {

        //Create tr element
        var tr = document.createElement("tr");
        tr.setAttribute('id', i);
        tab.appendChild(tr);

        //Create td element
        for (var j = 0; j < 4; j++) {

          var td = document.createElement("td");
          td.setAttribute('class', 'name');
          document.getElementById(i).appendChild(td);

        }

        //Add data to table
        document.getElementById(i).getElementsByClassName('name')[0].innerHTML = result['name'][i];
        document.getElementById(i).getElementsByClassName('name')[1].innerHTML = result['capital'][i];
        document.getElementById(i).getElementsByClassName('name')[2].innerHTML = result['region'][i];

        //Create image and add data to it
        var img = document.createElement("img");
        img.setAttribute('src', result['flag'][i]);
        document.getElementById(i).getElementsByClassName('name')[3].appendChild(img);

      }
    }
  });
}
