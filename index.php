<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Daugybos lentele</title>
</head>
<body>
    
    <main role="main" class="container">
        <br>
        <div class="shadow p-3 mb-5 bg-white rounded">
            Daugybos lentelės užduočių generatorius:
        </div>
        <form action='teble.php' method='GET'>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Lentelės dydis</label>
            <input type='number' name='lentDydis' class='form-control' required>
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect2">Sudėtingumas</label>
        <select class='form-control' name='sudetingumas'>
            <option value="10">Lengvas</option>
            <option value="30">Vidutinis</option>
            <option value="50">Sunkus</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Generuoti</button>
        </form>
    </main>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
