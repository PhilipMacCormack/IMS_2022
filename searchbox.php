<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Design for search result page -->
<br><h1>&emsp;Movie Database: Search Results </h1>
<div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Movie Title</th>
                                    <th>Year of Release</th>
                                    <th>Rating</th>
                                    <th>Genre id</th>
                                    <th>Genre</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php 
                                    $con = mysqli_connect("localhost","root","root","movies_db");
                                    //If you search for something go into if statement
                                    if(isset($_GET['search']))
                                    {
                                        // Create a variable for the search input
                                        $filtervalues = $_GET['search'];

                                        //Query everything in the table where anything matches the search input (could change to only mname in concat)
                                        $query = "SELECT movies.mid, movies.mname, movies.myear, movies.mrating, movies.mgenreid, genres.mgenre, genres.gid
                                        FROM movies
                                        LEFT JOIN genres 
                                        ON movies.mgenreid=gid WHERE CONCAT(mid,mname,myear,mrating, mgenreid, mgenre) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        //If the query get any results, print the results in a table, else print No Records Found
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['mid']; ?></td>
                                                    <td><?= $items['mname']; ?></td>
                                                    <td><?= $items['myear']; ?></td>
                                                    <td><?= $items['mrating']; ?></td>
                                                    <td><?= $items['mgenreid']; ?></td>
                                                    <td><?= $items['mgenre']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Records Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <!-- Create a link to redirect to showmovies -->
                        <a href="showmovies.php">Back to Library</a>
                    </div>
                </div>
            </div>
        </div>
    </div>