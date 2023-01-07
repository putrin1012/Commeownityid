<li class="comment">
    <a class="pull-left" href="#">
        <img class="avatar" src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar">
    </a>
    <div class="comment-body">
        <div class="comment-heading">
            <h4 class="user"><?php echo $row_commenter['userName']??''; ?></h4>
            <h5 class="time"><?php echo $rowComment['DateTimePosted']??''; ?></h5>
        </div>
        <p><?php echo $rowComment['textContent']??''; ?></p>
    </div>

</li>
