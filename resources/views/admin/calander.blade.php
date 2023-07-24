@extends('components.app')
@section('title')
@endsection
@extends('components.sidebar')
@section('konten')


<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Calendar
                </div>

                <div class="card-body">
                    
                        <div class="alert alert-success" role="alert">
                            
                        </div>

                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            <th>day</th>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>                                   
                                    <td></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection