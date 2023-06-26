@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h1 class="text-secondary mb-4">Portfolio</h1>

        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{session('deleted')}}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tecnologie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                    <tr class=" bg-white border border-bottom-1">
                        <td class="border border-0">{{$work->id}}</td>
                        <td class="w-25 border border-0">{{$work->title}}</td>
                        @php
                            $date = date_create($work->creation_date)
                        @endphp
                        <td class="border border-0">
                            <span class="badge text-bg-primary border border-0">{{$work->type?->name}}</span>
                        </td>

                        @forelse ($work->technologies as $technology)
                            <td class="d-flex border border-0 mpt-2">
                                <span class="badge text-bg-secondary">{{ $technology->name}}</span>
                            </td>
                        @empty
                            <td class="border border-0">
                                <span>Nessuna tecnologia</span>
                            </td>
                        @endforelse


                        <td class="border border-0">{{date_format($date, 'd-m-Y')}}</td>
                        <td class="border border-0">
                            <a class="btn btn-primary" href="{{route('admin.works.show', $work)}}">
                                <i class="fa-solid fa-info p-1"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('admin.works.edit', $work)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            @include('admin.partials.form-delete')


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            {{$works->links()}}
        </div>
    </div>
@endsection
