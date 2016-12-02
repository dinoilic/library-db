@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Pozdrav <span class="user-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></h1>
    </div>

    {{-- Layout for members --}}
    @if(Auth::user()->hasRole('member'))
        <div class="page-header">
            <h2>Kratki pregled - korisnik</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <h2>Vaše članarine: {{ $memberships->count() }}</h2>
                    <hr>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Pocetni datum</th>
                            <th>Krajnji datum</th>
                            <th>Stanje</th>
                            <th>Moguce posuditi</th>
                        </tr>
                        @foreach($memberships as $membership)
                        <tr>
                            <td>{{ $membership->start_date }}</td>
                            <td>{{ $membership->end_date }}</td>
                            <td>
                            @if($membership->is_valid)
                                <span class="fa fa-check green"></span> Članstvo vrijedi
                            @else
                                <span class="fa fa-times red"></span> Članstvo je isteklo
                            @endif
                            </td>
                            <td>{{ $membership->books }}</td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Knjige koje ste posudili</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4 text-center book">
                <img src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-M.jpg" alt="Cover za knjigu {{ $book->name }}">
                <h4>{{ $book->name }}</h4>
                <p>Rok vracanja: {{ $book->pivot->date_return }}</p>
            </div>
            @endforeach
        </div>
    @endif
    {{-- Layout for admins --}}
    @if(Auth::user()->hasRole('admin'))
        <div class="page-header">
            <h2>Kratki pregled - administrator</h2>
        </div>
    @endif

    {{-- Layout for employees --}}
    @if(Auth::user()->hasRole('employee'))
        <div class="page-header">
            <h2>Kratki pregled - zaposlenik</h2>
        </div>
    @endif
@endsection