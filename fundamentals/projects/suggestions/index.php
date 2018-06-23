<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Suggestions</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div id="searchBox" class="mt-4">
          <h1>Search User</h1>
          <form>
            <div class="form-group">
              <label for="searchInput">Search</label>
              <input type="text" class="form-control" onkeyup="showSuggestions(this.value)">
            </div>            
          </form>
        </div>
        <div id="searchOutput">
          <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showSuggestions(str) {
      if (str.length > 0) {
        const xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById('output').innerHTML = this.responseText
          }
        }
        xhttp.open("GET", "suggest.php?q=" + str, true)
        xhttp.send()
      } 
      else {
        document.getElementById('output').innerHTML = ''
      }
    }
  </script>
</body>
</html>