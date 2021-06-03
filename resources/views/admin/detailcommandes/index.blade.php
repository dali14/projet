@extends('layouts.admin')
@section('main')
<h1> details commande</h1>
<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">prixunitaire</th>
      <th scope="col">prixtotale</th>
      <th scope="col">quantitecommande</th>
      <th scope="col">adressecommande</th>
      <th scope="col">Commande_id</th>
      <th scope="col">Produit_id</th>
    </tr>
  </thead>
  <tbody> 
       @foreach($detailcommandes as $key => $detailcommande)
       <tr>
      <th scope="row">{{ $key }}</th>
      <td>{{$detailcommande->prixunitaire}}</td>
      <td>{{$detailcommande->quantitecommande}}</td>
      <td>{{$detailcommande->prixtotale}}</td>
      <td>{{$detailcommande->adressecommande}}</td>
      <td>{{$detailcommande->Commande_id}}</td>
      <td>{{$detailcommande->Produit_id}}</td>
    </tr>
       @endforeach
  </tbody>
  {{ $detailcommandes->links() }}
</table>
@endsection
