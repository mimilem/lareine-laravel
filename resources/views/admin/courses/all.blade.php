@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Toutes les formations</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Sous-titre</th>
                                    <th>Date</th>
                                    <th>Lieu</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>2008/11/13</td>
                                    <td>Riviera</td>
                                    <td>$183,000</td>
                                    <td><a href="#" class="btn btn-link waves-effectn">Voir la formation</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables/jszip.min.js"></script>
    <script src="admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="admin/plugins/datatables/vfs_fonts.js"></script>
    <script src="admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="admin/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
@endsection