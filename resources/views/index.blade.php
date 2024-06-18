<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="width:50%; " class="mx-auto ">
    <header class="container text-center mb-5 mt-5">
        <h1>Todolist</h1>
    </header>
    <main>
        <div class="container-fluid pb-3 pt-3 mb-3 rounded border border-white shadow-lg" style="background: rgb(216,231,231);
background: linear-gradient(90deg, rgba(216,231,231,1) 0%, rgba(61,163,236,1) 32%, rgba(204,232,245,1) 100%);">
            <form method="post" action="{{route('newTask')}}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="title" name="title" class="form-control" id="title" aria-describedby="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="description" name="description" class="form-control" id="description" required>
                </div>
                <div class="mb-3 ">
                    <label for="status" class="form-label">Status</label>
                    <input type="status" name="status" class="form-control" id="status" required>
                </div>
                <button type="submit" class="btn btn-dark border border-white">Enregistrer</button>
            </form>
        </div>
        <ul class="container text-center bg-light rounded pt-5 pb-5 shadow-lg">
            <li class="row pt-2" style="background: rgb(216,231,231);
background: linear-gradient(90deg, rgba(216,231,231,1) 0%, rgba(61,163,236,1) 32%, rgba(69,194,252,1) 100%);">
                <p class="col">Titre</p>
                <p class="col">Description</p>
                <p class="col">Status</p>
            </li>
            @foreach ($tasks as $task)

                <li class="row bg-light-subtle pt-2" style="opacity: .75;">
                    <p class="col">{{$task->title}}</p>
                    <p class="col">{{$task->description}}</p>
                    <p class="col">{{$task->status}}</p>
                </li>
                <a href="{{route('updateTask', $task->id)}}" class="btn btn-dark">MAJ</a>
                <a href="{{route('deleteTask', $task->id)}}" class="btn btn-dark">DEL</a>
            @endforeach


        </ul>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </footer>
</body>

</html>