@props(['color'=>'dark'])

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-{{$color}}">{{$titulo}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$subtitulo}}</h6>
      <p class="card-text">{{$body}}</p>
    </div>
  </div>
