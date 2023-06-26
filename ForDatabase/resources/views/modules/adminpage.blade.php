@extends('templates.adminlay')
@section('fill')

<!-- <div class="position-absolute top-50 start-50 translate-middle"> -->
    <!-- <div class="table-responsive"> -->
        <table class="table table-dark table-striped table-hover align-middle mt-5">
            <thead class="fs-6 fw-bold bg-light">
                <tr class="fs-7">
                    <th>No</th>
                    <th width="30%">Menu</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="fw-6 text-secondary">
                @if (count($products) > 0)
                @foreach ($products as $index => $products)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$index->menu}}</td>
                    <td>
                        <div style="height: 30px; overflow:hidden;">
                            {{$products->desc}}
                        </div>
                    </td>
                    <td>{{($products->is_active) ? "Yes":"No" }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-lg btn-icon bg-red-500 text-white hover:bg-red-700" title="Remove" type="button">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button title="Edit" class="btn btn-lg btn-icon bg-indigo-500 text-white hover:bg-indigo-700" type="button">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <a href="#" title="Detail" class="btn btn-lg btn-icon bg-orange-500 text-white hover:bg-orange-700" type="button">
                                <i class="bi bi-arrow-right-square"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">No Record Found</td>
                </tr>
                @endif
            </tbody>
        </table>
        {{$products->links()}}
    <!-- </div> -->
<!-- </div> -->
    @endsection