@extends('layouts/main')
@section('titulo', 'Inicio')
@section('contenido')
    <h2 class="text-5xl text-center pt-15">Bienvenid@s a QAITMAII</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    @csrf
                    @method('POST')
                    <p>Pregunta 1</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 2</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 3</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 4</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 5</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 6</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 7</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 8</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 9</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se 
                    <p>Pregunta 10</p>
                    <label for="">¿Que es PHP?</label>
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <input type="radio" class="form-radio"> No se
                    <br>
                    <button class="btn btn-outline-primary mt-3">Enviar respuestas</button>
                </form>
            </div>
        </div>
    </div>
@endsection