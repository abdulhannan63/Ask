<div class="container ">
    
    <div class="row">
        <div class="col-7 mr-2">
        <h1 class="heading">Questions</h1>
            <?php 
                include("./common/db.php");
                if(isset($_GET['c-id'])){
                    $query="select * from question where category_id=$cid";
                }
                else if(isset($_GET['u-id'])){
                    $query="select * from question where u_id=$uid";
                }
                else if(isset($_GET['latest'])){
                    $query="select * from question order by id desc";
                }
                else{
                    $query="select * from question";
                }
                $result=$conn->query($query);
                foreach($result as $row){
                    $title= ucfirst($row['title']);
                    $id = $row['id'];
                    echo  "
                    <div class='row question-list '>
                        <h4 class='myques'><a href='?q-id=$id' >$title</a>";
                        if(isset($uid)){
                            echo "<a href='./server/requests.php/?delete=$id'>  Delete</a>";
                        }
                        echo "</h4>
                    </div>";
                }
            ?>
        </div>
        <div class="col-4 ">
            <?php include('categorylist.php');?>
        </div>
    </div>
</div>