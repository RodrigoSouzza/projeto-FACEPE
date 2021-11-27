@extends('layout') 
@section('conteudo')
<div class="row">
    <div class="col-7">
        <h3 id="sobre">
            Quem somos
        </h3>
        <p id="historia">
            Criado a pouco mais de 5 anos, o "NORDESTE RESTAURANTES" vem tentando resgatar a culinária do nordeste
            com comidas tipicamente nordestinas e temperos inesquecíveis,variedades de pratos para todos os gostos.Ambiente agradavel e bem arejado, areas abertas ao ar livre e muito mais. 
            
        </p>
        <h3 id="ava">
            Avaliações que ja recebemos
        </h3>
        
        <div class="row">
            <div class="col-4">
                <img style="width: 80px; height: 80px;margin-left: 70px;" src="trofeu.png" alt="">
                <h4 id="conq">
                    menor tempo de espera
                </h4>
            </div>
            <div class="col-4">
                <img style="width: 80px; height: 80px;margin-left: 70px;" src="trofeu.png" alt="">
                <h4 id="conq">
                    melhor tempero regional
                </h4>
            </div>
            <div class="col-4">
                <img style="width: 80px; height: 80px;margin-left: 70px;" src="trofeu.png" alt="">
                <h4 id="conq">
                    ambiente agradavel e confortavel
                </h4>
            </div>


        </div>
        

    </div>
    <div class="col-5">
        <img style="width: 500px; height: 600px; object-fit: cover;object-position: 20% 10%;border: 3px solid white;" 
        src="https://revistadeguste.com/wp-content/uploads/2018/06/0d2fb4f768a177ecff992f98f29af43cffd0b33245c32260b386211c9d798bd8.jpg" alt="">
    </div>

</div>

@endsection