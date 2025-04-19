<div class="container mb-2">
    <div class="offset-sm-1">

        <h4>Answer:</h4>
        <?php
        $query="Select * from answers where question_id=$qid";
        $result=$conn->query($query);
        if ($result) {
            foreach($result as $row){
                $answer = $row['answer'];
                echo "<div class='row'>
                <p class='answer-wrapper'> $answer</p>
                </div>";
            }
        }
        ?>
    </div>
</div>