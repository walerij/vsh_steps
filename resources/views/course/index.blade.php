@extends('layouts.layout')

@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title">Курсы по категориям</h4>
            </div>
            <div class="card-body">
                <div>
                    <div class="btn-group w-100 mb-2">
                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Все курсы </a>
                        <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> C# </a>
                        <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Java </a>
                        <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> PHP </a>
                        <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                    </div>
                    <div class="mb-2">
                        <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                        <div class="float-right">
                            <select class="custom-select" style="width: auto;" data-sortOrder>
                                <option value="index"> Sort by Position </option>
                                <option value="sortData"> Sort by Custom Data </option>
                            </select>
                            <div class="btn-group">
                                <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                                <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="filter-container p-0 row">
                        @foreach($courses as $course)
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                                    <img src="/images/course_profiles/{{$course->imagelink }}" class="img-fluid mb-2" alt="red sample"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

