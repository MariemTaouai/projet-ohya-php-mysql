
<table class="table">
        <thead>
            <tr>
                <th class="text-center">titre</th>
                <th class="text-center"> Description </th>
                <th class="text-center">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../models/blog.php'); 
            require_once('../controllers/blogController.php'); 
            $blogController = new blogController();

           
            $blogs =  $blogController->listblog();
            if ($blogs) {
                foreach ($blogs as $blog) {
        
                    echo"<tr>";
                
                    echo "<td>" . $blog['titre'] . "</td>";
                    echo "<td>" . $blog['description'] . "</td>";
                    echo "<td>" . $blog['image'] . "</td>";
                    echo "</tr>";
                }}
             ?>
        </tbody>
</table>