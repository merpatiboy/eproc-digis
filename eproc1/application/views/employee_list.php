<?php
include "sidebar.php";
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <i class="fa fa-list"></i>
                            Employee List
                            <div class="pull-right">
                                <a href="#" class="add_btn " data-toggle="tooltip" title="Add Employee"><i class="fa fa-plus-circle fa-2x"></i></a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Position</th>
                                            <th>District</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!--Masukkan list empoyee pada bawah tbody-->
                                    <tbody>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td style="min-width: 10px; align='center'; ">
                                                    <a class ="edit_btn" href="#" data-toggle="tooltip" title="Edit Employee" ><i class="fa fa-edit fa-2x"></i></a>
                                                    <a class ="del_btn" href="#" data-toggle="tooltip" title="Delete Employee"><i class="fa fa-trash fa-2x"></i></a>
                                            </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

<div class="modal fade " id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <h4>Are You Sure You Want To Delete ?</h4>
                <div class="modal-footer">

                    <button type="button" id="hapus" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
                </div>
             </div>
        </div>
    </div>