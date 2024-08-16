<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body{
        height: 100dvh;
        width: 100%;
        display: flex;
        background-color: #E5E4E4;
    }
    a:hover{
        text-decoration: none; 
    }
        /* Start Container left code */

    .left{
        width: 16.5%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 15px;
    }
    .left-title{
        display: flex;
        flex-direction: column;
    }
    .left-logo{
        display: flex;
        align-items: center;
    }
    .left-logo i{
        color:#0CC2E7;
        padding-left: 0.5rem;
    }
    .left-title img{
        width: 12.5%;
        border-radius: 50%;
    }
    .left-title h4{
        padding: 0;
        margin: 0;
    }
    /* .left-menu{
        
    } */
    .left-items-menu{
        background-color: #0CC2E7;
        border-radius: 7.5px;
        padding: 10px;
        margin: 10px 0 10px 0;
        display: flex;
    }
    .left-items-menu:hover{
          background-color: #5FE1E3;
          cursor: pointer;
    }
    .left-items-menu i{
        color: white;
    }
    .left-item{
        color:white;
        padding-left: 1rem;
        margin: 0;
    }
    .left-setting-menu{
        display: flex;
    }
    .left-setting-menu i{
        color: grey;
    }
    .left-setting-menu p{
        color: grey;
    }
    .left-profil{
        display: flex;
        justify-content: space-between;
    }
    .left-img-name{
        display: flex;
    }
    .left-img-name img{
        width: 30px;
        height: 30px;
    }
    .left-img-name p{
        padding-left: 0.75rem;
        margin: 0;
    }

        /* End Container left code */

    .right{
        width: 83.5%;
        height: 100dvh;
        background-color: #E5E4E4;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .right-tilte{
        display: flex;
        padding: 10px 20px 10px 20px;
        justify-content: space-between;
        background-color: white;
        align-items: center;

    }
    .right-search{
        width: 60%;
    }
    .right-search span{
        border-top-left-radius: 7.25px;
        border-bottom-left-radius: 7.25px;
        color:#9C9C9C
    }
    .right-subtilte{
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
        padding: 0px 20px 0px 20px ;
    }
    .right-content{
        margin-top: 5px;
        padding: 0 20px 0 20px;
    }
    .right-content-tilte{
        display: flex;
        background-color: #393939;
        color: white;
        border-radius: 7.25px;
        margin-top: 10px;
    }
    .right-content-subtitle{
        overflow: auto;
        max-height: 66.5vh;
    }
    .right-content-subtitle-row{
        display: flex;
        align-items: center;
        background-color: white;
        border-radius: 7.25px;
        margin-top: 5px;
    }
    .btn-action{
        background-color: #0CC2E7;
    }
    .right-footer-content{
        display: flex;
        justify-content: space-between;
        background-color: white;
        padding: 15px 20px 15px 20px;
    }
    .right-copy{
        display: flex;

    }

 /* Popup */


.modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 0px;
        }
        .modal-content {
            background-color: #fefefe;
            margin-top: 1.5% ;
            top: 0%;
            left: 25%;
            padding: 10px 20px 10px 20px;
            border: 1px solid #888;
            width: 45%;
            max-height: 90vh;
            border-radius: 8px;
        }
        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"]:hover {
            background-color: blue;
        }
        
</style>

<body>

    @if (auth()->check() && auth()->user()->hasRole('Administrateur'))

    <div class="left">
        <div class="left-title">
            <div class="left-logo">
                <img src="{{asset('images/three.jpeg')}}" alt="">
                <h4><i>Studlearn</i></h4>
            </div>

            <br>

            <div class="left-menu">
                <a href="{{route('user.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">bar_chart</i>
                    <h6 class="left-item">
                        Home
                    </h6>
                </div>
                </a>
                <a href="{{route('anneescolaire.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">event</i>
                    <h6 class="left-item">
                        Année Scolaire
                    </h6>
                </div>
                </a>
                <a href="{{route('professeur.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">card_travel</i>
                    <h6 class="left-item">
                    Professeur
                    </h6>
                </div>
                </a>
                <a href="{{route('etudiant.index')}}" class="text-white">
                <div class="left-items-menu"  style="background-color: #5FE1E3;">
                    <i class="material-icons">school</i>
                    <h6 class="left-item">
                    Etudiant
                    </h6>
                </div>
                </a>
                <a href="{{route('classe.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">meeting_room</i>
                    <h6 class="left-item">
                    Classe
                    </h6>
                </div>
                </a>
                <a href="{{route('cours.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">book</i>
                    <h6 class="left-item">
                    Cours
                    </h6>
                </div>
                </a>
                <a href="{{route('salle.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">store</i>
                    <h6 class="left-item">
                    Salle
                    </h6>
                </div>
                </a>
            </div>
        </div>
        <div class="left-subtitle">
            <div class="left-setting-menu">
                <i class="material-icons">account_circle</i>
                <p class="left-item">Administrateur</p>
            </div>
            <br>
            <div class="left-setting-menu">
                <i class="material-icons">help_outline</i>
                <p class="left-item">Assistance</p>
            </div>
            <hr>
            <div class="left-profil">
                <div class="left-img-name">
                    <img src="{{asset('images/two.jpg')}}" alt="" class="rounded-circle">
                    <p>{{Auth::user()->name}}</p>
                </div>
                <i class="material-icons">more_vert</i>
            </div>
        </div>
    </div>

        <div class="right">
            <div class="right-body">
            <div class="right-tilte">
                <p class="text-secondary m-0">Dashbord</p>
                <div class="right-search">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
                    </div>
                </div>
            </div>
            <div class="right-subtilte">
                <h5 class="text-secondary">Etudiant ({{$nb_etudiant}})</h5>
                <button class="btn btn-info" id="openModalBtn2">Ajouter un étudiant</button>
            </div>

      <div class="right-content">
            <div class="right-content-tilte">
                <div class="col  text-center p-2"><h6>ID</h6></div>
                <div class="col  text-center p-2"><h6>Prénom</h6></div>
                <div class="col  text-center p-2"><h6>Nom</h6></div>
                <div class="col  text-center p-2"><h6>Email</h6></div>
                <div class="col  text-center p-2"><h6>Date de naissance</h6></div>
                <div class="col  text-center p-2"><h6>Actions</h6></div>                    
            </div>
            
                <div class="right-content-subtitle">
                    @if($nb_etudiant >= 1)
                    @foreach ($etudiant as $etudiants)
                    <div class="right-content-subtitle-row">
                        <div class="col  text-center p-2 text-secondary">{{$etudiants->id}}</div>
                        <div class="col  text-center p-2">{{$etudiants->personne->first_name}}</div>
                        <div class="col  text-center p-2">{{$etudiants->personne->name}}</div>
                        <div class="col  text-center p-2 text-info">{{$etudiants->personne->email}}</div>
                        <div class="col  text-center p-2 text-secondary">{{ $etudiants->date_de_naissance}}</div>
                        <div class="col  text-center py-2 p-0">
                            <button class="btn-action btn text-white" id="openModalBtn3">Actions</button></div>
                    </div>
                    @endforeach
                    @else
                        <div class="d-flex justify-content-center text-secondary py-2">
                            Aucun étudiant n'a été enregistrer !
                        </div>
                    @endif
                </div>
            </div>
            </div>
            <div class="right-footer">
                <div class="right-footer-content">
                    <div class="right-copy">
                        <p class="text-secondary">2024&copy;</p>
                        <p class="px-2">Studlearn</p>
                    </div>
                    <div class="d-flex">
                        <p class="text-secondary pr-1">Créer par :</p>
                        <p>Kevine-Fr</p>
                    </div>
                </div>
            </div>
            
        </div>
       
    
    @elseif(auth()->check() && auth()->user()->hasRole('Pedagogie'))

<div class="left">
    <div class="left-title">
        <div class="left-logo">
            <img src="{{asset('images/three.jpeg')}}" alt="">
            <h4><i>Studlearn</i></h4>
        </div>

        <br>

        <div class="left-menu">
            <a href="{{route('user.index')}}" class="text-white">
            <div class="left-items-menu">
                <i class="material-icons">bar_chart</i>
                <h6 class="left-item">
                    Home
                </h6>
            </div>
            </a>
            <a href="{{route('anneescolaire.index')}}" class="text-white">
            <div class="left-items-menu" style="background-color: #5FE1E3;">
                <i class="material-icons">event</i>
                <h6 class="left-item">
                    Année Scolaire
                </h6>
            </div>
            </a>
            <a href="{{route('classe.index')}}" class="text-white">
            <div class="left-items-menu">
                <i class="material-icons">school</i>
                <h6 class="left-item">
                Classe
                </h6>
            </div>
            </a>
            <a href="{{route('cours.index')}}" class="text-white">
            <div class="left-items-menu">
                <i class="material-icons">book</i>
                <h6 class="left-item">
                Cours
                </h6>
            </div>
            </a>
            <a href="{{route('salle.index')}}" class="text-white">
            <div class="left-items-menu">
                <i class="material-icons">store</i>
                <h6 class="left-item">
                Salle
                </h6>
            </div>
            </a>
        </div>
    </div>
    <div class="left-subtitle">
        <div class="left-setting-menu">
            <i class="material-icons">account_circle</i>
            <p class="left-item">Administrateur</p>
        </div>
        <br>
        <div class="left-setting-menu">
            <i class="material-icons">help_outline</i>
            <p class="left-item">Assistance</p>
        </div>
        <hr>
        <div class="left-profil">
            <div class="left-img-name">
                <img src="{{asset('images/two.jpg')}}" alt="" class="rounded-circle">
                <p>{{Auth::user()->name}}</p>
            </div>
            <i class="material-icons">more_vert</i>
        </div>
    </div>
</div>

    <div class="right">
        <div class="right-body">
        <div class="right-tilte">
            <p class="text-secondary m-0">Dashbord</p>
            <div class="right-search">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
                </div>
            </div>
        </div>
        <div class="right-subtilte">
            <h5 class="text-secondary">Etudiant ({{$nb_etudiant}})</h5>
            <button class="btn btn-info" id="openModalBtn">Ajouter une année</button>
        </div>

        <div class="right-content">
            <div class="right-content-tilte">
                <div class="col  text-center p-2"><h6>ID</h6></div>
                <div class="col  text-center p-2"><h6>Prénom</h6></div>
                <div class="col  text-center p-2"><h6>Nom</h6></div>
                <div class="col  text-center p-2"><h6>Email</h6></div>
                <div class="col  text-center p-2"><h6>Date de naissance</h6></div>
                <div class="col  text-center p-2"><h6>Actions</h6></div>                    
            </div>
        
        <div class="right-content-subtitle">
                    @if($nb_etudiant >= 1)
                    @foreach ($etudiant as $etudiants)
                    <div class="right-content-subtitle-row">
                        <div class="col  text-center p-2 text-secondary">{{$etudiants->id}}</div>
                        <div class="col  text-center p-2">{{$etudiants->personne->first_name}}</div>
                        <div class="col  text-center p-2">{{$etudiants->personne->name}}</div>
                        <div class="col  text-center p-2 text-info">{{$etudiants->personne->email}}</div>
                        <div class="col  text-center p-2 text-secondary">{{ $etudiants->date_de_naissance}}</div>
                        <div class="col  text-center py-2 p-0">
                            <button class="btn-action btn text-white" id="openModalBtn3">Actions</button></div>
                    </div>
                    @endforeach
                    @else
                        <div class="d-flex justify-content-center text-secondary py-2">
                            Aucun étudiant n'a été enregistrer !
                        </div>
                    @endif
                </div>
        </div>
        </div>
        <div class="right-footer">
            <div class="right-footer-content">
                <div class="right-copy">
                    <p class="text-secondary">2024&copy;</p>
                    <p class="px-2">Studlearn</p>
                </div>
                <div class="d-flex">
                    <p class="text-secondary pr-1">Créer par :</p>
                    <p>Kevine-Fr</p>
                </div>
            </div>
        </div>
        
    </div>
   

    @else
        <div class="d-flex justify-content-center">
            Je suis pas administrateur !
        </div>
    @endif


<script>
        document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById('dateModal');

    // Get the button that opens the modal
    var btn = document.getElementById('openModalBtn');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName('close-btn')[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = 'block';
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById('dateModal2');

    // Get the button that opens the modal
    var btn = document.getElementById('openModalBtn2');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName('close-btn')[1];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = 'block';
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});


document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById('dateModal3');

    // Get the button that opens the modal
    var btn = document.getElementById('openModalBtn3');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName('close-btn')[2];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = 'block';
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});


    </script>

    <div id="dateModal" class="modal">
        <div class="modal-content">
            <span class="close-btn d-flex justify-content-end">&times;</span>
            <h5 class="d-flex justify-content-center pb-4">Etudiant</h5>
            <form id="dateForm" method="POST" action="{{ route('etudiant.store') }}">
                @csrf
                <div class="form-group">
                    <label for="startYear">Prénom</label>
                    <input type="text" id="startYear" name="first_name" required class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="endYear">Nom</label>
                    <input type="text" id="endYear" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="startYear">Email</label>
                    <input type="email" id="startYear" name="email" required class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="endYear">Date de naissance</label>
                    <input type="date" id="endYear" name="date_de_naissance" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="startYear">Mot de passe</label>
                    <input type="password" id="startYear" name="password" required class="form-control">
                </div>
                <br>
                <select name="id_cas" id="" class="form-control">
                <option value="" disabled selected>Choisir sa classe</option>
                    @foreach ($classe as $classes)
                        <option value="{{$classes->id}}">{{$classes->classes->nom}} pour l'année scolaire : {{Carbon\Carbon::parse($classes->anneescolaires->date_de_debut)->format('Y')}}-{{Carbon\Carbon::parse($classes->anneescolaires->date_de_fin)->format('Y')}}</option>
                    @endforeach
                </select>
                <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn btn-info">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <div id="dateModal2" class="modal">
        <div class="modal-content">
            <span class="close-btn d-flex justify-content-end">&times;</span>
            <h5 class="d-flex justify-content-center pb-2">Etudiant</h5>
            <form id="dateForm" method="POST" action="{{ route('etudiant.storeAdmin') }}">
                @csrf
                <div class="form-group">
                    <label for="startYear">Prénom</label>
                    <input type="text" id="startYear" name="first_name" required class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="endYear">Nom</label>
                    <input type="text" id="endYear" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="startYear">Email</label>
                    <input type="email" id="startYear" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="startYear">Mot de passe</label>
                    <input type="password" id="startYear" name="password" required class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="endYear">Date de naissance</label>
                    <input type="date" id="endYear" name="date_de_naissance" required class="form-control">
                </div>
                <select name="id_pedagogie" id="" class="form-control">
                <option value="" disabled selected>Choisir un(e) responsable pédagogique</option>
                    @foreach ($user as $users)
                        <option value="{{$users->id}}">{{$users->personne->name}} {{$users->personne->first_name}}</option>
                    @endforeach
                </select>
                <br>
                <select name="id_cas" id="" class="form-control">
                <option value="" disabled selected>Choisir sa classe</option>
                    @foreach ($classe as $classes)
                        <option value="{{$classes->id}}">{{$classes->classes->nom}} pour l'année scolaire : {{Carbon\Carbon::parse($classes->anneescolaires->date_de_debut)->format('Y')}}-{{Carbon\Carbon::parse($classes->anneescolaires->date_de_fin)->format('Y')}}</option>
                    @endforeach
                </select>
                <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn btn-info">Enregistrer</button>
                </div>
                
            </form>
        </div>
    </div>

          
                            <!-- Js code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>