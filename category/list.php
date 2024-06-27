<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
</head>

<body>
    <div class="row">
        <div class="col-5 p-5">
            <form action="../db/create.php" method="post">
                <div>
                    <input type="text" name="category" class="form-control" placeholder="Category name...">
                </div>
                <div class="mt-3 ">
                    <input type="submit" value="submit" class="btn btn-primary">
                    <input type="reset" value="reset" class="btn btn-danger">
                </div>
            </form>
        </div>
        <div class="col-7">
            <table id="cat_table" class="display">
                <thead>
                    <tr>
                        <th class="p-1">id</th>
                        <th class="p-1">Name</th>
                        <th class="p-1">Created_at</th>
                        <th class="p-1">Updated_at</th>
                        <th class="p-1">Action</th>
                    </tr>
                </thead>
                <tr>
                    <td class="p-1">1</td>
                    <td class="p-1">Javascript Developer</td>
                    <td>12-11-2002</td>
                    <td>17-12-2024</td>
                    <td class="p-1 d-flex justify-content-center">
                        <button class="btn btn-primary mx-2">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- data_table -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="../js/datatable.js"></script>
</body>

</html>