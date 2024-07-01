<<?php require_once("../db/config.php") ?> <!DOCTYPE html>
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
                            <th class="px-5 text-start">id</th>
                            <th class="px-2 text-start">Name</th>
                            <th class="px-2 text-start">Created_at</th>
                            <th class="px-2 text-start">Updated_at</th>
                            <th class="px-2 text-start">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "Select * from category";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                    $data = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($data as $item) {
                        echo "<tr>
                        <td class='px-2 text-start'>".$item['id']."</td>
                        <td class='px-2 text-start'>".$item['name']."</td>
                        <td class='px-2 text-start'>".$item['created_at']."</td>
                        <td class='px-2 text-start'>".$item['updated_at']."</td>
                        <td class='px-2 text-start d-flex justify-content-center'>
                            <a href='update.php'><button class='btn btn-primary mx-2'>Edit</button></a>
                            <a href='../db/delete.php?id=".$item['id']."'><button class='btn btn-danger'>Delete</button></a>
                        </td>
                    </tr>";
                    }
                    ?>;
                        
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