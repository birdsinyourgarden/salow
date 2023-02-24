@extends('layouts.app')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/imagens/banner3.png" class="d-block w-100" alt="men">
        </div>
        <div class="carousel-item">
            <img src="../html/imagens/banner2.png" class="d-block w-100" alt=".women">
        </div>
        <div class="carousel-item">
            <img src="../html/imagens/banner1.png" class="d-block w-100" alt="mental">
        </div>
    </div>
</div>
<!-- <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
    @foreach ($specialties as $specialty)
    <div class="card mb-4 m-4" style="width: 20rem;">
        <a href="{{ route('showSpecialty', ['id' => $specialty->id]) }}">
            <img src="{{ $specialty->img }}" class="card-img-top mt-3" alt="foto de animal en adopción">            
            <div class="card-body">
                <h4 class="card-title">{{ $specialty->name }}</h4>
                <p class="card-title"><span class="h5">{{ $adoption->spaces }} Abrazos</span></p>
                <a href="{{ route('inscribe', $adoption->id) }}" class="btn btn-primary fs-5" onclick="return confirm('¿Quieres inscribirte en el proceso de adopción? {{ $adoption->name }} - ID {{ $adoption->id }} ')">Abrázame</a>
                <form action="{{ route('deleteAdoption', ['id' => $adoption->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <div class="d-flex justify-content-end">
                    <a class="btn text-end mt-2"
                        href="{{ route('editAdoption', ['id' => $adoption->id]) }}"><img src="/images/edit.png" alt="botón editar"></a>
                    <button type="submit"
                        class="btn text-end mt-2"
                        onclick="return confirm('¿Quieres borrar esta entrada? {{ $adoption->name }} - ID {{ $adoption->id }} ')"><img src="/images/cancel.png" alt="botón borrar">
                    </button>
                    </div>
                    @endif
                </form>
            </div> 
        </a>
    </div>            
    @endforeach
    <div class="container justify-content-center" style="max-width: 65rem">
        <a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/images/return.png" alt="botón volver a la vista principal"></a>
    </div>
</div> -->
@endsection