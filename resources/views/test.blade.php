<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/override.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title clearfix">
                    <span>Hello World</span>
                    <a href="" class="btn btn-default pull-right">BACK</a>
                </p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Client</label>
                            <input type="text" name="ok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Client</label>
                            <input type="text" name="ok" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Client</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-name"><textarea class="table-control"></textarea></td>
                            <td class="table-price"><input type="text" class="table-control"></td>
                            <td class="table-qty"><input type="text" class="table-control"></td>
                            <td class="table-total"><span class="table-text">100</span></td>
                            <td class="table-remove"><span class="table-remove-btn">&times;</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="table-empty" colspan="2">
                                <a href="#" class="table-add_line">Add Line</a>
                            </td>
                            <td class="table-label">Sub Total</td>
                            <td class="table-amount">4000</td>
                        </tr>
                        <tr>
                            <td class="table-empty" colspan="2"></td>
                            <td class="table-label">Discount</td>
                            <td class="table-amount_discount"><input type="text" class="table-discount" value="0.00"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="panel-footer">
                <div class="">
                    <button class="btn btn-default">CANCEL</button>
                    <button class="btn btn-danger">CREATE</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>