<div class="container">

    <div class="row">
        <div class="col-7">
            <h1 class="heading">Question</h1>
            <?php
                include("./common/db.php");
                $query="select * from question where id=$qid";
                $result=$conn->query($query);
                $row = $result->fetch_assoc();
                $cid = $row['category_id'];
                echo "<h4 class='margin-bottom-15 question-title'>Question: ".$row['title']."</h4>
                <p class='margin-bottom-15 '><span class='font-weight-bold'>Description:</span> ".$row['description']."?</p>";
                include("answers.php");
            ?>
            <form action="./server/requests.php" method="post">
                <input type="hidden" name="question_id" value=<?php echo $qid;?> />
                <textarea name="answer" class="form-control mb-3" rows="4"  placeholder="Your answer....."></textarea>
                <button  class="btn btn-primary " >write answer</button>
            </form>
        </div>
        <div class="col-4">
            <h1 class="heading">similar..</h1>
            <?php
            if (isset($_SESSION['user'])) {
                $query = "Select * from question where category_id=$cid and id!=$qid";
                $result = $conn->query($query);
                foreach($result as $row){
                    $id = $row['id'];
                    $title=$row['title'];

                    echo "
                    <div class='question-list'>
                        <h4><a href='?q-id=$id'>$title</a></h4>
                    </div>
                    ";
                }
            }else{
                header("location:/test/Questions/?login=true");
            }
            ?>
        </div>
    </div>
</div>