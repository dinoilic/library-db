@extends('layouts.app')

@section('content')
    {{-- Layout for members --}}
    @if(Auth::user()->hasRole('member'))
        <div class="page-header">
            <h3>Kratki pregled - korisnik</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <h4>Vaše članarine: {{ $memberships->count() }}</h4>
                    <hr>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Početni datum</th>
                            <th>Krajnji datum</th>
                            <th>Stanje</th>
                            <th>Moguće posuditi</th>
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
                <h4>Knjige koje ste posudili</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4 text-center book">
                <img class="book-cover" src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-M.jpg" alt="Cover za knjigu {{ $book->name }}">
                <h5>{{ $book->name }}</h5>
                <span class="due-date">Rok vraćanja: {{ $book->pivot->date_return }}</span>
            </div>
            @endforeach
        </div>
    @endif
    {{-- Layout for admins --}}
    @if(Auth::user()->hasRole('admin'))
        <div class="page-header">
            <h3>Kratki pregled - administrator</h3>
        </div>
    @endif

    {{-- Layout for employees --}}
    @if(Auth::user()->hasRole('employee'))
        <div class="page-header">
            <h3>Kratki pregled - zaposlenik</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Prikaz posuđenih knjiga za godinu: {{ Carbon\Carbon::now()->year }}</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Mjesec</th>
                        <th>Broj posuđenih knjiga</th>
                    </tr>
                    @foreach($yearBooks as $yearBook)
                    <tr>
                        <td>{{ Carbon\Carbon::create(2000, $yearBook->month, 1, 1, 1, 1)->format('F') }}</td>
                        <td>{{ $yearBook->count }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-6">
                <h4>Prikaz članarina za godinu: {{ Carbon\Carbon::now()->year }}</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Mjesec</th>
                        <th>Broj članarina</th>
                    </tr>
                    @foreach($yearMemberships as $yearMembership)
                    <tr>
                        <td>{{ Carbon\Carbon::create(2000, $yearMembership->month, 1, 1, 1, 1)->format('F') }}</td>
                        <td>{{ $yearMembership->count }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@endsection
