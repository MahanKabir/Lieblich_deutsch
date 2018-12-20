<style>

    #head{
        width: 100%;
        height: 250px;
        background: lightpink;
        margin: 0;
        padding: 0;
    }
</style>

<div>
    <div id="head">

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ action('bookController@index') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ action('masterController@book') }}">Books</a>
                <a class="nav-item nav-link" href="#">Gramers</a>
                <a class="nav-item nav-link" href="{{ action('masterController@dictionary') }}">Dictionary</a>
                <a class="nav-item nav-link disabled" href="#">Contact</a>
            </div>
        </div>
    </nav>
</div>