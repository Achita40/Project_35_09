@extends('layouts.masterbackend')
@section('text')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>test_001</td>
                            <td>test_001@gmail.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>test_002</td>
                            <td>test_002@gmail.com</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>test_003</td>
                            <td>test_003@gmail.com</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Admin_tset_1</td>
                            <td>test_Admin@gmail.com</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Admin</td>
                            <td>Admin@gmail.com</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
